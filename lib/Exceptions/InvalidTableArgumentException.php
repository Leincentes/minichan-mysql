<?php
declare(strict_types=1);

namespace Leinc\MinichanMysql\Exceptions;
use InvalidArgumentException;

class InvalidTableArgumentException {
    public function __construct() {
        throw new InvalidArgumentException('"Invalid argument for "table"');
    }
}