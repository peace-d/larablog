<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public const STATUS_ACTIVE_ID = 1;
    public const STATUS_PENDING_ID = 2;
    public const STATUS_DRAFT_ID = 3;
    public const STATUS_DELETE_ID = 4;

    use HasFactory;
}
