<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;
use App\MoonShine\Resources\TeacherResource;
use App\MoonShine\Resources\StudentResource;
use App\MoonShine\Resources\SchoolClassResource;
use App\MoonShine\Resources\ExamResource;
use MoonShine\Resources\MoonShineUserResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [
            new ExamResource(),
            new TeacherResource(),
            new StudentResource(),
            new SchoolClassResource(),
            // Boshqa resurslar agar bo'lsa, ularni shu yerda qo'shing
        ];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return []; // Agar qo'shimcha sahifalar kerak bo'lsa, shu yerda qo'shing
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
            MenuGroup::make(__('Direktor'), [
                MenuItem::make(
                    static fn() => __('O`qituvchilar'),
                    new TeacherResource()
                ),
                MenuItem::make(
                    static fn() => __('Talabalar'),
                    new StudentResource()
                ),
                MenuItem::make(
                    static fn() => __('Sinf'),
                    new SchoolClassResource()
                ),
                MenuItem::make(
                    static fn() => __('Imtihonlar'),
                    new ExamResource()
                ),
            ]),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return []; // Agar mavzuga qo'shimcha parametrlar kerak bo'lsa, shu yerda qo'shing
    }
}
