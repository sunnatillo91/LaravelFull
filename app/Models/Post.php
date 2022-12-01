<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;     //SoftDeletes ham ishlatilsa o'chirilgan ma'lumot korzinkada qoladi

    protected $fillable = ['title', 'content', 'short_content'];  // to'ldirishi shart ustunlar

    protected $guarded = ['id'];
}
