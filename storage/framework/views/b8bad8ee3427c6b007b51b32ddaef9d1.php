

<?php $__env->startSection('content'); ?>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <div class="max-w-2xl overflow-hidden bg-white shadow sm:rounded-lg mx-auto">

            <div class="flex justify-between mb-4 rounded-t sm:mb-5">

                <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                
                    <div class="px-4 py-5 sm:px-6">
                
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Reserve Properties
                        </h3>
                
                        <p class="max-w-2xl mt-1 text-sm text-gray-500">
                            Details and informations about the reserve.
                        </p>
                
                    </div>
                
                </div>
                
                <div>
                    
                    <a type="button" href="<?php echo e(route('reserves.index')); ?>" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readProductModal">
                    
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    
                    </a>
                
                </div>

            </div>

            <div class="max-w-2xl overflow-hidden bg-white shadow sm:rounded-lg">

                <div class="border-t border-gray-200">

                    <dl>
                    
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            
                            <dt class="text-sm font-medium text-gray-500">
                                Name
                            </dt>
                            
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($reserve->name); ?>

                            </dd>
                        
                        </div>
                    
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        
                            <dt class="text-sm font-medium text-gray-500">
                                Surname
                            </dt>
                        
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($reserve->surname); ?>

                            </dd>
                        
                        </div>
                    
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            
                            <dt class="text-sm font-medium text-gray-500">
                                Email
                            </dt>
                            
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($reserve->email); ?>

                            </dd>
                            
                        </div>
                    
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            
                            <dt class="text-sm font-medium text-gray-500">
                                Phone
                            </dt>
                            
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($reserve->phone); ?>

                            </dd>
                        
                        </div>
                    
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            
                            <dt class="text-sm font-medium text-gray-500">
                                Date
                            </dt>
                            
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($reserve->date); ?>

                            </dd>
                        
                        </div>
                    
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            
                            <dt class="text-sm font-medium text-gray-500">
                                Zone
                            </dt>
                            
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($reserve->zone); ?>

                            </dd>
                        
                        </div>
                    
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        
                            <dt class="text-sm font-medium text-gray-500">
                                Services
                            </dt>
                        
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php
                                $services = json_decode($reserve->services, true); // Decode the services JSON string into an array
                            ?>
                            <?php if(is_array($services)): ?> <!-- Make sure $services is an array before iterating -->
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($service); ?>

                                    <?php if(!$loop->last): ?>
                                        <br> <!-- Add a comma separator between services, except for the last one -->
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </dd>
                        
                        </div>
                    
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        
                            <dt class="text-sm font-medium text-gray-500">
                                State
                            </dt>
                        
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

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

                            </dd>
                        
                        </div>
                    
                    </dl>
                
                </div>
          
            </div>
        
        </div>
    
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Reservation-System\resources\views/reserves/show.blade.php ENDPATH**/ ?>