function val(){
    let email = document.getElementById("email").value;
    let pass = document.getElementById("password").value;
    if(email =="obsofficial@.com" && pass == "kartik8810"  || email =="smsjofficial@.com" && pass == "kartik8810"){
        alert("successfully login");
        window.location = "FORM/FORM_KST.html";
        return false;
    } 
    else{alert("Wrong Id & Password");}
}






