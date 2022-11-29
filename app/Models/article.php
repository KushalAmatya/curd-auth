<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\curd;

class article extends Model
{
    use HasFactory;
    protected $fillable = ['username','email','password'];
    public function curds()
    {
        return $this->hasMany(curd::class);
    }
}
