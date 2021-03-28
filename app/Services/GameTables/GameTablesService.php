<?php


namespace App\Services\GameTables;


use App\Models\GameTable;
use App\Services\GameTables\Repositories\GameTablesRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class GameTablesService
{
    // Репозитории.
    private GameTablesRepository $gameTablesRepository;

    // Конструктор.
    public function __construct(GameTablesRepository $gameTablesRepository)
    {
        $this->gameTablesRepository = $gameTablesRepository;
    } // __construct.

    // Методы.
    public function getAllGameTables(): Collection
    {
        return $this->gameTablesRepository->getAll();
    } // getAllGameTables.

    public function createGameTableFromArray(array $data): GameTable
    {
        return $this->gameTablesRepository->createFromArray($data);
    } // createGameTableFromArray.

    public function updateGameTable(GameTable $gameTable, array $data): bool
    {
        return $this->gameTablesRepository->update($gameTable, $data);
    } // updateGameTable.

    public function deleteGameTable(GameTable $gameTable): bool
    {
        return $this->gameTablesRepository->delete($gameTable);
    } // deleteGameTable.
} // GameTablesService.