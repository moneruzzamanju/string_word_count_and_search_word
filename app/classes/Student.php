<?php

namespace App\classes;

class Student
{

    protected $text;
    protected $students;
    protected $result=[];

    public function __construct($post=null)
    {
        if(isset($post['search']))
        {
            $this->text = $post['search'];
        }
    }
    public function getAllStudent()
    {
        return [
            0 => [
                'name'=>'Moneruzzaman',
                'mobile'=>'01716865615',
                'email'=>'moneruzzaman@gmail.com',
                'address'=>'mohakhali'
            ],
            1 => [
                'name'=>'Robiul',
                'mobile'=>'01716865618',
                'email'=>'robiul@gmail.com',
                'address'=>'mohakhali'
            ],
            2 => [
                'name'=>'Miraz',
                'mobile'=>'01716865617',
                'email'=>'miraz@gmail.com',
                'address'=>'mohakhali'
            ],
        ];
    }

    public function getStudentBySearchText()
    {
        $this->students =   $this->getAllStudent();

        foreach ($this->students as $student)
        {
            if($this->text == $student['name'])
            {
                $this->result=  $student;
                break;
            }
            
        }
        return $this->result;
    }
}