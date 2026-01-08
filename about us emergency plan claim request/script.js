document.getElementById('claim-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const policyNumber = document.getElementById('policyNumber').value;
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const hospitalName = document.getElementById('hospitalName').value;
    const dateOfAdmission = document.getElementById('dateOfAdmission').value;
    const claimAmount = document.getElementById('claimAmount').value;
    const description = document.getElementById('description').value;
    
    // Assuming there is an element with the ID 'message' in the HTML
    const messageElement = document.getElementById('message');

    if (policyNumber && name && email && hospitalName && dateOfAdmission && claimAmount && description) {
        messageElement.innerHTML = `<p style="color: green;">Claim request submitted successfully for Policy Number: ${policyNumber}.</p>`;
        openPopup();  // Open the popup when the form is successfully submitted
    } else {
        messageElement.innerHTML = `<p style="color: red;">Please fill in all the fields.</p>`;
    }
    
});

// Define the popup functionality outside the event listener
let popup = document.getElementById("popup");

function openPopup() {
    popup.classList.add("open-Popup");
}

function closePopup() {
    popup.classList.remove("open-Popup");
}
