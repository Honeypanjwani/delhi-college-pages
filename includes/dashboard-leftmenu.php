  <?php
    $db = new DB();
    $student_login_status = $db->clm_value("student_login_status", 'Registration_No', 'registration_new', $_SESSION['Registration_No']);
  ?>

  <div class="col-sm-3 col-md-3">
    <div class="side-menu">
      <div class="head">
        <h3 class="title">Menu</h3>
      </div>
      <div class="body">
        <ul>
          <li><a href="dashboard.php"><strong>Dashboard</strong></a></li>
          <li><a href="dashboard-profile.php"><strong>Student Profile</strong></a></li>

          <!--<li><a href="dashboard-registration-form.php"><strong>Registration Form</strong></a></li> -->
          <li><a  href="admit-card.php" target="blank" ><strong>Admit Card</strong></a></li>
          <li><a target="blank" style="background-color: green; color: #fff; padding: 5px;" href="result-card.php" ><strong>Result Card</strong></a></li>
          <li><a target="blank" style="background-color: green; color: #fff; padding: 5px;" href="counselling-letter.php"><strong>Counselling Letter</strong></a></li>
          <li><a target="blank" style="background-color: green; color: #fff; padding: 5px;" href="ame-cet-2019-online-counselling-process.php"><strong>Counselling Process</strong></a></li>
          <li><a target="blank" style="background-color: green; color: #fff; padding: 5px;" href="amecet-2019-institute-list.php"><strong>Institute List</strong></a></li>
          <li><a target="blank" style="background-color: green; color: #fff; padding: 5px;" href="ame-cet-2019-scholarship.php"><strong>AME CET Scholarship</strong></a></li>



          <li><a href="faq.php"><strong>FAQ's</strong></a></li>
          <li><a href="contact-us.php"><strong>Helpdesk</strong></a></li>
        </ul>
      </div>  
    </div>
  </div>
