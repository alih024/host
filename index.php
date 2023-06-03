<!DOCTYPE html>
<html>
    <head lang="en">
        <style>
            *{
    font-family: sans-serif;

}

html
{
    height:100%;
      background-color:#ddd;
}
.gametitle{
    text-align: center;
    font-size: 20px;
    color: black;
    margin-top: 50px;
}
.player{ 
    border-radius:5px;  
    position: relative;
    margin: 50px auto;
    width: 300px;
}
#board{
    background-color:transparent;
    width: 500px;
    height: 380px;
    border-radius:50px;  
    box-shadow: 0px 5px 5px #134b80;
    -moz-box-shadow: 0px 5px 5px #134b80;
    -webkit-box-shadow: 0px 5px 5px white;
    position: relative;
    margin: 50px auto;
    border:red 1px solid;
}
#right{
    padding:5px;
    background-color:#134b80;
    width: 100px;
    position: absolute;
    margin: 20px 200px;
    text-align: center;
    color:white;
    border-radius: 30px;
    box-shadow: 0px 5px 5px #133512;
    -moz-box-shadow: 0px 5px 5px #133512;
    -webkit-box-shadow: 0px 5px 5px #133512;
    display:none;
}
#wrong{
    padding:5px;
    background-color: #bb1010;
    width: 100px;
    position: absolute;    
    margin: 20px 200px;
    text-align: center;
    color:white;
    border-radius: 30px;
    box-shadow: 0px 5px 5px #45150c;
    -moz-box-shadow: 0px 5px 5px #45150c;
    -webkit-box-shadow: 0px 5px 5px #45150c;     
    display:none;
}
#score{
    padding: 5px;
    background-color:;
    width:100px;
    text-align:center;
    position: absolute;
    margin: 20px 380px;
    border-radius: 5px;
    box-shadow: 0px 5px 5px grey;
    -moz-box-shadow: 0px 5px 5px grey;
    -webkit-box-shadow: 0px 5px 5px grey;
}
#problem{
    padding:5px;
    background-color:;
    border:darkred 1px solid;
    width: 400px;
    height: 60px;
    text-align:center;
    position: absolute;
    margin: 85px 40px;
    font-size: 40px;
    line-height: 60px;
    color:black;
    border-radius: 5px;
    box-shadow: 0px 5px 5px #153d93;
    -moz-box-shadow: 0px 5px 5px #153d93;
    -webkit-box-shadow: 0px 5px 5px #153d93;
}
#instruction{
    padding:5px;
    background-color:;
    width: 400px;
    height: 30px;    
    text-align:center;
    line-height: 30px;
    position: absolute;
    margin: 165px 40px;
    font-size: 20px;
    color:red;
    border-radius: 5px;
    box-shadow: 0px 5px 5px #223927;
    -moz-box-shadow: 0px 5px 5px #223927;
    -webkit-box-shadow: 0px 5px 5px #223927;
}
#answers{
    margin: 215px 40px;
    position: absolute;   
}
#answer1, #answer2, #answer3, #answer4{
    padding: 5px;
    height: 50px; 
    line-height: 50px;
    width: 60px;
    background-color: transparent;
    float:left;
    border-radius: 5px;
    font-size: 34px;
    text-align:center;
    margin-right: 43px;
    box-shadow: 0px 5px 5px grey;
    -moz-box-shadow: 0px 5px 5px grey;
    -webkit-box-shadow: 0px 5px 5px grey;
}
#answer1:hover, #answer2:hover, #answer3:hover, #answer4:hover{
    background-color:springgreen;
    color:white;
    cursor:pointer;
}
#answer4{
    margin-right:0;
}
#start{
    padding:5px;
    background-color:transparent;
    width: 100px;
    border:1px solid ewd;
    position: absolute;    
    margin: 300px 210px;
    text-align: center;
    color:red;
    border-radius: 5px;   
    box-shadow: 0px 5px 5px #281036;
    -moz-box-shadow: 0px 5px 5px #281036;
    -webkit-box-shadow: 0px 5px 5px #281036;
}
#reset{
    padding:5px;
    background-color:#9837ae;
    width: 70px;
    position: absolute;    
    margin: 300px 210px;
    text-align: center;
    color:white;
    border-radius: 5px;
    box-shadow: 0px 5px 5px #281036;
    -moz-box-shadow: 0px 5px 5px #281036;
    -webkit-box-shadow: 0px 5px 5px #281036;    
    display:none;
}
#reset:hover, #start:hover{
    background-color: red;
    cursor:pointer;
    color:whitesmoke;
}
#time{
    padding:5px;
    background-color:#e4c6f0;
    width: 105px;
    text-align: center;
    position: absolute;
    margin: 310px 350px;
    border-radius: 5px;
    box-shadow: 0px 5px 5px #0b353b;
    -moz-box-shadow: 0px 5px 5px #0b353b;
    -webkit-box-shadow: 0px 5px 5px #0b353b;
    display:none;
}
#gameover{
    padding:5x;
    line-height: 50px;
background-color: rgba(222, 220, 230, 1.2);
    border:solid 1px green;
    color: white;
    width: 350px;
    height: 110px;
    position:absolute;
    margin: 75px 70px;
    text-align:center;
    font-size: 30px; 
    border-radius: 50px;
    z-index: 2;
    color:rgba(22, 10, 10, 3.2);
    display:none;
}



#board,#bbb{color:none;
 
  animation-name: a;
  animation-duration: 39s;
}
@keyframes a {
 0%   {border-color: green; box-shadow: 0px 0px 10px 5px  pinl;  border-style: dashed; }
 10%   {border-color: green; box-shadow: 0px 0px 10px 0px  yellow;  border-style:dotted ;}
 20%   {border-color: black; box-shadow: 0px 0px 10px 0px  green;  border-style: ridge;}
 30%   {border-color: blue; box-shadow: 0px 0px 10px 0px  red;  border-style: double;}
 40%   {border-color: red; box-shadow: 0px 0px 10px 0px  pinl;  border-style: solid;}
 50%   {border-color: green; box-shadow: 0px 0px 10px 0px  yellow; }
 60%   {border-color: black; box-shadow: 0px 0px 10px 0px  green; }
 70%   {border-color: blue; box-shadow: 0px 0px 10px 0px  red; }
 80%   {border-color: red; box-shadow: 0px 0px 10px 0px  pinl; }
 90%   {border-color: green; box-shadow: 0px 0px 10px 0px  yellow; }
 95%   {border-color: black; box-shadow: 0px 0px 10px 0px  green; }
 100%   {border-color: blue; box-shadow: 0px 0px 10px 0px  red; }}


h1{color: red}
.h{  text-shadow: 2px 2px black; font-size: 40px;}
            
            
            #bbb{background-color:whitesmoke;
width: 500px;
height: 100px;
border-radius: 50px;
border: solid red 1px;}

 .a21{font-family: inherit;
    font-size: 20px;
    color: red;}

            
            
        </style>
    </head>

    <body><br><br>
        <center>

 <span style="color:#FF0000" class="h">A</span>
 <span style="color:#66CC66"  class="h">l</span>
<span style="color:#FF9966"  class="h">i</span>&#10084;&#65039;
 <span style="color:#FFCCCC"  class="h">H</span>
<span style="color:#FF0066"  class="h">u</span>
<span style="color:#FF0000"  class="h">s</span>
<span style="color:#66CC66"  class="h">s</span>
<span style="color:#FF9966"  class="h">a</span>
<span style="color:#FFCCCC"  class="h">i</span>
<span style="color:#FF0066"  class="h">n</span>&#10084;&#65039;
<span style="color:#FF0000"  class="h">M</span>
<span style="color:#66CC66"  class="h">u</span>
<span style="color:#FF9966"  class="h">h</span>
<span style="color:#FFCCCC"  class="h">a</span>
<span style="color:#FF0066"  class="h">m</span>
<span style="color:#FF0000"  class="h">m</span>
<span style="color:#66CC66"  class="h">a</span>
<span style="color:#FF9966"  class="h">d</span>
  


  <center><h1>٢٥ وەلامی راست هەلبژێرە ببە  خاوەنی خلاتیک</h1>

  
        <div id="container">
            <!-- title-->
            
            <!--game board-->
            <div id="board">            
                <div id="right">راستە</div>
                <div id="wrong">دووبارە هەلبژێرە</div>
                <div id="score"> <span id="scoreNumber">0</span>:وەلامی راست</div>
                <div id="problem"></div> 
                <div id="instruction"></div>
                <div id="answers">
                    <div id="answer1"></div>
                    <div id="answer2"></div>
                    <div id="answer3"></div>
                    <div id="answer4"></div>     
                </div>
                <div id="start">دەست پێکە</div>

                <div id="time">  کات :<span id="remainingTime">55</span>جرکە</div>


                
                <div id="gameover"> <span id="finalscore">0</span>وەلامی راست هەلبژارد</div>            
            </div> 
 
            
             <div id="bbb"><br>
     <sopn class='a21'>براوەی  یەکەم  :؟ </span><br>
           <sopn class='a21'>براوەی  دووەم : ؟ </span><br>
               <sopn class='a21'>براوەی  سێ یەم : ؟ </span><br>
 </div> 

            
            
            
            <!--audio files-->
            <div class="player">      
                <audio id="startgame" autoplay  loop>
                    <source src="audio/start.mp3">
                    <source src="audio/start.ogg">
                </audio>
            </div>
            <audio id="lost">
                <source src="audio/error.mp3">
                <source src="audio/error.ogg">
            </audio>
            <audio id="win">
                <source src="audio/correct.mp3">
                <source src="audio/correct.ogg">
            </audio>
            <audio id="final">
                <source src="audio/end.mp3">
                <source src="audio/end.ogg">
            </audio>
        </div>
 <audio  loop autoplay>
     <source src="modern-spanish-pop-rumba-pop-cello-and-flamenco-guitar-2469.mp3">
 </audio>


        <!--JavaScript-->
        <script >
            



var playing = false;
var score;
var timeRemaining;
var action;
var correctAnswer;


//the user clicks on the start/reset
document.getElementById("start").onclick = function(){

    //if the user is playing
    if (playing == true){
        //reload page
        location.reload(); 
    }
    //if the user is not playing
    else
    {
        //change mode to playing
        document.getElementById("startgame").pause();
        playing=true;
        score=0;        
        document.getElementById("scoreNumber").innerHTML=score;

        //show the instructions     
        document.getElementById("instruction").innerHTML="وەلامی راست هەلبژێرە";

        //show countdown box
        show("time");

        //30 seconds timer
        timeRemaining = 30;
        document.getElementById("remainingTime").innerHTML=timeRemaining;

        //hide game over box
        hide("gameover");

        //change button to reset
        document.getElementById("start").innerHTML="دووبارە  کردنەوە";

        //start countdown
        startCountdown();

        //generate new question and answers  
        generateQA();             
    }   
}

//the user clicks on the answer box
for(var i=1; i<5; i++){
    document.getElementById("answer"+i).onclick=function(){    
        if(playing==true){

            //if the answer is correct
            //this=document.getElementById("answer1")
            if (this.innerHTML==correctAnswer)
            { 
                //correct answer
                score++;
                document.getElementById("scoreNumber").innerHTML=score;
                //play sound
                document.getElementById("win").play();
                show("right");

                //show for 1 sec
                setTimeout(function(){
                    hide("right");
                },1000);    
                hide("wrong");
                //generate new answer and question
                generateQA();
            }
            else
            {  //play sound
                document.getElementById("lost").play();

                //wrong answer
                show("wrong");

                //show for 1 sec
                setTimeout(function(){
                    hide("wrong");
                }, 1000)
                hide("right");
            }             
        }
    }
}

//functions 

//start countdown 20sec
function startCountdown(){
    action = setInterval(function(){
        timeRemaining-=1;
        document.getElementById("remainingTime").innerHTML = timeRemaining;
        if(timeRemaining == 0)
        {//game over
            stopCountdown();
            show("gameover");
            document.getElementById("gameover").innerHTML= "<p> " + score+ ":وەلامی راست  هەلبژارت</p>"; 
            document.getElementById("final").play();
            hide("time");
            hide("right");
            hide("wrong");
            playing=false;
            document.getElementById("start").innerHTML = "Start Game";
        }
    },1000);
}

//generate question and answers 
function generateQA(){
    //a random digit from 0 to 10 inclusive
    var randomNumber1 = Math.round(Math.random()*10);   
    var randomNumber2 = Math.round(Math.random()*10);     

    document.getElementById("problem").innerHTML=randomNumber1+ " x " +randomNumber2;
    correctAnswer=randomNumber1*randomNumber2;  
    var answerBox= (Math.round(Math.random()*3))+1;

    //to fill on if the random answer boxes with the right answer
    document.getElementById("answer"+answerBox).innerHTML=correctAnswer; 

    //storing answer choices;    
    var answers=[correctAnswer];

    //to fill the other answer boxes with the wrong answers   

    //make sure to exclude the box with the right answer
    for (var i=1; i<5; i++)
    {if (i!==answerBox)
    { 
        var wrongAnswer;
        // check that the wrong answer is not equal to the right answer or another taken wrong answer
        //do: at least one possible answer, while: generate then a new possible answer, if the previous answer is not ok
        do{
            wrongAnswer = (Math.round(Math.random()*10))*(Math.round(Math.random()*10));
        }            
        while(answers.indexOf(wrongAnswer)>-1)  //wrongAnswer is already in the answer list, we countinue do loop   

            document.getElementById("answer"+i).innerHTML=wrongAnswer;
        //adding wrong answer to answer choices
        answers.push(wrongAnswer);
    }
    }
}

//stop counter
function stopCountdown(){
    clearInterval(action);
}
//hide an element      
function hide(id){      
    document.getElementById(id).style.display="none";      
}   
//show an element
function show(id){      
    document.getElementById(id).style.display="block";      
}    



        </script>

    </body>
</html>
