<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;

class JobRepository implements IRepository
{
    public function getAll(): Collection
    {
        return Job::all();
    }

    public function getById($id)
    {
        return Job::find($id);
    }

    public function create($data)
    {
        return Job::create($data);
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
