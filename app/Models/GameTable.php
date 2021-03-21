<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GameTable extends Model
{
    protected $fillable = [
        'first_player_id',
        'second_player_id'
    ]; // fillable.

    // Связи между таблицами.
    public function firstPlayer()
    {
        return $this->belongsTo(FirstPlayer::class);
    } // firstPlayer.

    public function secondPlayer()
    {
        return $this->belongsTo(SecondPlayer::class);
    } // secondPlayer.

    public function playingField()
    {
        return $this->hasOne(PlayingField::class);
    } // playingField.
} // GameTable.