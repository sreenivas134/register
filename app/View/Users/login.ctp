<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Login!');
echo $this->HTML->link('Register', array('controller'=>'Users', 'action'=>'add'));

?>