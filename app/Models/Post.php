<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['website_id', 'title', 'description'];

    /**
     * Get the website this post belongs to.
     */
    public function website()
    {
        return $this->belongsTo(Website::class);
    }

    /**
     * Get the notifications associated with the post.
     */
    public function emailNotifications()
    {
        return $this->hasMany(EmailNotification::class);
    }
}
