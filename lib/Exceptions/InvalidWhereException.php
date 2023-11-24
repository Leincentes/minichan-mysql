<?php
declare(strict_types=1);

namespace MinichanMysql\Exceptions;
use InvalidArgumentException;

class InvalidWhereException {
    public function __construct() {
        throw new InvalidArgumentException('Invalid param value for WHERE');
    }
}