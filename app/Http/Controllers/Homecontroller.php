<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseList;

class Homecontroller extends Controller
{
    private $courses,$randomKeys,$singleDetail;
    public function index()
    {
        $this->courses = CourseList::getAllCourses();
        return view('home', ['courses' => $this->courses]);
    }
    public function about()
    {
        $this->courses = CourseList::getAllCourses();
        $this->randomKeys = array_rand($this->courses, 4);
        $randomCourses = array_intersect_key($this->courses, array_flip($this->randomKeys));
        return view('about', ['courses' => $randomCourses]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function assesment()
    {
        return view('assesment');
    }
    public function details($id)
{
    $this->singleDetail = CourseList::getAllCoursesById($id);
    return view('details', ['course' => $this->singleDetail]);
}
    public function dashboard()
    {
        return view('dashboard');
    }
}
