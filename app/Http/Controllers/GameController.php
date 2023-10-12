<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
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

    public function create(){
        return view('game_create');
    }
}
