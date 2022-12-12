// var mode = document.getElementById("mode");

// mode.onclick = () => {
//     document.body.classList.toggle("light-mode");
//     if(document.body.classList.contains("light-mode")){
//         mode.src = "./public/img/darkMode/sun.png";
//     } else {
//         mode.src = "./public/img/darkMode/moon.png";
//     }
// }
const nav = document.querySelector('nav');

window.addEventListener('scroll', () => {
    if (window.scrollY >= 50) {
        nav.classList.add('active_nav');
        nav.classList.remove('active_collapse');
    } else {
        nav.classList.remove('active_nav');
        nav.classList.add('active_collapse');
    }
})