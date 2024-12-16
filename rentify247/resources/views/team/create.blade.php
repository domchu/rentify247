@extends('layouts.admin')

@section('title', 'Create Team Members')



@section('content')
    {{-- <h1 class="mt-4">Category</h1> --}}
    <div class="bg-gray-100">

   
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Team Member
        </h2>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="" method="Post">
                    @csrf
                    <div class="row w-full">
                        <div>
                            <x-input-label for="surname" :value="__('Surname')" />
                            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname"
                                :value="old('surname')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="other_name" :value="__('Other Name')" />
                            <x-text-input id="other_name" class="block mt-1 w-full" type="text" name="other_name"
                                :value="old('other_name')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('other_name')" class="mt-2" />
                        </div>
                    </div>
                    {{-- email --}}
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    {{-- phone --}}
                    <div>
                        <x-input-label for="phone" :value="__('Contact')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    {{-- Register Button --}}
                    <div class="flex items-center justify-center mt-4">

                        <x-primary-button class="ml-4 text-center">
                            {{ __('Save Member ') }}
                        </x-primary-button>

                    </div>
                </form>
            </div>

        </div>
    </div>
     </div>
@endsection
