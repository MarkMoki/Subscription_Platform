<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailNotification extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_id', 'sent'];

    /**
     * Get the user associated with the notification.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post associated with the notification.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
