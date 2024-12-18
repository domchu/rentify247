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

            {{-- success mesage --}}
            <x-success-status class="mb-4" :status="session('message')" />
            <!-- Session Status -->

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="px-4 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="" method="Post">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-6">
                                <x-input-label for="surname" :value="__('Surname')" />
                                <x-text-input id="surname" class="block mt-1 w-full my-4 py-3 sm:py-0" type="text" name="surname"
                                    :value="old('surname')" required autofocus autocomplete="surname" />
                                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                            </div>
                            <div class="col-6">
                                <x-input-label for="other_name" :value="__('Other Name')" />
                                <x-text-input id="other_name" class="block mt-1 w-full my-4 py-3 sm:py-0" type="text" name="other_name"
                                    :value="old('other_name')" required autofocus autocomplete="other_name" />
                                <x-input-error :messages="$errors->get('other_name')" class="mt-2" />
                            </div>
                        </div>
                        {{-- email --}}
                        <div class="form-floating mb-3 ">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="email"
                                name="email" :value="old('email')" required autofocus autocomplete="email"
                                placeholder="name@example.com" />
                            <x-input-label for="floatingInput" :value="__('Email Address')" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{-- phone --}}
                        <div>
                            <x-input-label for="phone" :value="__('Contact')" />
                            <x-text-input id="phone" class="block mt-1 w-full my-4 py-3 sm:py-0" type="text" name="phone"
                                :value="old('phone')" required autofocus autocomplete="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        {{-- position --}}
                        <div>
                            <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                <option selected>Job Description</option>
                                <option value="1">Project Manager</option>
                                <option value="2">Front-End Developer</option>
                                <option value="3">Back-End Developer</option>
                            </select>
                        </div>
                        {{-- company --}}
                        <div>
                            <x-input-label for="company" :value="__('Company')" />
                            <x-text-input id="company" class="block mt-1 w-full my-4 py-3 sm:py-0" type="text" name="company"
                                :value="old('company')" required autofocus autocomplete="company" />
                            <x-input-error :messages="$errors->get('company')" class="mt-2" />
                        </div>
                        {{-- description --}}
                        <div class="row justify-content-between">
                            <div class="mb-3 col-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            {{-- photo --}}
                            <div class="mb-3 col-6">
                                <label for="formFileMultiple" class="form-label ">Photo</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                        </div>
{{-- state --}}
                        <div class="row justify-content-between">
                            <div class="col-6">
                                <select class="form-select form-select-lg mb-3 my-4 py-3 sm:py-0" aria-label="Large select example">
                                    <option selected>State of Origin</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            {{-- nationality --}}
                            <div class="col-6">
                                <select class="form-select form-select-lg mb-3 my-4 py-3 sm:py-0" aria-label="Large select example">
                                    <option selected>Nationality</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        {{-- date of birth --}}
                        <div>
                            <x-input-label for="date_of_birth" :value="__('Date Of Birth')" />
                            <x-text-input id="date_of_birth" class="block mt-1 w-full my-4 py-3 sm:py-0" type="date" name="date_of_birth"
                                :value="old('date_of_birth')" pattern="\d{4}-\d{2}-\d{2}" required autofocus
                                autocomplete="date_of_birth" />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                        </div>
                        {{-- Qualification --}}
                        <div class="row justify-content-between">
                            <div class="col-6">
                                <x-input-label for="qualification" :value="__('Qualification')" />
                                <x-text-input id="qualification" class="block mt-1 w-full my-4 py-3 sm:py-0" type="text"
                                    name="qualification" :value="old('qualification')" required autofocus
                                    autocomplete="qualification" />
                                <x-input-error :messages="$errors->get('qualification')" class="mt-2" />
                            </div>
                            {{-- Discipline --}}
                            <div class="col-6">
                                <x-input-label for="discipline" :value="__('Discipline')" />
                                <x-text-input id="discipline" class="block mt-1 w-full my-4 py-3 sm:py-0" type="text" name="discipline"
                                    :value="old('discipline')" required autofocus autocomplete="discipline" />
                                <x-input-error :messages="$errors->get('discipline')" class="mt-2" />
                            </div>
                        </div>
                        {{-- Experience --}}
                        <div>
                            <x-input-label for="experience" :value="__('Experience')" />
                            <x-text-input id="experience" class="block mt-1 w-full my-4 py-3 sm:py-0" type="text" name="experience"
                                :value="old('experience')" required autofocus autocomplete="experience" />
                            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
                        </div>
                        {{-- check box --}}
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input mb" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Status</label>
                        </div>


                        {{-- Register Button --}}
                        <div class="flex items-center justify-center mt-4">

                            <x-primary-button class="ml-4 text-center btn bg-[#243cd4] px-[30px]" type="submit">
                                {{ __('Save ') }}
                            </x-primary-button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
