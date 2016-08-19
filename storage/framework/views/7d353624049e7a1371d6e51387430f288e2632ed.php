<?php $__env->startSection('content'); ?>

<h3>All Available Aliens</h3>
<table align="center" >
	 
	<th>Country</th>
	<th>City</th>
	<th>Date</th>
	<th>Number Of Aliens</th>
	<th>Color of Alien</th>
	<?php foreach($record as $key=> $record): ?>
	<tr>
		
			<td><?php echo e($record->country); ?></td>
			<td><?php echo e($record->city); ?></td>
			<td><?php echo e($record->date); ?></td>
			<td><?php echo e($record->no_of_aliens); ?></td>
			<td><?php echo e($record->color_of_aliens); ?></td>
	    
	</tr> 
	<?php endforeach; ?>
</table>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>