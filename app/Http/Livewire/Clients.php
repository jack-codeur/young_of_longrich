<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class Clients extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.contact.clients',
        [
            'clients' => Client::latest()->paginate(5),
        ])
            ->extends("layouts.admin.master")
            ->section("contact");
    }
}
