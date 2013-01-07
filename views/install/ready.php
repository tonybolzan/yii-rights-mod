<div id="installer" class="rights-ready">

    <div class="alert alert-success">
        <h2><?php echo Rights::t('install', 'Congratulations!'); ?></h2>
        <p> <?php echo Rights::t('install', 'Rights has been installed succesfully.'); ?></p>
        <p> <?php echo Rights::t('install', 'You can start by generating your authorization items'); ?></p>
    </div>
    
    <?php echo CHtml::link(Rights::t('install', 'here'), array('authItem/generate'), array('class' => 'btn')); ?>.

</div>