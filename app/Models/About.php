<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image_1', 'image_2', 'image_3', 'icon'];

    public function deleteFile1()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image_1']);
    }
    public function deleteFile2()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image_2']);
    }
    public function deleteFile3()
    {
        Storage::disk('public_uploads')->delete($this->attributes['image_3']);
    }
    public function deleteFile4()
    {
        Storage::disk('public_uploads')->delete($this->attributes['icon']);
    }
}
