<?php

namespace App\Models;

use TCG\Voyager\Models\Page as Model;

/**
 * Class App\Models\Page.
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string|null $excerpt
 * @property string|null $body
 * @property string|null $image
 * @property string $slug
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read null $translated
 * @property-read \Illuminate\Database\Eloquent\Collection|\TCG\Voyager\Models\Translation[] $translations
 * @property-read int|null $translations_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page active()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page whereTranslation($field, $operator, $value = null, $locales = null, $default = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page withTranslation($locale = null, $fallback = true)
 * @method static \Illuminate\Database\Eloquent\Builder|\TCG\Voyager\Models\Page withTranslations($locales = null, $fallback = true)
 * @mixin \Eloquent
 */
class Page extends Model
{
    //
}
