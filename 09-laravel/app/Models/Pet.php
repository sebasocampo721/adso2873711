<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'photo',
        'kind',
        'weight',
        'age',
        'bread',
        'location',
        'description',
        'status',
    ];
    //
    public function adoption() {
        return $this ->hasOne(Adoption::class);
    }
}
