<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasUuid 
{
    /**
     * The "booting" function of model
     *
     * @return void
    */
    protected static function bootHasUuid() {
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid();
            }
        });
    }
}