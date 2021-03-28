<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GameTable
 *
 * @property int $id
 * @property int $first_player_id
 * @property int $second_player_id
 * @property-read FirstPlayer $first_player
 * @property-read SecondPlayer $second_player
 * @property-read PlayingField $playing_field
 * @method static Builder|GameTable newModelQuery()
 * @method static Builder|GameTable newQuery()
 * @method static \Illuminate\Database\Query\Builder|GameTable onlyTrashed()
 * @method static Builder|GameTable query()
 * @method static Builder|GameTable whereAge($value)
 * @method static Builder|GameTable whereBreedId($value)
 * @method static Builder|GameTable whereCellId($value)
 * @method static Builder|GameTable whereCreatedAt($value)
 * @method static Builder|GameTable whereDeletedAt($value)
 * @method static Builder|GameTable whereId($value)
 * @method static Builder|GameTable whereNumberOfEggs($value)
 * @method static Builder|GameTable whereUpdatedAt($value)
 * @method static Builder|GameTable whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|GameTable withTrashed()
 * @method static \Illuminate\Database\Query\Builder|GameTable withoutTrashed()
 * @mixin Builder
 */
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
} // GameTables.