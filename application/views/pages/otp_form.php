
    <script type="text/javascript">
        $().ready(function(){
            $("#talkExpert").validate({
                rules:{
                    tname: {required: true}, tphone: {required: true, minlength: 10}, tagree: {required: true}
                },
                messages: {
                    tname: {required: "Please enter full name."}, tphone: {required: "Please enter your 10-digit mobile number."}, tagree: {required: "Please check this for agree all terms and condtion."}
                }
            });
        });
    </script>

	<!-- breadcrumb start -->
	<section class="sthe_bread">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="sthe_bred_itm">
						<p>Please enter OTP which send to your Mobile Number.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- enquiry message start -->
    <?php if($this->session->flashdata('stheMessage')){ ?>
        <div id="courseModel" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p style="text-align: center;margin-top: 10px;">
                            <strong><?php echo $this->session->flashdata('stheMessage'); ?></strong>
                        </p>
                        <div class="modal-footer">
                            <button type="button" id="corBtn" name="corBtn" class="btn btn-default cor_btn" data-dismiss="modal" onclick="<?php unset($_SESSION['stheMessage']);?>">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

	<!-- sther start -->
	<section class="sthe_section pt-90 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 seth_cotainer">
					<div class="seth_frm">
						<div class="seth_form">
							<form id="sethOtpForm" action="<?php echo base_url('sthe/verifyusr/'); ?>" method="POST">
								<div class="sth_frm_div_o">
                                    <input type="number" id="sthnumber" name="sthnumber" value="<?php echo $mobileno; ?>" disabled>
									<input type="hidden" name="mobile" value="<?php echo $mobileno; ?>">
								</div>
                                <div class="sth_frm_div_o">
                                    <input type="number" id="sthotp" name="sthotp" placeholder="Enter Your OTP" required />
                                </div>
								<div class="sth_frm_div">
									<button id="sthSubmit" name="sthSubmit">Verify OTP</button>
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
