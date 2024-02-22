<?php

namespace App\Repositories;

use App\Interfaces\IRepository;
use App\Models\Listing;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ListingRepository implements IRepository
{
    public function getAll(array $scopeParams, int $perPage, int $onEachSide, ?object $relation = null): LengthAwarePaginator
    {
        if ($relation) {
            $data = $relation->latest();
        } else {
            $data = Listing::latest();
        }

        return $data->filter($scopeParams)->paginate($perPage)->onEachSide($onEachSide);
    }

    public function store(object $request): void
    {
        if ($request->hasFile('logo')) {
            $logoUniqueId = $this->getLogoUniqueId($request->logo->getClientOriginalName());
            $this->storeLogo($request->file('logo'), $logoUniqueId);
            $resource = [...$request->all(), 'user_id' => auth()->id(), 'logo' => $logoUniqueId];
        } else {
            $resource = [...$request->all(), 'user_id' => auth()->id()];
        }

        Listing::create($resource);
    }

    public function update(object $resource, object $request): void
    {
        $this->authorizeAction($resource->user_id, auth()->id());

        if ($request->hasFile('logo')) {
            $this->deleteLogo(Storage::disk('public'), $resource->logo);
            $logoUniqueId = $this->getLogoUniqueId($request->logo->getClientOriginalName());
            $this->storeLogo($request->file('logo'), $logoUniqueId);
            $resource->update([...$request->all(), 'logo' => $logoUniqueId]);
        } else {
            $resource->update($request->all());
        }
    }

    public function delete(object $resource): void
    {
        $this->authorizeAction($resource->user_id, auth()->id());
        $this->deleteLogo(Storage::disk('public'), $resource->logo);

        $resource->delete();
    }

    private function authorizeAction(int $owner, int $loggedUser): void
    {
        if ($owner !== $loggedUser) {
            abort(403, 'Unauthorized Action');
        }
    }

    private function getLogoUniqueId(string $clientName): string
    {
        return Str::uuid().'_'.time().'_'.$clientName;
    }

    private function storeLogo(object $file, string $logoUniqueId): void
    {
        $file->storeAs('images', $logoUniqueId, 'public');
    }

    private function deleteLogo(object $storage, ?string $logoUniqueId): void
    {
        if ($storage->exists("images/$logoUniqueId") && $logoUniqueId) {
            $storage->delete("images/$logoUniqueId");
        }
    }
}
