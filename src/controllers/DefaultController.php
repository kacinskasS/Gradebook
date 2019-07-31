<?php

function indexAction()
{
    $baseTemplate = ROOT_DIR.'/src/views/templates/base.html.php';
    if (!isset($_SESSION['user'])) {
        $formTemplate = ROOT_DIR.'/src/views/templates/crud/user_login_form.html.php';
        $parameters['form'] = view($formTemplate);
    } else {
        $studentListTemplate = ROOT_DIR.'/src/views/templates/crud/student_list.html.php';
        require_once ROOT_DIR.'/src/models/Student.php';
        $students = getAllStudents();
        $parameters['list'] = view($studentListTemplate, ['students' => $students]);


    }


    return view($baseTemplate, $parameters);
}

