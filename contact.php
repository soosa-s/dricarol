<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
  <div class="container mt-5">
    <div class="contact card shadow p-4">
      <h2 class="text-center mb-4">Contact Now</h2>
      <form action="send_mail.php" method="post" class="needs-validation" novalidate>
        
        <!-- Name Field -->
        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
          <div class="invalid-feedback">Please enter your name.</div>
        </div>

        <!-- Email Field -->
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
          <div class="invalid-feedback">Please enter a valid email.</div>
        </div>

        <!-- Subject Field -->
        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <select name="subject" id="subject" class="form-select" required>
            <option value="" disabled selected>Select a subject</option>
            <option value="General Inquiry">General Inquiry</option>
            <option value="Support Request">Support Request</option>
            <option value="Feedback">Feedback</option>
            <option value="Other">Other</option>
          </select>
          <div class="invalid-feedback">Please select a subject.</div>
        </div>

        <!-- Message Field -->
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea name="message" id="message" class="form-control" rows="5" placeholder="Type your message" required></textarea>
          <div class="invalid-feedback">Please enter your message.</div>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" name="send" class="btn btn-primary w-100">Send Message</button>
        </div>

      </form>
    </div>
  </div>

  <!-- Bootstrap Form Validation Script -->
  <script>
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php include 'footer.php'; ?>
