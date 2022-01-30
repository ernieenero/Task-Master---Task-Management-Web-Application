<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $primaryKey = 'subject_id';
    protected $fillable = [
        'subject_name',
        'subject_detail'
    ];

    public function tasks(){
        return $this->hasMany('App\Models\Task', 'subject_id');
    }
}
