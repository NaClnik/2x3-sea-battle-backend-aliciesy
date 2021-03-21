<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name'
    ]; // fillable.
    
    // Связи между таблицами.
    public function firstPlayer()
    {
        return $this->hasOne(FirstPlayer::class);
    } // firstPlayer.

    public function secondPlayer()
    {
        return $this->hasOne(SecondPlayer::class);
    } // secondPlayer.

    public function playingField()
    {
        return $this->hasOne(PlayingField::class);
    } // playingField.
} // Player.