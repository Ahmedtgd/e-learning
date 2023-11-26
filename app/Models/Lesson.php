<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_title',
        'lesson_content',
        'lesson_duration',
        'lesson_order',
        'docx_file',
        'pdf_file',
        'image_files',
        'video_files',
        'lesson_course_id',
        'user_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'lesson_course_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
