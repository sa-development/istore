<div class="dashbard index">
                        <div class="main-dashboard-icon">
                            <ul>
                                <?php /*?><li><a href="<?php echo $this->Html->url(array('controller' => 'dashboards', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('home.png'); ?>
                                </div><div class="action-name">Home</div></a></li><?php */?>
                                
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'employees', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('emplyees.png'); ?>
                                </div><div class="action-name">Employees</div></a></li>
                                
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'corporations', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('co-operation.png'); ?>
                                </div><div class="action-name">Corporations</div></a></li>
                                
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'stores', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('setting.png'); ?>
                                </div><div class="action-name">Stores</div></a></li>
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'stations', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('gas-station.png'); ?>
                                </div><div class="action-name">Stations</div></a></li>
                            
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'pricebooks', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('price-book.png'); ?>
                                </div><div class="action-name">Pricebook</div></a></li>
                                </ul>
                                <ul>
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'accountings', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('accounting.png'); ?>
                                </div><div class="action-name">Accounting</div></a></li>
                                
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'competitors', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('competion.png'); ?>
                                </div><div class="action-name">Competitors</div></a></li>
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'reports', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('report.png'); ?>
                                </div><div class="action-name">Reports</div></a></li>
                                
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'uploadinvoices', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('uploadinvoice.png'); ?>
                                </div><div class="action-name">Upload Invoice</div></a></li>
                            
                                <li><a href=""><div class="main-icons">
                                <?php echo $this->Html->image('roll.png'); ?>
                                </div><div class="action-name">Roll </div></a></li>
                                </ul>
                                <ul>
                                <li><a href=""><div class="main-icons">
                                <?php echo $this->Html->image('help.png'); ?>
                                </div><div class="action-name">Help</div></a></li>
                                
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'vendors', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('feedback.png'); ?>
                                </div><div class="action-name">Vendors</div></a></li>
                            
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'inventories', 'action' => 'index'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('inventory.png'); ?></div><div class="action-name">Inventory</div></a></li>
                                <li><a href=""><div class="main-icons">
                                <?php echo $this->Html->image('download.png'); ?>
                                </div><div class="action-name">Download</div></a></li>
                                <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout'));?>"><div class="main-icons">
                                <?php echo $this->Html->image('logout.png'); ?>
                                </div><div class="action-name">Logout</div></a></li>
                            </ul>
                    </div>
                    </div>

<div class="actions">
    <h3><?php echo __('Stations'); ?></h3>
    <ul>
        <?php foreach($stationList as $id => $statioName) { ?>
        <li><?php echo $this->Html->link(__($statioName), array('controller' => 'stations', 'action' => 'index', $id)); ?> </li>
        <?php } ?>
    </ul>
</div>


