@extends('master.master')

@section('content')

    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
            
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Type</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Capacity</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Price</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Description</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                            <a href="{{ route('services.create') }}" class="text-danger text-primary-700 bg-transparent hover:bg-green-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Create</a>
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    @foreach ($services as $service)
                       
                        <tr class="hover:bg-gray-50">

                            <th class="px-6 py-4 font-medium text-gray-900">{{ $service->type }}</th>
                            <td class="px-6 py-4">{{ $service->capacity }}</td>
                            <td class="px-6 py-4">{{ $service->price }}</td>
                            <td class="px-6 py-4">{{ $service->description }}</td>
                            <td class="flex justify-end gap-4 px-6 py-4 font-medium">

                                <a href="{{ route('services.show', $service->id) }}" class="text-danger text-primary-700 bg-transparent hover:bg-blue-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Show</a>
                                <a href="{{ route('services.edit', $service->id) }}" class="text-danger text-primary-700 bg-transparent hover:bg-yellow-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Edit</a>
                                
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline">
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
        
                <a href="{{ $services->previousPageUrl() }}" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 overflow-hidden rounded-lg border border-gray-200 shadow-md">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                     
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    
                    </svg>

                    <span> previous </span>
                
                </a>
            
            @endif

            @if ($services->hasPages())
                
                @if ($hasNextPage)
                
                    <a type="hidden" class="flex items-center px-5 py-2 capitalize transition-colors duration-200"></a>

                @endif

                <div class="items-center hidden md:flex gap-x-3">

                    @foreach ($services->links()->elements[0] as $page => $url)
                    
                        <a href="{{ $url }}" class="px-2 py-1 text-sm {{ $services->currentPage() == $page ? 'text-blue-500 bg-blue-100/60' : 'text-gray-500 hover:bg-gray-100' }} rounded-md dark:hover:bg-gray-800 dark:text-gray-300 rounded-lg border border-gray-200 shadow-md">{{ $page }}</a>
                    
                    @endforeach

                </div>

                @if ($hasPreviousPage)

                    <a type="hidden" class="flex items-center px-5 py-2 capitalize transition-colors duration-200"></a>
                
                @endif
            
            @endif

            @if ($hasNextPage)

                <a href="{{ $services->nextPageUrl() }}" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 overflow-hidden rounded-lg border border-gray-200 shadow-md">
                    
                    <span> Next </span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                        
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    
                    </svg>

                </a>

            @endif

        </div>


    </div>

@endsection
