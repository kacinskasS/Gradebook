<?php

require_once ROOT_DIR.'/src/models/Grade.php';
require_once ROOT_DIR.'/src/models/Student.php';
require_once ROOT_DIR.'/src/models/Lecture.php';

function addGradeAction()
{
    if ($grade = addGrade()) {
        redirect(BASE_URL.'/');
    }

    $baseTemplate = ROOT_DIR.'/src/views/templates/base.html.php';
    $formTemplate = ROOT_DIR.'/src/views/templates/crud/add_grade.html.php';
    $parameters['form'] = view($formTemplate, ['students'=> getAllStudents(), 'lectures' => getAllLectures()]);
    return view($baseTemplate, $parameters);
}

