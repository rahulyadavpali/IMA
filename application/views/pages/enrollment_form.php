
	<script type="text/javascript">
        $().ready(function(){
                $("#sethEnForm").validate({
                    rules:{
                        studentname: {required: true}, 
                        guardianname: {required: true}, 
                        emailid: {required: true, email: true}, 
                        mobileno: {required: true, minlength: 10}, 
                        dob: {required: true}, 
                        classs: {required: true}, 
                        medium: {required: true}, 
                        streames: {required: true}, 
                        exammode: {required: true}, 
                        examtime: {required: true}, 
                        examdate: {required: true}, 
                    },
                    messages: {
                        studentname: {required: "Please enter your full name."}, 
                        guardianname: {required: "Please enter your guardian's name."}, 
                        emailid: {required: "Please enter a valid email address."}, 
                        mobileno: {required: "Please enter your 10-digit mobile number."}, 
                        dob: {required: "Please enter your date of birth."}, 
                        classs: {required: "Please select your current class."}, 
                        medium: {required: "Please select your language medium."}, 
                        streames: {required: "Please select a stream which you are interested."}, 
                        exammode: {required: "Please select any one exam mode."}, 
                        examtime: {required: "Please select exam time as per your comfort."}, 
                        examdate: {required: "Please select exam date as per your comfort."}, 
                    }
                });
            });
    </script>

	<section class="sthe_bread">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="sthe_bred_itm">
						<p>Please enter your details for enrollment.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sthe_section pt-90 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 seth_cotainer">
					<div class="seth_frm">
						<div class="seth_form">
							<h1>Complete Your Enrollment!</h1>
							<form id="sethEnForm" name="sethEnForm" action="<?php echo base_url('sthe/enrollStudent/'); ?>" method="POST">
								<div class="en_frm">
									<label for="studentname">Student Name</label>
									<input type="text" id="studentname" name="studentname" placeholder="Student Full Name" />
								</div>
								<div class="en_frm">
									<label for="guardianname">Father/Guardian Name</label>
									<input type="text" id="guardianname" name="guardianname" placeholder="Father/Guardian Name" />
								</div>
								<div class="en_frm">
									<label for="emailid">Email Id</label>
									<input type="email" id="emailid" name="emailid" placeholder="example@ima.com" />
								</div>
								<div class="en_frm">
									<label for="mobileno">Mobile Number</label>
									<input type="number" id="mobileno" name="mobileno" value="<?php echo $mobileno; ?>" onkeypress="if(this.value.length==10)return false;" />
								</div>
								<div class="en_frm">
									<label for="dob">Date of Birth</label>
									<input type="date" id="dob" name="dob" placeholder="dd-mm-yyyy" />
								</div>
								<div class="en_frm">
									<label for="streames">Stream</label>
									<select id="streames" name="streames" onchange="showRent(this)">
										<option value="">Stream</option>
	                                    <option value="Medical">Medical</option>
	                                    <option value="Engineering">Engineering</option>
	                                    <option value="PreFoundations">Pre-Foundations</option>
									</select>
								</div>
								<div class="en_frm">
									<label for="classs">Class</label>
									<select id="classs" name="classs">
										<option value="">Class</option>
										<option id="optcls6" style="display: none;" value="6th">6th</option>
	                                    <option id="optcls7" style="display: none;" value="7th">7th</option>
	                                    <option id="optcls8" style="display: none;" value="8th">8th</option>
	                                    <option id="optcls9" style="display: none;" value="9th">9th</option>
	                                    <option id="optcls1" style="display: none;" value="10th">10th</option>
	                                    <option id="optcls11" value="11th">11th</option>
	                                    <option id="optcls12" value="12th">12th</option>
	                                    <option id="optclst" value="Target">Target</option>
									</select>
								</div>
								<div class="en_frm">
									<label for="medium">Medium</label>
									<select id="medium" name="medium">
										<option value="">Medium</option>
										<option value="English">English</option>
										<option value="Hindi">Hindi</option>
									</select>
								</div>
								<div class="en_frm">
									<label for="exammode">Exam Mode</label>
									<select id="exammode" name="exammode">
										<option value="">Exam Mode</option>
										<option value="online">Online</option>
										<option value="offline">Offline</option>
									</select>
								</div>
								<div class="en_frm">
									<label for="examtime">Exam Time</label>
									<select id="examtime" name="examtime">
										<option value="">Exam time</option>
										<option value="Morning (10:00 AM to 12:00 PM)">Morning (10:00 AM to 12:00 PM)</option>
										<option value="Evening (03:00 PM to 05:00 PM)">Evening (03:00 PM to 05:00 PM)</option>
									</select>
								</div>
								<div class="en_frm">
									<label for="examdate">Exam Date</label>
									<input type="date" id="examdate" name="examdate" placeholder="dd-mm-yyyy" />
								</div>
								<div class="en_frm">
									<p>By Submitting this form, I agree to receiving Whatsapp communication, <a href="<?php echo base_url('terms-and-conditions/'); ?>">Terms & Conditions</a> and <a href="<?php echo base_url('privacy-policy/'); ?>">Privacy Policy</a>.</p>
								</div>
								<div class="en_frm" style="text-align: center;">
									<button id="submitSethEn" name="submitSethEn" value="1">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
        function showRent(select){
            if(select.value=='PreFoundations'){
                document.getElementById('optcls6').style.display = "block";
                document.getElementById('optcls7').style.display = "block";
                document.getElementById('optcls8').style.display = "block";
                document.getElementById('optcls9').style.display = "block";
                document.getElementById('optcls1').style.display = "block";

                document.getElementById('optcls11').style.display = "none";
                document.getElementById('optcls12').style.display = "none";
                document.getElementById('optclst').style.display = "none";
            }
            else{
                document.getElementById('optcls6').style.display = "none";
                document.getElementById('optcls7').style.display = "none";
                document.getElementById('optcls8').style.display = "none";
                document.getElementById('optcls9').style.display = "none";
                document.getElementById('optcls1').style.display = "none";

                document.getElementById('optcls11').style.display = "block";
                document.getElementById('optcls12').style.display = "block";
                document.getElementById('optclst').style.display = "block";
            }
        };
	</script>
