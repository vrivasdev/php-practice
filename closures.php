<?php 

$students = [
    [ 'id' => 12, 'name' => 'Maria', 'grade' => 18],
    [ 'id' => 3, 'name' => 'Pepe', 'grade' => 19],
    [ 'id' => 1, 'name' => 'Jose', 'grade' => 20],
    [ 'id' => 21, 'name' => 'Susana', 'grade' => 9],
    [ 'id' => 6, 'name' => 'Daniel', 'grade' => 8]
];

$approved = array_filter($students, function($student) {
    return $student['grade'] >= 10;
});
