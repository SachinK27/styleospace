<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>For Testing</title>
    <?php include_once "includes/links.php"; ?>
    <!-- <link href="image-viewer.css"  rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <style type="text/css">
    body {
  padding: 2rem 1rem;
}
    </style>
</head>
<body>
<div id="accordion" role="tablist">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fa-fusion-box"></i>Step 1
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <img src="assets/imgs/image-28.jpg" class="img-fluid">
            <h5>SELECT BASE MATERIALS</h5>
            <ul>
                <li>WPC</li>
                <li>PLYWOOD</li>
                <li>PRELAM</li>
                <li>OTHER</li>
            </ul>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <i class="fa-fusion-box"></i>Step 2
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <img src="assets/imgs/image-29.jpg" class="img-fluid">
            <h5>SELECT LAMINATE</h5>
            <ul>
                <li>ACRYLIC</li>
                <li>HIGH GLOSS</li>
                <li>MATTE</li>
            </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <i class="fa-fusion-box"></i>Step 3
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <img src="assets/imgs/image-30.jpg" class="img-fluid">
            <h5>SELECT HARDWARE</h5>
            <ul>
                <li>HETTICH</li>
                <li>HAFFLE</li>
                <li>EBCO</li>
                <li>OTHER</li>
            </ul>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

(function () {
  'use strict'

  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style')
    msViewportStyle.appendChild(
      document.createTextNode(
        '@-ms-viewport{width:auto!important}'
      )
    )
    document.head.appendChild(msViewportStyle)
  }

}())
</script>
</body>
</html>