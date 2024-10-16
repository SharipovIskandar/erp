<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\MoonshineUser;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use Spatie\Permission\Models\Role;

/**
 * @extends ModelResource<MoonshineUser>
 */
class TeacherResource extends ModelResource
{
    protected string $model = MoonshineUser::class;

    protected string $title = 'Teachers';

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
        // Teacher ro'lini aniqlaymiz va userlarni filtrlaymiz
        $teacherRoleId = Role::where('name', 'teacher')->value('id');

        return $this->model::whereHas('roles', function ($query) use ($teacherRoleId) {
            $query->where('id', $teacherRoleId);
        })->get();
    }

}
