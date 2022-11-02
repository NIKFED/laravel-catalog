<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected Model $model;

    /**
     * @param int $id
     *
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function find(int $id)
    {
        return $this->model->query()->find($id);
    }

    /**
     * @return Builder[]|Collection
     */
    public function getAll()
    {
        return $this->model->query()->get();
    }
}
