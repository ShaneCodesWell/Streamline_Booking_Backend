<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Session
 * 
 * @property int $id
 * @property int|null $booking_id
 * @property string|null $session_details
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Session extends Model
{
	protected $table = 'sessions';

	protected $casts = [
		'booking_id' => 'int'
	];

	protected $fillable = [
		'booking_id',
		'session_details'
	];
}
