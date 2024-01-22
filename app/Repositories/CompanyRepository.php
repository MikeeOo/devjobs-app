<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Company;

class CompanyRepository implements IRepository
{
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function create($data)
    {
        return Company::create($data);
    }

    public function update($job, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($job)
    {
        // TODO: Implement delete() method.
    }
}
