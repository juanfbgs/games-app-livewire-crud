<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Videogame> $videogames
 * @property-read int|null $videogames_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Videogame> $videogames
 * @property-read int|null $videogames_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Studio whereUpdatedAt($value)
 */
	class Studio extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Videogame> $videogames
 * @property-read int|null $videogames_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property float $rating
 * @property float $price
 * @property string $release_date
 * @property int $category_id
 * @property int $studio_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Studio $studio
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereStudioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Videogame whereUserId($value)
 */
	class Videogame extends \Eloquent {}
}

