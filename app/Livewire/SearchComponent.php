<?php

namespace App\Livewire;

use App\Models\Identidade;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class SearchComponent extends Component
{

    use WithPagination, WithoutUrlPagination;

    public $searchValue;

    public function resteInputValues()
    {
        $this->searchValue = '';
    }

    public function search()
    {
        $this->resetPage();
    }


    public function render()
    {
        $searchValue = '%' . $this->searchValue . '%';

        $dadus = Identidade::orderBy('id')
            ->where('naran', 'LIKE', $searchValue)
            ->orWhere('tinan', 'LIKE', $searchValue)
            ->orWhere('hela_fatin', 'LIKE', $searchValue)
            ->paginate(15);

        return view('livewire.search-component', ['dadus' => $dadus]);
    }
}
