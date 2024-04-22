const question=[
    {
        question:"css stand for?",
        answers:[
            {text:"cascade style sheets", correct: false},
            {text:"color and style sheets", correct: false},
            {text:"Cascading Style Sheets", correct: true},
            {text:"none of above", correct: false},   
        ]

    },
    {
        question:"What is the correct html for refering to an external stylesheet?",
        answers:[
            {text:"&ltlink rel='stylesheet' type='text/css' href='style.css'&gt", correct: true},
            {text:"styles", correct: false},
            {text:"&ltstyle src='style.css' &gt", correct: false},
            {text:"&ltstylesheet&gt style.css &lt/stylesheet&gt", correct: false},   
        ]

    },
    {
        question:"Where is an html document is the correct place to refer to an external stylesheet",
        answers:[
            {text:"At the end of the document", correct: false},
            {text:"In the &lthead&gt section", correct: true},
            {text:"In the &ltbody&gt", correct: false},
            {text:"none of above", correct: false},   
        ]

    },
    {
        question:"Which is the correct css syntax",
        answers:[
            {text:"body{color:black;}", correct:true},
            {text:"body:color=black;", correct:false},
            {text:"{body:color=red}", correct: false},
            {text:"color=black", correct: false},   
        ]

    },
    {
        question:"How do you display hyperlinks without an underline?",
        answers:[
            {text:"a {text-decoration:none;}", correct: true},
            {text:"a {text-decoration:no-underline;}", correct: false},
            {text:"a {decoration:no-underline;}", correct: false},
            {text:"a {underline:none;}", correct:false},   
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

