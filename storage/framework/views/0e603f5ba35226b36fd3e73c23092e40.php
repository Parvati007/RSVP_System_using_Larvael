<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Your RSVP Invitations</h2>
                        <form method="POST" action="<?php echo e(route('guest.logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['type' => 'submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit']); ?>
                                <?php echo e(__('Log Out')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $attributes = $__attributesOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__attributesOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $component = $__componentOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__componentOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
                        </form>
                    </div>

                    <?php if($rsvps->isEmpty()): ?>
                        <p class="text-gray-600">You don't have any RSVP invitations at the moment.</p>
                    <?php else: ?>
                        <div class="space-y-6">
                            <?php $__currentLoopData = $rsvps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rsvp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="border rounded-lg p-6">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <h3 class="text-lg font-semibold"><?php echo e($rsvp->event->title); ?></h3>
                                            <p class="text-gray-600"><?php echo e($rsvp->event->description); ?></p>
                                            <p class="text-sm text-gray-500 mt-2">
                                                <strong>Date:</strong> <?php echo e($rsvp->event->start_date->format('F j, Y')); ?>

                                            </p>
                                            <p class="text-sm text-gray-500">
                                                <strong>Location:</strong> <?php echo e($rsvp->event->location); ?>

                                            </p>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <form method="POST" action="<?php echo e(route('guest.rsvp.update', $rsvp)); ?>" class="inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <select name="status" onchange="this.form.submit()" 
                                                    class="text-sm border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm
                                                    <?php if($rsvp->status === 'accepted'): ?> bg-green-100 text-green-800
                                                    <?php elseif($rsvp->status === 'declined'): ?> bg-red-100 text-red-800
                                                    <?php elseif($rsvp->status === 'maybe'): ?> bg-yellow-100 text-yellow-800
                                                    <?php else: ?> bg-gray-100 text-gray-800 <?php endif; ?>">
                                                    <option value="pending" <?php echo e($rsvp->status === 'pending' ? 'selected' : ''); ?>>Pending</option>
                                                    <option value="accepted" <?php echo e($rsvp->status === 'accepted' ? 'selected' : ''); ?>>Accept</option>
                                                    <option value="declined" <?php echo e($rsvp->status === 'declined' ? 'selected' : ''); ?>>Decline</option>
                                                    <option value="maybe" <?php echo e($rsvp->status === 'maybe' ? 'selected' : ''); ?>>Maybe Later</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?> <?php /**PATH C:\Users\parva\Dropbox\PC\Downloads\event-management-system-with-RSVP-tracking-main\event-management-system-with-RSVP-tracking-main\resources\views/guest/dashboard.blade.php ENDPATH**/ ?>