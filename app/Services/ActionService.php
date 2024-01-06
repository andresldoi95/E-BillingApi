<?php

namespace App\Services;

use App\Repositories\ActionRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ActionService
{
    protected $actionRepository;

    public function __construct(ActionRepositoryInterface $actionRepository)
    {
        $this->actionRepository = $actionRepository;
    }

    public function all(): Collection
    {
        return $this->actionRepository->all();
    }
}
