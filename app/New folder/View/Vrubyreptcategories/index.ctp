<div class="vrubyreptcategories index">
    <h2><?php echo __('Vrubyreptcategories'); ?></h2>
    <table cellpadding="0" cellspacing="0" class="grid">
        <tr>

            <th><?php echo $this->Paginator->sort('periodType'); ?></th>
            <th><?php echo $this->Paginator->sort('periodBeginDate'); ?></th>
            <th><?php echo $this->Paginator->sort('periodEndDate'); ?></th>
            <th><?php echo $this->Paginator->sort('totalitemCount'); ?></th>
            <th><?php echo $this->Paginator->sort('totalitemnetSales'); ?></th>
            <th><?php echo $this->Paginator->sort('totalpercentOfSales'); ?></th>
            
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('salePrice'); ?></th>
            <th><?php echo $this->Paginator->sort('originalPrice'); ?></th>
            <th><?php echo $this->Paginator->sort('netsalecount'); ?></th>
            <th><?php echo $this->Paginator->sort('netsaleamount'); ?></th>
            <th><?php echo $this->Paginator->sort('netsaleitemCount'); ?></th>
            <th><?php echo $this->Paginator->sort('percentOfSales'); ?></th>
            <th><?php echo $this->Paginator->sort('station_id'); ?></th>

            
        </tr>
        <?php foreach ($vrubyreptcategories as $vrubyreptcategory): ?>
            <tr>

                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodType']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodBeginDate']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['periodEndDate']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalitemCount']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalitemnetSales']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['totalpercentOfSales']); ?>&nbsp;</td>
              
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['name']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['salePrice']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['originalPrice']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsalecount']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsaleamount']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['netsaleitemCount']); ?>&nbsp;</td>
                <td><?php echo h($vrubyreptcategory['Vrubyreptcategory']['percentOfSales']); ?>&nbsp;</td>
                <td>
                <?php echo $this->Html->link($vrubyreptcategory['Station']['name'], array('controller' => 'stations', 'action' => 'view', $vrubyreptcategory['Station']['id'])); ?>
            </td>

           
        </tr>
        <?php endforeach; ?>
            </table>
            <p>
        <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
        ?>	</p>

            <div class="paging">
        <?php
                echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                echo $this->Paginator->numbers(array('separator' => ''));
                echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
            </div>
        </div>
<?php echo $this->element('station_report'); ?>

