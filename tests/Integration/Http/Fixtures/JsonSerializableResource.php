<?php

namespace Illuminate\Tests\Integration\Http\Fixtures;

use Illuminate\Fixes\IJsonSerializable as JsonSerializable;

class JsonSerializableResource implements JsonSerializable
{
    public $resource;

    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->resource->id,
        ];
    }
}
