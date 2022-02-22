
// Name
const myname = prompt("Selam. Senin adın ne?");
document.getElementById("myName").innerHTML = myname;

// Day
let d;
switch (new Date().getDay()) {
    case 0:
        d = "Pazar";
        break;
    case 1:
        d = "Pazartesi";
        break;
    case 2:
        d = "Salı";
        break;
    case 3:
        d = "Çarşamba";
        break;
    case 4:
        d = "Perşembe";
        break;
    case 5:
        d = "Cuma";
        break;
    case 6:
        d = "Cumartesi";
        break;
}

// Clock
function showTime() {
    let date = new Date();
    let h = date.getHours();
    let m = date.getMinutes();
    let s = date.getSeconds();

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    let time = h + ":" + m + ":" + s + " " + d;

    document.getElementById("myClock").innerText = time;
    document.getElementById("myClock").textContent = time;

    setTimeout(showTime, 1000);

}

showTime();