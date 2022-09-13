<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReportStatus extends Model
{
    use HasFactory;
    protected $fillable = ['user_report_id', 'status_id', 'note', 'file'];

    public function user_report()
    {
        return $this->belongsTo(UserReport::class, 'user_report_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
