<?php
/*
Including partial files most Content Management Systems (CMSs) divide out
*/
include("assets/includes/global-header.php"); // HTML head
include("assets/includes/main-header.php"); // Main head ?>
<div id="events" class="container">
  <div id="content">
    <div id="main_content">
      <hr />
      <p>
        <b>ZK Formal SF:</b> We meet Mondays 6:30p-7:30p at Glide Community Center room 201 (Maya Angelou Room)
      </p>
      <address>
        <a href="https://www.google.com/maps/place/333+Taylor+St,+San+Francisco,+CA+94102/@37.7854701,-122.4136567,17z/data=!3m1!4b1!4m5!3m4!1s0x8085808fbf13ac01:0xfa064570280bf978!8m2!3d37.7854701!4d-122.411468" onclick="ga('send','location','External','Link','Glide');" target="_blank">333 Taylor Street
        <br />San Francisco, CA 94102</a>
      </address>
      <hr />
      <p>
        <b>ZK Garden SF:</b>
        You can also find us on Sunny Tuesdays and Thursdays 1:30p-2:30p in Howard & Langton Community Garden
      </p>
      <address>
        <a href="https://www.google.com/maps/place/Howard+St+%26+Langton+St,+San+Francisco,+CA+94103/@37.7775491,-122.4121334,17z/data=!3m1!4b1!4m5!3m4!1s0x80858083007ff7c1:0x6f4fb388012d120a!8m2!3d37.7775491!4d-122.4099447" onclick="ga('send','location','External','Link','Garden');" target="_blank">Howard St & Langton St
        <br />San Francisco, CA 94103</a>
      </address>
      <hr />
      <p>
        We’re also happy to arrange new meditation groups: just <a href="contact.php" onclick="ga('send','location','Internal','Link','Contact');">contact us</a> for more information.
      </p>
      <hr />
      <iframe src="https://calendar.google.com/calendar/embed?src=zenkeisangha%40gmail.com&ctz=America%2FLos_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div><!-- #main_content -->
  </div><!-- #content -->
  <?php include("assets/includes/main-footer.php"); // Main foot ?>
</div><!-- #homepage -->
<?php include("assets/includes/global-footer.php"); // HTML foot ?>