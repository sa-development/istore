<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul>    
            <li><?php echo $this->Html->link(__('All Department'), array('action' => 'department', 'controller' => 'pricebooks')); ?></li>
			<li><?php echo $this->Html->link(__('All PLUS'), array('action' => 'plu', 'controller' => 'pricebooks')); ?></li>
			<li><?php echo $this->Html->link(__('All Categories'), array('action' => 'categories', 'controller' => 'pricebooks')); ?></li>
			<li><?php echo $this->Html->link(__('All Product Codes'), array('action' => 'procodes', 'controller' => 'pricebooks')); ?></li>
			<li>..........................</li> 
			<li><?php echo $this->Html->link(__('Back to station'), array( 'controller' => 'stations', 'action' => 'index')); ?></li>                        
			<li><?php echo $this->Html->link(__('Back to Dashboard'), array('controller' => 'dashboards', 'action' => 'index')); ?></li>
		</ul>
	</div>