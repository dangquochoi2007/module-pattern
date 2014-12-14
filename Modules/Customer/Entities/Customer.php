<?php

namespace Modules\Customer\Entities;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $fillable = [
        "email", 
        "group_id", 
        "is_active", 
        "disable_auto_group_change"];

}
