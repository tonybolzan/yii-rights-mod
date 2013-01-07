<div class="well">

    <?php if ($model->scenario === 'update'): ?>
        <h3><?php echo Rights::getAuthItemTypeName($model->type); ?></h3>
    <?php endif; ?>

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'htmlOptions' => array(
            'class' => 'form-inline'
        ),
    ));
    ?>

    <div class="control-group">
        <?php echo $form->label($model,'name', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'name', array('class' => 'input-block-level', 'maxlength' => 255, 'required'=>'required')); ?>
            <?php echo $form->error($model,'name', array('class' => 'alert alert-error')); ?>
            <span class="help-inline"><?php echo Rights::t('core', 'Do not change the name unless you know what you are doing.'); ?></span>
        </div>
    </div>
        
    <div class="control-group">
        <?php echo $form->label($model,'description', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model, 'description', array('class' => 'input-block-level', 'maxlength' => 255)); ?>
            <?php echo $form->error($model,'description', array('class' => 'alert alert-error')); ?>
            <span class="help-inline"><?php echo Rights::t('core', 'A descriptive name for this item.'); ?></span>
        </div>
    </div>

    <?php if (Rights::module()->enableBizRule === true): ?>
        <div class="control-group">
            <?php echo $form->label($model,'bizRule', array('class'=>'control-label')); ?>
            <div class="controls">
                <?php echo $form->textField($model, 'bizRule', array('class' => 'input-block-level', 'maxlength' => 255)); ?>
                <?php echo $form->error($model,'bizRule', array('class' => 'alert alert-error')); ?>
                <span class="help-inline"><?php echo Rights::t('core', 'Code that will be executed when performing access checking.'); ?></span>
            </div>
        </div>
    <?php endif; ?>

    <?php if (Rights::module()->enableBizRule === true && Rights::module()->enableBizRuleData): ?>
        <div class="control-group">
            <?php echo $form->label($model,'data', array('class'=>'control-label')); ?>
            <div class="controls">
                <?php echo $form->textField($model, 'data', array('class' => 'input-block-level', 'maxlength' => 255)); ?>
                <?php echo $form->error($model,'data', array('class' => 'alert alert-error')); ?>
                <span class="help-inline"><?php echo Rights::t('core', 'Additional data available when executing the business rule.'); ?></span>
            </div>
        </div>
    <?php endif; ?>

    <div class="form-actions">
        <?php echo CHtml::submitButton(Rights::t('core', 'Save'), array('class' => 'btn btn-success')); ?>
        <?php echo CHtml::link(Rights::t('core', 'Cancel'), Yii::app()->user->rightsReturnUrl, array('class' => 'btn btn-danger')); ?>
    </div>
    <?php $this->endWidget(); ?>

</div>