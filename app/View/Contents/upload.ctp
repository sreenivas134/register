<?php 
	$this->HTML->css('index', array('inline'=>false));
?>

<!DOCTYPE html>
<html>
<head>
<?php echo $this->fetch('css'); ?>
</head>

<body>

<div class='upload_pic'>
<?php

	echo $this->Form->create('Content', array('enctype'=>'multipart/form-data','type'=>'file'));
	echo $this->Form->input('path', array('type'=>'file', 'label'=>'Upload a Pic!'));
	echo $this->Form->input('comment');
	echo $this->Form->end('Upload');

?>
</div>
</body>
</html>