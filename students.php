<?php
$students =  [["name" => "Haneen Hamdia", "grade" => 95, "age" => 20],
             ["name" => "Yasmeen Mohsen", "grade" => 90, "age" => 19],
             ["name" => "Mariam Abd", "grade" => 74, "age" => 22],
             ["name" => "Taleen khader", "grade" => 55, "age" => 19],
             ["name" => "Ibrahim shaban", "grade" => 61, "age" => 23]];

function calculateStatus($grade) {
    if($grade >= 90){
        return "Excellent";
}elseif($grade >= 80){
    return "Very Good";
}elseif($grade >= 70){
    return "Good";
}elseif($grade >= 60){
    return "Pass";
}elseif($grade < 60){
    return "Fail";
}}
$GradesTotal = 0;
$successCount = 0;
$gradesList = []; 

foreach ($students as $student) {
    $G = $student['grade']; 
    $gradesList[] = $G;    
    $GradesTotal = $GradesTotal+ $G;
    if ($G >= 60) {
        $successCount++;
    }
}
$maxGrade = max($gradesList);
$minGrade = min($gradesList);
$averageGrade = $GradesTotal / count($students);

?>
<html>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Age</th>
                <th>Grade</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($students as $student){?>
                <tr>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['age']; ?></td>
                    <td><?php echo $student['grade']; ?></td>
                    <td><?php echo calculateStatus($student['grade']);?></td>
                </tr>
                  <?php } ?>
              
        </tbody>
    </table>
   <h3> Student statistics:</h3>
    <ul>
        <li>Highest Grade: <?php echo $maxGrade; ?></li>
        <li>Lowest Grade: <?php echo $minGrade; ?></li>
        <li>Average Grade: <?php echo $averageGrade; ?></li>
        <li>Number of Successful Students: <?php echo $successCount; ?></li>
    </ul>

</body>
</html>
