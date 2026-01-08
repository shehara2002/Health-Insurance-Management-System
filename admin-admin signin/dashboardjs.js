function validation(){
    var email=document.getElementById("email").value;
    var message=document.getElementById("message").value;
    var error_message=document.getElementById("error_message");
    var text;
    

    error_message.style.padding="10px";
    error_message.innerHTML = "";

    if(email.indexOf("@")==-1|| email.indexOf(".") == -1)
    {
        text= "Invalid email address!";
        error_message.innerHTML=text;
        error_message.style.color = "red";
        return false;

    }

    alert("Successfully Submitted!");
    return true;

}