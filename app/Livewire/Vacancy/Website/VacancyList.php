<?php

namespace App\Livewire\Vacancy\Website;

use Livewire\Component;
use App\Vacancy;

class VacancyList extends Component
{
    public $vacancies;

    public function render()
    {
        $this->vacancies = Vacancy::all();

        return view('livewire.vacancy.website.vacancy-list');
    }
}
