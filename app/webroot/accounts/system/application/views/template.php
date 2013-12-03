<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/custom.css">

<?php
$domain = 'http://istoreoffice.net';

/* Dynamically adding css files from controllers */
if (isset($add_css))
{
	foreach ($add_css as $id => $row)
	{
		echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"" . asset_url() . $row ."\">";
	}
}
?>

<script type="text/javascript">
	var jsSiteUrl = '<?php echo base_url(); ?>';
</script>

<script type="text/javascript" src="<?php echo asset_url(); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/jquery.datepick.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/custom.js"></script>
<?php
/* Dynamically adding javascript files from controllers */
if (isset($add_javascript))
{
	foreach ($add_javascript as $id => $row)
	{
		echo "<script type=\"text/javascript\" src=\"" . asset_url() . $row ."\"></script>";
	}
}
?>



	
<div id="content-acc">
	<div id="main">
			<?php if (isset($nav_links)) {
				echo "<div id=\"main-links\">";
				echo "<table class=\"grid\">";
				echo "<tr>";
				echo "<td>";
				foreach ($nav_links as $link => $title) {
					
					if ($title == "Print Preview")
						echo anchor_popup($link, $title, array('title' => $title, 'class' => 'nav-links-item', 'style' => 'background-image:url(\'' . asset_url() . 'images/buttons/navlink.png\');', 'width' => '1024'));
					else
						echo anchor($link, $title, array('title' => $title, 'class' => 'nav-links-item', 'style' => 'background-image:url(\'' . asset_url() . 'images/buttons/navlink.png\');'));
				}
				
				echo "</td>";
				echo "</tr>";
				echo "</table>";
			}
?>			
			<div class="clear">
			</div>
			
		<div id="main-content">
			<?php
			$messages = $this->messages->get();
			if (is_array($messages))
			{
				if (count($messages['success']) > 0)
				{
					echo "<div id=\"success-box\">";
					echo "<ul>";
					foreach ($messages['success'] as $message) {
						echo ('<li>' . $message . '</li>');
					}
					echo "</ul>";
					echo "</div>";
				}
				if (count($messages['error']) > 0)
				{
					echo "<div id=\"error-box\">";
					echo "<ul>";
					foreach ($messages['error'] as $message) {
						if (substr($message, 0, 4) == "<li>")
							echo ($message);
						else
							echo ('<li>' . $message . '</li>');
					}
					echo "</ul>";
					echo "</div>";
				}
				if (count($messages['message']) > 0)
				{
					echo "<div id=\"message-box\">";
					echo "<ul>";
					foreach ($messages['message'] as $message) {
						echo ('<li>' . $message . '</li>');
					}
					echo "</ul>";
					echo "</div>";
				}
			}
			?>
			<?php echo $contents; ?>
		</div>
	</div>
</div>

