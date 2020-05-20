<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Assignment;

class Jobs extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }
}
