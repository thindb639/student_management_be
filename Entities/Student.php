<?php

namespace Entities;

use Entities\Course;

require_once 'Entities/Course.php';


class Student
{
    public int $id;

    public string $first_name;
    public string $last_name;

    private string $date_of_birth;

    public string $code;

    public int $gender;

    public string $address;

    public int $status;

    public int $class_id;

    public array $class;

    public array $teacher;


    public function getDateOfBirth(): string
    {
        return substr($this->date_of_birth, 5, 10); // cat chuoi
    }

    public function getFullname(): string
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function getGender(): string
    {
        if ($this->gender == 1) {
            return "Nam";
        } else if ($this->gender == 2) {
            return "Nu";
        } else {
            return "Chua xac dinh";
        }
    }

    public function getClassName(): string
    {
        $class = $this->class;
        for ($i = 0; $i < count($class); $i++) {
            if ($this->class_id == $class[$i]->id) {
                return $this->class[$i]->name;
            }
        }
        return "chưa được xếp lớp";
    }

    public function getTeacherName(): string
{
    for ($i = 0; $i < count($this->class); $i++) {
        if ($this->class_id == $this->class[$i]->id) {
            return $this->class[$i]->getTeachName();
        }
    }

    return "Chưa có giáo viên";
}



    public function __construct(
        string $first_name,
        string $last_name,
        string $date_of_birth,
        string $code,
        int $gender,
        string $address,
        int $status,
        int $class_id,
    ) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->code = $code;
        $this->gender = $gender;
        $this->address = $address;
        $this->status = $status;
        $this->class_id = $class_id;

        $this->class = [
            new Course(1, "A01", "Lap trinh co ban 1", 3, 3),
            new Course(2, "A02", "Lap trinh co ban 2", 2, 4),
            new Course(3, "A03", "Lap trinh co ban 3", 1, 3),
        ];

        
    }
}
