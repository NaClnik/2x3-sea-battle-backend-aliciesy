<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GameTable
 *
 * @property int $id
 * @property int $player_id
 * @property int $game_table_id
 * @property array $playing_field_state1
 * @property array $playing_field_state2
 * @property-read Player $player
 * @property-read GameTable $game_table
 * @method static Builder|PlayingField newModelQuery()
 * @method static Builder|PlayingField newQuery()
 * @method static \Illuminate\Database\Query\Builder|PlayingField onlyTrashed()
 * @method static Builder|PlayingField query()
 * @method static Builder|PlayingField whereAge($value)
 * @method static Builder|PlayingField whereBreedId($value)
 * @method static Builder|PlayingField whereCellId($value)
 * @method static Builder|PlayingField whereCreatedAt($value)
 * @method static Builder|PlayingField whereDeletedAt($value)
 * @method static Builder|PlayingField whereId($value)
 * @method static Builder|PlayingField whereNumberOfEggs($value)
 * @method static Builder|PlayingField whereUpdatedAt($value)
 * @method static Builder|PlayingField whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|PlayingField withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PlayingField withoutTrashed()
 * @mixin Builder
 */
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