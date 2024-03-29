<?php

namespace Infra\Persistente\Eloquent\Repositories;

use Domain\Animes\Contracts\AnimeTitleRepository as AnimeTitleRepositoryContract;
use Domain\Animes\DTOs\TitleData;
use Infra\Abstracts\Repository;
use Infra\Persistente\Eloquent\Models\AnimeTitle;

class AnimeTitleRepository extends Repository implements AnimeTitleRepositoryContract
{
    protected $modelClass = AnimeTitle::class;

    public function create(int $animeId, TitleData $animes): void
    {
        $this->model->create(
            $animes->toArray() + ['anime_id' => $animeId]
        );
    }
}
