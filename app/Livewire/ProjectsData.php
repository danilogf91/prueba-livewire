<?php

namespace App\Livewire;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Livewire\Component;

class ProjectsData extends Component
{

    public $search = '';

    public function data()
    {
    }

    public function render()
    {
        $projects = Project::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('pda_code', 'like', '%' . $this->search . '%')
            ->orWhere('state', 'like', '%' . $this->search . '%')
            ->orWhere('investments', 'like', '%' . $this->search . '%')
            ->orWhere('justification', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.projects-data', compact('projects'))->layout('projects');
    }
}
