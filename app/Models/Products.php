<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [

        'order',
        'title',
        'parent_id',

    ];

    public function parent()
    {

        return $this->belongsTo(Products::class, 'parent_id');

    }
    public function children()
    {

        return $this->hasMany(Products::class, 'parent_id')->with('children' )->orderBy('order', 'asc');

    }
}
