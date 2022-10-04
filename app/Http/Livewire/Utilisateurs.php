<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.contact.utilisateurs',
        [
            'users' => User::latest()->paginate(5),
        ])
            ->extends('layouts.admin.master')
            ->section('contact');
    }
}
