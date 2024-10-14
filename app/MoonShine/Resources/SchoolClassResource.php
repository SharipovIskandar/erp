<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\SchoolClass;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<SchoolClass>
 */
class SchoolClassResource extends ModelResource
{
    protected string $model = SchoolClass::class;

    protected string $title = 'School Classes';

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
     * @param SchoolClass $item
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
