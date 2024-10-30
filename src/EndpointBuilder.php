<?php

declare(strict_types=1);

/*
 * This file is auto generated using the drewlabs/mdl UML model class generator package
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace Drewlabs\Bizao;

class EndpointBuilder
{
    /** @var string */
    private $host;

    /**
     * Endpoint builder class constructor
     * 
     * @param string $host 
     * @return void 
     */
    public function __construct(string $host)
    {
        $this->host = $host;
    }

    /**
     * Endpoint builder factory constructor
     * 
     * @param string $host 
     * @return static 
     */
    public static function New(string $host)
    {
        return new static($host);
    }


    /**
     * Build endpoint based on host property value
     * 
     * @param string $path
     * 
     * @return string 
     */
    public function build(string $path): string
    {
        $host = $this->host;
        if ($host[$length = strlen($host) - 1] === '/') {
            $host = substr($this->host, 0, $length);
        }

        if ($path[0] === '/') {
            $path = substr($path, 1);
        }

        return sprintf("%s/%s", $host, $path);
    }
}
