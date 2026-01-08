function validateForm() {
    // Get form values
   
    const password = document.getElementById("pwd").value;
    const confirmPassword = document.getElementById("cpwd").value;
    

        if(password!=confirmPassword)
        {
            alert("Password mismatched");
            return false;
        }
        else{
            alert("Sign up successfully ");
            return true;
}
}