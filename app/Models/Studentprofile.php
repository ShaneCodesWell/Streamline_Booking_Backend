<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Studentprofile
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $profile_picture
 * @property string|null $bio
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Studentprofile extends Model
{
	protected $table = 'studentprofiles';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'first_name',
		'last_name',
		'profile_picture',
		'bio'
	];
}
