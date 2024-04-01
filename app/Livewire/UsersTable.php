<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\{ButtonGroupColumn, LinkColumn, BooleanColumn, DateColumn, ImageColumn} ;
use App\Models\User;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    protected $listeners = ['refreshUsersTable' => '$refresh'];

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
            ImageColumn::make('Image')->location(
                fn($row) => storage_path('app/images/users/' . $row->image )
            )->attributes(function($row){
                return [ 'class' => 'w-8 h-8 rounded-full'];
            }),
            Column::make("Name", "first_name")->sortable(),
            Column::make("Email", "email")->sortable(),
            BooleanColumn::make('active'),
            DateColumn::make("Ajouter", "created_at")->outputFormat('d-m-Y'),
            Column::make('Actions')
                ->label(
                    fn ($row) => view('partials.admin.table-actions')->with([
                        'user' => $row,
                    ])
                )->html(),

        ];
    }
}
