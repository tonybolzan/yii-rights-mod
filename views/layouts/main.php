<?php $this->beginContent(Rights::module()->appLayout); ?>

<div class="span3">
    <div class="well well-very-small">
        <?php
        $install = ($this->id === 'install');
        $this->widget('ext.bootstrap.BootMenu', array(
            'type' => 'list',
            'items' => array(
                array(
                    'label' => Rights::t('install', 'Install Rights'),
                    'visible' => $install,
                ),
                array(
                    'label' => Rights::t('core', 'Assignments'),
                    'url' => array('assignment/view'),
                    'visible' => !$install,
                ),
                array(
                    'label' => Rights::t('core', 'Permissions'),
                    'url' => array('authItem/permissions'),
                    'visible' => !$install,
                ),
                '---',
                array(
                    'label' => Rights::t('core', 'Roles'),
                    'url' => array('authItem/roles'),
                    'visible' => !$install,
                ),
                array(
                    'label' => Rights::t('core', 'Tasks'),
                    'url' => array('authItem/tasks'),
                    'visible' => !$install,
                ),
                array(
                    'label' => Rights::t('core', 'Operations'),
                    'url' => array('authItem/operations'),
                    'visible' => !$install,
                ),
            )
        ));
        ?>
    </div>
</div>

<div class="span9">
    <div class="flashes">
           <?php if( Yii::app()->user->hasFlash('RightsSuccess')===true ):?>
               <div class="alert alert-success">
                   <?php echo Yii::app()->user->getFlash('RightsSuccess'); ?>
               </div>
           <?php endif; ?>

           <?php if( Yii::app()->user->hasFlash('RightsError')===true ):?>
               <div class="alert alert-danger">
                   <?php echo Yii::app()->user->getFlash('RightsError'); ?>
               </div>
           <?php endif; ?>
    </div>
    
    <?php echo $content; ?>
</div>

<?php $this->endContent(); ?>