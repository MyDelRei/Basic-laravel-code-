<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $fillable = [
        "body",
    ];


    public function likedBy(User $user){
        return $this->likes->contains('user_id', $user->id);
    }
    
    public function ownedBy(User $user){
        return $user->id === $this->user_id;
    }

    public function user(){
        return $this->belongsTo(User::class); // all the post that belong to specific user not current
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }


}
