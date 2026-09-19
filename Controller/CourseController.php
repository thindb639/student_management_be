<?php

namespace Controller;

use Entities\Course;

require_once 'Entities/Course.php';


class CourseController
{
    public function getList($code)
    {
        $list = [
           new Course(1, "A01","Lap trinh co ban 1",3,3),
           new Course(2, "A02","Lap trinh co ban 2",2,4),
           new Course(3, "A03","Lap trinh co ban 3",1,3),
        ];
        return $list;
    }

    public function filter($class) {}
}
