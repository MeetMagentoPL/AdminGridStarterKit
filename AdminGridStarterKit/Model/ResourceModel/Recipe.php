<?php
namespace MeetMagentoPL\AdminGridStarterKit\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Recipe extends AbstractDb
{
    /**
     * Init the resource by setting the main table and id field names
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('admingridstarterkit_recipe', 'entity_id');
    }
}
