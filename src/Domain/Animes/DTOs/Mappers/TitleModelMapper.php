<?php

namespace Domain\Animes\DTOs\Mappers;

class TitleModelMapper
{
    public static function fromArray(array $data): array
    {
        return [
            'id' => $data['id'] ?? null,
            'anime_id' => $data['anime_id'],
            'type' => $data['type'],
            'title' => $data['title'],
        ];
    }
}
