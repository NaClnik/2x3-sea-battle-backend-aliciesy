<?php


namespace App\Services\Players\Repositories;


use App\Models\Player;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PlayersRepository
{
    public function getAll(): Collection
    {
        return Player::all();
    } // getAll.

    public function getById(int $id)
    {
        return Player::query()->find($id);
    } // getById.

    public function createFromArray(array $data): Player
    {
        return Player::query()->create($data);
    } // createFromArray.

    public function update(Player $player, array $data): bool
    {
        return $player->update($data);
    } // update.

    public function delete(Player $player): bool
    {
        return $player->delete();
    } // delete.
} // PlayersRepository.