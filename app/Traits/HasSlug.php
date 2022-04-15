<?php

namespace App\Traits;

use Illuminate\Support\Str;


trait HasSlug 
{

    public static function bootHasSlug(): void
    {

        static::creating(function (self $model) {
            $model->slug = $model->findSlug($model->name);
        });
    }

    protected function findSlug(string $string): string
    {
        $index = 1;

        $slug = Str::slug($string);
        while (self::whereSlug($slug)->exists()) {
            $slug = $string . '-' . ++$index;
        }

        return $slug;
    }
}