<?php

require_once ROOT_DIR.'/src/models/Student.php';

function addStudentAction()
{
    if ($student = addStudent()) {
        redirect(BASE_URL.'/');
    }

    $baseTemplate = ROOT_DIR.'/src/views/templates/base.html.php';
    $formTemplate = ROOT_DIR.'/src/views/templates/crud/add_student.html.php';
    $parameters['form'] = view($formTemplate);
    return view($baseTemplate, $parameters);
}

function editStudentAction($studentId)
{
    $baseTemplate = ROOT_DIR.'/src/views/templates/base.html.php';
    $formTemplate = ROOT_DIR.'/src/views/templates/crud/edit_student.html.php';
    $student = editStudent($studentId);
    $grades = getOneStudentGrades($studentId);
    $parameters['form'] = view($formTemplate, ['student' => $student, 'grades'=> $grades]);
    return view($baseTemplate, $parameters);
}

function deleteStudentAction($studentId)
{
    deleteStudent($studentId);
    redirect(BASE_URL.'/');
}

