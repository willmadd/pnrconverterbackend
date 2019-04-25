<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirlineModel extends Model
{
    protected $table = "airlinemaster";

    protected $fillable = [
        "id",
        "iatacode",
        "airline_name",
        "A",
        "B",
        "C",
        "D",
        "E",
        "F",
        "G",
        "H",
        "I",
        "J",
        "K",
        "L",
        "M",
        "N",
        "O",
        "P",
        "Q",
        "R",
        "S",
        "T",
        "U",
        "V",
        "W",
        "X",
        "Y",
        "Z",
    ];
}
