var timeSecondsStar, timeSecondsEnd, timeSecondsTemp = 0;

var ketquaElement = document.querySelector(".ketqua");
    ketquaElement.textContent = 0.000 + "s";

var shapeElement = document.createElement("div");

function regShape() {
    // random hình
    var random = Math.random();
    if (random <0.3) {
        shapeElement.id = "square";
    } else if (random >=0.3 && random <0.6) {
        shapeElement.id = "circle";
    } else {
        shapeElement.id = "triangle";
    }
    // random vị trí
    shapeElement.style.left = Math.random() * (window.innerWidth - 100) + "px";
    shapeElement.style.top = Math.random() * (window.innerHeight - 100) + "px";
    document.body.appendChild(shapeElement);

    // khởi tạo thời gian ban đầu
    timeSecondsStar = new Date().getTime();
}

shapeElement.addEventListener("click", function () {
    // random hình
    var random = Math.random();
    if (random <0.3) {
        shapeElement.id = "square";
    } else if (random >=0.3 && random <0.6) {
        shapeElement.id = "circle";
    } else {
        shapeElement.id = "triangle";
    }
    // random vị trí
    shapeElement.style.left = Math.random() * (window.innerWidth - 100) + "px";
    shapeElement.style.top = Math.random() * (window.innerHeight - 100) + "px";
    document.body.appendChild(shapeElement);

    // khởi tạo thời gian sau khi click
    timeSecondsEnd = new Date().getTime();
     // tính thời gian
    timeSecondsTemp = timeSecondsEnd - timeSecondsStar;
     // hiển thị kết quả
    ketquaElement.textContent = timeSecondsTemp/1000 + "s";
     // reset
    timeSecondsStar = new Date().getTime();
});

function removeShape() {
    document.body.removeChild(shapeElement);
    ketquaElement.textContent = 0.000 + "s";
}