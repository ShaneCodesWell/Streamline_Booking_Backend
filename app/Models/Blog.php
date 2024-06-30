<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 * 
 * @property int $id
 * @property int|null $author_id
 * @property string $title
 * @property string $content
 * @property string|null $image_urls
 * @property string|null $captions
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Blog extends Model
{
	protected $table = 'blogs';

	protected $casts = [
		'author_id' => 'int'
	];

	protected $fillable = [
		'author_id',
		'title',
		'content',
		'image_urls',
		'captions'
	];
}
