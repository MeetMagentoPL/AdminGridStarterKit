<?php
namespace MeetMagentoPL\AdminGridStarterKit\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('admingridstarterkit_recipe');
        if (!$setup->getConnection()->isTableExists($tableName)) {
            $table = $setup->getConnection()->newTable($tableName)
                ->addColumn(
                    'entity_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                    'Entity ID'
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable' => false],
                    'Recipe title'
                )
                ->addColumn(
                    'description',
                    Table::TYPE_TEXT,
                    '64k',
                    [],
                    'Recipe description'
                )
                ->addColumn(
                    'ingredients',
                    Table::TYPE_TEXT,
                    '64k',
                    ['nullable' => false],
                    'Recipe ingredients'
                )->addColumn(
                    'instructions',
                    Table::TYPE_TEXT,
                    '64k',
                    ['nullable' => false],
                    'Recipe instructions'
                )
                ->addColumn(
                    'cook_time',
                    Table::TYPE_INTEGER,
                    null,
                    ['nullable' => false],
                    'Recipe cooking time'
                )
                ->setComment('Recipe Table');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
