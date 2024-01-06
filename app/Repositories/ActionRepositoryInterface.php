<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ActionRepositoryInterface
{
    public function all(): Collection;
}
