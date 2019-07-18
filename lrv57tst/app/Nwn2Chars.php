<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Nwn2Chars extends Model
{
    use Sortable;

    protected $fillable = [
        'imgurl', 'name', 'gender', 'race', 'alignment',
        'startclass','lvlclass1','class2', 'lvlclass2','class3', 'lvlclass3','class4', 'lvlclass4',
        'lvltotal','layer'
    ];

    public $sortable = ['id','name','race','layer','lvltotal'];
}
