<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Experience extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'specialtiy_id',
        'details '
    ];

    public function user():BelongsTo{

        return $this->belongsTo('users');
    }
    public function specialty():BelongsTo{

        return $this->belongsTo('users');
    }
}
