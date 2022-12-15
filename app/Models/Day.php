<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Day extends Model
{
    use HasFactory;
    protected $fillable=[
        'name'
    ];
    
    public function expert_days(){
        return $this->hasMany('experts_days');
    }
}
