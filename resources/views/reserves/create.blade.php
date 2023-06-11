@extends('master.master')

@section('content')

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">

                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    New reserve
                </h3>

                <a type="button" href="{{ route('reserves.index') }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Cancel</span>
                </a>

            </div>

            <form method="POST" id="form-create" action="{{ route('reserves.store') }}">

                @csrf
                
                <div class="grid gap-4 mb-4 sm:grid-cols-4">

                    <!-- Name -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce your name">
                    </div>

                    <!-- Surname -->
                    <div>
                        <label for="surname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surname</label>
                        <input type="text" name="surname" id="surname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce your surname">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the contact phone of the reserve">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the contact email of the reserve">
                    </div>

                    <!-- Date -->
                    <div>
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                        <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce a valid date">
                    </div>

                    <!-- Zone -->
                    <div>
                        <label for="zone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Zone</label>
                        <select name="zone" id="zone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($zones as $zone)
                                <option value="{{ $zone->code }}">{{ $zone->code }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Services checkboxes -->
                    <div>
                        <label for="services" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Services</label>
                        @foreach ($services as $service)
                            <div>
                                <label for="service_{{ $service->id }}">
                                    <input type="checkbox" name="services[]" id="service_{{ $service->id }}" value="{{ $service->type }}">
                                    {{ $service->type }}
                                </label>
                            </div>
                        @endforeach
                    </div>


                    <!--<script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const zoneSelect = document.getElementById('zone');
                            const capacityTypeSelect = document.getElementById('capacity_type');
                            const servicesSelect = document.getElementById('services');
                    
                            zoneSelect.addEventListener('change', function () {
                                loadCapacityTypes(zoneSelect.value);
                                loadServices(zoneSelect.value);
                            });
                            
                            // Load capacity types for the initially selected zone
                            loadCapacityTypes(zoneSelect.value);
                            // Load services for the initially selected zone
                            loadServices(zoneSelect.value);
                    
                            function loadCapacityTypes(zoneId) {
                                
                                // Get zone data from the zones array
                                const zone = {//!! json_encode($zones) !!}.find(z => z.id == zoneId);

                                // Clear the capacity type select options
                                capacityTypeSelect.innerHTML = '';

                                if (zone) {
                                    // Add an empty option when no capacities are available
                                    if (zone.cocktail + zone.theater + zone.school + zone.feast + zone.cabaret == 0) {
                                        const emptyOption = document.createElement('option');
                                        emptyOption.value = 'empty';
                                        emptyOption.textContent = 'empty';
                                        capacityTypeSelect.appendChild(emptyOption);
                                    } else {
                                        // Add capacity type options based on the zone data
                                        const capacities = [
                                            { type: 'cocktail', value: zone.cocktail },
                                            { type: 'theater', value: zone.theater },
                                            { type: 'school', value: zone.school },
                                            { type: 'feast', value: zone.feast },
                                            { type: 'cabaret', value: zone.cabaret },
                                        ];

                                        capacities.forEach(capacity => {
                                            if (capacity.value > 0) { // Check if the capacity value is greater than 0
                                                const option = document.createElement('option');
                                                option.value = capacity.type;
                                                option.textContent = `(${capacity.value}) ${capacity.type}`;
                                                capacityTypeSelect.appendChild(option);
                                            }
                                        });
                                    }
                                }
                            }

                            function loadServices(zoneId) {
                                // Get zone data from the zones array
                                const zone = {//!! json_encode($zones) !!}.find(z => z.id == zoneId);

                                // Clear the services select options
                                servicesSelect.innerHTML = '';

                                if (zone && zone.services) {
                                    // Add services options based on the zone data
                                    zone.services.forEach(service => {
                                        const option = document.createElement('option');
                                        option.value = service.id;
                                        option.textContent = service.type;
                                        servicesSelect.appendChild(option);
                                    });
                                }
                            }
                        });
                    </script>-->

                    <!-- Capacity Type -->
                    <!--<div>
                        <label for="capacity_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity Type</label>
                        <select name="capacity_type" id="capacity_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </select>
                    </div>-->

                    <!-- Services -->
                    <!--<div>
                        <label for="services" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Services</label>
                        <select name="services" id="services" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        </select>
                    </div>-->

                </div>

                <!-- Buttons -->
                <div class="flex items-center space-x-4">

                    <button type="submit" value="Update reserve" form="form-create" class="text-danger text-primary-700 bg-transparent hover:bg-blue-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Create reserve</button>

                </div>

            </form>

        </div>

    </div>   
    
@endsection
