<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function item(){
        return $this->belongsTo(Item::class, 'id_item');
    }
}


