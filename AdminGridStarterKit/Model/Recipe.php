<?php
namespace MeetMagentoPL\AdminGridStarterKit\Model;

use Magento\Framework\Model\AbstractModel;

class Recipe extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('MeetMagentoPL\AdminGridStarterKit\Model\ResourceModel\Recipe');
    }
}
