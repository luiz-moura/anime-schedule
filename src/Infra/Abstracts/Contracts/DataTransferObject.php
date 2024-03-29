<?php

namespace Infra\Abstracts\Contracts;

interface DataTransferObject
{
    public static function fromArray(array $data): self;

    public function toArray(): array;
}
