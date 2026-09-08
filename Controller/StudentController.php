<?php

namespace Controller;

use Entities\Student;

require_once 'Entities/Student.php';


class StudentController
{
    public function getList($code)
    {
        $list = [
            new Student("Huyen", "Dao", "2007-02-21", "123", 2, "Phu Tho", 1, 1),
            new Student("Phuong", "Dao", "2007-02-11", "123", 1, "Phu Tho", 1, 2),
            new Student("Huyen", "Dao", "2007-02-21", "123", 3, "Phu Tho", 1, 3),
        ];
        return $list;
    }

    public function filter($class) {}
}
