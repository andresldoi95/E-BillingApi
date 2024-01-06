<?php

namespace App\Repositories;

use App\Models\Action;
use Illuminate\Database\Eloquent\Collection;

class ActionRepository implements ActionRepositoryInterface
{
    public function all(): Collection
    {
        return Action::active()->orderBy('name')->get();
    }
}
