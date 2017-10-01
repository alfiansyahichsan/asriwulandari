<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FipulpBlog extends Model
{
    use SoftDeletes;
    protected $table = 'fipulp_blog';
	protected $primaryKey = 'id_fipulp_blog';

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
