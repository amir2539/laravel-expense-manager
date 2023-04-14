<?php

namespace App\Models\Groups;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $group_id
 * @property int $user_id
 * @property Carbon $created_at
 *
 * @property Group $group
 * @property User $user
 */
class GroupUser extends Model
{
    use HasFactory;

    protected $table = 'group_user';

    const UPDATED_AT = null;

    protected $fillable = [
        'group_id',
        'user_id'
    ];

    // Relations

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
