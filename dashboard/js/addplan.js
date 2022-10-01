// ADD PLAN BUTTON
var addplan = document.getElementById("addPlan");
var planForm = document.getElementById("plan");

addplan.addEventListener('click', function(e){
  console.log('clicked');
    if (planForm.style.display === "block") {
    planForm.style.display = "none";
    addplan.innerHTML = '<i class="fa-solid fa-plus"></i> Add plan';
    addplan.style.backgroundColor = "#004581";
  } else {
    planForm.style.display = "block";
    addplan.innerHTML = 'Cancel';
    addplan.style.backgroundColor = "#eb3838";
  }
});
