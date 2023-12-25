<!-- Created By Ali Aslan  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Quiz Listening Test</title>
    <link rel="stylesheet" href="{{ asset('styleListening.css') }}">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!-- start Quiz button -->

    <div class="bungkus">
        <div class="start_btn"><button>Start Quiz</button></div>
        <div class="quit_btn"><button>Quit Quiz</button></div>
    </div>
    

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. Each question comes with a time limit of <span>15 seconds</span>.</div>
            <div class="info">2. Once you make a selection, you cannot change your answer.</div>
            <div class="info">3. Options cannot be chosen after the time limit expires.</div>
            <div class="info">4. Exiting the quiz during play is not permitted.</div>
            <div class="info">5. Points are awarded based on the accuracy of your answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Quit Quiz</button>
            <button class="next_audio">Continue</button>
        </div>
    </div>

    <!-- Audio Box -->
    <div class="audio_box">
        <div class="info-title"><span>Quiz LB LIA MIM</span></div>
        <div class="wrapper" >
            <h3>Listening Test</h3>
            <h4>
                Pay attention to this audio, because it will be related to the given questions.
            </h4>
                  <audio controls id="myAudio">
                      <source src="{{ asset('audio1.MP3') }}" type="audio/mp3"> 
                  </audio>
          </div>
        <div class="buttons">
            <button class="quit">Quit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="bungkus_quiz">
        <div class="quiz_box">
            <header>
                <div class="title">Quiz LB LIA MIM</div>
                <div class="timer">
                    <div class="time_left_txt">Time Left</div>
                    <div class="timer_sec">15</div>
                </div>
                <div class="time_line"></div>
            </header>
            <section>
                <div class="que_text">
                    <!-- Here I've inserted question from JavaScript -->
                </div>
                <div class="option_list">
                    <!-- Here I've inserted options from JavaScript -->
                </div>
            </section>
    
            <!-- footer of Quiz Box -->
            <footer>
                <div class="total_que">
                    <!-- Here I've inserted Question Count Number from JavaScript -->
                </div>
                <button class="next_btn">Next</button>
            </footer>
        </div>
        
    </div>

    <!-- Result Box -->
    <div class="bungkus_quiz">

        <div class="result_box">
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">You've completed the Quiz!</div>
            <div class="score_text">
                <!-- Here I've inserted Score Result from JavaScript -->
            </div>
            <div class="buttons">
                <button class="restart">Replay Quiz</button>
                <button class="quit">Quit Quiz</button>
            </div>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="{{ asset('js/quiz_listening/questions.js') }}"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="{{ asset('js/quiz_listening/script.js') }}"></script>

</body>
</html>