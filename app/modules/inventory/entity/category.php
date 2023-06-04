<?php

namespace App\Modules\Inventory\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @properrty int id
 * @property string name
 * @property string code

 
 */
class category extends Model
{
    //provide Name
    protected $table = "inv_category";
}
