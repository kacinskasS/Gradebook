<?php
// Titulinis puslapis
$routes['GET'][] = [
    '_name' => 'home',
    '_pattern' => '^/$',
    '_controller' => 'DefaultController',
    '_action' => 'indexAction',
    '_args' => false,
];

//login
$routes['POST'][] = [
    '_name' => 'login',
    '_pattern' => '^/user/login(/|$)',
    '_controller' => 'SecurityController',
    '_action' => 'loginAction',
    '_args' => false,
];


//logout
$routes['GET'][] = [
    '_name' => 'logout',
    '_pattern' => '^/user/logout(/|$)',
    '_controller' => 'SecurityController',
    '_action' => 'logoutAction',
    '_args' => false,
];

//students add
$routes['GET'][] = [
    '_name' => 'add_student',
    '_pattern' => '^/student/add(/|$)',
    '_controller' => 'StudentsController',
    '_action' => 'addStudentAction',
    '_args' => false,
];

//students add post
$routes['POST'][] = [
    '_name' => 'add_student',
    '_pattern' => '^/student/add(/|$)',
    '_controller' => 'StudentsController',
    '_action' => 'addStudentAction',
    '_args' => false,
];

//students edit
$routes['GET'][] = [
    '_name' => 'edit_student',
    '_pattern' => '^/student/edit/(\d+)(/|$)',
    '_controller' => 'StudentsController',
    '_action' => 'editStudentAction',
    '_args' => 3,
];

//students edit post
$routes['POST'][] = [
    '_name' => 'edit_student',
    '_pattern' => '^/student/edit/(\d+)(/|$)',
    '_controller' => 'StudentsController',
    '_action' => 'editStudentAction',
    '_args' => 3,
];

//students delete
$routes['GET'][] = [
    '_name' => 'delete_student',
    '_pattern' => '^/student/delete/(\d+)(/|$)',
    '_controller' => 'StudentsController',
    '_action' => 'deleteStudentAction',
    '_args' => 3,
];

//lectures add
$routes['GET'][] = [
    '_name' => 'add_lecture',
    '_pattern' => '^/lecture/add(/|$)',
    '_controller' => 'LecturesController',
    '_action' => 'addLectureAction',
    '_args' => false,
];

//lectures add post
$routes['POST'][] = [
    '_name' => 'add_lecture',
    '_pattern' => '^/lecture/add(/|$)',
    '_controller' => 'LecturesController',
    '_action' => 'addLectureAction',
    '_args' => false,
];

//lectures edit
$routes['GET'][] = [
    '_name' => 'edit_lecture',
    '_pattern' => '^/lecture/edit/(\d+)(/|$)',
    '_controller' => 'LecturesController',
    '_action' => 'editLectureAction',
    '_args' => 3,
];

//lectures edit post
$routes['POST'][] = [
    '_name' => 'edit_lecture',
    '_pattern' => '^/lecture/edit/(\d+)(/|$)',
    '_controller' => 'LecturesController',
    '_action' => 'editLectureAction',
    '_args' => 3,
];

//lectures delete
$routes['GET'][] = [
    '_name' => 'delete_lecture',
    '_pattern' => '^/lecture/delete/(\d+)(/|$)',
    '_controller' => 'LecturesController',
    '_action' => 'deleteLectureAction',
    '_args' => 3,
];

//grades add
$routes['GET'][] = [
    '_name' => 'add_grade',
    '_pattern' => '^/grade/add(/|$)',
    '_controller' => 'GradesController',
    '_action' => 'addGradeAction',
    '_args' => false,
];

//grades add post
$routes['POST'][] = [
    '_name' => 'add_grade',
    '_pattern' => '^/grade/add(/|$)',
    '_controller' => 'GradesController',
    '_action' => 'addGradeAction',
    '_args' => false,
];


