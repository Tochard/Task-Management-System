//
const form = document.querySelector("#todayTask"),
tsk = form.querySelector(".tsk"),
tim = form.querySelector(".tim"),
taskTable = document.querySelector(".task-table"),
addToTask = form.querySelector("#addToTask");
 
//prevent form from submitting
form.onsubmit = (e)=>{
    e.preventDefault(); 
}
addToTask.onclick = () =>{

    let Xhr = new XMLHttpRequest();
    Xhr.open("POST", "../scripts/php/addTask.php", true);
    Xhr.onload = ()=>{
            if(Xhr.readyState === XMLHttpRequest.DONE){
                if(Xhr.status === 200){
                    tsk.value = ""; //to leave leave the input field blank once message is inserted to the database
                    tim.value = "";
                }
            }
        }
    //to send the form data through ajax to php
    let formData = new FormData(form); //creating new form data object
    Xhr.send(formData);  //sending the form data to php
}




setInterval(()=>{
	//Ajax starts
	let Xhr = new XMLHttpRequest(); //creating XML object
	Xhr.open("POST", "../scripts/php/todayTask.php", true);
	Xhr.onload = ()=>{
		if(Xhr.readyState === XMLHttpRequest.DONE){
			if(Xhr.status === 200){
				let data = Xhr.response;
                taskTable .innerHTML = data;
			}
		}
	}
     //to send the form data through ajax to php
     let formData = new FormData(form); //creating new form data object
     Xhr.send(formData);  //sending the form data to php
}, 500); //this function will frequently run after 500ms



