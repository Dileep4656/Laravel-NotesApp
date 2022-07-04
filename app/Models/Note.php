<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
	 * This is a  model for Notes table
     */
    protected $fillable = ['title','description'];


    /**
     * The tags that belong to the note.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
