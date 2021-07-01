
<?php $__env->startSection('content'); ?>

<style type="text/css">
	.container-fluid
	{
		margin-top: 100px;
		width: 1400px;
	}
	.text{
		text-align: center;
	}
</style>
<?php if(session('message')): ?>

<p class="alert alert-success text-center">
  <?php echo e(session('message')); ?>

</p>

<?php endif; ?>


<div class="container-fluid">
	<h1 class="text">All Registered Users</h1>
	<div class="row">

<table class="table table-bordered table-dark">
	
  <thead>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Description</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($data->id); ?></td>
      <td><?php echo e($data->name); ?></td>
      <td><?php echo e($data->email); ?></td>
      <td><?php echo e($data->description); ?></td>
  
      <td><?php echo e($data->contact); ?></td>
      <td><?php echo e($data->address); ?></td>
      <td>
            <a class="btn btn-info"  href="<?php echo e(url('cardshow/' .$data->id)); ?>">show </a>
            <a class="btn btn-primary" href="<?php echo e(url('cardedit/'.$data->id)); ?>">Edit </a>
            <a class="btn btn-warning" href="<?php echo e(url('carddel/' .$data->id)); ?>">Delete </a>

        </td>
    </tr>
  </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('card_page.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Divya Jain\Desktop\card management project\resources\views/card_page/dashboard.blade.php ENDPATH**/ ?>