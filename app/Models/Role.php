<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as Model;

/**
 * Class App\Models\Role.
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    use HasFactory;
}
