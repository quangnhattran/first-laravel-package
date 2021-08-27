<?php

namespace Qt\FirstLaravelPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getUpperCasedName(): string
    {
        return strtoupper($this->name);
    }
}
