<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ListingRepository implements IRepository
{
    public function getAll(): Collection
    {
        return Listing::all();
    }

    public function getScopedAndPaginated($scopeParams, $perPage, $onEachSide): LengthAwarePaginator
    {
        return Listing::latest()->filter($scopeParams)->paginate($perPage)->onEachSide($onEachSide);
    }

    public function getById($id)
    {
        return Listing::find($id);
    }

    public function create($data)
    {
        return Listing::create($data);
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
