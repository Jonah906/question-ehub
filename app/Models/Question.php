<?php

namespace App\Models;

use App\Models\BackDepartment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [
        'department_id',
        'name',
        'slug',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'unit',
        // 'shipping',
        'level',
        'status',
        'feature',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];

    public function department()
    {
      return $this->belongsTo(BackDepartment::class,'department_id','id');
    }
}
