<?php

namespace Entities;

class Course
{
    public string $code;

    public string $name;

    public string $teacher_id;

    public array $teachers = [
        ["id" => 1, 'name' => "ABC"],
        ["id" => 2, 'name' => "a"],
        ["id" => 3, 'name' => "s"],
        ["id" => 4, 'name' => "d"],
    ];
    

    public int $credit;
    public function getTeachName(): string
    {
     for($i = 0; $i < count($this->teachers); $i++){
        if($this->teacher_id==$this->teachers[$i]["id"]){
        
            return $this->teachers[$i]['name'];
        }
     }
        
        
    } 
        


    

    public function __construct(
        string $code,
        string $name,
        string $teacher_id,
        int $credit,
    ) {
        $this->code = $code;
        $this->name = $name;
        $this->teacher_id = $teacher_id;
        $this->credit = $credit;
    }
}
