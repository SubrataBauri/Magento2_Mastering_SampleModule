<?php

namespace Mastering\SampleModule\Cron;

use Mastering\SampleModule\Model\ItemFactory;

class AddItem
{
    private $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute()
    {
        $this->itemFactory->create()
            ->setName('Scheduled Item')
            ->setDescription('Created at ' . time())
            ->save();
    }
}
