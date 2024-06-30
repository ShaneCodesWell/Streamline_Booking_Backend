<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tutorprofile
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $profile_picture
 * @property string|null $bio
 * @property string|null $orcid
 * @property string|null $field_of_study
 * @property string|null $institution
 * @property string|null $biography
 * @property string|null $research_interests
 * @property string|null $contact_phone
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Tutorprofile extends Model
{
	protected $table = 'tutorprofiles';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'first_name',
		'last_name',
		'profile_picture',
		'bio',
		'orcid',
		'field_of_study',
		'institution',
		'biography',
		'research_interests',
		'contact_phone'
	];
}
