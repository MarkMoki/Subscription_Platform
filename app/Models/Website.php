<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url'];

    /**
     * Get the posts associated with the website.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the subscribers of the website.
     */
    public function subscribers()
    {
        return $this->belongsToMany(User::class, 'subscriptions');
    }
}
