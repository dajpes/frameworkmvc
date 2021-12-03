<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['publication','publication_content', 'content', 'state', 'category_id'];
    public  $state = ['recieved','in_evaluation','accepted'];
    public function category() {
      return $this->belongsTo(Categories::class, 'category_id');
    }
}
