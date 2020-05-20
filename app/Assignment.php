<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jobs;

class Assignment extends Model
{
    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }
}
