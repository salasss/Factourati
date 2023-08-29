<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 text-gray-900">
                     <?php echo e(__("La liste des clients")); ?>

                 </div>
             </div>
         </div>
     </div>
     <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

                    <div class="container">
                        <a href="/Clients/ajouter"  class="btn btn-success"  >Ajouter un Client +</a>

                        <div class="row g-3 align-items-center" >
                            <div class="col-auto"></div>
                        </div>
                        <div class="row">
                            <?php if($message = Session::get('success')): ?>
                            <div class="alert alert-success" role="alert">
                              <?php echo e($message); ?>

                            </div>
                           <?php endif; ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Telephone</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Entreprise</th>
                                        <th scope="col">Compte</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <?php if(isset($data)): ?>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                        ?>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e($no++); ?></th>
                                                <td><?php echo e($row->nom); ?></td>
                                                <td><?php echo e($row->telephone); ?></td>
                                                <td><?php echo e($row->adresse); ?></td>
                                                <td><?php echo e($row->entreprise); ?></td>
                                                <td><?php echo e($row->montant_compte); ?></td>
                                                <td>
                                                    <a  href="/Afficherdata/<?php echo e($row -> id); ?>"  class="btn btn-secondary">Modifier</a>
                                                    <a href="/delete/<?php echo e($row -> id); ?>" class="btn btn-danger">Supprimer</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                            </table>
                                <?php endif; ?>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                </div>
            </div>
        </div>
     </div>
  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\LaravelApp\Proj\proj\resources\views/Clients.blade.php ENDPATH**/ ?>