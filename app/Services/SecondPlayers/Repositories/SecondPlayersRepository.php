<?php


namespace App\Services\SecondPlayers\Repositories;


use App\Models\SecondPlayer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class SecondPlayersRepository
{
    public function getAll(): Collection
    {
        return SecondPlayer::all();
    } // getAll.

    public function createFromArray(array $data): SecondPlayer
    {
        return SecondPlayer::query()->create($data);
    } // createFromArray.

    public function update(SecondPlayer $secondPlayer, array $data): bool
    {
        return $secondPlayer->update($data);
    } // update.

    public function delete(SecondPlayer $secondPlayer): bool
    {
        return $secondPlayer->delete();
    } // delete.

    public function getById(int $id)
    {
        return SecondPlayer::query()->findOrFail($id);
    } // getById.
} // SecondPlayersRepository.