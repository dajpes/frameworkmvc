<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['publication','publication_content', 'content', 'state', 'category_id'];
    public  $state = ['recieved','in_evaluation','accepted'];
}
