<?php
/*
 * This file is part of the prooph/ProophServiceBusModule.
 * (c) Alexander Miertsch <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 08.03.14 - 21:16
 */

namespace ProophServiceBusModuleTest\Mock;

use Codeliner\ArrayReader\ArrayReader;
use Prooph\ServiceBus\Command\AbstractCommand;

/**
 * Class DoSomething
 *
 * @package Prooph\ServiceBusTest\Mock
 * @author Alexander Miertsch <contact@prooph.de>
 */
class DoSomething extends AbstractCommand
{
    protected $handled = true;

    /**
     * @param string $data
     * @return DoSomething
     */
    public static function fromData($data)
    {
        return new static(__CLASS__, array('data' => $data));
    }

    /**
     * @return string
     */
    public function data()
    {
        $arrayReader = new ArrayReader($this->payload);
        return $arrayReader->stringValue('data');
    }

    public function handle()
    {
        $this->handled = true;
    }

    /**
     * @return bool
     */
    public function isHandled()
    {
        return $this->handled;
    }
}
 