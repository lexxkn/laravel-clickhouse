<?php

declare(strict_types=1);

namespace Bavix\LaravelClickHouse\Database;

use Tinderbox\ClickhouseBuilder\Query\Grammar;
use Bavix\LaravelClickHouse\Database\Query\Builder;

class Connection extends \Tinderbox\ClickhouseBuilder\Integrations\Laravel\Connection
{
    public function query()
    {
        return new Builder($this, new Grammar());
    }
}
