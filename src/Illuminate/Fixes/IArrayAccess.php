<?php
namespace Illuminate\Fixes;

use ArrayAccess;

interface IArrayAccess extends ArrayAccess {

    #[\ReturnTypeWillChange]
    public function offsetExists($offset);

    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset);

    #[\ReturnTypeWillChange]
    public function offsetSet(mixed $offset, mixed $value);

    #[\ReturnTypeWillChange]
    public function offsetUnset(mixed $offset);
}
