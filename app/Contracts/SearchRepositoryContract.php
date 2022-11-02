<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface SearchRepositoryContract
{
    public function search(string $query = ''): Collection;
}
