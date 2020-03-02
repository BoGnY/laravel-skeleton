<?php

namespace App\Models;

use TCG\Voyager\Models\Translation as Model;

/**
 * Class App\Models\Translation.
 *
 * @property int $id
 * @property string $table_name
 * @property string $column_name
 * @property int $foreign_key
 * @property string $locale
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereForeignKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translation whereValue($value)
 * @mixin \Eloquent
 */
class Translation extends Model
{
    //
}
