<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn ;
use Rappasoft\LaravelLivewireTables\Views\Columns\DateColumn ;
use App\Models\User;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setLayout('layouts.app')
            ->setSlot('slot');

    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable(),
            ImageColumn::make('Image')->location(function($row) {
                return $row->image;
            })->attributes(function($row){
                return [ 'class' => 'w-8 h-8 rounded-full'];
            }),
            Column::make("Name", "first_name")->sortable(),
            Column::make("Email", "email")->sortable(),
            DateColumn::make("Ajouter", "created_at")->outputFormat('d-m-Y'),
        ];
    }
}