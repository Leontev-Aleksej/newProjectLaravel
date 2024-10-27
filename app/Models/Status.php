<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function statuses()
    {
        return $this->hasMany(Report::class, 'status_id', 'id');
    }

}
