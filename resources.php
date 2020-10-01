<?php
/*
Including partial files most Content Management Systems (CMSs) divide out
*/
include("assets/includes/global-header.php"); // HTML head
include("assets/includes/main-header.php"); // Main head ?>
<div id="resources" class="container">
  <div id="content">
    <div id="main_content">
      <h1>jana talks</h1>

      <div id="txt">resources.csv</div>

      <h1>outside resources</h1>
      <p>The Zenkei Sangha is the next generation of Rev. Jana Drakka's Zenkei Zen Sangha, which continues the tradition of caring Jana established.
      <br><a href="https://web.archive.org/web/20111110094559/http://janadrakka.com/" target="_blank">Zenkei wayback machine archive</a></p>
      <p>These are some of the other services or zendo's we support.</p>
      <ul>
        <li><a href="http://www.floatingzendo.org" target="_blank">Floating Zendo</a></li>
        <li><a href="http://www.jikoji.org" target="_blank">Jikoji</a></li>
        <li><a href="https://www.maitri.org/" target="_blank">Maitri</a></li>
        <li><a href="http://www.open-zen.org" target="_blank">Open Zen</a></li>
        <li><a href="http://www.popupzendo.org" target="_blank">Pop-up Zendo</a></li>
        <li><a href="http://www.sfzc.org" target="_blank">San Francisco Zen Center</a></li>
        <li><a href="http://www.tricycle.org" target="_blank">Tricycle</a></li>
        <li><a href="http://walkingthroughpeace.com/" target="_blank">WalkingThroughPeace</a></li>
    </ul>
    </div><!-- #main_content -->
  </div><!-- #content -->
  <?php include("assets/includes/main-footer.php"); // Main foot ?>
</div><!-- #homepage -->
<?php include("assets/includes/global-footer.php"); // HTML foot ?>
<script type="text/javascript">
var url = "resources.csv";

var request = new XMLHttpRequest();  
request.open("GET", url, false);   
request.send(null);  

var csvData = new Array();
var jsonObjectTR = request.responseText.split('\n');

csvData.push('<table class="table table-striped">')
for (var i = 0; i < jsonObjectTR.length; i++) {
    // csvData.push(jsonObjectTR[i].join('<tr>'));
    // echo csvData.push(tableR);
}
// Retrived data from csv file content
csvData.push('</table>')
document.getElementById('txt').innerHTML = csvData; // insert the table on to the page
</script>