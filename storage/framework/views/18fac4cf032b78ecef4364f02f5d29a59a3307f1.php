

<?php $__env->startSection('title','cardmanagementsystem'); ?>
<?php $__env->startSection('content'); ?>
	<style type="text/css">
        body
{
 background-image: url('https://i.pinimg.com/736x/57/f7/52/57f752ab2ab95b062113a212182406d8.jpg');
}

.form {
    padding: 30px 40px;
}
.button{
	display: block;
    font-family: inherit;
    background-color: #99bfba;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    padding: 10px;
    margin-top: 1rem;
    width: 100%;
	}
    .log{
    display: block;
    font-family: inherit;
    background-color: #4b5151;;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-size: 16px;
    padding: 10px;
    margin-top: 1rem;
    width:98%;
    text-align: center;
    }
	.header {
    border-bottom: 1px solid #f0f0f0;
    background-color: #4b5151;;
    padding: 20px 40px;
}
.container {
    top: 50px;
    background-color: #fff;
    border-radius: 5px;
    padding: 0;
    box-shadow: 0 0 10px rgb(53 38 138 / 20%);
    overflow: hidden;
    width: 400px;
    max-width: 100%;
}
.login-p {
    display: block;
    color: #fff;
    font-weight: 400;
    margin-top: 10px;
    margin-bottom: -10px;
    text-align: center;
}
.login-h2 {
    display: block;
    color: #fff;
    text-align: center;
}
.container {
    top: 50px;
    background-color: #fff;
    border-radius: 5px;
    padding: 0;
    box-shadow: 0 0 10px rgb(53 38 138 / 20%);
    overflow: hidden;
    width: 540px;
    max-width: 100%;
}
.form-control {
    box-shadow: none;
    padding: 17px;
    background: #fff;
    color: #484848;
    border: 1px solid #DDD;
    border-radius: 8px;
    font-size: 14px;
    height: 40px;
    line-height: 1.14285714;
    font-family: Inter,sans-serif;
    width: 430px;
    height: 18px;
}
.subbut{
    background-color: #4b5151;
    margin-left: 144px;
    color: #fff;
    border-radius: 23px;
    width: 118px;
    height: 45px;
}

.subbut:hover
{
    background-color: black;
}

	</style>
</head>
<body>
<?php if(session('message')): ?>

<p class="alert alert-success text-center">
  <?php echo e(session('message')); ?>

</p>

<?php endif; ?>


<div class="container" style="padding: 10px;padding-bottom: 20px; margin-top:40px;">
<div class="header">
<h2 class="login-h2">Card Management System</h2>
<p class="login-p">Update Card Details</p>
</div>
<form id="form" class="form" method="post" action="<?php echo e(url('cardupdate')); ?>">
	<?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
     <div class="form-group">
     <label class="log">Enter Name</label>  
    
     <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo e($data->name); ?>"> 

</div>
     <div class="form-group">
     <label class="log">Enter Email Id</label>  
    
     <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo e($data->email); ?>"> 

</div>
    <div class="form-group">
     <label class="log">Enter Description</label>  
    
     <input type="text" name="description" class="form-control" placeholder="Enter Description" value="<?php echo e($data->description); ?>"> 

</div>
    <div class="form-group">
     <label class="log">Enter Contact Number</label>  
    
     <input type="text" name="contact" class="form-control" placeholder="Enter Contact" value="<?php echo e($data->contact); ?>"> 

</div>
    <div class="form-group">
     <label class="log">Enter Address</label>  
    
     <input type="text" name="address" class="form-control" placeholder="Enter Address"value="<?php echo e($data->address); ?>"> 

</div>

<button type="submit" name="" class="subbut">Update</button><br><br>
    
    



</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('card_page.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Divya Jain\Desktop\card management project\resources\views/card_page/editcarddet.blade.php ENDPATH**/ ?>