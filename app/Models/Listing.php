<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    //enable mass uploading
    // protected $fillable = ['title', 'logo', 'company', 'location', 'website', 'email', 'description', 'tags'];

    // filter by the tag
    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' . request('search') . '%')
            
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%')
            ->orWhere('price', 'like', '%' . request('search') . '%');
            ;
        }
    }

    // Relationship To User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
