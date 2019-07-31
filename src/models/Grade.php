<?php

function addGrade()
{
    if ($_POST) {
        $query = "INSERT INTO grades(lecture_id, student_id, grade) VALUES (?,?,?)";
        $grade = dbQuery(
            $query, ['i', 'i', 'i'], [$_POST['lecture'], $_POST['student'], $_POST['grade']], 'w', true
        );

        return $grade;
    } else {
        return false;
    }

}