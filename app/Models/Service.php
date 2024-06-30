<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * 
 * @property int $id
 * @property int|null $tutor_id
 * @property string $title
 * @property string $description
 * @property float $fee
 * @property int $duration
 * @property string|null $availability
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Service extends Model
{
	protected $table = 'services';

	protected $casts = [
		'tutor_id' => 'int',
		'fee' => 'float',
		'duration' => 'int'
	];

	protected $fillable = [
		'tutor_id',
		'title',
		'description',
		'fee',
		'duration',
		'availability'
	];
}
