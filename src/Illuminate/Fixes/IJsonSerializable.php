<?php
namespace Illuminate\Fixes;

use JsonSerializable;

interface IJsonSerializable extends JsonSerializable {

    #[\ReturnTypeWillChange]
    public function jsonSerialize();
}
