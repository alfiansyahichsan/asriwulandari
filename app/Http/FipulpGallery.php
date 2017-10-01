<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FipulpGallery extends Model
{
    use SoftDeletes;
    protected $table = 'fipulp_gallery';
	protected $primaryKey = 'id_gallery';

    public function image() {
        if ($this->image_source == "") {
            $this->image_soure = "default.jpg";
        }
        return $this->image_source;
    }
}
