<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GameTable extends Model
{
    protected $fillable = [
        'player1_id',
        'player2_id'
    ]; // fillable.
} // GameTable.