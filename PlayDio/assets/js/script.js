var container = document.querySelector(".container");
var menuIcon = document.querySelector(".menu-icon");
var sidebar = document.querySelector(".sidebar");
menuIcon.onclick = function () {
    sidebar.classList.toggle("small-sidebar");
    container.classList.toggle("large-container");
};

// var dotlink = document.querySelector(".three-dots");
// var linkdrop = document.querySelector(".play-video-link-drop");
// dotlink.onclick = function () {
//     linkdrop.classList.toggle("show");
//     linkdrop.classList.toggle("flex");
// };