<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 * 
 * @property int $id
 * @property int|null $student_id
 * @property int|null $service_id
 * @property Carbon $booking_time
 * @property Carbon|null $session_time
 * @property string|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Booking extends Model
{
	protected $table = 'bookings';

	protected $casts = [
		'student_id' => 'int',
		'service_id' => 'int',
		'booking_time' => 'datetime',
		'session_time' => 'datetime'
	];

	protected $fillable = [
		'student_id',
		'service_id',
		'booking_time',
		'session_time',
		'status'
	];
}
