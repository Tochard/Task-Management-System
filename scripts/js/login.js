//
const form = document.querySelector("#login-form"),
continueBtn = form.querySelector("#login-btn"),
errorText = form.querySelector(".error-txt");
 
//prevent form from submitting
form.onsubmit = (e)=>{
    e.preventDefault(); 
}
continueBtn.onclick = () =>{

    let Xhr = new XMLHttpRequest();
    Xhr.open("POST", "../scripts/php/login.php", true);
    Xhr.onload = ()=>{
        if(Xhr.readyState === XMLHttpRequest.DONE){
            if(Xhr.status === 200){

                let data = Xhr.response;
                console.log(data);
                if(data == "success"){
                    location.href = "../dashboard/dashboard.php";
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }

            }
        }
    }
    //to send the form data through ajax to php
    let formData = new FormData(form); //creating new form data object
    Xhr.send(formData);  //sending the form data to php
}

