<div class="departments index">
	<h2><?php echo __('Departments'); ?></h2>
    <!--<table cellpadding="0" cellspacing="0">
        <tr>
            <th><h2><?php echo __('Departments'); ?></h2></th>
            <th><?php echo $this->Html->link(__('Refresh From POS'), array('controller' => 'posrequesters', 'action' => 'add')); ?> </th>
        </tr>
    </table> -->
    
    <table cellpadding="0" cellspacing="0" class="grid">
        <tr>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('minAmt'); ?></th>
            <th><?php echo $this->Paginator->sort('maxAmt'); ?></th>
            <th><?php echo $this->Paginator->sort('isAllowFS'); ?></th>
            <th><?php echo $this->Paginator->sort('isNegative'); ?></th>
            <th><?php echo $this->Paginator->sort('isFuel'); ?></th>
            <th><?php echo $this->Paginator->sort('isAllowFQ'); ?></th>
            <th><?php echo $this->Paginator->sort('isAllowSD'); ?></th>
            <th><?php echo $this->Paginator->sort('isBL1'); ?></th>
            <th><?php echo $this->Paginator->sort('isBL2'); ?></th>
            <th><?php echo $this->Paginator->sort('isMoneyOrder'); ?></th>            
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($departments as $department):?>
            <tr>
                <td><?php echo h($department['Department']['name']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['minAmt']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['maxAmt']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['isAllowFS']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['isNegative']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['isFuel']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['isAllowFQ']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['isAllowSD']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['isBL1']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['isBL2']); ?>&nbsp;</td>
                <td><?php echo h($department['Department']['isMoneyOrder']); ?>&nbsp;</td>
                 <td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $department['Department']['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $department['Department']['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $department['Department']['id']), null, __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?>
            </td> 
        </tr>
	<?php endforeach; ?>
    </table>
    <p>
<?php
 echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
?>	</p>

            <div class="paging">
<?php
                echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                echo $this->Paginator->numbers(array('separator' => ''));
                echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
?>
            </div>
        </div>

<?php echo $this->element('station_action'); ?>

        <div class="actions">
            <h3><?php echo __('Department'); ?></h3>
                    <ul>
                        <li><?php echo $this->Html->link(__('Add New'), array('action' => 'add')); ?></li>
                        <li><?php echo $this->Html->link(__('View All'), array('action' => 'add')); ?></li>
    </ul>
</div>

