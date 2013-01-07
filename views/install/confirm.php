<div id="installer" class="rights-confirm">

    <h2><?php echo Rights::t('install', 'Install Rights'); ?></h2>

    <div class="alert alert-success">
        <?php echo Rights::t('install', 'Rights is already installed!'); ?>
    </div>

    <p><?php echo Rights::t('install', 'Please confirm if you wish to reinstall.'); ?></p>

    <p>
        <?php echo CHtml::link(Rights::t('install', 'Yes'), array('install/run', 'confirm' => 1), array('class' => 'btn btn-success')); ?> /
        <?php echo CHtml::link(Rights::t('install', 'No'), Yii::app()->homeUrl, array('class' => 'btn btn-danger')); ?>
    </p>

    <div class="alert alert-danger">
        <?php echo Rights::t('install', 'Notice: All your existing data will be lost.'); ?>
    </div>

</div>