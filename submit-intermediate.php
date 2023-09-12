<?php
$score = 0;
if (isset($_POST['q1'])) {
    $q1 = $_POST['q1'];
    if ($q1 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q2'])) {
    $q2 = $_POST['q2'];
    if ($q2 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q3'])) {
    $q3 = $_POST['q3'];
    if ($q3 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q4'])) {
    $q4 = $_POST['q4'];
    if ($q4 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q5'])) {
    $q5 = $_POST['q5'];
    if ($q5 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q6'])) {
    $q6 = $_POST['q6'];
    if ($q6 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q7'])) {
    $q7 = $_POST['q7'];
    if ($q7 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q8'])) {
    $q8 = $_POST['q8'];
    if ($q8 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q9'])) {
    $q9 = $_POST['q9'];
    if ($q9 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q10'])) {
    $q10 = $_POST['q10'];
    if ($q10 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q11'])) {
    $q11 = $_POST['q11'];
    if ($q11 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q12'])) {
    $q12 = $_POST['q12'];
    if ($q12 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q13'])) {
    $q13 = $_POST['q13'];
    if ($q13 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q14'])) {
    $q14 = $_POST['q14'];
    if ($q14 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q15'])) {
    $q15 = $_POST['q15'];
    if ($q15 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q16'])) {
    $q16 = $_POST['q16'];
    if ($q16 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q17'])) {
    $q17 = $_POST['q17'];
    if ($q17 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q18'])) {
    $q18 = $_POST['q18'];
    if ($q18 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q19'])) {
    $q19 = $_POST['q19'];
    if ($q19 == 'correct') {
        $score++;
    }
}
if (isset($_POST['q20'])) {
    $q20 = $_POST['q20'];
    if ($q20 == 'correct') {
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
            padding: 90px;
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