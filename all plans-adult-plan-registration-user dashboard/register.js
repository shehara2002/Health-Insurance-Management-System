function validateForm() {
    

    let valid = true;

    //clear previous errors
    document.getElementById("nicError").innerHTML='';
    document.getElementById("phoneError").innerHTML='';
    document.getElementById("emailError").innerHTML='';

    //declare variables
    const nic = document.getElementById("national_id").value;
    const phn = document.getElementById("phone").value;
    const email = document.getElementById("email").value;
   
    //check validation

    if(nic.length != 12)
    {
        document.getElementById("nicError").innerHTML='NIC must be 12 digits';
        valid = false;
    }

    if(phn.length != 10)
    {
        document.getElementById("phoneError").innerHTML='Phone Number must be 10 digits';
        valid = false;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById("emailError").innerHTML = 'Invalid email format';
        valid = false;
    }

    if(valid){
        alert('Form submitted successfully!');
    }

        // Prevent form submission if validation fails
        if (!valid) {
            return false;
        }
    
        // If validation passes, allow form submission
        return true;
}

