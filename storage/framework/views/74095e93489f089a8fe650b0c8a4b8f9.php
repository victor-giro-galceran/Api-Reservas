

<?php $__env->startSection('content'); ?>

<!DOCTYPE html>

    <div class="max-w-7xl mx-auto lg:p-8">

        <div class="grid gap-6 xl:grid-cols-6">

            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

                    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.2426 16.3137L6 12.071L7.41421 10.6568L10.2426 13.4853L15.8995 7.8284L17.3137 9.24262L10.2426 16.3137Z" fill="currentColor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z" fill="currentColor"/>
                        </svg>
                    </div>

                    <div>

                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Approved
                        </p>

                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            <?php $__currentLoopData = $reserve_count_by_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($reserve_count->state === 'Approved'): ?>
                                    <?php echo e($reserve_count->count); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>

                    </div>

                </div>

            </div>

            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

                    <div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.3394 9.32245C16.7434 8.94589 16.7657 8.31312 16.3891 7.90911C16.0126 7.50509 15.3798 7.48283 14.9758 7.85938L12.0497 10.5866L9.32245 7.66048C8.94589 7.25647 8.31312 7.23421 7.90911 7.61076C7.50509 7.98731 7.48283 8.62008 7.85938 9.0241L10.5866 11.9502L7.66048 14.6775C7.25647 15.054 7.23421 15.6868 7.61076 16.0908C7.98731 16.4948 8.62008 16.5171 9.0241 16.1405L11.9502 13.4133L14.6775 16.3394C15.054 16.7434 15.6868 16.7657 16.0908 16.3891C16.4948 16.0126 16.5171 15.3798 16.1405 14.9758L13.4133 12.0497L16.3394 9.32245Z" fill="currentColor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z" fill="currentColor"/>
                        </svg>
                    </div>

                    <div>

                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Rejected
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            <?php $__currentLoopData = $reserve_count_by_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($reserve_count->state === 'Rejected'): ?>
                                    <?php echo e($reserve_count->count); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>

                    </div>

                </div>

            </div>

            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

                    <div class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M11 14h2v-3h3V9h-3V6h-2v3H8v2h3z"></path><path d="M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z"></path></svg>                    </div>

                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Requested
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            <?php $__currentLoopData = $reserve_count_by_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($reserve_count->state === 'Requested'): ?>
                                    <?php echo e($reserve_count->count); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>
                    </div>

                </div>

            </div>

            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

                    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"></path><path d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"></path></svg>
                    
                    </div>

                    <div>

                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Scheduled
                        </p>

                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            <?php $__currentLoopData = $reserve_count_by_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($reserve_count->state === 'Scheduled'): ?>
                                    <?php echo e($reserve_count->count); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>

                    </div>

                </div>

            </div>

            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

                    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM12 20c-4.411 0-8-3.589-8-8s3.567-8 7.953-8C16.391 4 20 7.589 20 12s-3.589 8-8 8z"></path><path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path></svg>

                    </div>

                    <div>

                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Cancelled
                        </p>

                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            <?php $__currentLoopData = $reserve_count_by_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($reserve_count->state === 'Cancelled'): ?>
                                    <?php echo e($reserve_count->count); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>

                    </div>

                </div>

            </div>

            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">

                    <div class="p-3 mr-4 rounded-full">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 10H5c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2zM5 20v-8h14l.002 8H5zM5 6h14v2H5zm2-4h10v2H7z"></path></svg>

                    </div>

                    <div>
                        
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Total
                        </p>
                        
                        <?php $total_count = $reserve_count_by_state->sum('count'); ?>

                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            <?php echo e($total_count); ?>

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">

            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">

                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Date</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Zone</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Services</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                            <a href="<?php echo e(route('reserves.create')); ?>" class="bg-transparent hover:bg-green-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Create</a>
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    <?php $__currentLoopData = $reserves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="hover:bg-gray-50">

                            <th class="px-6 py-4 font-medium text-gray-900"><?php echo e($reserve->email); ?></th>
                            <td class="px-6 py-4"><?php echo e($reserve->date); ?></td>
                            
                            <!-- Zone column -->
                            <td class="px-6 py-4"><?php echo e($reserve->zone); ?></td>

                            <!-- Services column -->
                            <td class="px-6 py-4">
                                <?php
                                    $services = json_decode($reserve->services, true); // Decode the services JSON string into an array
                                ?>
                                <?php if(is_array($services)): ?> <!-- Make sure $services is an array before iterating -->
                                    
                                    <div class="flex items-center">
                                        
                                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php if($service === 'Bus'): ?>

                                                <a class="hidden xl:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" title="Bus">

                                                    <div class="p-0.5 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21 6.021c.003-.146-.007-1.465-1.3-2.735C18.427 2.036 17.143 2 17 2H6.996c-.239 0-1.493.063-2.708 1.302C3.036 4.578 3 5.859 3 6v3H2v3h1v6c0 .734.406 1.373 1 1.721V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1h10v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1.277A1.99 1.99 0 0 0 21 18v-6h1V9h-1V6.021zM9 4h6v2H9V4zM6.5 18a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 6.5 18zm4.5-5H5V8h6v5zm6.5 5a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 17.5 18zm1.5-5h-6V8h6v5z"></path></svg>

                                                    </div>

                                                </a>

                                            <?php elseif($service === 'Catering'): ?>

                                                <a class="hidden xl:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" title="Catering">

                                                    <div class="p-0.5 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M7 22h10a1 1 0 0 0 .99-.858L19.867 8H21V6h-1.382l-1.724-3.447A.998.998 0 0 0 17 2H7c-.379 0-.725.214-.895.553L4.382 6H3v2h1.133L6.01 21.142A1 1 0 0 0 7 22zm10.418-11H6.582l-.429-3h11.693l-.428 3zm-9.551 9-.429-3h9.123l-.429 3H7.867zM7.618 4h8.764l1 2H6.618l1-2z"></path></svg>

                                                    </div>

                                                </a>

                                            <?php elseif($service === 'Chauffeur'): ?>

                                                <a class="hidden xl:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" title="Chauffeur">

                                                    <div class="p-0.5 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="m20.772 10.155-1.368-4.104A2.995 2.995 0 0 0 16.559 4H7.441a2.995 2.995 0 0 0-2.845 2.051l-1.368 4.104A2 2 0 0 0 2 12v5c0 .738.404 1.376 1 1.723V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2.277A1.99 1.99 0 0 0 22 17v-5a2 2 0 0 0-1.228-1.845zM7.441 6h9.117c.431 0 .813.274.949.684L18.613 10H5.387l1.105-3.316A1 1 0 0 1 7.441 6zM5.5 16a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 5.5 16zm13 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 18.5 16z"></path></svg>

                                                    </div>

                                                </a>

                                            <?php elseif($service === 'Climatization'): ?>

                                                <a class="hidden xl:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" title="Climatization">
                                                   
                                                    <div class="p-0.5 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M16.5 8c0 1.5-.5 3.5-2.9 4.3.7-1.7.8-3.4.3-5-.7-2.1-3-3.7-4.6-4.6-.4-.3-1.1.1-1 .7 0 1.1-.3 2.7-2 4.4C4.1 10 3 12.3 3 14.5 3 17.4 5 21 9 21c-4-4-1-7.5-1-7.5.8 5.9 5 7.5 7 7.5 1.7 0 5-1.2 5-6.4 0-3.1-1.3-5.5-2.4-6.9-.3-.5-1-.2-1.1.3"></path></svg>

                                                    </div>

                                                </a>

                                            <?php elseif($service === 'Furniture'): ?>

                                                <a class="hidden xl:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" title="Furniture">

                                                    <div class="p-0.5 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M19 13V4c0-1.103-.897-2-2-2H7c-1.103 0-2 .897-2 2v9a1 1 0 0 0-1 1v8h2v-5h12v5h2v-8a1 1 0 0 0-1-1zm-2-9v9h-2V4h2zm-4 0v9h-2V4h2zM7 4h2v9H7V4z"></path></svg>

                                                    </div>

                                                </a>

                                            <?php elseif($service === 'Open Bar & Snacks'): ?>

                                                <a class="hidden xl:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" title="Open Bar & Snacks">

                                                    <div class="p-0.5 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.832 4.555A1 1 0 0 0 20 3H4a1 1 0 0 0-.832 1.554L11 16.303V20H8v2h8v-2h-3v-3.697l7.832-11.748zm-2.7.445-2 3H7.868l-2-3h12.264z"></path></svg>

                                                    </div>

                                                </a>

                                            <?php elseif($service === 'Parking'): ?>

                                                <a class="hidden xl:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" title="Parking">

                                                    <div class="p-0.5 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M13.5 3H5v18h4v-5h4.5c3.584 0 6.5-2.916 6.5-6.5S17.084 3 13.5 3zm0 9H9V7h4.5C14.879 7 16 8.121 16 9.5S14.879 12 13.5 12z"></path></svg>

                                                    </div>

                                                </a>

                                            <?php elseif($service === 'Television'): ?>

                                                <a class="hidden xl:inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" title="Television">

                                                    <div class="p-0.5 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 9c-1.626 0-3 1.374-3 3s1.374 3 3 3 3-1.374 3-3-1.374-3-3-3z"></path><path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zm-8 12c-2.71 0-5-2.29-5-5s2.29-5 5-5 5 2.29 5 5-2.29 5-5 5z"></path></svg>
                                                    
                                                    </div>
                                                
                                                </a>
    
                                            <?php endif; ?>  
                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                
                                <?php endif; ?>

                            </td>
                            
                            <td class="px-6 py-4">

                                <?php if($reserve->state === 'Approved'): ?>
                                  
                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        
                                        <span aria-hidden="true" class="absolute inset-0 bg-green-200 rounded-full opacity-50"></span>
                                        <span class="relative">

                                            <?php echo e($reserve->state); ?>


                                        </span>

                                    </span>

                                <?php elseif($reserve->state === 'Rejected'): ?>

                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-red-900">
                                        
                                        <span aria-hidden="true" class="absolute inset-0 bg-red-200 rounded-full opacity-50"></span>
                                        <span class="relative">
                                            <?php echo e($reserve->state); ?>

                                        </span>

                                    </span>

                                <?php elseif($reserve->state === 'Scheduled'): ?>

                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-orange-900">
                                        
                                        <span aria-hidden="true" class="absolute inset-0 bg-orange-200 rounded-full opacity-50"></span>
                                        <span class="relative">

                                            <?php echo e($reserve->state); ?>


                                        </span>

                                    </span>

                                <?php elseif($reserve->state === 'Cancelled'): ?>

                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-gray-900">
                                        
                                        <span aria-hidden="true" class="absolute inset-0 bg-gray-200 rounded-full opacity-50"></span>
                                        <span class="relative">
                                            
                                            <?php echo e($reserve->state); ?>


                                        </span>

                                    </span>

                                <?php elseif($reserve->state === 'Requested'): ?>
                                    
                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-purple-900">
                                        
                                        <span aria-hidden="true" class="absolute inset-0 bg-purple-200 rounded-full opacity-50"></span>
                                        <span class="relative">

                                            <?php echo e($reserve->state); ?>


                                        </span>

                                    </span>

                                <?php endif; ?>

                            </td>

                            <td class="px-6 py-4">

                                <a href="<?php echo e(route('reserves.show', $reserve->id)); ?>" class="text-danger text-primary-700 bg-transparent hover:bg-blue-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Show</a>
                                <a href="<?php echo e(route('reserves.edit', $reserve->id)); ?>" class="text-danger text-primary-700 bg-transparent hover:bg-yellow-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Edit</a>

                                

                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>

        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6">

            <?php if($hasPreviousPage): ?>
                <a href="<?php echo e($reserves->previousPageUrl()); ?>" class="flex items-center px-5 py-2 text-sm text-white-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-white-100 dark:bg-white-900 dark:text-white-200 dark:border-white-700 dark:hover:bg-white-800 overflow-hidden rounded-lg border border-white-200 shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    <span> previous </span>
                </a>
            <?php endif; ?>

            <?php if($reserves->hasPages()): ?>
                <?php if($hasNextPage): ?>
                    <a type="hidden" class="flex items-center px-5 py-2 capitalize transition-colors duration-200"></a>
                <?php endif; ?>

                <div class="items-center hidden md:flex gap-x-3">
                    <?php $__currentLoopData = $reserves->links()->elements[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($url); ?>" class="px-2 py-1 text-sm <?php echo e($reserves->currentPage() == $page ? 'text-blue-500 bg-blue-100/60' : 'text-white-500 hover:bg-white-100'); ?> rounded-md dark:hover:bg-gray-800 dark:text-white-300 rounded-lg border border-white-200 shadow-md"><?php echo e($page); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php if($hasPreviousPage): ?>
                    <a type="hidden" class="flex items-center px-5 py-2 capitalize transition-colors duration-200"></a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if($hasNextPage): ?>
                <a href="<?php echo e($reserves->nextPageUrl()); ?>" class="flex items-center px-5 py-2 text-sm text-white-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 overflow-hidden rounded-lg border border-gray-200 shadow-md">
                    <span> Next </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            <?php endif; ?>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Reservation-System\resources\views/reserves/index.blade.php ENDPATH**/ ?>