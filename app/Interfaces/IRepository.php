<?php

namespace App\Interfaces;

use Illuminate\Pagination\LengthAwarePaginator;

interface IRepository
{
    public function getAll(array $scopeParams, int $perPage, int $onEachSide, ?object $relation = null): LengthAwarePaginator;

    public function store(object $request): void;

    public function update(object $resource, object $request): void;

    public function delete(object $resource): void;
}
