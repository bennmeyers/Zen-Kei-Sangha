<?php
/*
Including partial files most Content Management Systems (CMSs) divide out
*/
include("assets/includes/global-header.php"); // HTML head
include("assets/includes/main-header.php"); // Main head ?>
  <div id="form" class="container">
    <?php
      $to = 'zenkeisangha@gmail.com';
      $name = (isset($_POST['name'])) ? $_POST['name'] : '[Name Not Provided]';
      $subject = (isset($_POST['subject'])) ? $_POST['subject'] : 'Test Subject';
      $message = (isset($_POST['body'])) ? $_POST['body'] . "from " . $name : 'Test Question';
      if (isset($_POST['from'])) {
        $headers = 'From: ' . $_POST['from'] . "\r\n" .
          'Reply-To: ' . $_POST['from'] . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
       } else {
        $headers = 'X-Mailer: PHP/' . phpversion();
       }

      if(isset($_POST['submit'])) {
        mail($to, $subject, $message, $headers);
        ?>
      <div id="content">
        <div id="main_content">
          <h1 class="text-success">Thank You <?php echo $name; ?>! We'll get back to you soon!</h1>
        </div><!-- #main_content -->
      </div><!-- #content -->
        <?php
      } else {
    ?>
      <div id="content">
        <div id="main_content">
          <h1>contact</h1>
          <div>
            <form action="contact.php" method="POST">
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" placeholder="subject" id="subject" name="subject" required="required">
              </div>
              <div class="form-group">
                <label for="subject">Name</label>
                <input type="text" class="form-control" placeholder="your name" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="from">Email</label>
                <input type="email" class="form-control" name="from" id="from" value="" placeholder="your email">
              </div>
              <div class="form-group">
                <label for="body">Question</label>
                <textarea class="form-control" rows="3" name="body" id="body" placeholder="question"></textarea>
              </div>
              <input type="submit" name="submit" id="submit" value="submit" class="btn btn-default">
            </form>
          </div>
          <a href="mailto:zenkeisangha@gmail.com">zenkeisangha@gmail.com</a>
          <br /><b>415 349-3491</b>
        </div><!-- #main_content -->
      </div><!-- #content -->
    <?php
      }
    ?>
    <?php include("assets/includes/main-footer.php"); ?>
  </div><!-- #form -->
<?php include("assets/includes/global-footer.php"); // HTML foot ?>