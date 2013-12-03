<div class="stations form">
    <?php echo $this->Form->create('Station', array('type' => 'get', 'url' => array('action' => 'posview', 'controller' => 'stations'))); ?>
    <fieldset>
        <legend><?php echo __('Select Station'); ?></legend>
        <?php
        echo $this->Form->input('station_id', array('name' => 'station'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
    </div>
<?php echo $this->element('pricebook_menu'); ?>
