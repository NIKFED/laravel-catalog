<?php

namespace App\Providers;

use App\Actions\Product\ProductSearchAction;
use App\Contracts\SearchActionContract;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        SearchActionContract::class => ProductSearchAction::class,
    ];
}
