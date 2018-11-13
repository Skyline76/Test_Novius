function initClick() {
    var r = document.getElementById("arrow-right");
    r.onclick = showR;
    var l = document.getElementById("arrow-left");
    l.onclick = showL;

    var json = '';
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "programmation.php", true);
    xhr.onload = function (e) {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                injectHTML(xhr.responseText);
            } else {
                console.error(xhr.statusText);
            }
        }
    };
    xhr.onerror = function (e) {
        console.error(xhr.statusText);
    };
    xhr.send(null);
};

function injectHTML(json) {
    var json_parse = JSON.parse(json);
    json_parse.forEach(function (element) {
        document.getElementById("css-carousel-book").innerHTML += '<div class="bookingDates">' + element + '</div>';
    });
}

function showR() {
    var c = document.getElementById("css-carousel-book");
    c.style.transform = ('translateX(-50%)');
}

function showL() {
    var c = document.getElementById("css-carousel-book");
    c.style.transform = ('translateX(0%)');
}