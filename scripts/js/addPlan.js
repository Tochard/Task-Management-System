//
const form = document.querySelector("#planForm"),
pln = form.querySelector(".pln"),
dt = form.querySelector(".dt"),
planTable = document.querySelector(".plan-table"),
addToPlan = form.querySelector("#addToPlan");

//prevent form from submitting
form.onsubmit = (e)=>{
    e.preventDefault(); 
}
addToPlan.onclick = () =>{
    console.log('add');
    let Xhr = new XMLHttpRequest();
    Xhr.open("POST", "../scripts/php/addPlan.php", true);
    Xhr.onload = ()=>{
            if(Xhr.readyState === XMLHttpRequest.DONE){
                if(Xhr.status === 200){
                    pln.value = ""; //to leave leave the input field blank once message is inserted to the database
                    dt.value = "";
                }
            }
        };
    //to send the form data through ajax to php
    let formPlan = new FormData(form); //creating new form data object
    Xhr.send(formPlan);  //sending the form data to php
}




setInterval(()=>{
	//Ajax starts
	let Xhr = new XMLHttpRequest(); //creating XML object
	Xhr.open("POST", "../scripts/php/plans.php", true);
	Xhr.onload = ()=>{
		if(Xhr.readyState === XMLHttpRequest.DONE){
			if(Xhr.status === 200){
				let data = Xhr.response;
                planTable .innerHTML = data;
			}
		}
	}
     //to send the form data through ajax to php
     let formData = new FormData(form); //creating new form data object
     Xhr.send(formData);  //sending the form data to php
}, 500); //this function will frequently run after 500ms



