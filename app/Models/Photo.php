<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    public $imagePath;

    public function __construct($path)
    {
        $this->imagePath = $path;       
    }
}
