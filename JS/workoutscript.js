var seconds = 00;
var tens = 00;
var appendTens = document.getElementById("tens");
var appendSeconds = document.getElementById("seconds");
const appendcounter = document.getElementById("counter");
const appendday = document.getElementById("daynum");
var buttonStart = document.getElementById("button-start");
var buttonStop = document.getElementById("button-stop");
var buttonCount = document.getElementById("button-count");
var buttonReset = document.getElementById("button-reset");
var interval;
let counter = 0;
let daynum = 1;
function startTimer() {
  tens++;
  if (tens < 9) {
    appendTens.innerHTML = "0" + tens;
  }
  if (tens > 9) {
    appendTens.innerHTML = tens;
  }
  if (tens > 59) {
    seconds++;
    appendSeconds.innerHTML = "0" + seconds;
    tens = 0;
    appendTens.innerHTML = "0" + 0;
  }
  if (seconds > 9) {
    appendSeconds.innerHTML = seconds;
  }
}

buttonStart.onclick = function () {
  interval = setInterval(startTimer, 1000);
};

buttonStop.onclick = function () {
  clearInterval(interval);
};

buttonReset.onclick = function () {
  clearInterval(interval);
  tens = "00";
  seconds = "00";
  appendSeconds.innerHTML = seconds;
  appendTens.innerHTML = tens;
}

function DoneCounter(btn) {
  counter++;
  if (counter <= 12) {
    appendcounter.innerHTML = counter;
    console.log(counter);
    let Btnstyle = document.getElementById(btn)
    Btnstyle.style.fontSize="20px"
    Btnstyle.innerHTML="👍✅"

    Btnstyle.style.backgroundColor="white"
  }
  if (counter == 12) {
    alert("congrats!!")
    daynum++;
    if(daynum==31){
      daynum =0;
    }
    counter=0;
    appendcounter.innerHTML = counter;
    appendday.innerHTML = daynum;
    const btns= document.querySelectorAll(".jojobtn");
     btns.forEach(ele=> {
      console.log(ele);
      ele.style.backgroundColor="yellowgreen";
      ele.innerHTML="Done"
    }
    )
  }
}