<?php $this->Html->css('individual_view', array('inline'=>false)); ?>
<!DOCTYPE html>
<html>

<body>
	<?php $path = 'images/'.$topic['Content']['path']; ?>
	<div class='view_container'>
		<br/>
		<div class='individual_view'>
		<?php echo $this->HTML->image($path, array('alt'=>$topic['Content']['path'])); ?><br/><br/>

		<p><?php echo $topic['Content']['comment']; ?></p><p>On:<?php echo $topic['Content']['created']; ?></p><p>By: <?php echo $topic['User']['full_name']; ?></p></div>
	</div>
</body>
</html>