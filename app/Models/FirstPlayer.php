<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FirstPlayer
 *
 * @property int $id
 * @property int $player_id
 * @property-read Player $player
 * @property-read GameTable $game_table
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer newQuery()
 * @method static \Illuminate\Database\Query\Builder|FirstPlayer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer query()
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereBreedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereCellId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereNumberOfEggs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FirstPlayer whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|FirstPlayer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FirstPlayer withoutTrashed()
 * @mixin \Eloquent
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