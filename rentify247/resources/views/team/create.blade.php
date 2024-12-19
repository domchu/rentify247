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

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="px-4 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <form action="" method="Post">
                        @csrf
                        {{-- names --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="text"
                                name="surname" :value="old('surname')" required autofocus autocomplete="surname"
                                placeholder="Surname" />
                            <x-input-label for="floatingInput" :value="__('Surname')" />
                            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                        </div>
                        <div class=" form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full px-3" type="text"
                                name="other_name" :value="old('other_name')" required autofocus autocomplete="other_name"
                                placeholder="Other Names" />
                            <x-input-label for="floatingInput" :value="__('Other Names')" />
                            <x-input-error :messages="$errors->get('other_name')" class="mt-2" />
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
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full " type="text"
                                name="phone" :value="old('phone')" required autofocus autocomplete="phone"
                                placeholder="Enter Phone Number" />
                            <x-input-label for="floatingInput" :value="__('Phone Number')" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                        {{-- position --}}
                        <div>
                            <select class="form-select form-select-lg mb-3 my-4 py-3 sm:py-0 form-control"
                                aria-label="Large select example" name="country" id="country">
                                <option selected>Job Description</option>
                                <option value="Chief Tech Officer" name="chief_tech">Chief Tech Officer(CTO)</option>
                                <option value="Project Manager" name="manager">Project Manager</option>
                                <option value="Front-End Developer" name="front_end">Front-End Developer</option>
                                <option value="Back-End Developer" name="back_end">Back-End Developer</option>
                                <option value="Full Stack Developer(MERN)" name="mern">Full Stack Developer(MERN)
                                </option>
                                <option value="Product Designer(UXUI)" name="designer">Product Designer(UXUI)</option>
                                <option value="Penetration Tester" name="pen_test">Penetration Tester</option>
                                <Stack value="Full Stack Developer(LAMP)" name="lamp">Full Stack Developer(LAMP)</option>
                            </select>
                        </div>
                        {{-- company --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full my-4 py-3 sm:py-0"
                                type="text" name="company" :value="old('company')" required autofocus autocomplete="company"
                                placeholder="Company" />
                            <x-input-label for="floatingInput" :value="__('Company')" />
                            <x-input-error :messages="$errors->get('company')" class="mt-2" />
                        </div>
                        {{-- description --}}
                        <div class="row justify-content-between">
                            <div class="mb-3 col-6">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write us a Bio"></textarea>
                                <x-input-error :messages="$errors->get('decription')" class="mt-2" />
                            </div>
                            {{-- photo --}}
                            <div class="mb-3 col-6">
                                <label for="formFileMultiple" class="form-label sm:py-0">Photo</label>
                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                        </div>
                        {{-- state --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full my-4 py-3 sm:py-0"
                                type="text" name="state" :value="old('state')" required autofocus autocomplete="state"
                                placeholder="state" />
                            <x-input-label for="floatingInput" :value="__('State of Origin')" />
                            <x-input-error :messages="$errors->get('state')" class="mt-2" />
                        </div>
                        {{-- nationality --}}
                        <div class="form-floating mb-3">
                            <select class="form-select form-select-lg mb-3 my-4 py-3 sm:py-0" name="country" id="country"
                                aria-label="Large select example">
                                <option selected>Nationality</option>
                                <option value="United States">United States</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                            </select>
                        </div>
                        {{-- date of birth --}}
                        <div class="my-4">
                            <x-input-label for="date_of_birth" :value="__('Date Of Birth')" />
                            <x-text-input id="date_of_birth" class="block mt-1 w-full my-4 py-3 sm:py-0" type="date"
                                name="date_of_birth" :value="old('date_of_birth')" pattern="\d{4}-\d{2}-\d{2}" required autofocus
                                autocomplete="date_of_birth" />
                            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                        </div>
                        {{-- Qualification --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="text"
                                name="qualification" :value="old('qualification')" required autofocus autocomplete="qualification"
                                placeholder="qualification" />
                            <x-input-label for="floatingInput" :value="__('Qualification')" />
                            <x-input-error :messages="$errors->get('qualification')" class="mt-2" />
                        </div>
                        {{-- Discipline --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full " type="text"
                                name="discipline" :value="old('discipline')" required autofocus autocomplete="discipline"
                                placeholder="discipline" />
                            <x-input-label for="floatingInput" :value="__('Discipline')" />
                            <x-input-error :messages="$errors->get('discipline')" class="mt-2" />
                        </div>

                        {{-- Experience --}}
                        <div class="form-floating mb-3">
                            <x-text-input id="floatingInput" class="form-control block mt-1 w-full" type="text"
                                name="experience" :value="old('experience')" required autofocus autocomplete="experience"
                                placeholder="experience" />
                            <x-input-label for="floatingInput" :value="__('Experience')" />
                            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
                        </div>
                        {{-- check box --}}
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input mb" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Status</label>
                        </div>


                        {{-- Register Button --}}
                        <div class="flex items-center justify-center mt-4">

                            <x-primary-button class="ml-4 text-center btn btn-primary" type="submit">
                                {{ __('Save ') }}
                            </x-primary-button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
