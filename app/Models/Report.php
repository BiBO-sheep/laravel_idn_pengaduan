<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reporter_id',
        'title',
        'detail',
        'photo',
        'status',
        'time_report',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'reporter_id');
    }

}
    