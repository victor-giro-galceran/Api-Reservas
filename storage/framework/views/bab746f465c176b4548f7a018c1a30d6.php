

<?php $__env->startSection('content'); ?>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <div class="max-w-2xl overflow-hidden bg-white shadow sm:rounded-lg mx-auto">

            <div class="flex justify-between mb-4 rounded-t sm:mb-5">

                <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                
                    <div class="px-4 py-5 sm:px-6">
                
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Service Properties
                        </h3>
                
                        <p class="max-w-2xl mt-1 text-sm text-gray-500">
                            Details and informations about the service.
                        </p>
                
                    </div>
                
                </div>
                
                <div>
                    
                    <a type="button" href="<?php echo e(route('services.index')); ?>" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readProductModal">
                    
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    
                    </a>
                
                </div>

            </div>

            <div class="max-w-2xl overflow-hidden bg-white shadow sm:rounded-lg">

                <div class="border-t border-gray-200">

                    <dl>
                    
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            
                            <dt class="text-sm font-medium text-gray-500">
                                Type
                            </dt>
                            
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($service->type); ?>

                            </dd>
                            
                        </div>
                    
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            
                            <dt class="text-sm font-medium text-gray-500">
                                Capacity
                            </dt>
                            
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($service->capacity); ?>

                            </dd>
                        
                        </div>
                    
                        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        
                            <dt class="text-sm font-medium text-gray-500">
                                Price
                            </dt>
                        
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($service->price); ?> €
                            </dd>
                        
                        </div>
                    
                        <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        
                            <dt class="text-sm font-medium text-gray-500">
                                Description
                            </dt>
                        
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <?php echo e($service->description); ?>

                            </dd>
                        
                        </div>
                    
                    </dl>
                
                </div>
          
            </div>
        
        </div>
    
    </div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Reservation-System\resources\views/services/show.blade.php ENDPATH**/ ?>