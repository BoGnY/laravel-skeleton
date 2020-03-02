<?php

namespace App\Models;

use TCG\Voyager\Models\Category as Model;

/**
 * Class App\Models\Category.
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int $order
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read null $translated
 * @property-read \TCG\Voyager\Models\Category $parentId
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Category withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 */
class Category extends Model
{
    //
}
