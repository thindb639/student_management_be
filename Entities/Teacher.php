<?php

namespace Entities;

class Teacher
{

    public int $id;

    public string $first_name;

    public string $last_name;

    public string $phone_number;

    private string $address;

    public int $gender;


    public function getGender(): string
    {
        if ($this->gender == 1) {
            return "nam";
        } else if ($this->gender == 2) {
            return "nu";
        } else {
            return "chua xac dinh";
        }
    }

    public function getFullname(): string
    {
        return $this->first_name . " " . $this->last_name;
    }


    public function __construct(
        int $id,
        string $first_name,
        string $last_name,
        string $phone_number,
        int $gender,
        string $address,
    ) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone_number = $phone_number;
        $this->gender = $gender;
        $this->address = $address;
    }
}
