<?php
/*
Including partial files most Content Management Systems (CMSs) divide out
*/
include("assets/includes/global-header.php"); // HTML head
include("assets/includes/main-header.php"); // Main head ?>
  <div id="form" class="container">
    <?php
      $to = 'zenkeisangha@gmail.com ';
      $subject = (isset($_POST['subject'])) ? $_POST['subject'] : 'test subject';
      $message = (isset($_POST['field1'])) ? $_POST['field1'] : 'Test Body';
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
          <a href="mailto:zenkeisangha@gmail.com">zenkeisangha@gmail.com</a>
          <br /><b>415 349-3491</b>
          <h1>contact</h1>
          <div>
            <form action="contact.php" method="POST">
              <input type="text" name="subject" id="subject" value="subject" placeholder="subject">
              <input type="text" name="field1" id="body" value="" placeholder="Type an Item (e.g. Item1)">
              <input type="text" name="from" id="from" value="you@example.com" placeholder="From Email">
              <input type="submit" name="submit" id="submit" value="submit">
            </form>
          </div>
        </div><!-- #main_content -->
        <?php include("assets/includes/sub-nav.php"); ?>
      </div><!-- #content -->
    <?php include("assets/includes/main-footer.php"); ?>
  </div><!-- #form -->
<?php include("assets/includes/global-footer.php"); // HTML foot ?>