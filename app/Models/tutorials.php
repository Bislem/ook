<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorials extends Model
{
    use HasFactory;

    public function getPosts(){
        return postsTutorials::where('tutorial',$this->id);
    }
}
