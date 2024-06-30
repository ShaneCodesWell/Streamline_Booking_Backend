<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Checklist
 * 
 * @property int $id
 * @property int|null $session_id
 * @property string $item
 * @property string|null $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Checklist extends Model
{
	protected $table = 'checklists';

	protected $casts = [
		'session_id' => 'int'
	];

	protected $fillable = [
		'session_id',
		'item',
		'status'
	];
}
