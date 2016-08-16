<?php

namespace App;

trait Favouritable
{
    public function favourites()
    {
        return $this->morphMany(Favourite::class, 'favouritable');
    }

    public function scopeFavouritedBy($query, User $user)
    {
        return $query->whereHas('favourites', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        });
    }

    public function isFavouritedBy(User $user)
    {
        // return $user->favourites->contains($this);
        // return $user->favourites()->where('post_id', $this->id) ->exists();
        return $this->favourites()
            ->where('user_id', $user->id)
            ->exists();
    }

    public function favourite(User $user)
    {
        $this->favourites()->save(
            new Favourite(['user_id' => $user->id])
        );
    }
}
