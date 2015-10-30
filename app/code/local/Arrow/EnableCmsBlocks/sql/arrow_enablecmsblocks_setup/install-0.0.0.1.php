<?php

$installer = $this;
$installer->startSetup();

$installer->getConnection()->insertMultiple(
    $installer->getTable('admin/permission_block'),
    array(
        array('block_name' => 'cms/block', 'is_allowed' => 1),
    )
);

$installer->endSetup();