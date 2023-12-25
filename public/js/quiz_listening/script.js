/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************!*\
  !*** ./resources/js/quiz_listening/script.js ***!
  \***********************************************/
//selecting all required elements
var awal_btn = document.querySelector('.bungkus .start_btn');
var start_btn = document.querySelector(".start_btn button");
var awal_box = document.querySelector(".bungkus");
var info_box = document.querySelector(".info_box");
var audio_box = document.querySelector(".audio_box");
var exit_btn = info_box.querySelector(".buttons .quit");
var exit2_btn = audio_box.querySelector(".buttons .quit");
var audio_btn = info_box.querySelector(".buttons .next_audio");
var continue_btn = audio_box.querySelector(".buttons .restart");
var quiz_box = document.querySelector(".quiz_box");
var result_box = document.querySelector(".result_box");
var option_list = document.querySelector(".option_list");
var time_line = document.querySelector("header .time_line");
var timeText = document.querySelector(".timer .time_left_txt");
var timeCount = document.querySelector(".timer .timer_sec");
var title = document.querySelector(".title");
var quit_btn = document.querySelector(".quit_btn");
var myAudio = document.getElementById("myAudio");
var questions = [{
  numb: 1,
  question: "Jenny and Luis are _______",
  answer: "teachers",
  options: ["teachers", "friends", "classmates", "colleagues"]
}, {
  numb: 2,
  question: "Aria is _______ of the school",
  answer: "the director",
  options: ["a teacher", "the director", "the assistant", "the student"]
}, {
  numb: 3,
  question: "Luis is from _______",
  answer: "Salta",
  options: ["Spain", "Saltair", "Salta", "Saltaa"]
}, {
  numb: 4,
  question: "His email address is _______",
  answer: "luis700@gmail.com",
  options: ["luis700@gmail.com", "luis70@gmail.com", "luis170@gmail.com", "luis770@gmail.com"]
}, {
  numb: 5,
  question: "The party is on ______",
  answer: "Saturday",
  options: ["Saturday", "Monday", "Sunday", "Friday"]
}];

// if startQuiz button clicked

awal_btn.onclick = function () {};
start_btn.onclick = function () {
  var bungkusElement = document.querySelector('.bungkus');
  bungkusElement.style.display = 'none';
  info_box.classList.add("activeInfo"); // show info box
};

// if exitQuiz button clicked
exit_btn.onclick = function () {
  location.href = "/";
};
exit2_btn.onclick = function () {
  location.href = "/";
};
quit_btn.onclick = function () {
  location.href = "/";
};
audio_btn.onclick = function () {
  info_box.classList.remove("activeInfo");
  audio_box.classList.add("activeAudio"); // <-- Use the correct class name
};

// if continueQuiz button clicked
continue_btn.onclick = function () {
  myAudio.pause();
  audio_box.classList.remove("activeAudio"); // <-- Use the correct class name
  quiz_box.classList.add("activeQuiz");
  showQuetions(0); // calling showQuestions function
  queCounter(1); // passing 1 parameter to queCounter
  startTimer(15); // calling startTimer function
  startTimerLine(0); // calling startTimerLine function
};
var timeValue = 15;
var que_count = 0;
var que_numb = 1;
var userScore = 0;
var counter;
var counterLine;
var widthValue = 0;
var restart_quiz = result_box.querySelector(".buttons .restart");
var quit_quiz = result_box.querySelector(".buttons .quit");

// if restartQuiz button clicked
restart_quiz.onclick = function () {
  result_box.classList.remove("activeResult"); //hide result box
  audio_box.classList.add("activeAudio"); //show quiz box
  timeValue = 15;
  que_count = 0;
  que_numb = 1;
  userScore = 0;
  widthValue = 0;
  showQuetions(que_count); //calling showQestions function
  queCounter(que_numb); //passing que_numb value to queCounter
  clearInterval(counter); //clear counter
  clearInterval(counterLine); //clear counterLine
  startTimer(timeValue); //calling startTimer function
  startTimerLine(widthValue); //calling startTimerLine function
  timeText.textContent = "Time Left"; //change the text of timeText to Time Left
  next_btn.classList.remove("show"); //hide the next button
};

// if quitQuiz button clicked
quit_quiz.onclick = function () {
  location.href = "/";
};
var next_btn = document.querySelector("footer .next_btn");
var bottom_ques_counter = document.querySelector("footer .total_que");

// if Next Que button clicked
next_btn.onclick = function () {
  if (que_count < questions.length - 1) {
    //if question count is less than total question length
    que_count++; //increment the que_count value
    que_numb++; //increment the que_numb value
    showQuetions(que_count); //calling showQestions function
    queCounter(que_numb); //passing que_numb value to queCounter
    clearInterval(counter); //clear counter
    clearInterval(counterLine); //clear counterLine
    startTimer(timeValue); //calling startTimer function
    startTimerLine(widthValue); //calling startTimerLine function
    timeText.textContent = "Time Left"; //change the timeText to Time Left
    next_btn.classList.remove("show"); //hide the next button
  } else {
    clearInterval(counter); //clear counter
    clearInterval(counterLine); //clear counterLine
    showResult(); //calling showResult function
  }
};

// getting questions and options from array
function showQuetions(index) {
  var que_text = document.querySelector(".que_text");

  //creating a new span and div tag for question and option and passing the value using array index
  var que_tag = '<span>' + questions[index].numb + ". " + questions[index].question + '</span>';
  var option_tag = '<div class="option"><span>' + questions[index].options[0] + '</span></div>' + '<div class="option"><span>' + questions[index].options[1] + '</span></div>' + '<div class="option"><span>' + questions[index].options[2] + '</span></div>' + '<div class="option"><span>' + questions[index].options[3] + '</span></div>';
  que_text.innerHTML = que_tag; //adding new span tag inside que_tag
  option_list.innerHTML = option_tag; //adding new div tag inside option_tag

  var option = option_list.querySelectorAll(".option");

  // set onclick attribute to all available options
  for (var _i = 0; _i < option.length; _i++) {
    option[_i].onclick = function () {
      optionSelected(this);
    };
  }
}
// creating the new div tags which for icons
var tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
var crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

//if user clicked on option
function optionSelected(answer) {
  clearInterval(counter); //clear counter
  clearInterval(counterLine); //clear counterLine
  var userAns = answer.textContent; //getting user selected option
  var correcAns = questions[que_count].answer; //getting correct answer from array
  var allOptions = option_list.children.length; //getting all option items

  if (userAns == correcAns) {
    //if user selected option is equal to array's correct answer
    userScore += 1; //upgrading score value with 1
    answer.classList.add("correct"); //adding green color to correct selected option
    answer.insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to correct selected option
    console.log("Correct Answer");
    console.log("Your correct answers = " + userScore);
  } else {
    answer.classList.add("incorrect"); //adding red color to correct selected option
    answer.insertAdjacentHTML("beforeend", crossIconTag); //adding cross icon to correct selected option
    console.log("Wrong Answer");
    for (i = 0; i < allOptions; i++) {
      if (option_list.children[i].textContent == correcAns) {
        //if there is an option which is matched to an array answer 
        option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
        option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
        console.log("Auto selected correct answer.");
      }
    }
  }
  for (i = 0; i < allOptions; i++) {
    option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
  }
  next_btn.classList.add("show"); //show the next button if user selected any option
}
function showResult() {
  info_box.classList.remove("activeInfo"); //hide info box
  quiz_box.classList.remove("activeQuiz"); //hide quiz box
  result_box.classList.add("activeResult"); //show result box
  var scoreText = result_box.querySelector(".score_text");
  if (userScore >= 7) {
    // if user scored more than 3
    //creating a new span tag and passing the user score number and total question number
    var scoreTag = '<span>and congrats! 🎉, You got <p>' + userScore + '</p> out of <p>' + questions.length + '</p></span>';
    scoreText.innerHTML = scoreTag; //adding new span tag inside score_Text
  } else if (userScore >= 4) {
    // if user scored more than 1
    var _scoreTag = '<span>and nice 😎, You got <p>' + userScore + '</p> out of <p>' + questions.length + '</p></span>';
    scoreText.innerHTML = _scoreTag;
  } else {
    // if user scored less than 1
    var _scoreTag2 = '<span>and sorry 😐, You got only <p>' + userScore + '</p> out of <p>' + questions.length + '</p></span>';
    scoreText.innerHTML = _scoreTag2;
  }
}
function startTimer(time) {
  clearInterval(counter); // Clear the timer interval
  clearInterval(counterLine); // Clear the timer line interval

  counter = setInterval(timer, 1000);
  function timer() {
    timeCount.textContent = time; // Changing the value of timeCount with time value
    time--; // Decrement the time value

    if (time < 9) {
      var addZero = timeCount.textContent;
      timeCount.textContent = "0" + addZero;
    }
    title.textContent = "Quiz LB LIA MIM";
    title.style.color = "black";
    title.style.fontWeight = "bold";
    if (time < 0) {
      clearInterval(counter);
      timeText.textContent = "Time Off";
      title.textContent = "Click Next Button";
      title.style.color = "red";
      title.style.fontWeight = "bolder";
      var allOptions = option_list.children.length;
      var correcAns = 0;
      for (var _i2 = 0; _i2 < allOptions; _i2++) {
        if (option_list.children[_i2].textContent == correcAns) {
          option_list.children[_i2].setAttribute("class", "option correct");
          option_list.children[_i2].insertAdjacentHTML("beforeend", tickIconTag);
          console.log("Time Off.");
        }
      }
      for (var _i3 = 0; _i3 < allOptions; _i3++) {
        option_list.children[_i3].classList.add("disabled");
      }
      next_btn.classList.add("show");
    }
  }
  startTimerLine(0); // Start the timer line after clearing the intervals
}
function queCounter(index) {
  //creating a new span tag and passing the question number and total question
  var totalQueCounTag = '<span><p>' + index + '</p> of <p>' + questions.length + '</p> Questions</span>';
  bottom_ques_counter.innerHTML = totalQueCounTag; //adding new span tag inside bottom_ques_counter
}
/******/ })()
;