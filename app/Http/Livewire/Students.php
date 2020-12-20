<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
 use WithPagination;

    public $first_name;
    public $last_name;
    public $email;
    public $phone;

    public function resetInputFields()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone = '';
    }


    public function store(Request $request) {
        $validateData = $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required'
    ]);
    Student::create($validateData);
    session()->flash('success','Student created successfully');
    $this->resetInputFields();
    $this->emit('studentAdded');
    }

    public function render()
    {
        $students = Student::paginate(10);
        return view('livewire.student.index',['students'=>$students]);
    }
}
