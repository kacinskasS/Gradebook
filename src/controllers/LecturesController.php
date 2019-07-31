<?php

require_once ROOT_DIR.'/src/models/Lecture.php';

function addLectureAction()
{
    if ($lecture = addLecture()) {
        redirect(BASE_URL.'/lecture/add');
    }

    $baseTemplate = ROOT_DIR.'/src/views/templates/base.html.php';
    $formTemplate = ROOT_DIR.'/src/views/templates/crud/add_lecture.html.php';
    $parameters['form'] = view($formTemplate);

    $lectureListTemplate = ROOT_DIR.'/src/views/templates/crud/lecture_list.html.php';
    require_once ROOT_DIR.'/src/models/Lecture.php';
    $lectures = getAllLectures();
    $parameters['list'] = view($lectureListTemplate, ['lectures' => $lectures]);

    return view($baseTemplate, $parameters);
}

function editLectureAction($lectureId)
{



    $baseTemplate = ROOT_DIR.'/src/views/templates/base.html.php';
    $formTemplate = ROOT_DIR.'/src/views/templates/crud/edit_lecture.html.php';
    $lecture = editLecture($lectureId);
    $parameters['form'] = view($formTemplate, ['lecture' => $lecture]);

    return view($baseTemplate, $parameters);

}

function deleteLectureAction($lectureId)
{
    deleteLecture($lectureId);
    redirect(BASE_URL.'/lecture/add');
}