<?php
session_start();
if(isset($_POST['fsubmit'])){
  $user = $_POST['username'];
  $passwd = $_POST['password'];
  if($user == "VNCrootUser" and $passwd == "hashtagVNC17")
    $_SESSION['stat'] = true;
}
if(!isset($_SESSION['stat']))
  header('Location: logout.php');


require 'dbconnect.php';
$fetech_no_regis = mysqli_query($stat,"SELECT COUNT(*) AS registra FROM details");
$regis_array_fetech = mysqli_fetch_assoc($fetech_no_regis);
$fetech_data_table = mysqli_query($stat,"SELECT id,tname,emailv,applications FROM details");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
    <h1 style="text-align:center;">Admin Template</h1>

    <p style="font-size:24px;text-align:right;margin-right:45px">
      Total Registrations : <?php  echo $regis_array_fetech['registra']; ?>
    </p>
    <table style="border: 1px solid black;text-align:center;float:left">
      <tr>
        <th>ID</th>
        <th>Team Name</th>
        <th>Email status</th>
        <th>Application Status</th>
      </tr>
      <?php while($row = mysqli_fetch_assoc($fetech_data_table)) {?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['tname']; ?></td>
          <td><?php if($row['emailv'] == 0) echo "<p style=\"color:red\">Not Verified</p>"; else echo "<p style=\"color:green\">Verified</p>"; ?></td>
          <td><?php if($row['applications'] == 0) echo "<p style=\"color:blue\">Waiting For Review</p>"; else if($row['applications'] == -1) echo "<p style=\"color:red\">Rejected</p>"; else echo "<p style=\"color:green\">Accepted</p>"; ?></td>
        </tr>
        <?php } ?>
    </table>

    <form  action="check.php" method="post" style="text-align:center">
      <label>Enter Team ID  : </label>
      <input type="text" name="id" >
      <input type="submit" name="submit" >
    </form>
<script type="text/javascript">
  function ResendMail(id){
    $.ajax({
      url: "AdminMail.php",
      type: "POST",
      data: { 'id' : id, 'sen' : 1 },
      success: function(){
        alert("Verification Mail Resent");
      }
    });
  }
  function Reject(id){
    $.ajax({
      url: "AdminMail.php",
      type: "POST",
      data: { 'id' : id, 'sen' : 4 },
      success: function(){
        alert("Rejected");
      }
    });
  }
  function Accepted(id){
    $.ajax({
      url: "AdminMail.php",
      type: "POST",
      data: { 'id' : id, 'sen' : 5 },
      success: function(){
        alert("Accpeted");
      }
    });
  }
  function FileUploadReq(id) {
    $.ajax({
      url: "AdminMail.php",
      type: "POST",
      data: { 'id' : id, 'sen' : 3 },
      success: function(){
        alert("File Request mail Sent");
      }
    });
  }
</script>

  </body>
</html>
<?php
 if(isset($_POST['id'])){
   $id = $_POST['id'];
   $fetech_details = mysqli_query($stat,"SELECT * FROM details WHERE id=$id");
   $da = mysqli_fetch_assoc($fetech_details);
   $tname = $da['tname'];
   $tlname = $da['tlname'];
   $email  = $da['email'];
   $phoneone = $da['phoneone'];
   $phonetwo = $da['phonetwo'];
   $emailv = $da['emailv'];
   $applications = $da['applications'];
   echo <<<zma
   <table class="w3-table w3-blue w3-xlarge" style="margin-bottom: 100px; width: 75%; margin: 50px 50px;padding: 40%;">
     <tr>
       <th>Team Details</th>
     </tr>
     <tr>
       <td>Team Name :</td>
       <td>$tname </td>

     </tr>
     <tr>
       <td>Team ID :</td>
       <td>$id</td>

     </tr>
     <tr>
       <td>Team Leader :</td>
       <td>$tlname</td>

     </tr>
     <tr>
       <td>Team Email :</td>
       <td>$email</td>

     </tr>
     <tr>
       <td>Primary Phone :</td>
       <td>$phoneone</td>

     </tr>
     <tr>
       <td>Secondary Phone :</td>
       <td>$phonetwo</td>

     </tr>

   </table>
zma;
if($emailv == 0) echo "<button type=\"button\" name=\"button_r\" onclick=\"ResendMail($id)\">Resend Mail</button>";

if($applications == 0) {
  echo "<button type=\"button\" name=\"button_re\" onclick=\"Reject($id)\">Reject Contestent</button>";
  echo "<button type=\"button\" name=\"button_re\" onclick=\"Accepted($id)\">Accept Contestent</button>";
}
echo "<button type=\"button\" name=\"button_re\" onclick=\"FileUploadReq($id)\">File Upload Request</button>";
 }
 $path = "../uploads/$id/elfinder.html";
 echo "<iframe src=\"$path\" width=\"80%\" height=\"500px\"></iframe>";

echo "<br>";
echo "<a href=\"logout.php\" style=\"text-align:center\">Logout FROM ADMIN</a>";

 ?>
