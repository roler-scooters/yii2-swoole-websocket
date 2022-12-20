<?php

namespace immusen\websocket\src;

/**
 * Class Server Model
 * @package immusen\websocket\src
 */
class Server extends  Swoole\Websocket\Server
{
    public $redis;
}