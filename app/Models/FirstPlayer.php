<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FirstPlayer
 *
 * @property int $id
 * @property int $player_id
 * @property-read Player $player
 * @property-read GameTable $game_table
 * @method static Builder|FirstPlayer newModelQuery()
 * @method static Builder|FirstPlayer newQuery()
 * @method static \Illuminate\Database\Query\Builder|FirstPlayer onlyTrashed()
 * @method static Builder|FirstPlayer query()
 * @method static Builder|FirstPlayer whereAge($value)
 * @method static Builder|FirstPlayer whereBreedId($value)
 * @method static Builder|FirstPlayer whereCellId($value)
 * @method static Builder|FirstPlayer whereCreatedAt($value)
 * @method static Builder|FirstPlayer whereDeletedAt($value)
 * @method static Builder|FirstPlayer whereId($value)
 * @method static Builder|FirstPlayer whereNumberOfEggs($value)
 * @method static Builder|FirstPlayer whereUpdatedAt($value)
 * @method static Builder|FirstPlayer whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|FirstPlayer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FirstPlayer withoutTrashed()
 * @mixin Builder
 */
class FirstPlayer extends Model
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
} // FirstPlayer.