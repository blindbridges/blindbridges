<html>
<head>
<title>Donating to us - Blind Bridges</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}
.active, .accordion:hover {
  background-color: #ccc; 
}
.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
<!-- Start CauseVox Embed Code -->
<script type="text/javascript" src="https://js.causevox.com/v3"></script>
<script type="text/javascript">
  causevox.CONFIG = {
    app_id : '2081dWxKNPkmzPOL',
    campaign_id : '03BGoA78GmkZzRmL'
  };
</script>
<!-- End CauseVox Embed Code -->
</head>
<body>
<div style="position: fixed; top: 0; width:100%; text-align: left" id="nav" role="navigation">
<?php include('../header.php'); ?>
</div>
<div style="width:100%; text-align: center" role="main">
<?php include('donate.php'); ?>
</div>
<div style="position: fixed; bottom: 0; width:100%; text-align: center" role="contentinfo">
<?php include('../footer.php'); ?>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</body>
</html>