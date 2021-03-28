<?php


namespace App\Models;


use Core\External\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Player
 *
 * @property int $id
 * @property string $name
 * @property-read FirstPlayer $first_player
 * @property-read SecondPlayer $second_player
 * @property-read PlayingField $playing_field
 * @method static Builder|Player newModelQuery()
 * @method static Builder|Player newQuery()
 * @method static \Illuminate\Database\Query\Builder|Player onlyTrashed()
 * @method static Builder|Player query()
 * @method static Builder|Player whereAge($value)
 * @method static Builder|Player whereBreedId($value)
 * @method static Builder|Player whereCellId($value)
 * @method static Builder|Player whereCreatedAt($value)
 * @method static Builder|Player whereDeletedAt($value)
 * @method static Builder|Player whereId($value)
 * @method static Builder|Player whereNumberOfEggs($value)
 * @method static Builder|Player whereUpdatedAt($value)
 * @method static Builder|Player whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|Player withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Player withoutTrashed()
 * @mixin Builder
 */
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