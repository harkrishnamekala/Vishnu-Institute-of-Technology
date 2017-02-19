<?php
$round = 0;
if(isset($_GET['round'])){
   $round  = $_GET['round'];
}
require "connect.php";

$wins = $round -1;

$queryResult = mysqli_query($conn, "SELECT COUNT(*) AS heads FROM details WHERE wins = $wins");

$numberHeadarr = mysqli_fetch_assoc($queryResult);

$teams = $numberHeadarr['heads'];

$getidandTeamName = mysqli_query($conn,"SELECT max(tid) AS tid_max,min(tid) AS tid_min FROM details WHERE wins = $wins ");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ScoreBoard</title>

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="cricket-html-template-master/css/index.css"/>

  </head>
  <body>
  <header style="text-align: center">
    <img src="logo.png" height="50px" width="50px" style="float: left">
    <h1 style="font-size: 36px;color: white">Coding Tourney</h1>
  </header>
      <?php 
      $idName_arr = mysqli_fetch_assoc($getidandTeamName);
      $tid_maxi = $idName_arr['tid_max'];
      $tid_mini = $idName_arr['tid_min'];

      $no_of_teams_query = mysqli_query($conn,"SELECT cfightsid,tname,tid FROM details WHERE wins = $wins");

      while($tid_mini<$tid_maxi){

          $fetech_chicken_team_arr = mysqli_fetch_assoc($no_of_teams_query);

          $fetech_mutton_team_arr = mysqli_fetch_assoc($no_of_teams_query);

          $cfightsid_chicken_team_1 = $fetech_chicken_team_arr['cfightsid'];
          $cfightsid_mutton_team_2 = $fetech_mutton_team_arr['cfightsid'];

          $tname_chicken_team_1 = $fetech_chicken_team_arr['tname'];
          $tname_mutton_team_2 = $fetech_mutton_team_arr['tname'];


      ?>
      <div style="margin-left:auto;margin-right: auto;width:900px;height: 170px;background-color: black"> 
      
          <div class="rca-small-widget rca-padding rca-completed-match rca-top-border">
            <div class="rca-right rca-basic-text">Vailant 2K17</div>
            <div class="rca-clear"></div>
            <div class="rca-padding">       
              <h3 class="rca-match-title rca-theme-text">
                <?php echo $cfightsid_chicken_team_1 . " vs " . $cfightsid_mutton_team_2; ?>
              </h3>
              <p class="rca-match-info">
                <span><?php echo "Round ". $round; ?></span>
              </p>
              <div class="rca-top-padding">
                <div class="rca-teams rca-table">
                  <div class="team rca-cell" style="color: white" style="color: white;font-size: 24px" ><b><?php echo $tname_chicken_team_1; ?></b></div>
                  <div class="rca-vs rca-cell"></div>
                  <div class="team rca-cell" style="color: white;font-size: 24px" ><b><?php echo $tname_mutton_team_2; ?></b></div>
                </div>
              </div>
              </div>
            </div>      
          </div>
        </div>

      </div>
      <?php $tid_mini += 2; } ?>
     
</body>
</html>