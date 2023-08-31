<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'pda_code' => $this->pda_code,
            'rate' => $this->rate,
            'state' => $this->state,
            'investments' => $this->investments,
            'justification' => $this->justification,
            'start_date' => $this->start_date,
            'finish_date' => $this->finish_date,
        ];
    }
}
