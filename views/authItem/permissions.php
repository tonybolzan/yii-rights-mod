<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Permissions'),
);
?>

<div id="permissions">
<div class="well">
    <h2><?php echo Rights::t('core', 'Permissions'); ?></h2>

    <p>
        <?php echo Rights::t('core', 'Here you can view and manage the permissions assigned to each role.'); ?><br />
        <?php
        echo Rights::t('core', 'Authorization items can be managed under {roleLink}, {taskLink} and {operationLink}.', array(
            '{roleLink}' => CHtml::link(Rights::t('core', 'Roles'), array('authItem/roles')),
            '{taskLink}' => CHtml::link(Rights::t('core', 'Tasks'), array('authItem/tasks')),
            '{operationLink}' => CHtml::link(Rights::t('core', 'Operations'), array('authItem/operations')),
        ));
        ?>
    </p>

    <p>
        <?php
        echo CHtml::link(Rights::t('core', 'Generate items for controller actions'), array('authItem/generate'), array(
            'class' => 'btn btn-success',
        ));
        ?>
    </p>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'template' => '{items}',
    'selectableRows' => 0,
    'rowCssClassExpression' => '($data["itemtype"] == 1) ? "controller-row exists" : ""',
    'emptyText' => Rights::t('core', 'No authorization items found.'),
    "itemsCssClass" =>"table table-bordered table-condensed table-striped",
    'columns' => $columns,
));
?>

<div class="alert">
    * <?php echo Rights::t('core', 'Hover to see from where the permission is inherited.'); ?>
</div>

<script type="text/javascript">

    /**
     * Attach the tooltip to the inherited items.
     */
    jQuery('.inherited-item').rightsTooltip({
        title:'<?php echo Rights::t('core', 'Source'); ?>: '
    });
</script>
</div>