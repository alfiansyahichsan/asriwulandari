<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiodegumPortfolio extends Model
{
    use SoftDeletes;
    protected $table = 'biodegum_portfolio';
	protected $primaryKey = 'id';

    public function image() {
        if ($this->image_source == "") {
            $this->image_soure = "default.jpg";
        }
        return $this->image_source;
    }
}
