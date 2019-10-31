<?php

namespace Mastering\SampleModule\Model;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class DebugHandler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/custom_debug.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;
}
