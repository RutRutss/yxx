<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class GameController extends Controller
{
    //
    public function index(Request $request)
    {

        if (!empty($request->keyword)) {
            $games = Game::where('title', 'LIKE', '%' . $request->keyword . '%')
                ->orderBy('id')
                ->get();
        } else {
            // $users = User::all();
            $games = Game::all();
        }


        return view('game_view', compact('games'));
    }

    public function create()
    {
        return view('game_create');
    }

    // upload game
    public function upload(Request $request)
    {
        try {
            Game::create([
                'title' => $request->title,
                'description' => $request->description,
                'slug' => $request->slug,
                'thumbnail' => $request->file('thumbnail')->getClientOriginalName(),
                'user_id' => session('user')->id
            ]);
        } catch (Exception $e) {
            return redirect('game/create')->withErrors(['alert_message' => 'ไม่สามารถ บันทึกได้ เนื่องจาก' . $e->getMessage()]);
        }

        try {
            $request->file('thumbnail')->storeAs($request->slug, $request->file('thumbnail')->getClientOriginalName());
        } catch (Exception $e) {
            return redirect('game/create')->withErrors(['alert_message' => 'ไม่สามารถ บันทึกได้ เนื่องจาก' . $e->getMessage()]);
        }

        try {
            $zip = new \ZipArchive();
            if ($zip->open($request->file('gamefile')) === true) {
                $path = $request->file('gamefile')->store($request->slug);

                $zip->extractTo(storage_path('app/' . $request->slug));

                $game_name = $request->file('gamefile')->getClientOriginalName();

                $basename = explode('.', $game_name)[0];

                rename(storage_path('app/' . $request->slug . '/' . $basename), storage_path('app/' . $request->slug . '/FileGame'));
            }
        } catch (Exception $e) {
            return redirect('game/create')->withErrors(['alert_message' => 'ไม่สามารถ บันทึกได้ เนื่องจาก' . $e->getMessage()]);
        }
        return redirect('/game');
    }

    public function play($slug)
    {
        $game = Game::where('slug', $slug)->first();
        return view('game_play', compact('game'));
    }

    public function delete($slug)
    {
        Game::where('slug', $slug)->delete();
        // rmdir('/storage/app/',$slug);
        system("rd ".storage_path('app\\'.$slug)." /S /Q");
        return redirect('/game');
    }
}
