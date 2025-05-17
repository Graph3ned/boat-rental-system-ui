<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class StaffEdit extends Component
{
    public $staffId;
    public $name;
    public $email;

    public function mount($id)
    {
        $staff = User::findOrFail($id);
        $this->staffId = $staff->id;
        $this->name = $staff->name;
        $this->email = $staff->email;
    }

    public function updateStaff()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->staffId,
        ]);

        $staff = User::find($this->staffId);
        $staff->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('message', 'Staff updated successfully.');
        return $this->redirect('/admin/staffs', navigate: true);
    }

    public function render()
    {
        return view('livewire.staff-edit');
    }
} 