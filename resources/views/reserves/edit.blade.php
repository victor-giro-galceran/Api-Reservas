@extends('master.master')

@section('content')

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">

                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Modify a Reserve
                </h3>

                <a type="button" href="{{ route('reserves.index') }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Cancel</span>
                </a>
            </div>
            
            <form action="{{ route('reserves.destroy', $reserve->id) }}" id = "form-delete" method="POST">
                @csrf
                @method('DELETE')
            </form>
            
            <form method="POST" id="form-update" action="{{ route('reserves.update', $reserve->id) }}">

                @method('PUT')
                @csrf
                
                <div class="grid gap-4 mb-4 sm:grid-cols-3">
                    
                    <input type="hidden" name="id" value="{{ $reserve->id }}">

                    <!-- Name -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" value="{{ $reserve->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce your name for the reserve">
                    </div>

                    <!-- Surname -->
                    <div>
                        <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surname</label>
                        <input type="text" name="surname" id="surname" value="{{ $reserve->surname }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce your surname for the reserve">
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" id="email" value="{{ $reserve->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce your contact email for the reserve">
                    </div>
                    
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ $reserve->phone }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce your contact phone for the reserve">
                    </div>

                    <!-- Date -->
                    <div>
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="date" name="date" id="date" value="{{ $reserve->date }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the new date (Scheduled)">
                    </div>

                    <!-- Zone -->
                    <div>
                        <label for="zone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zone</label>
                        <select name="zone" id="zone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($zones as $zone)
                                <option value="{{ $zone->code }}" {{ $reserve->zone == $zone->id ? 'selected' : '' }}>{{ $zone->code }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- State -->
                    <div>
                        <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">State</label>
                        <select name="state" id="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach($states as $state)
                                <option value="{{ $state->state }}" {{ $reserve->state == $state->state ? 'selected' : '' }}>{{ $state->state }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Services checkboxes -->
                    <div>
                        <label for="services" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Services</label>
                        @foreach ($services as $service)
                            <div>
                                <label for="service_{{ $service->id }}">
                                    <input type="checkbox" name="services[]" id="service_{{ $service->id }}" value="{{ $service->type }}"
                                        {{ in_array($service->type, $reserve->Services->pluck('type')->toArray()) ? 'checked' : '' }}>
                                    {{ $service->type }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                </div>

                <!-- Buttons -->
                <div class="flex items-center space-x-4">

                    <button type="submit" value="Update reserve" form="form-update" class="text-danger text-primary-700 bg-transparent hover:bg-blue-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Update reserve</button>

                </div>

            </form>

        </div>

    </div>

@endsection
