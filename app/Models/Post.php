<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    // inverse relationship
    /**
     * Get the post that owns the comment.
     */
    public function user(): BelongsTo
    {
        // return $this->belongsTo(User::class);

        // return $this->belongsTo(User::class)->withDefault(function (User $user, Post $post) {
        //     $user->name = 'Guest Author';
        // });

        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest Author',
        ]);
    }
}
