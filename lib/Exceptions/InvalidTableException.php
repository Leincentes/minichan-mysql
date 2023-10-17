<?php
declare(strict_types=1);

namespace Leinc\MinichanMysql\Exceptions;
use InvalidArgumentException;

class InvalidTableException {
    public function __construct() {
        throw new InvalidArgumentException('Unexpected empty value for "table"');
    }
}