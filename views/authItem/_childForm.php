<?php
$form = $this->beginWidget('CActiveForm', array(
    'htmlOptions' => array(
        'class' => 'form-inline'
    ),
));
?>

<?php echo $form->dropDownList($model, 'itemname', $itemnameSelectOptions, array('size'=>10,'multiple' => 'multiple')); ?>

<?php echo CHtml::submitButton(Rights::t('core', 'Add'), array('class' => 'btn btn-success')); ?>

<?php echo $form->error($model, 'itemname', array('class' => 'alert alert-error')); ?>

<?php $this->endWidget(); ?>