<?php


namespace App\Services\SecondPlayers;


use App\Models\SecondPlayer;
use App\Services\SecondPlayers\Repositories\SecondPlayersRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class SecondPlayersService
{
    // Репозитории.
    private SecondPlayersRepository $secondPlayersRepository;

    // Конструктор.
    public function __construct(SecondPlayersRepository $secondPlayersRepository)
    {
        $this->secondPlayersRepository = $secondPlayersRepository;
    } // __construct.

    // Методы.
    public function getAllSecondPlayers(): Collection
    {
        return $this->secondPlayersRepository->getAll();
    } // getAllSecondPlayers.

    public function createSecondPlayerFromArray(array $data): SecondPlayer
    {
        return $this->secondPlayersRepository->createFromArray($data);
    } // createSecondPlayerFromArray.

    public function updateSecondPlayer(SecondPlayer $secondPlayer, array $data): bool
    {
        return $this->secondPlayersRepository->update($secondPlayer, $data);
    } // updateSecondPlayer.

    public function deleteSecondPlayer(SecondPlayer $secondPlayer): bool
    {
        return $this->secondPlayersRepository->delete($secondPlayer);
    } // deleteSecondPlayer.
} // SecondPlayersService.