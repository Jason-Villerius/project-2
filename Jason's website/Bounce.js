    //Auteur: Jason Villerius
    const ball = document.getElementById("ball");
    const paddle = document.getElementById("paddle");
  
    // Variabelen voor de positie en snelheid van de ball
    let ballX = 40; // startpositie X
    let ballY = 150; // startpositie Y
    let ballSpeedX = 0; // snelheid X
    let ballSpeedY = 0; // snelheid Y

    // Variabelen voor de score
    let score = 0;
    let hscore = 0;
  
    // Variabelen voor de positie van de paddle
    let paddleX = 160;
  
    //function om de game te starten
    function startgame() {
        ballSpeedX = 2; 
        ballSpeedY = 2;
    }
    document.getElementById('startButton').addEventListener('click', startgame);

    function updateGameArea() {

        //ball laten bewegen
        ballX += ballSpeedX;
        ballY += ballSpeedY;
    
        //ball tegen de muren en de paddle laten stuiteren, verhoog de score
      if (ballX < 0 || ballX > 380) {
        ballSpeedX++;
        ballSpeedX = -ballSpeedX;
      }
  
      if (ballY < 0) {
        ballSpeedY = -ballSpeedY;
        ballSpeedY++;
      }

      if (ballY > 290 && ballX > paddleX && ballX < paddleX + 80) {
        ballSpeedY = -ballSpeedY;
        paddleX++;
        increaseScore();
      }
  
      if (ballY > 300) {
        // Highscore zetten
        if (hscore < score) {
            hscore = score;
            document.getElementById('hscore').innerText = 'HighScore: ' + hscore;
        }

        // Game over, reset ball position, stop ball speed, reset score
        ballX = 40;
        ballY = 150;
        ballSpeedX = 0; 
        ballSpeedY = 0;
        score = 0;
        document.getElementById('score').innerText = 'Score: ' + score;
      }
  
      //verhoog score met 1
      function increaseScore() {
        score++;
        document.getElementById('score').innerText = 'Score: ' + score;
    }
      //ball en paddle op de juste plek zetten
      paddle.style.left = paddleX + "px";
      ball.style.left = ballX + "px";
      ball.style.top = ballY + "px";
  
      requestAnimationFrame(updateGameArea);
    }

    //EventListener voor de toetsenbord om de balk te bewegen
    document.addEventListener("keydown", function (event) {
      if (event.key === "ArrowLeft" && paddleX > 0) {
        paddleX -= 10;
      } else if (event.key === "ArrowRight" && paddleX < 320) {
        paddleX += 10;
      }
    });
  
    updateGameArea();
  