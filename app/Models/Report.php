<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function reports()
    {
        return $this->belongsTo(Status::class);
        return $this->belongsTo(User::class);
    }

}
