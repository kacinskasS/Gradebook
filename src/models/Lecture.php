<?php

require_once ROOT_DIR.'/lib/Db.php';

function getAllLectures()
{
    $query = "SELECT id, name, description FROM lectures ORDER BY name ASC";

    $lectures = dbQuery($query);

    if (empty($lectures)) {
        return ['fail' => 'Nera paskaitu'];
    }

    return $lectures;
}

function addLecture()
{
    if ($_POST) {
        $query = "INSERT INTO lectures(name, description) VALUES (?,?)";
        $lecture_id = dbQuery(
            $query, ['s', 's'], [$_POST['name'],  $_POST['description']], 'w', true
        );

        return $lecture_id;
    } else {
        return false;
    }

}

function editLecture($lectureId)
{
    if ($_POST) {
        $query = "UPDATE lectures SET name = ?, description = ? WHERE id = ?";
        $run = dbQuery(
            $query, [ 's',  's', 'i'],
            [$_POST['name'], $_POST['description'], $lectureId], 'w'
        );
        if (isset($run['fail'])) {
            return $run;
        }
    }
    $query = "SELECT id, name, description FROM lectures WHERE id=?";

    $lecture = dbQuery($query, ['i'], [$lectureId]);

    if (empty($lecture)) {
        return ['fail' => 'Nera paskaitos'];
    }

    return reset($lecture);
}

function deleteLecture($lectureId)
{
    $query = "DELETE FROM lectures where id=?";
    dbQuery($query, ['i'], [$lectureId], 'w');
}