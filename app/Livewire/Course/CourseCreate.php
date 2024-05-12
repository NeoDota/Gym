<?php

namespace App\Livewire\Course;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Livewire\Component;

class CourseCreate extends Component
{
    public $hora;
    public $fecha;
    public $user;
    public $category;

    public function render()
    {
        $users = User::all();
        $categorys = Category::all();
        return view('livewire.course.course-create',compact('users','categorys'));
    }

    public function createCourse()
    {
        Course::create([
            'hora' => $this->hora,
            'fecha' => $this->fecha,
            'users_id' => $this->user,
            'categories_id' => $this->category,
        ]);

        session()->flash('message', 'Assistencia creada exitosamente.');
    }
}
