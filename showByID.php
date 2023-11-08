<?php
include("topBar.php");
?>
<html>
    <head>
        <title>Health Information DB</title>
        <link rel="stylesheet" href="css/show.css">
    </head>
    <body>
        <br><br>
        <form name="health" method="post">
            <div class="formDiv">
                Fill Student ID: <input type="number" required name="sid">
                <input type="submit" value="Show Record" name="show" id="showbtn">
            </div>
        </form>
</body>
</html>
<?php
if(isset($_POST["show"]))
{
$conn = mysqli_connect("localhost","root", "","healthDB");
if (!$conn) {
    die("Connection error " . mysqli_connect_error());
}
$studentid=$_POST["sid"];
$output = mysqli_query($conn,"SELECT * FROM healthInfo where studentID='$studentid'");
if (mysqli_num_rows($output) > 0) {       
        echo '<h1>Student Health Status</h1>';            
    while ($row = mysqli_fetch_assoc($output)) {
        
        echo '<p>ID:' . $row['studentID'] . '</p>';
        echo '<p>Name:' . $row['studentName'] . '</p>';
        echo '<p>Age: ' . $row['age'] . '</p>';
        echo '<p>Address:' . $row['address'] . '</p>';
        echo '<p>Contact:' . $row['contact'] . '</p>';
        echo '<p>Suger :' . $row['suger'] . '</p>';
        echo '<p>Lower BP :' . $row['lbp'] . '</p>';
        echo '<p>Upper BP :' . $row['hbp'] . '</p>';
        echo '<p>Body Temperature in Fahrenheit:' . $row['bodytemp'] . '</p>';
        echo '<p>Heart Rate:' . $row['heartrate'] . '</p>';
        echo '<p>Blood :' . $row['hb'] . '</p>';
        
    }       
} else {
    echo "<h2 align='center'>No data is available for the given student id</h2>";
}
mysqli_close($conn); 
}
?>