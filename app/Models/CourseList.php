<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseList extends Model
{
    use HasFactory;

    public static $courses;

    public static function course(){

        self::$courses = [
            0 => [
                'id' => 1,
                'title' => 'Introduction to PHP',
                'description' => 'Learn the basics of PHP programming, including syntax, variables, and control structures.',
                'duration' => '20 Aug - 20 Dec',
                'price' => 299.99,
                'total_hours' => 15,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '29 June',
                'no_classes' => '108',
                'schedule_day' => 'Sat ,Mon ,Wednesday',
                'schedule_time' => '9 AM',
                'technology' => [
                    0 => 'HTML',
                    1 => 'css'
                ],
                'videos' => '108',
                'resources' => '108',
                'projects' => '104',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Basics of HTML',
                        'modules_content' => [
                            0 => 'HTML Tags, Attributes,',
                            1 => 'HTML Tags, Attributes,'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Basics of HTML',
                        'modules_content' => [
                            0 => 'HTML Tags, Attributes,',
                            1 => 'HTML Tags, Attributes,'
                        ]
                    ]
                ],


            ],
            1 => [
                'id' => 2,
                'title' => 'Advanced JavaScript',
                'description' => 'Master advanced JavaScript concepts and modern ES6+ features.',
                'duration' => '15 Sep - 15 Jan',
                'price' => 349.99,
                'total_hours' => 20,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '31 July',
                'no_classes' => '120',
                'schedule_day' => 'Mon ,Thu ,Saturday',
                'schedule_time' => '7 PM',
                'technology' => [
                    1 => 'JavaScript',
                ],
                'videos' => '120',
                'resources' => '130',
                'projects' => '110',
                'teacher_name' => 'MD. RASHED KARIM',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1618732479.jpg',
                'teacher_details' => 'Experienced Head Of Software with a demonstrated history of working in the education and software industry. Strong engineering professional skilled in Project Management, Software Testing, Different Databases, Software Architecture, Programming Languages like Java, PHP, Spring Framework, Hibernate. Degree: Doctor of Philosophy in Computer EngineeringInstitution: Universiti Malaysia Perlis',
                'modules' => [
                    0 => [
                        'modules_title' => 'ES6+ Features',
                        'modules_content' => [
                            0 => 'Arrow Functions, Destructuring',
                            1 => 'Promises, Async/Await'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Advanced Concepts',
                        'modules_content' => [
                            0 => 'Closures, Prototypes',
                            1 => 'Functional Programming'
                        ]
                    ]
                ]
            ],
            2 => [
                'id' => 3,
                'title' => 'Data Science Fundamentals',
                'description' => 'Introduction to data analysis, visualization, and machine learning with Python.',
                'duration' => '1 Oct - 1 Feb',
                'price' => 399.99,
                'total_hours' => 25,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '15 August',
                'no_classes' => '130',
                'schedule_day' => 'Tue ,Fri ,Sunday',
                'schedule_time' => '6 PM',
                'technology' => [
                    1 => 'Python',
                ],
                'videos' => '130',
                'resources' => '150',
                'projects' => '115',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Data Analysis with Python',
                        'modules_content' => [
                            0 => 'Pandas for Data Manipulation',
                            1 => 'Data Visualization with Matplotlib'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Machine Learning Basics',
                        'modules_content' => [
                            0 => 'Supervised Learning Algorithms',
                            1 => 'Unsupervised Learning Techniques'
                        ]
                    ]
                ]
            ],
            3 => [
                'id' => 3,
                'title' => 'Data Science Fundamentals',
                'description' => 'Introduction to data analysis, visualization, and machine learning with Python.',
                'duration' => '1 Oct - 1 Feb',
                'price' => 399.99,
                'total_hours' => 25,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '15 August',
                'no_classes' => '130',
                'schedule_day' => 'Tue ,Fri ,Sunday',
                'schedule_time' => '6 PM',
                'technology' => [
                    1 => 'Python',
                ],
                'videos' => '130',
                'resources' => '150',
                'projects' => '115',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Data Analysis with Python',
                        'modules_content' => [
                            0 => 'Pandas for Data Manipulation',
                            1 => 'Data Visualization with Matplotlib'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Machine Learning Basics',
                        'modules_content' => [
                            0 => 'Supervised Learning Algorithms',
                            1 => 'Unsupervised Learning Techniques'
                        ]
                    ]
                ]
            ],
            4 => [
                'id' => 4,
                'title' => 'Data Science Fundamentals',
                'description' => 'Introduction to data analysis, visualization, and machine learning with Python.',
                'duration' => '1 Oct - 1 Feb',
                'price' => 399.99,
                'total_hours' => 25,
                'image_url' => 'https://bitm.org.bd/assets/media/course_banner/1705811815.png',
                'last_date' => '15 August',
                'no_classes' => '130',
                'schedule_day' => 'Tue ,Fri ,Sunday',
                'schedule_time' => '6 PM',
                'technology' => [
                    1 => 'Python',
                    2 => 'HTMl',
                ],
                'videos' => '130',
                'resources' => '150',
                'projects' => '115',
                'teacher_name' => 'Habibur Rahman',
                'teacher_img' => 'https://bitm.org.bd/assets/media/trainer_photo/1695814430.png',
                'teacher_details' => 'Habibur Rahman is a professional web-based application
                                    Designer, Developer, Trainer & Web Based Application System Designer. Always I
                                    want to do something where I would be able to exert my academic knowledge,
                                    experience and potentiality to develop an institute or someone career and
                                    establish as a dexterous one in the related field and in this way, I want to
                                    contribute to the welfare & enhancement of the country & world.
                                My Expertise on Computer Hardware & Networking are excellent
                                    and my Special Expertise on web based technology like HTML5, CSS3, JavaScript
                                    (SCMA-5, 6), jQuery, JSON, NodeJS, Ajax, VueJS, PHP8, Laravel 10, Codeigniter,
                                    Cake PHP,MySQL, MSSQL. I love my work & I also love to do my work.',
                'modules' => [
                    0 => [
                        'modules_title' => 'Data Analysis with Python',
                        'modules_content' => [
                            0 => 'Pandas for Data Manipulation',
                            1 => 'Data Visualization with Matplotlib'
                        ]
                    ],
                    1 => [
                        'modules_title' => 'Machine Learning Basics',
                        'modules_content' => [
                            0 => 'Supervised Learning Algorithms',
                            1 => 'Unsupervised Learning Techniques'
                        ]
                    ]
                ]
            ],
        ];
    }
    public static function getAllCourses(){
        self::course();
        return self::$courses;
    }
    public static function getAllCoursesById($id){
        self::course();
        foreach (self::$courses as $course) {
            if ($course['id'] == $id) {
                return $course;
                break;
            }
        }
    }
}
