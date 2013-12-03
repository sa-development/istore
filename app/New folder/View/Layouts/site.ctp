<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('site');

        echo $scripts_for_layout;
        ?>
        <title>HOME</title>
    </head>

    <body style="margin:0;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:0; padding:0;">
            <tr>
                <td style="background-image:url(istore%20office/images/grey-bg.jpg); background-repeat:repeat-x; height:41px;">&nbsp;</td>
            </tr>

            <tr>
                <td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<?php echo $this->element('site_menu');?>
						<?php echo $content_for_layout;   ?>
					</table>
				</td>
            </tr>
            <tr>
                <td style="background-image:url(images/bottom-bg.jpg); background-repeat:repeat-x; height:42px;">&nbsp;</td>
            </tr>
        </table>
    </body>
</html>
