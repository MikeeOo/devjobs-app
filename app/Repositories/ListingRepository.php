<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Listing;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

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
        if ($data->hasFile('logo')) {
            $logoUniqueName = Str::uuid().'_'.time().'_'.$data->logo->getClientOriginalName();
            $data->file('logo')->storeAs('images', $logoUniqueName, 'public');

            return Listing::create([...$data->all(), 'logo' => $logoUniqueName]);
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
