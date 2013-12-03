<tr>
	<td>&nbsp;</td>
	<td width="927">
		<div style=" margin-top:34px; margin-bottom:30px;">
			<div style="float:left;"><img src="img/istore-offc-logo.jpg" width="222" height="46" /></div>
			<div  style="float:right; margin-top:19px;" class="nav">
				<a href="site/home" style="padding:0 10px;">Home</a>
				<a href="#" style="padding:0 10px;">Solutions & Services</a>
				<a href="#" style="padding:0 10px;">Products</a>
				<a href="#" style="padding:0 10px;">Support Company</a>
				<a href="site/contactus" style="padding:0 10px;">Contact Us</a>
				<?php 
				$userInfo = $this->Session->read('Auth.User');
				if (isset($userInfo['id']) && $userInfo['id'] > 0) { ?>
					<a href="dashboards/index" style="padding:0 10px;">Manage store</a>
				<?php } else {  ?>
					<a href='users/login'>Login</a>
				<?php }?>	
				
			</div>
		</div></td>
	<td>&nbsp;</td>
</tr>

