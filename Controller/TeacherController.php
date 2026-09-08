<?php 

namespace Controller;

use Entities\Teacher;

require_once  'Entities/Teacher.php';

class TeacherController {
 
public function getList($code) 
{
    $list = [
        new Teacher(1, "Minh", "Chau", "012345678", 2, "Ha Noi"),
        new Teacher(2, "Luong", "Quan", "09876544", 1, "Ha Noi"),
        new Teacher(3, "Luong", "Quan", "09876544", 3, "Ha Noi"),
    ];
    return $list;
}
public function filter($class) {}
}

