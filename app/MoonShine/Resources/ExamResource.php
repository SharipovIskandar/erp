<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;

use MoonShine\Fields\Field;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Date;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Number;
use MoonShine\Components\MoonShineComponent;

use Illuminate\Database\Eloquent\Collection;

// Collection importini qo'shing

// ...

class ExamResource extends ModelResource
{
    protected string $model = Exam::class;

    protected string $title = 'Exams';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Date::make('Date', 'date')->sortable(),
            ]),
        ];
    }

    /**
     * @param Exam $item
     *
     * @return array<string, string[]|string>
     */
    public function rules($item): array
    {
        return [];
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->model::all(); // Barcha Exam modelini olish
    }
}

