<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\MoonshineUser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<MoonshineUser>
 */
class StudentResource extends ModelResource
{
    protected string $model = MoonshineUser::class;

    protected string $title = 'Students';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
            ]),
        ];
    }

    /**
     * @param MoonshineUser $item
     *
     * @return array<string, string[]|string>
     */
    public function rules(Model $item): array
    {
        return [];
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->model::all();
    }
}
