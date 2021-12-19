<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'category',
        'user_id',
        'description',
    ];


    /**
     * Return author of the post.
     * 
     * @return User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
