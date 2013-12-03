<div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
        <ul> 
            <li><?php echo $this->Html->link(__('Add Categories'), array('action' => 'categories', 'controller' => 'pricebooks')); ?></li>		
            <li><?php echo $this->Html->link(__('Add Department'), array('action' => 'department', 'controller' => 'pricebooks')); ?></li>
			<li><?php echo $this->Html->link(__('Add Items'), array('action' => 'plu', 'controller' => 'pricebooks')); ?></li>
			<li><?php echo $this->Html->link(__('Add Product Codes'), array('action' => 'procodes', 'controller' => 'pricebooks')); ?></li>
			<li><?php echo $this->Html->link(__('Add Promotions'), array('action' => 'promotions', 'controller' => 'pricebooks')); ?></li>
			<li><?php echo $this->Html->link(__('Price Book Wizard'), array('action' => 'pricebwiz', 'controller' => 'pricebooks')); ?></li>
			
			<li>..........................</li> 
			<li><?php echo $this->Html->link(__('Back to station'), array( 'controller' => 'stations', 'action' => 'index')); ?></li>                        
			<li><?php echo $this->Html->link(__('Back to Dashboard'), array('controller' => 'dashboards', 'action' => 'index')); ?></li>
		</ul>
	</div>