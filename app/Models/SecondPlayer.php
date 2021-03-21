<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SecondPlayer extends Model
{
    protected $fillable = [
        'player_id'
    ]; // fillable.

    // Связи между таблицами.
    public function player()
    {
        return $this->belongsTo(Player::class);
    } // player.

    public function gameTable()
    {
        return $this->hasOne(GameTable::class);
    } // gameTable.
} // SecondPlayer.