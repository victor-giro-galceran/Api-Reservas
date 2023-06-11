@extends('master.master')

@section('content')

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">

                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    New Zone
                </h3>

                <a type="button" href="{{ route('zones.index') }}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Cancel</span>
                </a>

            </div>

            <form method="POST" id="form-create" action="{{ route('zones.store') }}">

                @csrf
                
                <div class="grid gap-4 mb-4 sm:grid-cols-5">
                    
                    <!-- Code -->
                    <div>
                        <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
                        <input type="text" name="code" id="code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the code of the zone">
                    </div>

                    <!-- Name -->
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the name of the zone">
                    </div>

                    <!-- Area -->
                    <div>
                        <label for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Area</label>
                        <input type="text" name="area" id="area" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the area of the zone">
                    </div>
                    
                    <!-- Height -->
                    <div>
                        <label for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height</label>
                        <input type="text" name="height" id="height" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the height of the zone">
                    </div>
                    
                    <!-- Cocktail -->
                    <div>
                        <label for="cocktail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cocktail</label>
                        <input type="text" name="cocktail" id="cocktail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the cocktail of the zone">
                    </div>
                    
                    <!-- Theater -->
                    <div>
                        <label for="theater" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Theater</label>
                        <input type="text" name="theater" id="theater" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the theater of the zone">
                    </div>
                    
                    <!-- School -->
                    <div>
                        <label for="school" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School</label>
                        <input type="text" name="school" id="school" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the school of the zone">
                    </div>
                    
                    <!-- Feast -->
                    <div>
                        <label for="feast" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feast</label>
                        <input type="text" name="feast" id="feast" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the feast of the zone">
                    </div>
                    
                    <!-- Cabaret -->
                    <div>
                        <label for="cabaret" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cabaret</label>
                        <input type="text" name="cabaret" id="cabaret" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Introduce the cabaret of the zone">
                    </div>

                </div>

                <!-- Description -->
                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" name="description" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description..."></textarea>
                </div>

                <!-- Buttons -->
                <div class="flex items-center space-x-4">

                    <button type="submit" value="Update zone" form="form-create" class="text-danger text-primary-700 bg-transparent hover:bg-blue-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Create zone</button>

                </div>

            </form>

        </div>

    </div>   
    
@endsection
