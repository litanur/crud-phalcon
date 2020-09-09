<?php

namespace Application\Models;

use Phalcon\Mvc\Model;

class Employee extends Model {
    public $emp_id;
    public $emp_fullname;
    public $emp_nickname;
    public $emp_email;
}
