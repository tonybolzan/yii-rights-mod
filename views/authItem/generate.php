<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Generate items'),
);
?>

<div class="well">
    <h2><?php echo Rights::t('core', 'Generate items'); ?></h2>
    <p><?php echo Rights::t('core', 'Please select which items you wish to generate.'); ?></p>
</div>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'htmlOptions' => array(
        'class' => 'form-inline'
    ),
));
?>

<table id="generate-item-table" class="table table-bordered table-condensed table-striped">
    <thead>
        <tr>
            <th colspan="3"><?php echo Rights::t('core', 'Application'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $this->renderPartial('_generateItems', array(
            'model' => $model,
            'form' => $form,
            'items' => $items,
            'existingItems' => $existingItems,
            'displayModuleHeadingRow' => true,
            'basePathLength' => strlen(Yii::app()->basePath),
        ));
        ?>
    </tbody>
</table>

<div class="btn-group">
    <?php
    echo CHtml::link(Rights::t('core', 'Select all'), '#', array(
        'onclick' => "jQuery('#generate-item-table').find(':checkbox').attr('checked', 'checked'); return false;",
        'class' => 'btn'));

    echo CHtml::link(Rights::t('core', 'Select none'), '#', array(
        'onclick' => "jQuery('#generate-item-table').find(':checkbox').removeAttr('checked'); return false;",
        'class' => 'btn'));
    
    echo CHtml::submitButton(Rights::t('core', 'Generate'),array('class'=>'btn btn-success'));
    ?>
</div>

<?php $this->endWidget(); ?>
