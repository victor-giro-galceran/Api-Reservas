@extends('master.master')

@section('content')

<div class="max-w-7xl mx-auto p-6 lg:p-8">

    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

        <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">

            <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Code</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Area</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Height</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Cocktail</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Theater</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">School</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Feast</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Cabaret</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                            <a href="{{ route('zones.create') }}" class="bg-transparent hover:bg-green-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Create</a>
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    @foreach ($zones as $zone)
                       
                        <tr class="hover:bg-gray-50">

                            <th class="px-6 py-4 font-medium text-gray-900">{{ $zone->code }}</th>
                            <td class="px-6 py-4">{{ $zone->name }}</td>
                            <td class="px-6 py-4">{{ $zone->area }} m<sup>2</sup></td>
                            <td class="px-6 py-4">{{ $zone->height }} m</td>
                            <td class="px-6 py-4">{{ $zone->cocktail }} </td>
                            <td class="px-6 py-4">{{ $zone->theater }}</td>
                            <td class="px-6 py-4">{{ $zone->school }}</td>
                            <td class="px-6 py-4">{{ $zone->feast }}</td>
                            <td class="px-6 py-4">{{ $zone->cabaret }}</td>
                            <td class="flex gap-4 px-6 py-4 font-medium">

                                <a href="{{ route('zones.show', $zone->id) }}" class="text-danger text-primary-700 bg-transparent hover:bg-blue-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Show</a>
                                <a href="{{ route('zones.edit', $zone->id) }}" class="text-danger text-primary-700 bg-transparent hover:bg-yellow-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Edit</a>
                                
                                <form action="{{ route('zones.destroy', $zone->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger text-primary-700 bg-transparent hover:bg-red-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Delete</button>
                                </form>

                            </td>
                        
                        </tr>
                    
                    @endforeach

                </tbody>

            </table>

        </div>
    
        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6">

            @if ($hasPreviousPage)
        
                <a href="{{ $zones->previousPageUrl() }}" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 overflow-hidden rounded-lg border border-gray-200 shadow-md">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                     
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    
                    </svg>

                    <span> previous </span>
                
                </a>
            
            @endif

            @if ($zones->hasPages())
                
                @if ($hasNextPage)
                
                    <a type="hidden" class="flex items-center px-5 py-2 capitalize transition-colors duration-200"></a>

                @endif

                <div class="items-center hidden md:flex gap-x-3">

                    @foreach ($zones->links()->elements[0] as $page => $url)
                    
                        <a href="{{ $url }}" class="px-2 py-1 text-sm {{ $zones->currentPage() == $page ? 'text-blue-500 bg-blue-100/60' : 'text-gray-500 hover:bg-gray-100' }} rounded-md dark:hover:bg-gray-800 dark:text-gray-300 rounded-lg border border-gray-200 shadow-md">{{ $page }}</a>
                    
                    @endforeach

                </div>

                @if ($hasPreviousPage)

                    <a type="hidden" class="flex items-center px-5 py-2 capitalize transition-colors duration-200"></a>
                
                @endif
            
            @endif

            @if ($hasNextPage)

                <a href="{{ $zones->nextPageUrl() }}" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 overflow-hidden rounded-lg border border-gray-200 shadow-md">
                    
                    <span> Next </span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                        
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    
                    </svg>

                </a>

            @endif

        </div>


    </div>

@endsection
