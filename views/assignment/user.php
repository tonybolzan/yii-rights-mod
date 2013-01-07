<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Assignments') => array('assignment/view'),
    $model->getName(),
);
?>

<div class="well">
    <h2><?php echo Rights::t('core', 'Assignments for :username', array(':username' => $model->getName())); ?></h2>
</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'template' => '{items}',
    'hideHeader' => true,
    'emptyText' => Rights::t('core', 'This user has not been assigned any items.'),
    "itemsCssClass" => "table table-bordered table-condensed table-striped",
    'columns' => array(
        array(
            'name' => 'name',
            'header' => Rights::t('core', 'Name'),
            'type' => 'raw',
            'htmlOptions' => array('class' => 'name-column'),
            'value' => '$data->getNameText()',
        ),
        array(
            'name' => 'type',
            'header' => Rights::t('core', 'Type'),
            'type' => 'raw',
            'htmlOptions' => array('class' => 'type-column'),
            'value' => '$data->getTypeText()',
        ),
        array(
            'header' => '&nbsp;',
            'type' => 'raw',
            'htmlOptions' => array('class' => 'actions-column'),
            'value' => '$data->getRevokeAssignmentLink()',
        ),
    )
));
?>

<h3><?php echo Rights::t('core', 'Assign item'); ?></h3>
<?php if ($formModel !== null): ?>
    <?php
    $this->renderPartial('_form', array(
        'model' => $formModel,
        'itemnameSelectOptions' => $assignSelectOptions,
    ));
    ?>
<?php else: ?>
    <p class="alert alert-danger">
        <?php echo Rights::t('core', 'No assignments available to be assigned to this user.'); ?>
    </p>
<?php endif; ?>