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
 * @method static \Illuminate\Database\Eloquent\Builder|Player newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player newQuery()
 * @method static \Illuminate\Database\Query\Builder|Player onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Player query()
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereBreedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCellId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereNumberOfEggs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|Player withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Player withoutTrashed()
 * @mixin \Eloquent
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