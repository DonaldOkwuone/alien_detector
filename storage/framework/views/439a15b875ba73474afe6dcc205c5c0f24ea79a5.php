<?php $__env->startSection('content'); ?>

 


<h3>Report New Alien</h3>

<div>
  <form action="<?php echo e(url('/info')); ?>" method="POST">
  	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <label for="country">Country</label>
    <input type="text" id="country" name="country">

    <label for="city">City</label>
    <input type="text" id="city" name="city">

    <label for="date">Date</label>
    <input type="text" id="date" name="date">

    <label for="no_of_aliens">No of Aliens</label>
    <input type="text" id="no_of_aliens" name="no_of_aliens">



    <label for="color">Color of Alien</label>
    <select id="color" name="color_of_aliens">
      <option value="red">Red</option>
      <option value="blue">Blue</option>
      <option value="green">Green</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>