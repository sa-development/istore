<div class="reports form">
    <?php echo $this->Form->create('Report', array('type' => 'GET')); ?>
    <fieldset>
        <legend><?php echo __('Select Station '); ?></legend>
        <?php echo $this->Form->input('station_id', array('empty' => 'Select Station', 'selected' => $station_id)); ?>

        <?php echo $this->Form->end(); ?>

        <?php if($station_id): ?>
        <div id="wrapper">
            <div class="accordionButton"><strong>GASOLINE</strong></div>
            <div class="accordionContent">
                <ul>
                    <?php
                        $gasonline = array(
                           'vrubyrept' => 'Department Sales Report',
                         );
                        foreach($gasonline as $key => $value) {
                            echo '<li>'.$this->Html->link($value, array('controller' => 'reports', 'action' => 'view', $station_id,$key)).'</li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="accordionButton">STORE</div>
            <div class="accordionContent">Content 2<br /><br /><br /><br /><br />Medium Example</div>
            <div class="accordionButton">ACCOUNTING</div>
            <div class="accordionContent">Content 1<br />Short Example</div>
            <div class="accordionButton">PAYROLL</div>
            <div class="accordionContent">Content 4<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />Extra Long Example</div>
        </div>
        <?php endif; ?>
    </fieldset>
</div>

<?php echo $this->element('station_action'); ?>
<script type="text/javascript">
    $(document).ready(function() {

        $("#ReportStationId").change(function(){
            $('#ReportIndexForm').submit();
            return true;
        });

        /********************************************************************************************************************
        SIMPLE ACCORDIAN STYLE MENU FUNCTION
         ********************************************************************************************************************/
        $('div.accordionButton').click(function() {
            $('div.accordionContent').slideUp('normal');
            $(this).next().slideDown('normal');
        });

        /********************************************************************************************************************
        CLOSES ALL DIVS ON PAGE LOAD
         ********************************************************************************************************************/
        $("div.accordionContent").hide();

    });
</script>

<style>
    #wrapper {
        width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .accordionButton {
        width: 800px;
        height: 30px;
        float: left;
        background: #819FF7;
        border-bottom: 1px solid #FFFFFF;
        cursor: pointer;
    }

    .accordionContent {
        width: 800px;
        float: left;
        background: #FFFFFF;
        display: none;
    }
</style>