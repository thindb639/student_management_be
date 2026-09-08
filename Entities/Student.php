<?php

namespace Entities;

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

    private $class = [
            ["id" => 1,"name"=> "Tin 1"],
            ["id" => 2,"name"=> "Tin 2"],
            ["id" => 3, "name"=> "Tin 3"],
        ];
    

    public function getDateOfBirth(): string
    {
        return substr($this->date_of_birth, 5, 10); // cat chuoi
    }

    public function getFullname(): string {
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
        $classId = $this->class_id;
        for ($classId = 0; $classId <= 4; $classId++) {
            if ($classId == $this->class_id) {
                return "Tin"." ".$classId; 
            
        }    
    }
    }

    

    public function __construct(
        string $first_name,
        string $last_name,
        string $date_of_birth,
        string $code,
        int $gender,
        string $address,
        int $status,
        int $class_id
    ) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->date_of_birth = $date_of_birth;
        $this->code = $code;
        $this->gender = $gender;
        $this->address = $address;
        $this->status = $status;
        $this->class_id = $class_id;
    }
}
