<?php
namespace Illuminate\Fixes;

use ArrayAccess;

interface IArrayAccess extends ArrayAccess {

    #[\ReturnTypeWillChange]
    public function offsetExists($offset): bool;

    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed;

    #[\ReturnTypeWillChange]
    public function offsetSet(mixed $offset, mixed $value): void;

    #[\ReturnTypeWillChange]
    public function offsetUnset(mixed $offset): void;
}
