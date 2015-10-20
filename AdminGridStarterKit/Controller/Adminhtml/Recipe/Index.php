<?php
namespace MeetMagentoPL\AdminGridStarterKit\Controller\Adminhtml\Recipe;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'MeetMagentoPL_AdminGridStarterKit::recipe';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('MeetMagentoPL_AdminGridStarterKit::recipe');
        $resultPage->addBreadcrumb(__('Recipes'), __('Recipes'));
        $resultPage->addBreadcrumb(__('Manage Recipes'), __('Manage Recipes'));
        $resultPage->getConfig()->getTitle()->prepend(__('Recipes'));

        return $resultPage;
    }
}