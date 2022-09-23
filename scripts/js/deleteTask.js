//
const form = document.querySelector("#delTask"),
del = form.querySelector("#del");
 
//prevent form from submitting
form.onsubmit = (e)=>{
    e.preventDefault(); 
}
del.onclick = () =>{

    let Xhr = new XMLHttpRequest();
    Xhr.open("POST", "../scripts/php/deleteTask.php", true);
    Xhr.onload = ()=>{
            if(Xhr.readyState === XMLHttpRequest.DONE){
                if(Xhr.status === 200){
                    console.log('deleted');
                }
            }
        }
    //to send the form data through ajax to php
    let formData = new FormData(form); //creating new form data object
    Xhr.send(formData);  //sending the form data to php
}