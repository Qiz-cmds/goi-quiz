<?php
session_start();
if (isset($_GET['button'])) {
  $_SESSION['button_clicked'] = $_GET['button'];
}
?>
   <?php
     if (isset($_SESSION['button_clicked'])) {
      switch ($_SESSION['button_clicked']) {
          case '6':
              $image='image/chap6.jpg';
              $buttonText='ARE YOU READY?';
              $buttonLink="guessf2-ch1.html";
              $buttonStyle='font-size:28px; border-radius : 20px';

              break;
          case '7':
            $image='image/chap7.jpg';
            $buttonText='ARE YOU READY?';
            $buttonLink="guessf2-ch2.html";
            $buttonStyle='font-size:28px;border-radius : 20px';

              break;
          case '8':
            $image='image/chap8-2.jpg';
            $buttonText='ARE YOU READY?';
            $buttonLink="guessf2-ch3.html";
            $buttonStyle='font-size:28px; border-radius : 20px';

              break;
              case '9':
                $image='image/chap9-2.jpg';
                $buttonText='ARE YOU READY?';
                $buttonLink="guessf2-ch4.html";
                $buttonStyle='font-size:28px; border-radius : 20px';

                  break;
                  case '10':
                    $image='image/chap10.jpg';
                    $buttonText='ARE YOU READY?';
                    $buttonLink="guessf2-ch5.html";
                    $buttonStyle="font-size:28px; border-radius : 20px";

                      break;
          default:
              // Handle default case
              break;
      }
    } else {
      // Handle case when session variable is not set
      echo 'Error: No valid button clicked.';
  }
    
      ?>
<link rel="stylesheet" href="style.css">
  <html>
  <div>
    <title>guess and match</title>
  </div>
<body class="fam1">
<audio autoplay loop>
        <source src="audio/game.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>   
    <div>
      <a href ="f2.php" >
        <button class="BACK" style="font-size:30px; border-radius : 20px">BACK</button>
            </a>  
    </div>
    </div>
    <div>
    <?php if (isset($buttonText) && isset($buttonLink)): ?>
      
      <button onclick="startCountdown()" class="guess1" style="<?php echo $buttonStyle; ?>"><?php echo $buttonText; ?> 
        </button>
        <div id="countdown"></div>
<div>
    <img  class="images" src="<?php echo $image; ?>"
    
    <?php else: ?>
        <p>No valid option selected.</p>
    <?php endif; ?>
    </div>
    </div>
    <div>
</body> 
<style> 
   .fam1{ 
        background-image: url('wallpaper/animation.gif');
        background-size: cover;
}
.images{
    border: 3px solid #000000;
  border-radius: 8px;
    width:900px;
    height:680px;
    position: absolute; /* Set button to absolute position */
   top: 20%; /* Position button at vertical center */
   left: 49%; /* Position button at horizontal center */
  
   transform: translate(-50%, -19%); /* Center button exactly */   
}
  
  .BACK{
    width:170px;
    height:50px;
    position: absolute; /* Set button to absolute position */
    top:70%; /* Position button at vertical center */
    left:7%; /* Position button at horizontal center */

    transform: translate(-50%, -1000%); /* Center button exactly */
  }
  .guess1{
    font-size:10px;
    border-radius : 20px;
    width:250px;
    height:100px;
    position: absolute; /* Set button to absolute position */
    top:40%; /* Position button at vertical center */
    left:90%; /* Position button at horizontal center */

    transform: translate(-50%, 300%); /* Center button exactly */
  }
   #countdown {
  font-size: 100px;
  font-weight: bold;
  margin-top: 20px;
  color:black;
  text-align: center;
  position: absolute; /* Set button to absolute position */
    top:20%; /* Position button at vertical center */
    left:50%; /* Position button at horizontal center */
  animation: countdownAnimation 1s linear;
  transform: translate(-50%, 300%); /* Center button exactly */
  z-index: 1; /* Ensure countdown is above the image */
}

@keyframes countdownAnimation {
  0% { transform: scale(1); }
  50% { transform: scale(1.1); }
  100% { transform: scale(1); }
}
  

</style> 
<script>
function startCountdown() {
      const countdownElement = document.getElementById('countdown');
      countdownElement.innerHTML = '3';

      // Countdown logic with delays
      setTimeout(() => {
        countdownElement.innerHTML = '2';
      }, 1000); // Delay of 1000ms (1 second)

      setTimeout(() => {
        countdownElement.innerHTML = '1';
      }, 2000); // Delay of 2000ms (2 seconds)

      setTimeout(() => {
        countdownElement.innerHTML = 'Go!';
        // Redirect to another page after countdown finishes
        setTimeout(() => {
          window.location.href = '<?php echo $buttonLink;?>'; // Replace with your desired URL
        }, 1000); // Delay of 1000ms (1 second) after 'Go!' appears
      }, 3000); // Delay of 3000ms (3 seconds)
    }
</script> 
</html>