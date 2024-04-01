<?php

use Livewire\Attributes\{Layout, Title};
use Livewire\Volt\Component;
use App\Models\User;

new
#[Layout('layouts.app')]
#[Title('Utilisateurs')]
class extends Component {

    public $totalUsers ;

    public function mount(){
        $this->totalUsers = User::count();
    }
};

?>

<div class="">

    <div class="container px-6 mx-auto grid">
        <div class="flex items-center justify-between">

            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Utilisateurs
            </h2>
            <a href="{{route('admin.users.create')}}" wire:navigate class="btn-primary flex items-center justify-center px-4 py-1.5 rounded-md text-sm hover:cursor-pointer hover:scale-x-105 transition-colors ease-in-out duration-150">
                <svg id="SvgjsSvg1034" width="15" height="15" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1035"></defs><g id="SvgjsG1036"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path d="M12 24c-3.2 0-6.2-1.2-8.5-3.5-4.7-4.7-4.7-12.3 0-17C5.8 1.2 8.8 0 12 0s6.2 1.2 8.5 3.5c4.7 4.7 4.7 12.3 0 17-2.3 2.3-5.3 3.5-8.5 3.5zm0-22C9.3 2 6.8 3 4.9 4.9 1 8.8 1 15.2 4.9 19.1 6.8 21 9.3 22 12 22s5.2-1 7.1-2.9C23 15.2 23 8.9 19.1 5c-1.9-2-4.4-3-7.1-3z" fill="#f9fafb" class="color000 svgShape"></path><path d="M12 18c-.6 0-1-.4-1-1V7c0-.6.4-1 1-1s1 .4 1 1v10c0 .6-.4 1-1 1z" fill="#f9fafb" class="color000 svgShape"></path><path d="M17 13H7c-.6 0-1-.4-1-1s.4-1 1-1h10c.6 0 1 .4 1 1s-.4 1-1 1z" fill="#f9fafb" class="color000 svgShape"></path></svg></g></svg>
                <span class="ml-3">Nouveau</span>
            </a>
        </div>

        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Card -->
            <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800 border border-orange-500 ">
                <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                        Nombre des utilisateurs
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{ $totalUsers }}
                    </p>
                </div>
            </div>

        </div>

        <div class="grid gap-6 mb-8 grid-cols-1">
            @livewire('users-table')
        </div>



    </div>


</div>
