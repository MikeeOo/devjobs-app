<?php

namespace App\Interfaces;

interface IRepository
{
    public function getAll();

    public function getById($id);

    public function create($data);

    public function update($job, $data);

    public function delete($job);
}
