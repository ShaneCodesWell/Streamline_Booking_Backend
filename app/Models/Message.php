<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $id
 * @property int|null $sender_id
 * @property int|null $receiver_id
 * @property string $content
 * @property Carbon $sent_at
 * @property string|null $status
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $table = 'messages';
	public $timestamps = false;

	protected $casts = [
		'sender_id' => 'int',
		'receiver_id' => 'int',
		'sent_at' => 'datetime'
	];

	protected $fillable = [
		'sender_id',
		'receiver_id',
		'content',
		'sent_at',
		'status'
	];
}
