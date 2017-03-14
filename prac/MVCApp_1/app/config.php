<?php

Config::set('site_name', 'MVC Training');
Config::set('baseURL', 'http://localhost/prac/MVCApp_1/public');

//Controllers, models

Config::set('home', 'Home');
Config::set('student', 'Student');
Config::set('teacher', 'Teacher');
Config::set('course', 'Course');

Config::set('studentmod', 'StudentModel');
Config::set('teachermod', 'TeacherModel');
Config::set('coursemod', 'CourseModel');


//Database


Config::set('db.host', 'localhost');
Config::set('db.username', 'root');
Config::set('db.password', '123');
Config::set('db.db_name', 'db_mvc');
