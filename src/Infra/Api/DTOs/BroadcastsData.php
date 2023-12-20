<?php

namespace Infra\Api\DTOs;

use Infra\Abstracts\DataTransferObject;

class BroadcastsData extends DataTransferObject
{
	public function __construct(
        public ?string $day,
        public ?string $time,
        public ?string $timezone,
        public ?string $date_formatted,
    ) {}
}