<div class="reports form">
    <?php echo $this->Form->create('Report', array('type' => 'GET')); ?>
    <fieldset>
        <legend><?php echo __('Select Station '); ?></legend>
        <?php echo $this->Form->input('station', array('empty' => 'Select Station', 'selected' => $station_id)); ?>

        <?php echo $this->Form->end(); ?>

        <?php if($station_id): ?>
        <div id="wrapper">
			<H1>Select report type</H1>
		</div>
        </div>
        <?php endif; ?>
    </fieldset>
</div>

<?php echo $this->element('station_report'); ?>


<script type="text/javascript">
    $(document).ready(function() {

        $("#ReportStation").change(function(){
            $('#ReportIndexForm').submit();
            return true;
        });

    });
</script>
