<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getData() {
        return $this -> id . '： ' . $this -> name . '(' . $this -> age . ')';
    }
}
