<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'name',
        'code_subject'
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subjects', 'subject_id', 'student_id');
    }
}
