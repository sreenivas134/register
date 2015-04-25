<?php 
	$this->HTML->css('index', array('inline'=>false));
	$title = 'Register.com'
?>

<!DOCTYPE html>
<html>
	<head>
	<?php echo $this->fetch('css'); ?>
	<?php $this->set('picRegister.com', Inflector::humanize($this->name)); ?>
	</head>
	<body>
	<h1>PicRegister</h1>
	<p class='user_wish'>Welcome <a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'view', AuthComponent::user('id')));?>"><?php echo AuthComponent::user('full_name'); ?>!</a></p><br/><br/>

	<div class='select_pic'>


		<a href="<?php echo $this->Html->url(array('controller'=>'Contents','action'=>'upload'));?>" 
		class = 'button-primery'>Submit a Pic!</a>

		<?php if(AuthComponent::user()) { ?>
			<a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'logout'));?>" 
			class = 'button-primery'>Logout!</a>
		<?php } else{ ?>
			<a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'login'));?>" 
			class = 'button-primery'>Login!</a>
			<a href="<?php echo $this->Html->url(array('controller'=>'Users','action'=>'add'));?>" 
			class = 'button-primery'>Register</a>

		<?php } ?>

	</div><br/>
	<div class='view_images'>
		<ul>
		<?php foreach($topics as $topic){
			$path = 'images/'.$topic['Content']['path'];
			?>

			<li class='content_view'>
			<a href="<?php echo $this->Html->url(array('controller'=>'Contents','action'=>'view', $topic['Content']['id']));?>">
			<?php echo $this->HTML->image($path); ?></a><br/><p><?php echo $topic['Content']['comment']; ?></p><p>On:<?php echo $topic['Content']['created']; ?></p><p>By: <?php echo $topic['User']['full_name']; ?></p></li>

		<?php } ?>
		</ul>
	</div>
	</body>
</html>