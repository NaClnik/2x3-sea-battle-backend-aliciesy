<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    protected $fillable = [
        'coord_x',
        'coord_y',
        'playing_field_id'
    ]; // fillable.
} // Cell.