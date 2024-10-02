<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Implementations\QueryBuilderImplementation;

class RegistrationRepository extends QueryBuilderImplementation
{

    public $fillable = ['schoolyears_id', 'name_student', 'date_of_birth', 'gender', 'elementary_of_origin', 'phone_number', 'home_address'];

    public function __construct()
    {
        $this->table = 'registration';
        $this->pk = 'id';
    }

}
