<!--
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
    <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>
-->
<div  align='center' class="users form">
<?php
echo $this->Form->create('User', array('action' => 'login'));
echo '<H4><strong>Welcome to istoreoffice application. </strong></H4>';
echo $this->Form->inputs(array(
'legend' => __('Login'),
'username',
'password'
));
echo $this->Form->end('    Login    ');?>
</div>