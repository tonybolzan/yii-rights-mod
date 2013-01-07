<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Create :type', array(':type' => Rights::getAuthItemTypeName($_GET['type']))),
);
?>

<div class="well">
    <h2><?php echo Rights::t('core', 'Create :type', array(':type' => Rights::getAuthItemTypeName($_GET['type']))); ?></h2>
</div>
<?php $this->renderPartial('_form', array('model' => $formModel)); ?>
