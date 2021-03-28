<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SecondPlayer
 *
 * @property int $id
 * @property int $player_id
 * @property-read Player $player
 * @property-read GameTable $game_table
 * @method static Builder|SecondPlayer newModelQuery()
 * @method static Builder|SecondPlayer newQuery()
 * @method static \Illuminate\Database\Query\Builder|SecondPlayer onlyTrashed()
 * @method static Builder|SecondPlayer query()
 * @method static Builder|SecondPlayer whereAge($value)
 * @method static Builder|SecondPlayer whereBreedId($value)
 * @method static Builder|SecondPlayer whereCellId($value)
 * @method static Builder|SecondPlayer whereCreatedAt($value)
 * @method static Builder|SecondPlayer whereDeletedAt($value)
 * @method static Builder|SecondPlayer whereId($value)
 * @method static Builder|SecondPlayer whereNumberOfEggs($value)
 * @method static Builder|SecondPlayer whereUpdatedAt($value)
 * @method static Builder|SecondPlayer whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|SecondPlayer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SecondPlayer withoutTrashed()
 * @mixin Builder
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