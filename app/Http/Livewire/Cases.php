<?php

namespace App\Http\Livewire;

use Livewire\Component;
//use App\Models\Cases;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Cases extends LivewireDatatable
{
    public $model = Cases::class;


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->sortBy('id'),

            Column::name('title')
                ->label('Titulo'),

            Column::name('description')
                ->label('Descripción'),

            DateColumn::name('created_at')
                ->label('Creado')
        ];
    }
    public function render()
    {
        return view('livewire.cases');
    }
}
