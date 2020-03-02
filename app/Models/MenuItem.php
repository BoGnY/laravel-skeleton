<?php

namespace App\Models;

use TCG\Voyager\Models\MenuItem as Model;

/**
 * Class App\Models\MenuItem.
 *
 * @property int $id
 * @property int|null $menu_id
 * @property string $title
 * @property string $url
 * @property string $target
 * @property string|null $icon_class
 * @property string|null $color
 * @property int|null $parent_id
 * @property int $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $route
 * @property string|null $parameters
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\MenuItem[] $children
 * @property-read int|null $children_count
 * @property-read null $translated
 * @property-read \TCG\Voyager\Models\Menu|null $menu
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereIconClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereParameters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereTarget($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MenuItem whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\MenuItem withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 */
class MenuItem extends Model
{
    //
}
