

<?php $__env->startSection('content'); ?>

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
                            <a href="<?php echo e(route('services.create')); ?>" class="text-danger text-primary-700 bg-transparent hover:bg-green-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Create</a>
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 border-t border-gray-100">

                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       
                        <tr class="hover:bg-gray-50">

                            <th class="px-6 py-4 font-medium text-gray-900"><?php echo e($service->type); ?></th>
                            <td class="px-6 py-4"><?php echo e($service->capacity); ?></td>
                            <td class="px-6 py-4"><?php echo e($service->price); ?></td>
                            <td class="px-6 py-4"><?php echo e($service->description); ?></td>
                            <td class="flex justify-end gap-4 px-6 py-4 font-medium">

                                <a href="<?php echo e(route('services.show', $service->id)); ?>" class="text-danger text-primary-700 bg-transparent hover:bg-blue-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Show</a>
                                <a href="<?php echo e(route('services.edit', $service->id)); ?>" class="text-danger text-primary-700 bg-transparent hover:bg-yellow-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Edit</a>
                                
                                <form action="<?php echo e(route('services.destroy', $service->id)); ?>" method="POST" class="inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-danger text-primary-700 bg-transparent hover:bg-red-200 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600">Delete</button>
                                </form>
                                
                            </td>
                        
                        </tr>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>

            </table>

        </div>
    
        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6">

            <?php if($hasPreviousPage): ?>
        
                <a href="<?php echo e($services->previousPageUrl()); ?>" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 overflow-hidden rounded-lg border border-gray-200 shadow-md">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                     
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    
                    </svg>

                    <span> previous </span>
                
                </a>
            
            <?php endif; ?>

            <?php if($services->hasPages()): ?>
                
                <?php if($hasNextPage): ?>
                
                    <a type="hidden" class="flex items-center px-5 py-2 capitalize transition-colors duration-200"></a>

                <?php endif; ?>

                <div class="items-center hidden md:flex gap-x-3">

                    <?php $__currentLoopData = $services->links()->elements[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <a href="<?php echo e($url); ?>" class="px-2 py-1 text-sm <?php echo e($services->currentPage() == $page ? 'text-blue-500 bg-blue-100/60' : 'text-gray-500 hover:bg-gray-100'); ?> rounded-md dark:hover:bg-gray-800 dark:text-gray-300 rounded-lg border border-gray-200 shadow-md"><?php echo e($page); ?></a>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <?php if($hasPreviousPage): ?>

                    <a type="hidden" class="flex items-center px-5 py-2 capitalize transition-colors duration-200"></a>
                
                <?php endif; ?>
            
            <?php endif; ?>

            <?php if($hasNextPage): ?>

                <a href="<?php echo e($services->nextPageUrl()); ?>" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 overflow-hidden rounded-lg border border-gray-200 shadow-md">
                    
                    <span> Next </span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                        
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    
                    </svg>

                </a>

            <?php endif; ?>

        </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Reservation-System\resources\views/services/index.blade.php ENDPATH**/ ?>