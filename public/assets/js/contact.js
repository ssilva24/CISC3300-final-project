document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 

        if (validateForm()) {
            successMessage.classList.remove('hidden');
            form.reset(); 
        }
    });

    function validateForm() {
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        let isValid = true;

    
        if (name === '') {
            displayError('name', 'Please enter your name.');
            isValid = false;
        }
    
       
    
        if (message === '') {
            displayError('message', 'Please enter your message.');
            isValid = false;
        }
    
        return isValid;
    }
    
    function displayError(fieldId, errorMessage) {
        const errorElement = document.getElementById(`${fieldId}-error`);
        errorElement.innerText = errorMessage;
        errorElement.classList.remove('hidden');
    }

});