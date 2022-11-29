<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\article;
class curd extends Model
{
    use HasFactory;
    protected $fillable = ['brandname','modelname','quantity','remark'];
    public function article()
    {
                    return $this->belongsTo(article::class,'user_id');

    }
}
