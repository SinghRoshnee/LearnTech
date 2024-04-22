const question=[
    {
        question:"what is html?",
        answers:[
            {text:"hypertext markup language", correct: true},
            {text:"hightext machine language", correct: false},
            {text:"hypertext and links markup language", correct: false},
            {text:"none of these", correct: false},   
        ]

    },
    {
        question:"Choose the correct html element for the largest heading",
        answers:[
            {text:"&ltHeading&gt", correct: false},
            {text:"&ltH6&gt", correct: false},
            {text:"&ltHead&gt", correct: false},
            {text:"&ltH1&gt", correct: true},   
        ]

    },
    {
        question:"What is the correct html for adding a background Color",
        answers:[
            {text:"&ltbody&gt", correct: false},
            {text:"&ltbody Style='background-color:yellow;'&gt", correct: false},
            {text:"&ltbody bg='yellow'&gt", correct: true},
            {text:"none of above", correct: false},   
        ]

    },
    {
        question:"What is the correct HTML for creating a hyperlink?",
        answers:[
            {text:"&lta&gt https://google.com &lt/a&gt", correct: false},
            {text:"&lta url='https://google.com'&gt &lt/a&gt", correct: false},
            {text:"&lta href='https://google.com'&gt Google &lt/a&gt", correct: true},
            {text:"None of the above", correct: false},   
        ]

    },
    {
        question:"HTML tags are enclosed in?",
        answers:[
            {text:"# and #", correct: false},
            {text:"{ and }", correct: false},
            {text:"! and ?", correct: false},
            {text:"< and >", correct: true},   
        ]

    }
];

const questionElement = document.getElementById("question");
const answerButton = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz(){
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML="Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = question[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML=questionNo + ". " + currentQuestion.
    question;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML= answer.text;
        button.classList.add("btn");
        answerButton.appendChild(button);
        if(answer.correct){
            button.dataset.correct = answer.correct;
        }
        button.addEventListener("click",selectAnswer);
    });
}

function resetState(){
    nextButton.style.display = "none";
    while(answerButton.firstChild){
        answerButton.removeChild(answerButton.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";
    if(isCorrect){
        selectedBtn.classList.add("correct");
        score++;
    }
    else{
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButton.children).forEach(button => {
        if(button.dataset.correct === "true"){
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display ="block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = `You scored ${score} out of ${question.length}!`;
   /* nextButton.innerHTML = "Play Again";
    nextButton.style.display = "block"; */
}

function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex < question.length){
        showQuestion();
    }
    else{
        showScore();
    }
}
nextButton.addEventListener("click", ()=>{
    if(currentQuestionIndex < question.length){
        handleNextButton();
    }else{
        startQuiz();
    }
});

startQuiz();

