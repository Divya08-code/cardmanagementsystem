
<?php $__env->startSection('title','cardmanagementsystem'); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">
	.box
	{

		border:4   px;
		box-shadow: 0 5px 20px;	
		width: 700px;

	}
	.card
	{
		width: 700px; 
		background: #c5c5b8; 
		margin-top: 12px;

	}
	.user
	{
		text-align: center; 
		color: #615e57;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
		<div class="card box card">
			<div class="card-body">
			
			<h3 class="user"> User Details</h3>
			<br><br>
			<label>NAME:&nbsp;&nbsp;&nbsp;<?php echo e($data->name); ?></label><br><br>
			EMAIL ID:&nbsp;&nbsp;&nbsp;<?php echo e($data->email); ?><br><br>
			DESCRIPTION:&nbsp;&nbsp;&nbsp;<?php echo e($data->description); ?><br><br>
			CONTACT:&nbsp;&nbsp;&nbsp;<?php echo e($data->contact); ?><br><br>
			ADDRESS:&nbsp;&nbsp;&nbsp;<?php echo e($data->address); ?><br><br>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('card_page.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Divya Jain\Desktop\card management project\resources\views/card_page/showcard.blade.php ENDPATH**/ ?>