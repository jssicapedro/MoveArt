var mode = document.getElementById("mode");

mode.onclick = () => {
    document.body.classList.toggle("light-mode");
    if(document.body.classList.contains("light-mode")){
        mode.src = "./public/img/darkMode/sun.png";
    } else {
        mode.src = "./public/img/darkMode/moon.png";
    }
}