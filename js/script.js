function initClick() {
    var r = document.getElementById("arrow-right");
    r.onclick = showR;
    var l = document.getElementById("arrow-left");
    l.onclick = showL;
};

function showR() {
    var c = document.getElementById("css-carousel-book");
    c.style.transform = ('translateX(-50%)');
}

function showL() {
    var c = document.getElementById("css-carousel-book");
    c.style.transform = ('translateX(0%)');
}