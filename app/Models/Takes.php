<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takes extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'course_id',
        'duration_id',
        'mark',
    ];

    protected $table='takes';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function duration()
    {
        return $this->belongsTo(Duration::class);
    }
    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
