<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color'];
    public function user_report_statuses()
    {
        return $this->hasMany(Status::class, 'status_id', 'id');
    }
}
