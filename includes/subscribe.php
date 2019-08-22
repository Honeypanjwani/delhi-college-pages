 <h4 class="title">Subscribe Us</h4>
 <h5 class="title">For latest update of AME CET Exam</h5>
 <div id="subscribe-h">
	<form method="post" action="thank-you.php" id="subscribe">
			
			  <div class="form-group mb-10">
				<input placeholder="Name" name="Name" id="Name"  class="form-control form-item" type="text" required>
			  </div>
			  <div class="form-group mb-10">
				<input placeholder="Mobile" name="Mobile" id="Mobile"  maxlength="13" onkeypress="return isNumberKey(event)" class="form-control form-item" type="text" required>
			  </div>
			  <div class="form-group mb-10">
				<input placeholder="Email" type="email" name="Email" id="Email" class="form-control form-item" type="text" required>
			  </div>
			  <div class="form-group mb-10">
				<input placeholder="City, State" name="City" id="City" class="form-control form-item" type="text" required>
			  </div>
			  <input type="hidden" name="curr_url" value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>" >
				<input type="hidden" name="referrerUrl"  value="" >
			  <input type="hidden" name="Query_Type" value="Subscribe Me" title="Subscribe Me" >
			  <button class="btn btn-1" type="submit"  onclick="javascript:return val();">Subscribe Me</button>
	</form> 
  </div>
  <div id="subscribe-s" class="hide">
     <h4 class="mt-10" style="color: green; font-weight: 400;">Dear Student, Thanks For subscribe us.</h4>
     <!-- <h5 class="mb-10">If have any query regarding your career i Feel free to contact us.<br /> <br /></h5>-->
			<h5 >Call Helpdesk: <a href="tel:8800663006"><span style="text-decoration: underline;">8800663006</span></a>  <br />
			visit <a target="_blank" href="www.amecet.in"><span style="text-decoration: underline;">www.amecet.in</span></a></h5>
  </div>

<script>

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }

        function val() {
            //date validation
            if (document.getElementById("Name").value == "") {
                alert("Please enter Name")

                document.getElementById("Name").focus();
                return false;
            }
            
            if (document.getElementById("Mobile").value == "") {
                alert("Please Enter Mobile number")

                document.getElementById("Mobile").focus();
                return false;
            }
                        if (document.getElementById("Email").value == "") {
                alert("Please enter your Email")

                document.getElementById("Email").focus();
                return false;
            }
            
            if (document.getElementById("City").value == "") {
                alert("Please enter City, State")

                document.getElementById("City").focus();
                return false;
            }

            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("txtEmail").value))) {
                alert("Invalid Email-id! Please re-enter.")

                document.getElementById("Email").focus();
                return false;
            }
            
            if (document.getElementById("City").value == "") {
                alert("Please enter City, State")

                document.getElementById("City").focus();
                return false;
            }

            if (document.getElementById("Message").value == "") {
                alert("Please enter Message")

                document.getElementById("Message").focus();
                return false;
            }


            return true;

        }
</script>