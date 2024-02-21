<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class ListingRepository implements IRepository
{
    public function getAll(array $scopeParams, int $perPage, int $onEachSide, ?object $relation = null): LengthAwarePaginator
    {
        if ($relation) {
            $data = $relation->latest();
        } else {
            return Listing::create($data->all());
        }
    }

    public function update($listing, $data)
    {
        return $listing->update($data);
    }

    public function delete($listing)
    {
        return $listing->delete();
    }
}
