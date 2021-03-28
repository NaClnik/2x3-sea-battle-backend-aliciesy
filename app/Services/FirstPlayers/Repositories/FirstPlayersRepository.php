<?php


namespace App\Services\FirstPlayers\Repositories;


use App\Models\FirstPlayer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class FirstPlayersRepository
{
    public function getAll(): Collection
    {
        return FirstPlayer::all();
    } // getAll.

    public function createFromArray(array $data): FirstPlayer
    {
        return FirstPlayer::query()->create($data);
    } // createFromArray.

    public function update(FirstPlayer $firstPlayer, array $data): bool
    {
        return $firstPlayer->update($data);
    } // update.

    public function delete(FirstPlayer $firstPlayer): bool
    {
        return $firstPlayer->delete();
    } // delete.
} // FirstPlayersRepository.