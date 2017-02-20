<?php
global $table_name;
global $round;
if(isset($_GET['round'])){
  $round = $_GET['round'];
  $GLOBALS['round'] = $round;
  $table_name = "round" . $round;
  require 'connect.php';
  $get_match_pairs = mysqli_query($conn,"SELECT roundid,tidone,tidtwo FROM $table_name ");


  $get_max_round = mysqli_query($conn,"SELECT COUNT(*) AS pair_count FROM $table_name ");

  $max_count_arr = mysqli_fetch_assoc($get_max_round);

  $max_pairs = $max_count_arr['pair_count'];


}
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
        require 'connect.php';
        $get_all_rounds = mysqli_query($conn,"SELECT roundid,tidone,tidtwo FROM $table_name");


         function Check_winner($tid){
          require 'connect.php';
          $check_if_winner = mysqli_query($conn,"SELECT wins FROM details WHERE tid = $tid");

          $win_arr = mysqli_fetch_assoc($check_if_winner);

          $wins = $win_arr['wins'];

          $round = $_GET['round'];

          if($round == $wins) return true;
          
          else return false;
        }

      for($i=0;$i<$max_pairs;$i++){

          $round_arr = mysqli_fetch_assoc($get_all_rounds);

          $tid1 = $round_arr['tidone'];

          $tid2 = $round_arr['tidtwo'];


          $get_id_based_on_round_chicken = mysqli_query($conn,"SELECT cfightsid,tname FROM details WHERE tid = $tid1");
          $get_id_based_on_round_mutton  = mysqli_query($conn,"SELECT cfightsid,tname FROM details WHERE tid = $tid2");

          $fetech_chicken_team_arr = mysqli_fetch_assoc($get_id_based_on_round_chicken);

          $fetech_mutton_team_arr = mysqli_fetch_assoc($get_id_based_on_round_mutton);



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

                  <div class="team rca-cell" style="<?php if(Check_winner($tid1)) echo "color: green;font-size: 24px";
                  else echo "color: white;font-size: 24px";  ?>" ><b><?php echo $tname_chicken_team_1; ?></b></div>
                
                  <div class="rca-vs rca-cell"></div>

                  <div class="team rca-cell" style="<?php if(Check_winner($tid2)) echo "color: green;font-size: 24px";
                  else echo "color: white;font-size: 24px";  ?>" ><b><?php echo $tname_mutton_team_2; ?></b></div>
                </div>
              </div>
              </div>
            </div>      
          </div>
        </div>

      </div>
      <?php } ?>
     
</body>
</html>