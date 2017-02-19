<!DOCTYPE html>
<?php
//Start the session here
session_start();
 ?>
<html>
<title>Vishnu Nitro Championship :: Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {padding: 12px;}
.w3-navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-theme w3-top w3-left-align w3-large">
    <li class="w3-opennav w3-right w3-hide-large">
      <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </li>
    <li><img src="images/logo.png"  width="50" height="50" class="w3-theme-l1" /></li>
    <li class="w3-hide-small"><a href="account.php" class="w3-hover-white">Vishnu Institute of Technology</a></li>
    <li class="w3-hide-small"><a href="http://www.vishnu.edu.in" class="w3-hover-white">About VIT</a></li>
    <?php
    if(isset($_SESSION['id']))
        echo "<li class=\"w3-hide-small\"><a href=\"logout.php\" class=\"w3-hover-white\">LogOut</a></li>"; ?>


  </ul>
</div>

<!-- Sidenav -->
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4><b>Menu</b></h4>
  <?php
  if(isset($_SESSION['id'])) {?>
  <a href="accountd.php" class="w3-hover-black">Account Details</a>
  <a href="uploadspec.php" class="w3-hover-black">Upload RC Car details</a>
  <a href="accommodation.php" class="w3-hover-black">Accommodation</a>
  <a href="changepassword.php" class="w3-hover-black">Change Password</a>
  <?php } ?>
  <a href="rules.php" class="w3-hover-black">Contest Rules</a>

  <a href="contact.php" class="w3-hover-black">Contact Us</a>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-container">
    <h1>Rules for the Contest</h1>

    <h1>Rules for the Contest</h1>
    <h2>Overview:</h2>

    <p>I bet most of us have dreamt of racing our cars at top speeds through spick,
      black race courses. Come February and vishnu,
      Bhimavaram will be all set to fulfil your dream,
      well, in a way. On the line of the ecstatic Moto GP competition,
      we are conducting The RC car competition.
      The competition will have its participants (or racers) drive self-designed remote controlled cars
      through deliciously twisty race tracks to win the final cup! Seems simple? Well,
      brace yourselves for some rock solid competition.
      Forget not, the more innovative and inventive your design is,
      the closer you are to the Mini GP cup. Fasten your seat belts and let the adrenaline pump up!</p>

      <h2>Abstract:</h2>
      <p>
        Participants have to submit an abstract giving the complete description of their vehicles based on the following guidelines. <br><br>
      </p>
      <ul>
        <li><p>
          Teams that fabricate their own vehicle must explain the steering mechanism, Suspension mechanism and the chassis layout in detail, along with proper illustrations. Picture(s) showing all the three should be attached.
        </p></li>
        <li>
          <p>
            The participants are required to send the photographs of the chassis before assembling so as to ensure that the parts of the car have been built by themselves.
          </p>
        </li>
        <li>
          <p>
            Photograph of the car in the current state must also be sent with the name of the photograph as the date on which it is taken.
          </p>
        </li>
        <li>
          <p>
            Specifications of all other components like the engine, remote controllers etc must be specified.
          </p>
        </li>
        <li>
          <p>
            The complete abstract along with the photos and the team name and members name.
          </p>
        </li>
        <li>
          <p>
            If readymade cars are used by the team, the team should mail the exact specifications of the car.
          </p>
        </li>
        <li>
          <p>
            Write the name of the team along with the name of the team leader and team members with contact numbers and e-mail ids. {attach contact details with the email to which you send your design illustrations}
          </p>
        </li>
        <li>
          <p>
            A confirmation mail will be sent to the Team.
          </p>
        </li>
      </ul>

      <h2>Problem Statement</h2>
      <p>The participants are expected to race their remote control based IC engine cars through tracks
        whose complexity is bound to increase level after level.
        The teams completing the laps in the best possible time will qualify for a grans final
        race. The design skills and application of real-world driving skills to the miniature cars
        are put to test.</p>

        <h2>RULES AND REGULATIONS:</h2>
        <ul>
          <li>
            <p>
              All the team members participating in the event should follow the campus rules.
            </p>
          </li>
          <li>
            <p>
              Each team can comprise a minimum of two members and a maximum of five members. Each member must be a student with a valid ID card.
            </p>
          </li>
          <li>
            <p>
              If the machine is found unsafe to run on the track, that team will be disqualified from the race. The coordinator’s decision will be final in this respect.
            </p>
          </li>
          <li>
            <p>
              Any team that is not ready at the arena at the time specified will be automatically disqualified.
            </p>
          </li>
          <li>
            <p>
              The vehicles are not allowed to leave any loose parts in the premises of the arena. Any vehicle disintegrating during the race will be disqualified.
            </p>
          </li>
          <li>
            <p>
              The organizers reserve the rights to change any or all of the above rules as they deem fit. Change in rules, if any, will be highlighted on the website and notified to the registered participants.
            </p>
          </li>
          <li>
            <p>
              All decisions by the coordinators are final.
            </p>
          </li>
          <li>
            <p>
              The track will have check points at regular intervals.
            </p>
          </li>
          <li>
            <p>
              In case a machine troubles, or halts, or goes off the arena at any point on the track, only one of the participants is allowed to lift it up and place it at the nearest checkpoint behind that point.
            </p>
          </li>
          <li>
            <p>
              Until and unless there is a need to touch the vehicle as stated above, they have to be fully remote controlled throughout the race.
            </p>
          </li>
        </ul>
        <h2>PARTICIPATION REQUIREMENTS:</h2>
        <ul>
          <li><p>
            Team Name: Every team should define an attractive name to the team.
          </p></li>
          <li>
            <p>
              Discipline: Every team member must be an undergraduate /a diploma student.
            </p>
          </li>
          <li>
            <p>
              Team Member:Every team requires a minimum of 2 members and a maximum of 5 members.
            </p>
          </li>

        </ul>
        <br>
        <p>
          NOTE: Multiple teams can participate from the same college/university in VISHNU NITRO CHAMPIONSHIP-2017, but every team should have different team name and other requirements as mentioned above.
        </p>
        <h2>MACHINE SPECIFICATIONS:</h2>
        <ul>
          <li>
            <p>
              The vehicle should be designed so that it fits in an 800 mm X 700 mm box at every given point of time in the race. This is excluding the remote controller.
            </p>
          </li>
          <li>
            <p>
              The wheel base should not be less than 350 mm.
            </p>
          </li>
          <li>
            <p>
              It is essential that the car be designed with an Internal Combustion Engine (IC Engine). Any other engines and BLDC Motors etc. should not be the main driving sources of the car. However, for steering mechanisms or any other mechanism apart from propulsion, DC motors and servos can be used.
            </p>
          </li>
          <li>
            <p>
              Only one IC engine should be used in the vehicle. Use of any other sources such as chemicals, compressed gas, rockets, etc. for propulsion are not allowed. The allowed capacity of IC engine to be used is 4.5 cc or less.
            </p>
          </li>
          <li>
            <p>
              The vehicle has to be necessarily controlled by a wireless remote control system throughout the competition.
            </p>
          </li>
          <li>
            <p>
              Remote control systems from toys or the ones purchased from a market might be used without any fear of penalization.
            </p>
          </li>
          <li>
            <p>
              The vehicle parts can be readymade. But, there will be extra points if you make chassis and steering mechanism by yourself.
            </p>
          </li>
          <li>
            <p>
              If you make your car, other functional parts like motors and servos, gears, springs, engine, remote control systems, batteries, wheels, braking mechanism are allowed to be used as directly available from the market.
            </p>
          </li>
          <li>
            <p>
              All vehicles should have a complete body covering all internal mechanisms of the vehicle.
            </p>
          </li>
          <li>
            <p>
              Readymade covers are allowed or can be designed and manufactured by the team out of any suitable material.
            </p>
          </li>
        </ul>
        <h2>TRACK DETAILS:</h2>
        <ul>
        <li>
          <p>The width of the track will be around 1.5 m.</p>
        </li>
        <li>
          <p>
            The tracks will be built according to an 1:8 size car.
          </p>
        </li>
        <li>
          <p>
            A control stand will be provided along the track for the driver to position himself to control his vehicle during the run. The height of the stand will be around 8 feet. The controlling of machine has to be done from this stand only.
          </p>
        </li>
        <li>
        <p>
          3-5 cars will be racing on the tracks at the same time and try to surpass the opponent’s car while maintaining its stability.
        </p>
         </li>
         <li>
           <p>
             If the organizers are convinced that a team is trying to harm the opponent’s car, the respective team will be disqualified.
           </p>
         </li>
         <li>
           <p>
             A lap of the track is completed when the car comes back to the finish point.
           </p>
         </li>
         <li>
           <p>
             If a vehicle becomes immobilized during the course of a race, the corresponding team will have to forfeit that particular round.
           </p>
         </li>
         <li>
           <p>
             Checkpoints will be arranged throughout the track. In case of a human intervention during the course of a race, the car will have to restart the race from the previous checkpoint.
           </p>
         </li>

         </ul>
      <h2>JUDGING CRITERIA:</h2>
      <h2>
      PERFORMANCE ROUNDS: (points based)
      </h2>
      <ol>
        <li>
            <p>Driving ability and performance skills of the participant will also be put to test.</p>
        </li>
        <h2>ROUND 1:</h2>
        <li>
          <p>
             Time trials: Teams will have to complete the track in the least time duration possible. Each team will get a maximum of three tries, out of which the best one will decide their position on the qualifying chart. The teams will be arranged in the asscending order of their race times and the top eight teams will qualify to the next round.
          </p>
        </li>
        <h2>ROUND 2 :</h2>
        <li>
        <p>
           Teams qualifying to the second round will race one-on-one as decided by the event managers. The winners will pass on to the final round. Round 2 will have three laps in succession.
        </p>
        </li>
        <h2>ROUND 3:</h2>

        <li>
          <p>

           All teams qualifying to the finals will race against each other. This round will also have three laps.
          </p>
        </li>
      </ol>
      <h2>Race Schedule</h2>
      <img src="images/schedule.png" alt="Race Schedule" />
      <h2>REGISTRATION:</h2>
      <p>
        Participants have to submit an abstract giving the complete description of their vehicles based on the following lines.

      </p>
      <ol>
        <li><p>
          Teams that fabricate their own vehicle must explain the steering mechanism and the chassis layout in detail, along with proper illustrations. Picture(s) showing all the three should be attached.

        </p></li>
        <li><p>
          The participants are required to send the photographs of the chassis before assembly so as to ensure that the parts of the car have been built by themselves, that being the case.

        </p></li>
        <li><p>
          Photograph of the car in the current state must also be sent with the name of the photograph as the date on which it is taken.

        </p></li>
        <li><p>
          Specification of all other components like the engine, remote controllers etc must be specified.

        </p></li>
        <li><p>
          The complete abstract along with the photos and the team name and members name..

        </p></li>
        <li><p>
          If readymade cars are used by the team then the team should mail the exact specification of the car.

        </p></li>
        <li><p>
          Write the name of team along with the name of team leader and team members with contact numbers and e-mail ids. {put contact details here and the email to which they have to send their design illustrations}

        </p></li>
        <li><p>
          A confirmation mail will be sent to the Team.

        </p></li>
        <li>
          <p>Registration Fee is 2500/- Rs and Payment procedure will be updated soon</p>
        </li>
      </ol>






</div>


<footer id="myFooter" style="margin-top: 200px">
  <div class="w3-container w3-theme-l2 w3-padding-32">
    <h4>© 2016 Vishnu Institute of Technology. All Rights Reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> From CSE dept</h4>
  </div>


</footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
