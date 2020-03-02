<?php

namespace App\Models;

use TCG\Voyager\Models\DataType as Model;

/**
 * Class App\Models\DataType.
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $display_name_singular
 * @property string $display_name_plural
 * @property string|null $icon
 * @property string|null $model_name
 * @property string|null $policy_name
 * @property string|null $controller
 * @property string|null $description
 * @property int $generate_permissions
 * @property int $server_side
 * @property string|null $details
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $default_search_key
 * @property mixed $order_column
 * @property mixed $order_direction
 * @property mixed $order_display_column
 * @property mixed $scope
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\DataRow[] $rows
 * @property-read int|null $rows_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereController($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereDisplayNamePlural($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereDisplayNameSingular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereGeneratePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereModelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType wherePolicyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereServerSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataType withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 */
class DataType extends Model
{
    //
}
