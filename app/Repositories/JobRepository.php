<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class JobRepository implements IRepository
{
    public function getAll($paginate = null): Collection|LengthAwarePaginator
    {
        if (! $paginate) {
            return Job::all();
        } else {
            return Job::paginate($paginate);
        }
    }

    public function getById($id)
    {
        return Job::find($id);
    }

    public function create($data)
    {
        return Job::create($data);
    }

    public function update($job, $data)
    {
        return $job->update($data);
    }

    public function delete($job)
    {
        return $job->delete($job);
    }
}
