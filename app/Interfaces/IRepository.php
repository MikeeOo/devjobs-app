<?php

namespace App\Interfaces;

use Illuminate\Pagination\LengthAwarePaginator;

interface IRepository
{
    public function getAll(array $scopeParams, int $perPage, int $onEachSide, ?object $relation = null): LengthAwarePaginator;

    public function getById($id);

    public function create($data);

    public function update($listing, $data);

    public function delete($listing);
}
