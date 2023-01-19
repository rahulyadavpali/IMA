
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
    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb_item">
                        <ul>
                            <li><a href="<?php echo base_url('home/'); ?>"><i class="ti-home"></i></a></li>
                            <li><span><i class="ti-angle-right"></i></span></li>
                            <li><a href="javascript:void(0)">About IMA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- enquiry message start -->
    <?php if($this->session->flashdata('talkMessageAbt')){ ?>
        <div id="courseModel" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p style="text-align: center;margin-top: 10px;">
                            <strong>
                                <?php echo $this->session->flashdata('talkMessageAbt'); ?>
                            </strong>
                        </p>
                        <div class="modal-footer">
                            <button type="button" id="corBtn" name="corBtn" class="btn btn-default cor_btn" data-dismiss="modal" onclick="<?php unset($_SESSION['talkMessageAbt']);?>">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

	<section class="about_section pt-80">
		<div class="container">
			<div class="row">
				<div class="abt_container">
					<div class="about-title-section about-title-section-2 mb-30">
						<h1>OUR STORY</h1>
						<p>IMA is a brainchild of two formidable academicians – Mr. A.R. Seervi and K.R. Choudhary. One common vision “to realize career dreams of deserving” brought them together and the year 1999 witnessed the establishment of one of the promising institutions in Jodhpur named as “Ace Career Point” the institution got its first campus in Bhagat Ki Kothi, Jodhpur. With the time we gained experience and success while recruiting highly qualified and experienced faculty, in 2008 institute changed its name to IIT ACADEMY AND MEDICAL ACADEMY.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="about_section gray-bg pb-30">
		<div class="container">
			<div class="row">
				<div class="abt_container">
					<div class="abt_tw">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 about-title-section about-title-section-2">
								<h2>VISION</h2>
								<p>To be the most efficient Institute in Rajasthan for providing quality education in the field of MEDICAL and IIT.</p>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 about-title-section about-title-section-2">
								<h2>MISSION</h2>
								<p>Acheive academic excellence in the field of medical and engineering.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="about_section">
		<div class="container">
			<div class="row">
				<div class="abt_container">
					<div class="abt_sty">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 about-title-section about-title-section-2">
								<h3>Our Success History</h3>
								<p>We, at IMA, help each student to fulfill the conditions required to achieve success. We know that to achieve success in any entrance exam, a proper balance of smart work and hard work, in correct direction, is needed. Our qualified and experienced faculty pool is constantly using its innovative balance between hard work and smart work. We ensure that while appearing in the exam, the student delivers his best performance with perfection and following the parameters of speed and accuracy. We understand the importance of home and family in a student's life, so to provide a homely environment to students from far and remote, we run the residential campus, with fully furnished and equipped hostels. We, on behalf of the entire team IMA team, welcome you to join hands and start walking with us on the path of success.</p>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
								<div class="about-img mb-55">
									<img src="<?php echo base_url('library/images/about/about_details_right_img.jpg'); ?>" title="Success History" alt="Success History of IMA" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="counter-area result_section">
        <div class="container pt-90 pb-65">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="mb-20">
                            <h3 class="black_section_head white_head">Our Results</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <span class="counter">1,100</span>
                        <h3>Medical Collage</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <span class="counter">35</span>
                        <h3>AIIMS</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <span class="counter">301</span>
                        <h3>IIT</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <span class="counter">1,241</span>
                        <h3>NIT</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="rslt_btn">
                        <a href="<?php echo base_url('results/'); ?>">Show More Results</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="testimonilas-area pt-70 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h4 class="black_section_head">Testimonials</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonilas-list">
                <div class="row testimonilas-active">
                    <?php if(!empty($testimonial)){$sno = 1;
                        foreach($testimonial as $key => $val){ 
                    ?>
                    <div class="col-xl-12">
                        <div class="testimonilas-wrapper mb-110">
                            <div class="courses-thumb">
                                <img src="<?php echo base_url('library/uploads/testimonials/'.$testimonial[$key]['review_img']); ?>" title="<?php echo $testimonial[$key]['review_img_title']; ?>" alt="<?php echo $testimonial[$key]['review_img_title']; ?>" />
                            </div>
                            <div class="testimonilas_cont">
                                <div class="testimonilas-para">
                                    <p><?php echo $testimonial[$key]['message']; ?></p>
                                </div>
                                <div class="testimonilas-heading d-flex">
                                    <div class="testimonilas-author-title testimonial_auth">
                                        <h3><?php echo $testimonial[$key]['name']; ?></h3>
                                        <h3><?php echo $testimonial[$key]['board']; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                                $sno++;
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-area result_section">
        <div class="container pt-90 pb-65">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="mb-20">
                            <h3 class="black_section_head white_head">Talk To Our Expert</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 talk_form">
                    <form id="talkExpert" name="talkExpert" action="<?php echo base_url('About/addEnquiryAbt/'); ?>" method="POST" class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="tlk_frm_inpt">
                                <input type="text" id="tname" name="tname" placeholder="Full Name" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="tlk_frm_inpt">
                                <input type="email" id="temail" name="temail" placeholder="Email Address" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="tlk_frm_inpt">
                                <input type="number" id="tphone" name="tphone" placeholder="Mobile No. (Ex : 9999999999)" onkeypress="if(this.value.length==10)return false;" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="tlk_frm_inpt">
                                <select id="tstrem" name="tstrem" placeholder="Strem" onchange="showRent(this)">
                                    <option value="">Stream</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="PreFoundations">Pre-Foundations</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="tlk_frm_inpt">
                                <select id="tclass" name="tclass" placeholder="Class">
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
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <div class="tlk_frm_inpt">
                                <select id="tmedium" name="tmedium" placeholder="Medium">
                                    <option value="">Medium</option>
                                    <option value="English">English</option>
                                    <option value="Hindi">Hindi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="tlk_chk">
                                <input checked="checked" type="checkbox" id="tagree" name="tagree" value="1" />
                                <div class="rqt_txt">
                                    <p>By submitting this form, I agree to receive all the Whatsapp communication on my registered number and agreeing to IMA's <a href="#">Terms Of Use</a> and <a href="#">Privacy Policy</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="rslt_btn">
                                <button id="tsubmit" name="tsubmit" value="1">Request a call back</button>
                            </div>
                        </div>
                    </form>
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
