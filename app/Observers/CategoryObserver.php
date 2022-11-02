<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class CategoryObserver
{
    public function created(): void
    {
        Cache::forget('category_tree');
    }

    public function updated(): void
    {
        Cache::forget('category_tree');
    }

    public function deleted(): void
    {
        Cache::forget('category_tree');
    }
}
