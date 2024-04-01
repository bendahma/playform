<?php

use Livewire\Attributes\{Layout, Title};
use Livewire\Volt\Component;
use App\Models\User;
use Livewire\Attributes\Validate;
use TallStackUi\Traits\Interactions;
use Livewire\WithFileUploads;

new
#[Layout('layouts.app')]
#[Title('Utilisateurs')]
class extends Component {
    use Interactions;
    use WithFileUploads;

    #[Validate('image|max:2048')]
    public $picture;

    #[Validate('required|string|max:255')]
    public $first_name;

    #[Validate('required|string|max:255')]
    public $last_name;

    #[Validate('required|string|max:20')]
    public $phoneNumber;

    #[Validate('required|string|email|max:255|unique:users')]
    public $email;

    #[Validate('required|string|string|max:255')]
    public $password = "password" ;

    #[Validate('required|string|string|max:255|same:password')]
    public $confirmation_password = "password";

    #[Validate('required|string|string|max:255|same:password')]
    public $confirmation_password = "password";

    public function saveUser(){

        if($this->picture) {
            $pictureName = $this->picture->getClientOriginalName();
            $this->picture->storeAs('public/users' . $pictureName);
        }


        User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phoneNumber,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $this->reset(['first_name','last_name','phoneNumber','email']);
        $this->toast()->success('Success','user add successfully')->send();
    }

};

?>

<div>
    <x-loading loading="saveUser">
        <div class="flex items-center text-primary-500 dark:text-white">
            <x-icon name="arrow-path" class="mr-2 h-10 w-10 animate-spin" />
            Saving user ...
        </div>
    </x-loading>
    <div class="container px-6 mx-auto grid ">
        <div class="flex items-center justify-between mt-8 pl-12 ">

            <div class="">

                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-56 cursor-pointer ">
                        <div class="relative flex flex-col items-center justify-center pt-5 pb-6">
                            @if ($picture)
                                <img src="{{ $picture->temporaryUrl() }}" alt="user profile image" class="w-56 rounded-full ">
                            @else
                                <img src="{{asset('img/profile.png')}}" alt="user profile image" class="w-44 rounded-full border border-gray-400">
                            @endif

                            <svg class="absolute top-50 left-50 w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>

                        </div>
                        <input id="dropzone-file" type="file" class="hidden" wire:model="picture" />
                    </label>
                </div>


            </div>

            {{-- <a class="btn-primary flex items-center justify-center px-8 py-1.5 rounded-md text-sm hover:cursor-pointer hover:scale-x-105 transition-colors ease-in-out duration-150">
                <svg id="SvgjsSvg1034" width="15" height="15" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><defs id="SvgjsDefs1035"></defs><g id="SvgjsG1036"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"><path d="M12 24c-3.2 0-6.2-1.2-8.5-3.5-4.7-4.7-4.7-12.3 0-17C5.8 1.2 8.8 0 12 0s6.2 1.2 8.5 3.5c4.7 4.7 4.7 12.3 0 17-2.3 2.3-5.3 3.5-8.5 3.5zm0-22C9.3 2 6.8 3 4.9 4.9 1 8.8 1 15.2 4.9 19.1 6.8 21 9.3 22 12 22s5.2-1 7.1-2.9C23 15.2 23 8.9 19.1 5c-1.9-2-4.4-3-7.1-3z" fill="#f9fafb" class="color000 svgShape"></path><path d="M12 18c-.6 0-1-.4-1-1V7c0-.6.4-1 1-1s1 .4 1 1v10c0 .6-.4 1-1 1z" fill="#f9fafb" class="color000 svgShape"></path><path d="M17 13H7c-.6 0-1-.4-1-1s.4-1 1-1h10c.6 0 1 .4 1 1s-.4 1-1 1z" fill="#f9fafb" class="color000 svgShape"></path></svg></g></svg>
                <span class="ml-3">Edit</span>
            </a> --}}
        </div>

        <div class="w-full pl-12 mt-6">
            <div class="w-full grid grid-cols-3 gap-6">
                <x-input label="First name *" hint="Insert your first name" wire:model="first_name" />
                <x-input label="Last name *" hint="Insert your last name" wire:model="last_name" />
                <x-input label="Phone number *" hint="Insert your phone number" wire:model='phoneNumber' />
            </div>
            <div class="w-full grid grid-cols-3 gap-6 mt-6">
                <x-input suffix="@gmail.com" label="E-mail" wire:model="email" />
                <x-password label="Password" hint="Insert your password" value="password" wire:model="password" />
                <x-password label="Confirm password" hint="repet your password" value="password" wire:model='confirmation_password' />
            </div>
            <div class="w-full grid grid-cols-3 gap-6 mt-6">
                <x-checkbox label="Active account" wire:model='active' />
            </div>
            <div class="mt-6">
                <x-button wire:click='saveUser' icon="users" position="right" color="black" >Save</x-button>
            </div>
        </div>



    </div>
</div>
