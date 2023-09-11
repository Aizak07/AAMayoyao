<?php
$score = 0;
if (isset($_POST['q1'])) {
    $q1 = $_POST['q1'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q2'])) {
    $q1 = $_POST['q2'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q3'])) {
    $q1 = $_POST['q3'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q4'])) {
    $q1 = $_POST['q4'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q5'])) {
    $q1 = $_POST['q5'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q6'])) {
    $q1 = $_POST['q6'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q7'])) {
    $q1 = $_POST['q7'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q8'])) {
    $q1 = $_POST['q8'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q9'])) {
    $q1 = $_POST['q9'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q10'])) {
    $q1 = $_POST['q10'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q11'])) {
    $q1 = $_POST['q11'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q12'])) {
    $q1 = $_POST['q12'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q13'])) {
    $q1 = $_POST['q13'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q14'])) {
    $q1 = $_POST['q14'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q15'])) {
    $q1 = $_POST['q15'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q16'])) {
    $q1 = $_POST['q16'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q17'])) {
    $q1 = $_POST['q17'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q18'])) {
    $q1 = $_POST['q18'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q19'])) {
    $q1 = $_POST['q19'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q20'])) {
    $q1 = $_POST['q20'];
    if ($q1 == 'correct') {
        $score++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <style>
        .results{
            padding:30px;
            width: 20%;
            background-color:#5B9A8B;
            border-radius:30px;
            display: flex;
            justify-content: center;
            margin:auto;
            margin-top:5%;
        }
        .examTitle{
            background-color: #183D3D;
            color: white;
            padding: 80px;
            font-size: 40px;
            padding-left:33%;
            margin:0;
    }
    </style>
    <h1 class = "examTitle">Assuption Academy General Exam</h1>
</head>
<body>
    <div class = "results">
    <h2><?php echo 'Your score is: ' . $score; ?></h2>
</div>
</body>
</html>