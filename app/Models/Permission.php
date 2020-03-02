<?php

namespace App\Models;

use TCG\Voyager\Models\Permission as Model;

/**
 * Class App\Models\Permission.
 *
 * @property int $id
 * @property string $key
 * @property string|null $table_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Role[] $roles
 * @property-read int|null $roles_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends Model
{
    //
}
