<?php


namespace App\Services\FirstPlayers;


use App\Models\FirstPlayer;
use App\Services\FirstPlayers\Repositories\FirstPlayersRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FirstPlayersService
{
    // Репозитории.
    private FirstPlayersRepository $firstPlayersRepository;

    // Конструктор.
    public function __construct(FirstPlayersRepository $firstPlayersRepository)
    {
        $this->firstPlayersRepository = $firstPlayersRepository;
    } // __construct.

    // Методы.
    public function getAllFirstPlayers(): Collection
    {
        return $this->firstPlayersRepository->getAll();
    } // getAllFirstPlayers.

    public function createFirstPlayerFromArray(array $data): FirstPlayer
    {
        return $this->firstPlayersRepository->createFromArray($data);
    } // createFirstPlayerFromArray.

    public function updateFirstPlayer(FirstPlayer $firstPlayer, array $data): bool
    {
        return $this->firstPlayersRepository->update($firstPlayer, $data);
    } // updateFirstPlayer.

    public function deleteFirstPlayer(FirstPlayer $firstPlayer): bool
    {
        return $this->firstPlayersRepository->delete($firstPlayer);
    } // deleteFirstPlayer.
} // FirstPlayersService.