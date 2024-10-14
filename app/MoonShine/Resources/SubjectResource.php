<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Relationships\HasMany;

/**
 * @extends ModelResource<Subject>
 */
class SubjectResource extends ModelResource
{
    protected string $model = Subject::class;

    protected string $title = 'Fanlar'; // Resurs nomi

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(), // ID maydoni
                Text::make('Nom', 'name')->required(), // Fan nomi
                HasMany::make('Imtihonlar', 'exams', ExamResource::class), // Imtihonlar bilan bog'lanish
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'name' => ['required', 'string', 'max:255'], // Fan nomi uchun qoidalar
        ];
    }
}
