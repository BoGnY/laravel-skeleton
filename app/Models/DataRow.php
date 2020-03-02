<?php

namespace App\Models;

use TCG\Voyager\Models\DataRow as Model;

/**
 * Class App\Models\DataRow.
 *
 * @property int $id
 * @property int $data_type_id
 * @property string $field
 * @property string $type
 * @property string $display_name
 * @property int $required
 * @property int $browse
 * @property int $read
 * @property int $edit
 * @property int $add
 * @property int $delete
 * @property string|null $details
 * @property int $order
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereBrowse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereDataTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereField($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DataRow whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\DataRow withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 */
class DataRow extends Model
{
    //
}
