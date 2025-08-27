<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
    body { font-family: sans-serif; text-align: center; background: #eee; }
    .calculator { background: #fff; padding: 15px; width: 250px; margin: 50px auto; border: 1px solid #ccc; }
    input, button { width: 100%; margin: 5px 0; padding: 8px; }
    .result { margin-top: 10px; font-weight: bold; }
</style>

</head>
<body>
    <h1>Grade Calculator</h1>
    <!-- dito ko ininput or mag iinput ng number or score sa quiz,assignment,exam
    <div class="calculator">
        <form method="POST">
            <input type="number" name="Quiz" placeholder="Quiz Score" required>
            <input type="number" name="Assignment" placeholder="Assignment Score" required>
            <input type="number" name="Exam" placeholder="Exam Score" required>
            <button type="submit">Calculate</button>
            
        </form>
        
        <?php
if ($_POST) {
    // ito dito mapupunta yung ininput ko sa quiz,assignment,exam
    $Quiz  = $_POST['Quiz'];
    $Assignment = $_POST['Assignment'];
    $Exam = $_POST['Exam'];

    $result = ($Quiz * 0.30) + ($Assignment * 0.30) + ($Exam * 0.40);
    // dito mo malalaman kung anong average or grades ang nakuha mo
    if ($result >= 90) {
        $letterGrade = "A";
    } elseif ($result >= 80) {
        $letterGrade = "B";
    } elseif ($result >= 70) {
        $letterGrade = "C";
    } elseif ($result >= 60) {
        $letterGrade = "D";
    } else {
        $letterGrade = "F";
    }
    // ito dito na lalabas ang average mo at kung anong letter grade ka
    echo "<div class='result'>Final Grade: " . number_format($result, 1) . "<br>Letter Grade: $letterGrade</div>";
}
?>

    </div>
</body>
</html>