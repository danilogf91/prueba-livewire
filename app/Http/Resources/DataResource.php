<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
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
            'area' => $this->area,
            'project_id' => $this->project_id,
            'grupo_1' => $this->grupo_1,
            'grupo_2' => $this->grupo_2,
            'descripcion' => $this->descripcion,
            'clasificacion_general' => $this->clasificacion_general,
            'tipo_rubro' => $this->tipo_rubro,
            'cantidad' => $this->cantidad,
            'precio_unitario' => $this->precio_unitario,
            'precio_global' => $this->precio_global,
            'etapa' => $this->etapa,
        ];
    }
}
