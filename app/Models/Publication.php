<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Publication
 * 
 * @property int $id
 * @property int|null $tutor_id
 * @property string $title
 * @property string|null $link
 * @property string|null $image_urls
 * @property string|null $captions
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Publication extends Model
{
	protected $table = 'publications';

	protected $casts = [
		'tutor_id' => 'int'
	];

	protected $fillable = [
		'tutor_id',
		'title',
		'link',
		'image_urls',
		'captions'
	];
}
