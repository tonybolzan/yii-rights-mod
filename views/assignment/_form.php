<?php
$form = $this->beginWidget('CActiveForm', array(
    'htmlOptions' => array(
        'class' => 'form-inline'
    ),
));
?>

<?php echo $form->dropDownList($model, 'itemname', $itemnameSelectOptions); ?>

<?php echo CHtml::submitButton(Rights::t('core', 'Assign'), array('class' => 'btn btn-success')); ?>

<?php echo $form->error($model, 'itemname', array('class' => 'alert alert-error')); ?>

<?php $this->endWidget(); ?>