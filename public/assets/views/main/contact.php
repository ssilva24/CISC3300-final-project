<html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" href="./assets/styles/contact.css">
    <script src="./assets/js/contact.js"></script>
</head>

<body>
    <div class="container">
        <h1> Stephanie Silva</h1>
        <h2>Contact Me! I will get back to you soon,</h2>
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


        <div id="successMessage" class="hidden">Your message has been sent successfully!</div>
    </div>

</body>
</html>