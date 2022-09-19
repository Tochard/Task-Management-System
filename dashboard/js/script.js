// SIDE MENU 


var menu = document.getElementById("menu");
var mobileNavs = document.getElementById("side-navs");
var mainContent = document.getElementById("main-content");

menu.addEventListener('click', function(e){
  
    if (mobileNavs.style.display === "none") {
    mobileNavs.style.display = "block";
    mainContent.style.width= "calc(100% - 270px)";
  } else {
    mobileNavs.style.display = "none";
    mainContent.style.width= "100%";

  }
});

// MOBILE VIEW MENU

var mobile = document.getElementById("mobile");
var mNavs = document.getElementById("mobile-navs");

mobile.addEventListener('click', function(e){
  
    if (mNavs.style.display === "block") {
    mNavs.style.display = "none";
  } else {
    mNavs.style.display = "block";
  }
});



// ADD TASK BUTTON
var addTask = document.getElementById("addTask");
var taskForm = document.getElementById("taskForm");

addTask.addEventListener('click', function(e){
    if (taskForm.style.display === "block") {
    taskForm.style.display = "none";
    addTask.innerHTML = '<i class="fa-solid fa-plus"></i> Add Task';
    addTask.style.backgroundColor = "#004581";
  } else {
    taskForm.style.display = "block";
    addTask.innerHTML = 'Cancel';
    addTask.style.backgroundColor = "#eb3838";
  }
});



