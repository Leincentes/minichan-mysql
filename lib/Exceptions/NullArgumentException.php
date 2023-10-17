<?php
declare(strict_types=1);

namespace Leinc\MinichanMysql\Exceptions;
use InvalidArgumentException;

class NullArgumentException {
    public function __construct() {
        throw new InvalidArgumentException('Unexpected null values');
    }
}