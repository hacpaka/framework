<?php
namespace Illuminate\Fixes;

use IteratorAggregate;;

interface IIteratorAggregate extends IteratorAggregate {

    #[\ReturnTypeWillChange]
    public function getIterator();
}
