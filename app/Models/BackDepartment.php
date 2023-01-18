<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackDepartment extends Model
{
    use HasFactory;
    protected $table = "back_departments";
    protected $fillable = [
    'name',
    'slug',
    'description',
    'status',
    'trending',
    'feature',
    'meta_title',
    'image',
    // 'qty',
    'meta_description',
    'meta_keywords'
    ];
}
