<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiodegumPosts extends Model
{
    use SoftDeletes;
    protected $table = 'biodegum_posts';
	protected $primaryKey = 'id';

    public function image() {
        if ($this->img_header == "") {
            $this->img_header = "default.jpg";
        }
        return $this->img_header;
    }

    public function date() {
        return $this->created_at->toFormattedDateString();
    }
    
}
