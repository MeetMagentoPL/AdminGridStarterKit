<?php
namespace MeetMagentoPL\AdminGridStarterKit\Model\ResourceModel\Recipe;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Init collection by setting model and resource model classes
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('MeetMagentoPL\AdminGridStarterKit\Model\Recipe', 'MeetMagentoPL\AdminGridStarterKit\Model\ResourceModel\Recipe');
    }
}
