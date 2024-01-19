<?php

namespace Domain\Animes\DTOs;

use Infra\Abstracts\DataTransferObject;

class TitlesData extends DataTransferObject
{
	public function __construct(
        public string $type,
	    public string $title,
    ) {}
}