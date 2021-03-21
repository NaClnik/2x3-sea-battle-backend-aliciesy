<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PlayingField extends Model
{
    protected $fillable = [
        'player_id',
        'game_table_id',
        'playing_field_state1',
        'playing_field_state2'
    ]; // fillable.

    protected $casts = [
        'playing_field_state1' => 'array',
        'playing_field_state2' => 'array'
    ]; // casts.

    // Связи между таблицами.
    public function player()
    {
        return $this->belongsTo(Player::class);
    } // player.

    public function gameTable()
    {
        return $this->belongsTo(GameTable::class);
    } // gameTable.
} // PlayingField.