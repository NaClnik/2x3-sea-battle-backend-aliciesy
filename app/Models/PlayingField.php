<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PlayingField extends Model
{
    protected $fillable = [
        'turn_player_id',
        'game_table_id'
    ]; // fillable.
} // PlayingField.