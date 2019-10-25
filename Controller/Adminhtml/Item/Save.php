<?php

namespace Mastering\SampleModule\Controller\AdminHtml\Item;

use Magento\Backend\App\Action;
use Mastering\SampleModule\Model\ItemFactory;

class Save extends \Magento\Backend\App\Action
{
    private $itemFactory;

    public function __construct(
        Action\Context $context,
        ItemFactory $itemFactory
    )
    {
        $this->itemFactory = $itemFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->itemFactory->create()
            ->setData($this->getRequest()->getPostValue()['general'])
            ->save();
        return $this->resultRedirectFactory->create()->setPath('mastering/index/index');
    }
}
