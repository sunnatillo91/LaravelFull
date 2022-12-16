<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;     //SoftDeletes ham ishlatilsa o'chirilgan ma'lumot korzinkada qoladi

    protected $fillable = [
    'user_id',
    'category_id',
    'title', 
    'content', 
    'short_content',
    'photo'
    ];                  // to'ldirishi shart ustunlar

    // protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
