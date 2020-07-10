<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoTag extends Model
{
    protected $table = "info_tag";
    protected $fillable = ['info_id', 'tag_id'];
}