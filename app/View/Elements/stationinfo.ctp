<strong>
	<table cellpadding="2" cellspacing="2" class="grid" align='left'>
		<tr>
			<td style="text-align:left"><strong>Station: <?php echo $this->Session->read('Station.Station.name'); ?></strong></td>
			<td style="text-align:left" ><strong>City: <?php echo $this->Session->read('Station.Station.city'); ?></strong></td>
		</tr>
		<tr>
			<td style="text-align:left"><strong>State: <?php echo $this->Session->read('Station.State.default_name'); ?></strong></td>
			<td style="text-align:left"><strong>Country: <?php echo $this->Session->read('Station.Country.name'); ?></strong></td>
		</tr>
	</table>
</strong>
