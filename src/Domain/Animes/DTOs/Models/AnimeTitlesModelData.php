<?php

namespace Domain\Animes\DTOs\Models;

use Domain\Animes\DTOs\AnimeTitlesData;
use Domain\Animes\DTOs\Mappers\AnimeTitlesMapper;
use Illuminate\Support\Arr;

class AnimeTitlesModelData extends AnimeTitlesData
{
    public function __construct(public int $id, ...$args)
    {
        parent::__construct(...$args);
    }

    public static function fromModel(array $data): self
    {
        return new self(
            $data['id'],
            ...Arr::except(AnimeTitlesMapper::fromArray($data), ['id']),
        );
    }
}
