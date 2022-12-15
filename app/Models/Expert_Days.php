<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
class Expert_Days extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'day_id',
        'from_hour',
        'to_hour'
    ];
    public function user():BelongsTo{

        return $this->belongsTo('users');
    }
    public function day():BelongsTo{

        return $this->belongsTo('days');
    }
}
