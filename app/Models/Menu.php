<?php

namespace App\Models;

use TCG\Voyager\Models\Menu as Model;

/**
 * Class App\Models\Menu.
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\MenuItem[] $items
 * @property-read int|null $items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\MenuItem[] $parent_items
 * @property-read int|null $parent_items_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Menu whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Menu extends Model
{
    //
}
