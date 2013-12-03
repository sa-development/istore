<div  align='center' class="users form">
<div class="head-bg"></div>
<div class="overlay"></div>
<?php
echo $this->Form->create('User', array('action' => 'login'));
echo '<H4><strong>Welcome to istoreoffice application. </strong></H4>';
echo $this->Form->inputs(array(
'legend' => __('Login'),
'username',
'password'
));
echo $this->Form->end('    Login    ');?>
<div class="footer-bg"></div>
</div>