<form action="/Darwins-Construction/Website/PHP-Partials/send_email.php" id="quoteForm" method="post" class="php-email-form">
    <h4 class="form-quote d-flex justify-content-center">Get A Quote Now</h4>
    <div class="row gy-3">
        <div class="col-md-12">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>
        <div class="col-md-12">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="col-md-12">
            <input type="text" name="phone" class="form-control" placeholder="Phone" required>
        </div>
        <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Short Job Description" required></textarea>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-outline-primary">Send Message</button>
        </div>
    </div>
</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#quoteForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission behavior.

        // Serialize the form data to send it as a POST request.
        var formData = $(this).serialize();

        // Send an AJAX request to the server-side script.
        $.ajax({
            type: 'POST',
            url: 'PHP-Partials/send_email.php',
            data: formData,
            success: function(response) {
                // Handle the response from the server (e.g., display a success message).
                alert('Form submitted successfully.');
            },
            error: function(xhr, status, error) {
                // Handle errors (e.g., display an error message).
                alert('Form submission failed: ' + error);
            }
        });
    });
});
</script>

