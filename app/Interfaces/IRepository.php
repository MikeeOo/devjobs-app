<?php

namespace App\Interfaces;

interface IRepository
{
    public function getAll();

    public function getScopedAndPaginated($scopeParams, $perPage, $onEachSide);

    public function getById($id);

    public function create($data);

    public function update($listing, $data);

    public function delete($listing);
}
