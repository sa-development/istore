
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/style.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/tables.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/custom.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/menu.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/jquery.datepick.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>css/thickbox.css">

<script type="text/javascript">
	var jsSiteUrl = '<?php echo base_url(); ?>';
</script>

<script type="text/javascript" src="<?php echo asset_url(); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/jquery.datepick.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/superfish.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/supersubs.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/thickbox-compressed.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/ezpz_tooltip.min.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/shortcutslibrary.js"></script>
<script type="text/javascript" src="<?php echo asset_url(); ?>js/shortcuts.js"></script>

</head>
<body>
<div id="container">
	
	<div id="content">
		<div id="sidebar">
			<?php if (isset($page_sidebar)) echo $page_sidebar; ?>
		</div>
		<div id="main">
			<div id="main-title">
				<?php if (isset($page_title)) echo $page_title; ?>
			</div>
			<div id="main-links">
				<?php if (isset($nav_links)) {
					echo "<ul id=\"main-links-nav\">";
					foreach ($nav_links as $link => $title) {
						if ($title == "Print Preview")
							echo "<li>" . anchor_popup($link, $title, array('title' => $title, 'class' => 'nav-links-item', 'style' => 'background-image:url(\'' . asset_url() . 'images/buttons/navlink.png\');', 'width' => '1024')) . "</li>";
						else
							echo "<li>" . anchor($link, $title, array('title' => $title, 'class' => 'nav-links-item', 'style' => 'background-image:url(\'' . asset_url() . 'images/buttons/navlink.png\');')) . "</li>";
					}
					echo "</ul>";
				} ?>
			</div>
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
</div>
