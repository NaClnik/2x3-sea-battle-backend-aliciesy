<?php


namespace App\Services\PlayingFields\Repositories;


use App\Models\PlayingField;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PlayingFieldsRepository
{
    public function getAll(): Collection
    {
        return PlayingField::all();
    } // getAll.

    public function createFromArray(array $data): PlayingField
    {
        return PlayingField::query()->create($data);
    } // createFromArray.

    public function update(PlayingField $playingField, array $data): bool
    {
        return $playingField->update($data);
    } // update.

    public function delete(PlayingField $playingField): bool
    {
        return $playingField->delete();
    } // delete.
} // PlayingFieldsRepository.