<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    // protected $fillable = ['title','description',];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
