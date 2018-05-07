<?php
/* @var $this StatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Status',
);

$this->menu = array(
    array('label' => 'New Status', 'url' => array('create')),
    array('label' => 'Manage Status', 'url' => array('admin')),
);
?>

    <h1>All Status</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
)); ?>