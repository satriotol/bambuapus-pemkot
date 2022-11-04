<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReport extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'age', 'address', 'note', 'status_id', 'gender',  'birthplace', 'parent', 'phone', 'kelurahan_id'];
    const GENDER = [
        'PRIA', 'WANITA'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function user_report_statuses()
    {
        return $this->hasMany(UserReportStatus::class, 'user_report_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id_kelurahan');
    }
    public function getReportStatusLast()
    {
        return $this->user_report_statuses->where('status_id',2)->first()->created_at ?? '-';
    }
}
