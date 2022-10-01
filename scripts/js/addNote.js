//
const form = document.querySelector("#noteForm"),
dt = form.querySelector(".dt"),
tm = form.querySelector(".tm"),
nt = form.querySelector(".nt"),
addNote = form.querySelector("#addNote");

//prevent form from submitting
form.onsubmit = (e)=>{
    e.preventDefault(); 
}
addNote.onclick = () =>{
    console.log('add');
    let Xhr = new XMLHttpRequest();
    Xhr.open("POST", "../scripts/php/addNote.php", true);
    Xhr.onload = ()=>{
            if(Xhr.readyState === XMLHttpRequest.DONE){
                if(Xhr.status === 200){
                    dt.value = ""; //to leave leave the input field blank once message is inserted to the database
                    tm.value = "";
                    nt.value = "";
                }
            }
        };
    //to send the form data through ajax to php
    let formNote = new FormData(form); //creating new form data object
    Xhr.send(formNote);  //sending the form data to php
}


