<?php

namespace App\Contracts;

interface SearchActionContract
{
    public function __invoke(string $query);
}
