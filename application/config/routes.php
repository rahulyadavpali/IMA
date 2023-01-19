<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller']	= 'Home';

$route['home']							= 'Home';
$route['STHE']							= 'Sthe';
$route['STHE/send-otp/']				= 'Sthe/sendotp';
$route['STHE/enrollment']				= 'Sthe/stheForm';
$route['announcements']					= 'Announcement';
$route['news-and-events']				= 'Announcement/news';
$route['about-ima']						= 'About';
$route['why-ima']						= 'About/why';
$route['courses']						= 'Courses';
$route['courses/enquiry']				= 'Courses/courseEnquiry';
$route['courses/course-submit']			= 'Courses/courseSubmit';
$route['results']						= 'Result';
$route['student-hub/lesson-planner']	= 'Studenthub';
$route['student-hub/book-solution']		= 'Studenthub/bookSolution';
$route['student-hub/important-notes']	= 'Studenthub/impNotes';
$route['student-hub/entrance-test']		= 'Studenthub/entranceTest';
$route['facilities']					= 'Facilities';
$route['image-gallery']					= 'Gallery';
$route['contact-us']					= 'Contact';
$route['terms-and-conditions']			= 'Terms';
$route['privacy-policy']				= 'Terms/policy';
$route['enquiry']						= 'Home/enquiry';


$route['admin']								= 'admin/Login';
$route['admin/dashboard']					= 'admin/Dashboard';
$route['admin/contact-us-detail']			= 'admin/Contactus';
$route['admin/talk-to-expert-detail']		= 'admin/Talkexpert';
$route['admin/result']						= 'admin/Resultadm';
$route['admin/result/add']					= 'admin/Resultadm/addRes';
$route['admin/testimonial']					= 'admin/Testimonial';
$route['admin/testimonial/add']				= 'admin/Testimonial/add';
$route['admin/photo-gallery']				= 'admin/Photo';
$route['admin/photo-gallery/add']			= 'admin/Photo/add';
$route['admin/enroll-student']				= 'admin/Enroll';
$route['admin/announcements']				= 'admin/Announcement';
$route['admin/news']						= 'admin/News';
$route['admin/lesson']						= 'admin/Lesson';
$route['admin/book']						= 'admin/Book';
$route['admin/notes']						= 'admin/Notes';
$route['admin/entrance']					= 'admin/Entrance';


$route['404_override']			= '';
$route['translate_uri_dashes']	= FALSE;
