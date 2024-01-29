window.onload = function() {
let button = document.getElementById("button");
let cislo1 = document.getElementById("cislo1");
let cislo2 = document.getElementById("cislo2");

function secti() {
    alert(parseInt(cislo1.value) + parseInt(cislo2.value));
}

button.onclick = secti;

let button2 = document.getElementById("vidButton");

function show() {
    let window = document.getElementById("video")

    if(window.style.display === "none") {
        window.style.display = "block";
    }
    else {
        window.style.display = "none"
    }
}
button2.onclick = show;

}