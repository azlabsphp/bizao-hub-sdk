<?php

namespace Drewlabs\Bizao\Contracts;

interface HasApiVersionning
{
    /**
     * Instruct current instance to use api version 2 of bizao hub
     * 
     * @param int $number
     * 
     * @return static|self|ChannelInterface
     */
    public function withApiVersion(int $number);
}
