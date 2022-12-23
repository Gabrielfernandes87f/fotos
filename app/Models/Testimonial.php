<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;




    protected $fillable = [
        'name',
        'image_testimonial',
        'profissao',
        'depoimento',
        'instagram',
    ];



    protected $guarded = [];

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
