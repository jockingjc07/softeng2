<?php

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $department = $_POST['department'];
    $division = $_POST['division'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $duration = $_POST['duration'];
    $maxValue = $_POST['maxPoints'];

    include '../database/database.php';
    include '../model/CI_activities.model.php';
    include '../controller/CI_activities.contr.php';

    $AddActivity = new CIActivityContr($title, $date, $venue, $department, $division, $description, $type, $duration, $maxValue);
    $AddActivity->AddActivities();

    header('Location: ../view/CI_Activities.php?success=activitycreated');
}


if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $department = $_POST['department'];
    $division = $_POST['division'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $duration = $_POST['duration'];
    $maxValue = $_POST['maxPoints'];

    include '../database/database.php';
    include '../model/CI_activities.model.php';
    include '../controller/CI_activities.contr.php';

    $EditActivity = new EditActivityContr($id, $title, $date, $venue, $department, $division, $description, $type, $duration, $maxValue);
    $EditActivity->EditActivity();

    header('Location: ../view/CI_Activities.php?success=activityEdit');
}
