<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicedetail extends Model
{
    protected $fillable = [ 'Category','servicecategories_id','NameofDepartment', 'departments_id', 'lifeeventcategories_id', 'entitle','maltitle','serviceurl','remarks','enkeywords','malkeywords','modifiedby','status'
      	];
}
