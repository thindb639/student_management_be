<?php

namespace Entities;
use Entities\Teacher;

require_once  'Entities/Teacher.php';
 

class Course
{
    public int $id;
    public string $code;

    public string $name;

    public string $teacher_id;

    public array $teachers = [
        ["id" => 1, 'name' => "ABC"],
        ["id" => 2, 'name' => "a"],
        ["id" => 3, 'name' => "s"],
        ["id" => 4, 'name' => "d"],
    ];
    
    public array $teacher;
    public int $credit;
    public function getTeachName(): string
    {
        for ($i = 0; $i < count($this->teachers); $i++) {
            if ($this->teacher_id == $this->teacher[$i]->id) {
                        return $this->teacher[$i]->getFullname();
                    }
                }
        return "Chưa có giáo viên";
    }

    

    public function __construct(
        int $id,
        string $code,
        string $name,
        string $teacher_id,
        int $credit,
    ) {
        $this->id = $id;
        $this->code = $code;
        $this->name = $name;
        $this->teacher_id = $teacher_id;
        $this->credit = $credit;

        $this->teacher = [
            new Teacher(1, "Minh", "Chau", "012345678", 2, "Ha Noi", 2),
            new Teacher(2, "Luong", "Quan", "09876544", 1, "Ha Noi", 1),
            new Teacher(3, "Luong", "Quan", "09876544", 3, "Ha Noi", 3),
        ];
    }
}
