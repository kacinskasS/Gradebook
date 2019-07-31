<?php

require_once ROOT_DIR.'/lib/Db.php';

function getAllStudents()
{
    $query = "SELECT id, name, surname, email, phone FROM students ORDER BY surname ASC";

    $students = dbQuery($query);

    if (empty($students)) {
        return ['fail' => 'Nera studentu'];
    }

    return $students;
}

function editStudent($studentId)
{
    if ($_POST) {
        $query = "UPDATE students SET name = ?, surname = ?, email = ?, phone = ? WHERE id = ?";
        $run = dbQuery(
            $query, ['s', 's', 's',  's', 'i'],
            [$_POST['name'], $_POST['surname'], $_POST['email'], $_POST['phone'], $studentId], 'w'
        );
        if (isset($run['fail'])) {
            return $run;
        }
    }
    $query = "SELECT id, name, surname, email, phone FROM students WHERE id=?";

    $student = dbQuery($query, ['i'], [$studentId]);

    if (empty($student)) {
        return ['fail' => 'Nera studento'];
    }

    return reset($student);
}

function addStudent()
{
    if ($_POST) {
        $query = "INSERT INTO students(name, surname, email, phone) VALUES (?,?,?,?)";
        $student_id = dbQuery(
            $query, ['s', 's', 's', 's'], [$_POST['name'], $_POST['surname'], $_POST['email'], $_POST['phone']], 'w', true
        );

        return $student_id;
    } else {
        return false;
    }

}

function deleteStudent($studentId)
{
    $query = "DELETE FROM students where id=?";
    dbQuery($query, ['i'], [$studentId], 'w');
}

function getOneStudentGrades($studentId)
{
    $query ="SELECT lectures.name, 
            GROUP_CONCAT(DISTINCT grades.grade
            SEPARATOR ', ') AS all_grades
            FROM grades
            LEFT JOIN lectures ON grades.lecture_id = lectures.id
            WHERE grades.student_id = ?
            GROUP BY grades.lecture_id";
    $grades = dbQuery($query, ['i'], [$studentId]);
    return $grades;
}



