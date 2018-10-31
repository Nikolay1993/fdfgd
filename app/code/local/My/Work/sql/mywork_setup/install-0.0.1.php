<?php

$installer = $this;
$tableNews = $installer->getTable('mywork/table_work');


$installer->startSetup();

$installer->getConnection()->dropTable($tableNews);

$table = $installer->getConnection()
->newTable($tableNews)
->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
'identity'  => true,
'nullable'  => false,
'primary'   => true,
))
->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
'nullable'  => false,
))
->addColumn('question', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
'nullable'  => false,
))
->addColumn('answer', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
'nullable'  => false,
))
->addColumn('created', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
'nullable'  => false,
))
->addColumn('status', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
'nullable'  => false,
));
$installer->getConnection()->createTable($table);

$installer->endSetup();