<?php
/*
Including partial files most Content Management Systems (CMSs) divide out
*/
include("assets/includes/global-header.php"); // HTML head
include("assets/includes/main-header.php"); // Main head ?>
  <div id="form" class="container">
    <?php
      $to = 'zenkeisangha@gmail.com ';
      $subject = (isset($_POST['subject'])) ? $_POST['subject'] : 'Test Subject';
      $message = (isset($_POST['body'])) ? $_POST['body'] : 'Test Question';
      if (isset($_POST['from'])) {
        $headers = 'From: ' . $_POST['from'] . "\r\n" .
          'Reply-To: ' . $_POST['from'] . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
       } else {
        $headers = 'X-Mailer: PHP/' . phpversion();
       }

      if(isset($_POST['submit'])) {
        mail($to, $subject, $message, $headers);
      }
    ?>
      <div id="content">
        <div id="main_content">
          <h1>contact</h1>
          <div>
            <form action="contact.php" method="POST">
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" placeholder="subject" id="subject">
              </div>
              <div class="form-group">
                <label for="from">Email</label>
                <input type="email" class="form-control" name="from" id="from" value="" placeholder="Your Email">
              </div>
              <div class="form-group">
                <label for="body">Question</label>
                <textarea class="form-control" rows="3" name="body" id="body" placeholder="Question"></textarea>
              </div>
              <input type="submit" name="submit" id="submit" value="submit" class="btn btn-default">
            </form>
          </div>
          <a href="mailto:zenkeisangha@gmail.com">zenkeisangha@gmail.com</a>
          <br /><b>415 349-3491</b>
        </div><!-- #main_content -->
        <?php include("assets/includes/sub-nav.php"); ?>
      </div><!-- #content -->
    <?php include("assets/includes/main-footer.php"); ?>
  </div><!-- #form -->
<?php include("assets/includes/global-footer.php"); // HTML foot ?>