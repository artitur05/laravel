<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    protected $fillable = [
        'id',
        'title',
        'content',
        'user_id',
        'category_id',
        'is_visible',
        'published_at',
        'image'
    ];

}
