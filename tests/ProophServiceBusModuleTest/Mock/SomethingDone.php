<?php
/*
 * This file is part of the prooph/ProophServiceBusModule.
 * (c) Alexander Miertsch <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 11.03.14 - 21:17
 */

namespace ProophServiceBusModuleTest\Mock;

use Prooph\ServiceBus\Event\AbstractEvent;

/**
 * Class SomethingDone
 *
 * @package Prooph\ServiceBusTest\Mock
 * @author Alexander Miertsch <contact@prooph.de>
 */
class SomethingDone extends AbstractEvent
{
    /**
     * @param string $dataString
     * @return SomethingDone
     */
    public static function fromData($dataString)
    {
        return new self(array('data' => $dataString));
    }
    /**
     * @return string
     */
    public function data()
    {
        return $this->payload['data'];
    }
}
 