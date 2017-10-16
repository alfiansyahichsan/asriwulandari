<?php

namespace App\Models\Asriwulandari;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
	use SoftDeletes;
    protected $table ='asriblogs';
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
    
    public function next()
    {
        return Blog::where('id', '>', $this->id)->orderBy('id','asc')->first();
    }

    public  function prev()
    {
        return Blog::where('id', '<', $this->id)->orderBy('id','desc')->first();
    }

    public function nextbiod()
    {
        return Blog::where('id', '>', $this->id)->where('status',3)->orderBy('id','asc')->first();
    }

    public  function prevbiod()
    {
        return Blog::where('id', '<', $this->id)->where('status',3)->orderBy('id','desc')->first();
    }

    public function nextfip()
    {
        return Blog::where('id', '>', $this->id)->where('status',4)->orderBy('id','asc')->first();
    }

    public  function prevfip()
    {
        return Blog::where('id', '<', $this->id)->where('status',4)->orderBy('id','desc')->first();
    }

}
