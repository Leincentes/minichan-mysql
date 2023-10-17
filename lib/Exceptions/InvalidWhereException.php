<?php

namespace Leinc\MinichanMysql\Exceptions;
use InvalidArgumentException;

class InvalidWhereException {
    public function __construct() {
        throw new InvalidArgumentException('Invalid param value for WHERE');
    }
}