<?php
namespace Illuminate\Fixes;

use Countable;

interface ICountable extends Countable {

    #[\ReturnTypeWillChange]
    public function count();
}
