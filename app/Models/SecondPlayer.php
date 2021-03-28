<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SecondPlayer
 *
 * @property int $id
 * @property int $player_id
 * @property-read Player $player
 * @property-read GameTable $game_table
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer newQuery()
 * @method static \Illuminate\Database\Query\Builder|SecondPlayer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer query()
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereBreedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereCellId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereNumberOfEggs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SecondPlayer whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|SecondPlayer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SecondPlayer withoutTrashed()
 * @mixin \Eloquent
 */
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