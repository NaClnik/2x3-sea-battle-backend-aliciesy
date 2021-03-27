<?php


namespace App\Services\PlayingFields;


use App\Models\PlayingField;
use App\Services\PlayingFields\Repositories\PlayingFieldsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PlayingFieldsService
{
    // Репозитории.
    private PlayingFieldsRepository $playingFieldsRepository;

    // Конструктор.
    public function __construct(PlayingFieldsRepository $playingFieldsRepository)
    {
        $this->playingFieldsRepository = $playingFieldsRepository;
    } // __construct.

    // Методы.
    public function getAllPlayingFields(): Collection
    {
        return $this->playingFieldsRepository->getAll();
    } // getAllPlayingFields.

    public function createPlayingFieldFromArray(array $data): Model
    {
        return $this->playingFieldsRepository->createFromArray($data);
    } // createPlayingFieldFromArray.

    public function updatePlayingField(PlayingField $playingField, array $data): bool
    {
        return $this->playingFieldsRepository->update($playingField, $data);
    } // updatePlayingField.

    public function deletePlayingField(PlayingField $playingField): bool
    {
        return $this->playingFieldsRepository->delete($playingField);
    } // deletePlayingField.
} // PlayingFieldsService.