<?php


namespace App\Services\Players;


use App\Models\Player;
use App\Services\Players\Repositories\PlayersRepository;
use Illuminate\Support\Collection;

class PlayersService
{
    // Репозитории.
    private PlayersRepository $playersRepository;

    // Конструктор.
    public function __construct(PlayersRepository $playersRepository)
    {
        $this->playersRepository = $playersRepository;
    } // __construct.

    // Методы.
    public function getAllPlayers(): Collection
    {
        return $this->playersRepository->getAll();
    } // getAllPlayers.

    public function createPlayerFromArray(array $data)
    {
        return $this->playersRepository->createFromArray($data);
    } // createPlayerFromArray.

    public function updatePlayer(Player $player, array $data): bool
    {
        return $this->playersRepository->update($player, $data);
    } // updatePlayer.

    public function deletePlayer(Player $player): bool
    {
        return $this->playersRepository->delete($player);
    } // deletePlayer.
} // PlayersService.