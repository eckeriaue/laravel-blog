<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 */
class Post extends Model
{
    use HasFactory;
    public string $someProperty = 'tet';
    protected $table = 'posts';
}
