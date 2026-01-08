function validation()
{
    var email=document.getElementById("email").value;
    var message=document.getElementById("message").value;
    var error_message=document.getElementById("error_message");
    var text;
    

    error_message.style.padding="10px";
    error_message.innerHTML = "";

    if(email.indexOf("@")==-1|| email.indexOf(".") == -1)
    {
        text= "Please enter valid email";
        error_message.innerHTML=text;
        error_message.style.color = "red";
        return false;

    }

    alert("Form Submitted Successfully");
    return true;

}
