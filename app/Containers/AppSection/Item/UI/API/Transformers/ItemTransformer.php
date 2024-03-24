<?php

namespace App\Containers\AppSection\Item\UI\API\Transformers;

use App\Containers\AppSection\Item\Models\Item;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ItemTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Item $item): array
    {
        $response = [
            'object' => $item->getResourceKey(),
            'id' => $item->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $item->id,
            'created_at' => $item->created_at,
            'updated_at' => $item->updated_at,
            'readable_created_at' => $item->created_at->diffForHumans(),
            'readable_updated_at' => $item->updated_at->diffForHumans(),
            // 'deleted_at' => $item->deleted_at,
        ], $response);
    }
}
