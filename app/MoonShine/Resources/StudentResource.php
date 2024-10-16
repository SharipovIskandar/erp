<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\MoonshineUser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use Spatie\Permission\Models\Role;

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
                Text::make('Name')->sortable(),
                Text::make('Last Name', "last_name")->sortable(),
                BelongsTo::make("Sinf nomi", "schoolClass", Role::class)->sortable(),
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
