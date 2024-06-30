<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int|null $blog_id
 * @property int|null $user_id
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';

	protected $casts = [
		'blog_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'blog_id',
		'user_id',
		'content'
	];
}
