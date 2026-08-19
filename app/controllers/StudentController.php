<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $_SESSION['student_access'] = true;
        $this->call->view('student/index');
    }

    public function profile()
    {
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            header('Location: /student');
            exit;
        }

        $student = [
            'student_id' => 'MCC2023-01228',
            'name' => 'Hasmin A. Macabantog',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F6',
            'email' => 'hasminambola33@gmail.com'
        ];

        $this->call->view('student/profile', $student);
    }
}