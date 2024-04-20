<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="./assets/styles/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <div class="container">
        <h1>Stephanie Silva</h1>
        <h2>Contact Me! I will get back to you soon.</h2>
        
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <div id="name-error" class="error-message hidden"></div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>

        <div id="successMessage" class="hidden">Thank you, your message has been sent successfully!</div>
    </div>


    <script>
        $(document).ready(function() {

            $('#contactForm').submit(function(e) {
                
                e.preventDefault();
                var formData = $(this).serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '/contact',
                    data: formData,
                   
                    success: function(response) {
                        $('#successMessage').removeClass('hidden');
                        $('#contactForm')[0].reset();
                    },
                    
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
