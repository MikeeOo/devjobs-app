<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Image;
use Illuminate\Support\Str;

class ImageRepository implements IRepository
{
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function create($data, $fileName = null, $company = null, $type = null)
    {
        $uniqueFileName = Str::uuid().'_'.time().'_'.$fileName;
        $data->storeAs('images', $uniqueFileName, 'public');

        return Image::create(['url' => $uniqueFileName, 'type' => $type, 'parent_id' => $company->id]);
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
