//
const form = document.querySelector("#noteForm"),
dtn = form.querySelector(".dtn"),
tmn = form.querySelector(".tmn"),
ntn = form.querySelector(".ntn"),
errorText = form.querySelector(".errortxt");
addNote = form.querySelector("#addNote");

//prevent form from submitting
form.onsubmit = (e)=>{
    e.preventDefault(); 
}
addNote.onclick = () =>{
    let Xhr = new XMLHttpRequest();
    Xhr.open("POST", "../scripts/php/addNote.php", true);
    Xhr.onload = ()=>{
            if(Xhr.readyState === XMLHttpRequest.DONE){
                if(Xhr.status === 200){
                    dtn.value = ""; //to leave leave the input field blank once message is inserted to the database
                    tmn.value = "";
                    ntn.value = "";
                    let data = Xhr.response;
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        };
    //to send the form data through ajax to php
    let formPlan = new FormData(form); //creating new form data object
    Xhr.send(formPlan);  //sending the form data to php
}

