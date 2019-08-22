<footer>
  <div class="container">
    <div class="row row-flex">
      <div class="col-md-3 col-sm-6">
        <div class="intro">
          <div class="flogo"> AME CET 2020</div>
          <p class="intro-content">Aircraft maintenance engineering common entrance test (AME CET) is the entrance test for Aircraft Maintenance Engineer is conducted nationwide at various centres across India through which candidates can secure admissions for Aircraft maintenance Engineering (AME) course in approved AME institutes.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="extralinks footer">
          <h4 class="title">Important Links</h4>
          <div class="extralinks-cols">
            <ul class="extralinks-col">
              <li class="bl"> <a href="https://www.amecet.in" title="Home">Home</a> </li>
              <li class="bl"> <a href="https://www.amecet.in/about-us.php">About us</a> </li>
              <li class="bl"> <a href="mission-and-vision.php">Mission & Vision</a> </li>
              <li class="bl"> <a href="https://www.amecet.in/aircraft-maintenance-engineering-ame-course-details.php">AME Course</a> </li>
              <li class="bl"> <a href="#">Terms & Condition</a> </li>
			  <li class="bl"> <a href="#">Associates Login</a> </li>
			  <li class="bl"> <a href="#">Contact Us</a> </li>
            </ul>
          </div>
        </div>
      </div>

      <?php
      $db = new DB();
      if($db->is_mobile() != 1)
      {
      ?>
      <div class="col-md-3 col-sm-6">
        <div class="address">
          <h4 class="title">How to reach to AME CET</h4>
		  <p><b>AME CET  Corporate Office</b></p>
          <div class="extralinks-cols">
            <ul class="extralinks-col">
              <li class="list"><span class="fcontact-icon fa fa-map-marker"></span>C-707, IIIrd Floor, Ramphal Chowk Rd, Sector 7 Dwarka, New Delhi-110075</li>
              <li class="list"><span class="fcontact-icon fa fa-phone"></span>+91 8800663006</li>
              <li class="list"><span class="fcontact-icon fa fa-phone"></span>011 40109443</li>

            </ul>
          </div>
        </div>
      </div>

      <?php
           }
      ?>
      <div class="col-md-3 col-sm-6">
        <div class="subcribe-main">
         <?php include_once("includes/subscribe.php"); ?>
        </div>
      </div>
    </div>
  </div>
</footer>