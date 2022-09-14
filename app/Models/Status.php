<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Status extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color'];
    protected $appends = ['count'];

    public function getCountAttribute()
    {
        if (Auth::user()->user_detail) {
            return $this->user_reports()->where('user_id', Auth::user()->id)->count();
        } else {
            return $this->user_reports()->count();
        }
    }
    public function user_report_statuses()
    {
        return $this->hasMany(UserReportStatus::class, 'status_id', 'id');
    }
    public function user_reports()
    {
        return $this->hasMany(UserReport::class, 'status_id', 'id');
    }
}
