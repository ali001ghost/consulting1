<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
class Specialty extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    public function experience(): HasOne{
        return $this->hasOne('eperiences');
    }
}
