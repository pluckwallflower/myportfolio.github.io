<?php
include('includes/header.php');
?>
<?php
    $message_sent = false;
    if (isset($_POST['email']) && $_POST['email']!= ''){
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            //submit the form
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "n.vikram38@gmail.com";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to, $messageSubject, $body);

            header ("location: success.php");

            $message_sent = true;


        }
        else{
            $invalid_class_name = "form-invalid";
        }
    }
?>
</head>

<body>

  <?php
  include('includes/navbar.php')
  ?>

  
  <main id="main">

    <section class="section pb-5">
      <div class="container">

        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Contact</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut
              officiis explicabo inventore.
            </p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

            <form action="contact.php" method="post" role="form" class="form">

              <div class="row gy-3">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input  type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 form-group">
                  <label for="name">Email</label>
                  <input type="email" class="form-control <?= $invalid_class_name ?? ""?>" name="email" id="email" required>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="col-md-12 form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" cols="30" rows="10" required></textarea>
                </div>

                <div class="col-md-12 my-3"></div>
                 <div class="col-md-6 mt-0 form-group">
                  <input type="submit" class="readmore d-block w-100" value="Send Message">
                </div>
              </div>

            </form>

          </div>

          <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">Address</strong>
                <span>111 - A, Anuradha, Bamunimaidan, Guwahati, India</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Phone</strong>
                <span>+91 2323235324</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">Email</strong>
                <span>n.vikram38@gmail.com</span>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section>

  </main><!-- End #main -->
  
  <?php
    include('includes/footer.php');
  ?>

</body>

</html>