//selecting all required elements
const awal_btn = document.querySelector('.bungkus .start_btn');
const start_btn = document.querySelector(".start_btn button");
const awal_box = document.querySelector(".bungkus");
const info_box = document.querySelector(".info_box");
const audio_box = document.querySelector(".audio_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const exit2_btn = audio_box.querySelector(".buttons .quit");
const audio_btn = info_box.querySelector(".buttons .next_audio");
const continue_btn = audio_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");
const title = document.querySelector(".title");
const quit_btn = document.querySelector(".quit_btn");
const myAudio = document.getElementById("myAudio");

let questions = [
    {
    numb: 1,
    question: "Jenny and Luis are _______",
    answer: "teachers",
    options: [
      "teachers",
      "friends",
      "classmates",
      "colleagues"    
    ]
  },
    {
    numb: 2,
    question: "Aria is _______ of the school",
    answer: "the director",
    options: [
      "a teacher",
      "the director",
      "the assistant",
      "the student"
    ]
  },
    {
    numb: 3,
    question: "Luis is from _______",
    answer: "Salta",
    options: [
      "Spain",
      "Saltair",
      "Salta",
      "Saltaa"
    ]
  },
    {
    numb: 4,
    question: "His email address is _______",
    answer: "luis700@gmail.com",
    options: [
      "luis700@gmail.com",
      "luis70@gmail.com",
      "luis170@gmail.com",
      "luis770@gmail.com"
    ]
  },
    {
    numb: 5,
    question: "The party is on ______",
    answer: "Saturday",
    options: [
      "Saturday",
      "Monday",
      "Sunday",
      "Friday"
    ]
  }
];

// if startQuiz button clicked

awal_btn.onclick = () => {

}

start_btn.onclick = ()=>{
    const bungkusElement = document.querySelector('.bungkus');
    bungkusElement.style.display = 'none';
    info_box.classList.add("activeInfo"); // show info box
}

// if exitQuiz button clicked
exit_btn.onclick = ()=>{
    location.href = "/";
}
exit2_btn.onclick = ()=>{
    location.href = "/";
}

quit_btn.onclick = ()=>{
    location.href = "/";
}

audio_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo");
    audio_box.classList.add("activeAudio"); // <-- Use the correct class name
}

// if continueQuiz button clicked
continue_btn.onclick = ()=>{
    myAudio.pause();
    audio_box.classList.remove("activeAudio"); // <-- Use the correct class name
    quiz_box.classList.add("activeQuiz");
    showQuetions(0); // calling showQuestions function
    queCounter(1); // passing 1 parameter to queCounter
    startTimer(15); // calling startTimer function
    startTimerLine(0); // calling startTimerLine function
}



let timeValue =  15;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");




// if restartQuiz button clicked
restart_quiz.onclick = ()=>{
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
}

// if quitQuiz button clicked
quit_quiz.onclick = ()=>{
    location.href = "/";
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

// if Next Que button clicked
next_btn.onclick = ()=>{
    if(que_count < questions.length - 1){ //if question count is less than total question length
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
    }else{
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        showResult(); //calling showResult function
    }
}



// getting questions and options from array
function showQuetions(index){
    const que_text = document.querySelector(".que_text");

    //creating a new span and div tag for question and option and passing the value using array index
    let que_tag = '<span>'+ questions[index].numb + ". " + questions[index].question +'</span>';
    let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[2] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[3] +'</span></div>';
    que_text.innerHTML = que_tag; //adding new span tag inside que_tag
    option_list.innerHTML = option_tag; //adding new div tag inside option_tag
    
    const option = option_list.querySelectorAll(".option");

    // set onclick attribute to all available options
    for (let i = 0; i < option.length; i++) {
        option[i].onclick = function() {
            optionSelected(this);
        };
    }
}
// creating the new div tags which for icons
let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

//if user clicked on option
function optionSelected(answer){
    clearInterval(counter); //clear counter
    clearInterval(counterLine); //clear counterLine
    let userAns = answer.textContent; //getting user selected option
    let correcAns = questions[que_count].answer; //getting correct answer from array
    const allOptions = option_list.children.length; //getting all option items
    
    if(userAns == correcAns){ //if user selected option is equal to array's correct answer
        userScore += 1; //upgrading score value with 1
        answer.classList.add("correct"); //adding green color to correct selected option
        answer.insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to correct selected option
        console.log("Correct Answer");
        console.log("Your correct answers = " + userScore);
    }else{
        answer.classList.add("incorrect"); //adding red color to correct selected option
        answer.insertAdjacentHTML("beforeend", crossIconTag); //adding cross icon to correct selected option
        console.log("Wrong Answer");

        for(i=0; i < allOptions; i++){
            if(option_list.children[i].textContent == correcAns){ //if there is an option which is matched to an array answer 
                option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
                console.log("Auto selected correct answer.");
            }
        }
    }
    for(i=0; i < allOptions; i++){
        option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
    }
    next_btn.classList.add("show"); //show the next button if user selected any option
}

function showResult(){
    info_box.classList.remove("activeInfo"); //hide info box
    quiz_box.classList.remove("activeQuiz"); //hide quiz box
    result_box.classList.add("activeResult"); //show result box
    const scoreText = result_box.querySelector(".score_text");
    if (userScore >= 7){ // if user scored more than 3
        //creating a new span tag and passing the user score number and total question number
        let scoreTag = '<span>and congrats! 🎉, You got <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;  //adding new span tag inside score_Text
    }
    else if(userScore >= 4){ // if user scored more than 1
        let scoreTag = '<span>and nice 😎, You got <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
    else { // if user scored less than 1
        let scoreTag = '<span>and sorry 😐, You got only <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
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
            let addZero = timeCount.textContent;
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
            const allOptions = option_list.children.length;
            let correcAns = 0;

            for (let i = 0; i < allOptions; i++) {
                if (option_list.children[i].textContent == correcAns) {
                    option_list.children[i].setAttribute("class", "option correct");
                    option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag);
                    console.log("Time Off.");
                }
            }

            for (let i = 0; i < allOptions; i++) {
                option_list.children[i].classList.add("disabled");
            }

            next_btn.classList.add("show");
        }
    }

    startTimerLine(0); // Start the timer line after clearing the intervals
}




function queCounter(index){
    //creating a new span tag and passing the question number and total question
    let totalQueCounTag = '<span><p>'+ index +'</p> of <p>'+ questions.length +'</p> Questions</span>';
    bottom_ques_counter.innerHTML = totalQueCounTag;  //adding new span tag inside bottom_ques_counter
}