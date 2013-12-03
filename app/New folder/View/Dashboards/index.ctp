<div class="dashbard index" style="font-size:10px">
    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
        <tbody><tr>
                <td valign="top" height="10" align="left"></td>
            </tr>
            <tr>
                <td valign="top" align="left"><div id="menu">
                        <ul>
							<li><a href="<?php echo $this->Html->url(array('controller' => 'employees', 'action' => 'index'));?>"><div align="center"><img src="img/emplyees.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Employees</div></a></li>
							
							<li><a href="<?php echo $this->Html->url(array('controller' => 'corporations', 'action' => 'index'));?>"><div align="center"><img src="img/co-operation.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Corporations</div></a></li>
							
							<li><a href="<?php echo $this->Html->url(array('controller' => 'stores', 'action' => 'index'));?>"><div align="center"><img src="img/setting.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Stores</div></a></li>
							
							<li><a href="<?php echo $this->Html->url(array('controller' => 'competitors', 'action' => 'index'));?>"><div align="center"><img src="img/competion.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Competitors</div></a></li>
                        </ul>
                    </div></td>
            </tr>
            <tr>
                <td valign="top" height="7" align="left"></td>
            </tr>
            <tr>
                <td valign="top" align="left"><div id="menu">
                        <ul>
							<li><a href="<?php echo $this->Html->url(array('controller' => 'stations', 'action' => 'index'));?>"><div align="center"><img src="img/gas-station.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Stations</div></a></li>
						
							<li><a href="<?php echo $this->Html->url(array('controller' => 'pricebooks', 'action' => 'index'));?>"><div align="center"><img src="img/price-book.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Pricebook</div></a></li>
							
							<li><a href="<?php echo $this->Html->url(array('controller' => 'accountings', 'action' => 'index'));?>"><div align="center"><img src="img/accounting.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Accounting</div></a></li>
							
							<li><a href="<?php echo $this->Html->url(array('controller' => 'dashboards', 'action' => 'index'));?>"><div align="center"><img src="img/home.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Home</div></a></li>
							
                        </ul>
                    </div></td>
            </tr>
            <tr>
                <td valign="top" height="7" align="left"></td>
            </tr>
            <tr>
                <td valign="top" align="left"><div id="menu">
                        <ul>
							<li><a href="<?php echo $this->Html->url(array('controller' => 'reports', 'action' => 'index'));?>"><div align="center"><img src="img/report.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Reports</div></a></li>
							
							<li><a href="<?php echo $this->Html->url(array('controller' => 'uploadinvoices', 'action' => 'index'));?>"><div align="center"><img src="img/uploadinvoice.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Upload Invoice</div></a></li>
						
                            <li><a href=""><div align="center"><img src="img/roll.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Roll </div></a></li>
                           
							<li><a href=""><div align="center"><img src="img/help.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Help</div></a></li>
                        </ul>
                    </div></td>
            </tr>
            <tr>
                <td valign="top" height="7" align="left"></td>
            </tr>
            <tr>
                <td valign="top" align="left"><div id="menu">
                        <ul>
							
							<li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout'));?>"><div align="center"><img src="img/logout.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Logout</div></a></li>
							
							<li><a href="<?php echo $this->Html->url(array('controller' => 'vendors', 'action' => 'index'));?>"><div align="center"><img src="img/feedback.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Vendors</div></a></li>
						
                            <li><a href="<?php echo $this->Html->url(array('controller' => 'inventories', 'action' => 'index'));?>"><div align="center"><img src="img/inventory.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Inventory</div></a></li>
                            <li><a href=""><div align="center"><img src="img/download.png"></div><div align="center" class="divpadding"  style="color:#FEFEFE">Download</div></a></li>

                        </ul>
                    </div></td>
            </tr>
            <tr>
                <td valign="top" height="7" align="left"></td>
            </tr>
        </tbody></table>
</div>

<div class="actions">
    <h3><?php echo __('Stations'); ?></h3>
    <ul>
        <?php foreach($stationList as $id => $statioName) { ?>
        <li><?php echo $this->Html->link(__($statioName), array('controller' => 'stations', 'action' => 'index', $id)); ?> </li>
        <?php } ?>
    </ul>
</div>


