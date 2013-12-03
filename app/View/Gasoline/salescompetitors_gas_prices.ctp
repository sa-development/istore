<?php
//print_r($this->Session->read('Station'));
?>
<button class="btn blue" onclick="reload()" onmouseover="btnOver.over(this)" onmouseout="btnOver.out(this)">Refresh</button>
<button class="btn" onmouseover="btnOver.over(this)" onmouseout="btnOver.out(this)" onclick="btnOver.printScreen();">Print Version</button>
<button class="btn" onmouseover="btnOver.over(this)" onmouseout="btnOver.out(this)" onclick="printAsIs();">Convert To Excel</button>
 
<form id="CompetitorsGasPrices" name="CompetitorsGasPrices" method="post" action="/competitorsreport.php">
<input id="oPrintAsIsHtml" name="printAsIsHtml" type="hidden" value=""/>
</form>
 
<div class="vrubyrepttanks reports">
	<?php echo $this->element('stationinfo'); ?>
	<table cellpadding="0" cellspacing="0" class="grid">
    <tr>
      <td class="h_1">Name</td>
      <td class="h_1">Brand</td>
      <td class="h_1">Address</td>
	      <td class="h_1">Regular</td>
	      <td class="h_1">Plus</td>
	      <td class="h_1">Super</td>
	      <td class="h_1">Diesel</td>
 
      <td class="h_1">Date of Last Update</td>
      <td class="h_1">Time</td>
    </tr>
    
    <tr>
      <td colspan="2" style="text-align:left" align="left" class="h_2" onclick="GasReportOpen();" style="cursor: pointer;"
      	title="Click to open Gasoline Prices Management report"><?php echo $this->Session->read('Station.Station.name'); ?> :  
		<?php echo $this->Session->read('Station.Station.cash_register_brand'); ?>
		</td>
      <td align="right" class="h_2" nowrap><a href="#" onclick="mapOpen(2888); return false;">Competitors Map</a></td>
		<td align="right" class="h_2" nowrap></td>
<td align="right" class="h_2" nowrap></td>
<td align="right" class="h_2" nowrap></td>
<td align="right" class="h_2" nowrap></td>
	  <td align="right" class="h_2" nowrap>&nbsp;&nbsp;</td>
	  <td align="right" class="h_2" nowrap>&nbsp;</td>
    </tr>
 
		<td align="left" style="cursor:hand" onclick="window.open('/reports/Gasoline/Competitors/CompetitorsHistory.php?oSelectFilterByStation[]=&oSelectFilterByCompetitorCompetitor[]=&oSelectSubtotalByTags1=common,cp.fueltypeid','',strFeatures)" class="rep_row"></td>
		<td align="left" class="rep_row"></td>
		<td align="left" class="rep_row"></td>
		
		<td align="right" class="rep_row">&nbsp;</td>
		<td align="right" class="rep_row">&nbsp;</td>
		</tr>
 
 
</table>
</div>
</cron>
