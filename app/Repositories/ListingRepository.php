<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ListingRepository implements IRepository
{
    public function getAll($paginate = null, $onEachSide = null): Collection|LengthAwarePaginator
    {
        if (! $paginate && ! $onEachSide) {
            return Listing::all();
        } else {
            return Listing::paginate($paginate)->onEachSide($onEachSide);
        }
    }

    public function getById($id)
    {
        return Listing::find($id);
    }

    public function create($data, $company = null)
    {
        return Listing::create([...$data, 'company_id' => $company->id]);
    }

    public function update($listing, $data)
    {
        return $listing->update($data);
    }

    public function delete($listing)
    {
        return $listing->delete($listing);
    }
}
