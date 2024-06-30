<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * 
 * @property int $id
 * @property int|null $service_id
 * @property int|null $student_id
 * @property int|null $rating
 * @property string $review
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Review extends Model
{
	protected $table = 'reviews';

	protected $casts = [
		'service_id' => 'int',
		'student_id' => 'int',
		'rating' => 'int'
	];

	protected $fillable = [
		'service_id',
		'student_id',
		'rating',
		'review'
	];
}
