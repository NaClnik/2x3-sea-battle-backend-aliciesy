<?php


namespace App\Services\GameTables\Repositories;


use App\Models\GameTable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class GameTablesRepository
{
    public function getAll(): Collection
    {
        return GameTable::all();
    } // getAll.

    public function createFromArray(array $data): GameTable
    {
        return GameTable::query()->create($data);
    } // createFromArray.

    public function update(GameTable $gameTable, array $data): bool
    {
        return $gameTable->update($data);
    } // update.

    public function delete(GameTable $gameTable): bool
    {
        return $gameTable->delete();
    } // delete.

    public function getById(int $id): GameTable
    {
        return GameTable::query()->findOrFail($id);
    } // getById.
} // GameTablesRepository.