    // Set the date we're counting down to
var countDownDate = new Date("Nov 6, 2019 23:59:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var d = Math.floor(distance / (1000 * 60 * 60 * 24));
  var h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var s = Math.floor((distance % (1000 * 60)) / 1000);


    document.getElementById("days").innerHTML = d + "<span>dias</span>";

    document.getElementById("hours").innerHTML = (h < 10) ? "0" + h + "<span>horas</span>" : h + "<br> <span>horas</span>";

    document.getElementById("minutes").innerHTML = (m < 10) ? "0" + m + "<span>minutos</span>" : m + "<br> <span>minutos</span>";

    document.getElementById("seconds").innerHTML = (s < 10) ? "0" + s + " <span>segundos</span>" : s + "<br> <span>segundos</span>";




  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    var clockDiv = document.getElementById('time-cont');
    while (clockDiv.firstChild) {
        clockDiv.removeChild(clockDiv.firstChild);
    }

    document.getElementById("time-cont").innerHTML = "<h1 style='line-height:36px;flex-basis:100%'>¡COMPRA YA!</h1> ";
    }
    }, 1000);
 
    
  
    

