<?php
if(isset($_SESSION)){

session_start();
}

include_once("../DBConnection.php');

if(isset($_SESSION['is_login'])){

$stuEmail = $_SESSION['stulogEmail'[];

} 
else 
{
echo "<script> location.href='../index.php'; </script>";
}

$sql = "SELECT * FROM student WHERE stu_email='$stuEmail'";
$result = $conn->query ($sql);

if($result->num_rows == 1)
{ 
  $row = $result->fetch_assoc();
  $stuld = $row["stu_id"]; 
  )

  if (isset($_REQUEST[ 'submitFeedbackbtn']))
  {
      if (($_REQUEST['f_content'] == ""))
      { 
  // msg displayed if required field missing 
    
  $passmsg = "<div class="alert alert-warning col-sm-6 ml-5 mt-2"
    role="alert"> Fill All Fileds </div>"; 
  } 
  
  else 
  { 
  $fcontent = $_REQUEST["f_content"]; 
  $sql = “INSERT INTO feedback (f_content, stu_id) VALUES 
  ('$fcontent', '$stuld')"; 














?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="../CSS/studentFB.css">
</head>
<body>
  <div class="container">
    <h2>Feedback Form</h2>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php ?>"required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
      </div>
      <button type="submit" name="submitfeedbackbtn">Submit</button>

    </form>
  </div>
</body>
</html>
