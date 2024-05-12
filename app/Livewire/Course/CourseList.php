<?php

namespace App\Livewire\Course;

use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        $courses = Course::all();
        return view('livewire.course.course-list',compact('courses'));
    }
}
