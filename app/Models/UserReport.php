<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserReport extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'age', 'address', 'note'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function user_report_statuses()
    {
        return $this->hasMany(UserReportStatus::class, 'user_report_id', ' id');
    }
}
