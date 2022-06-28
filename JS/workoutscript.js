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
const dayC = document.getElementById("dayC");
const timeC = document.getElementById("timeC");
const calC = document.getElementById("calC");
const daytimeC = document.getElementById("daytimeC");
let cal = 142;
var interval;
let counter = 0;
let dnm = Number(appendday.innerHTML);
let daynum = dnm;
let appendtime = document.getElementById("tTime");
let temp = Number(appendtime.innerHTML);

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
    let Btnstyle = document.getElementById(btn)
    Btnstyle.style.fontSize = "20px"
    Btnstyle.innerHTML = "👍✅"
    Btnstyle.style.backgroundColor = "white"
  }
  if (counter == 12) {
    const time = Number(seconds * 60 + tens);
    temp = Number(temp) + Number(time);
    clearInterval(interval);
    tens = "00";
    seconds = "00";
    appendSeconds.innerHTML = seconds;
    appendTens.innerHTML = tens;
    daynum++;
    dayC.value = daynum;
    timeC.value = temp;
    calC.value = (daynum-1)*cal;
    daytimeC.submit();
    if (daynum == 31) {
      alert("congrats!! You Have Completed 30 days of Fitness course")
      daynum = 0;
    }
    counter = 0;
    appendcounter.innerHTML = counter;
    appendday.innerHTML = daynum;
    const btns = document.querySelectorAll(".jojobtn");
    btns.forEach(ele => {
      ele.style.backgroundColor = "yellowgreen";
      ele.innerHTML = "DONE"
    }
    )
  }
}