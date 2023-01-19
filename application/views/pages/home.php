
    <script type="text/javascript">
        $().ready(function(){
                $("#talkExpertHome").validate({
                    rules:{
                        tname: {required: true}, tphone: {required: true, minlength: 10}, tagree: {required: true}
                    },
                    messages: {
                        tname: {required: "Please enter full name."}, tphone: {required: "Please enter your 10-digit mobile number."}, tagree: {required: "Please check this for agree all terms and condtion."}
                    }
                });
            });
    </script>

    <!-- enquiry message start -->
    <?php if($this->session->flashdata('talkMessageHome')){ ?>
        <div id="courseModel" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p style="text-align: center;margin-top: 10px;">
                            <strong>
                                <?php echo $this->session->flashdata('talkMessageHome'); ?>
                            </strong>
                        </p>
                        <div class="modal-footer">
                            <button type="button" id="corBtn" name="corBtn" class="btn btn-default cor_btn" data-dismiss="modal" onclick="<?php unset($_SESSION['talkMessageHome']);?>">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <section class="banner_container">
        <div class="BannerSlider">
            <div class="Item matchHeight">
                <div class="banner_slider_item_one banner_slider_item">
                    <figure>
                        <img src="<?php echo base_url('library/images/slider/slider_bg_002.jpg'); ?>" alt="" title="" />
                    </figure>
                </div>
            </div>
            <div class="Item matchHeight">
                <div class="banner_slider_item_one banner_slider_item">
                    <figure>
                        <img src="<?php echo base_url('library/images/slider/slider_bg_1.jpg'); ?>" alt="" title="" />
                    </figure>
                </div>
            </div>
            <div class="Item matchHeight">
                <div class="banner_slider_item_one banner_slider_item">
                    <figure>
                        <img src="<?php echo base_url('library/images/slider/slider_bg_2.jpg'); ?>" alt="" title="" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="announcement" class="new_section pt-30 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="anouncement_di anno_left">
                        <div class="ann_head"><h2>Announcements</h2></div>
                        <div class="ann_list">
                            <ul>
                                <?php if(!empty($announcment)){$sno = 1;
                                    foreach($announcment as $key => $val){ 
                                        if($key < 5){
                                ?>
                                <li>
                                    <div class="ann_list_txt_hd"><span><?php echo $announcment[$key]['date']; ?></span> <?php echo $announcment[$key]['month']; ?></div>
                                    <div class="ann_list_txt">
                                        <p><?php echo $announcment[$key]['title']; ?></p>
                                    </div>
                                    <?php if(!empty($announcment[$key]['pdf_name'])){ ?>
                                        <div class="ann_list_btn">
                                            <a href="<?php echo base_url('library/uploads/announcements/'.$announcment[$key]['pdf_name']); ?>" target="_blank">View</a>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="ann_list_btn">
                                            <a href="<?php echo $announcment[$key]['video_link']; ?>" target="_blank">View</a>
                                        </div>
                                    <?php } ?>
                                </li>
                                <?php 
                                            }
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="btn_ann">
                            <a href="<?php echo base_url('announcements/'); ?>">View All Announcement</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="anouncement_di anno_right">
                        <div class="ann_head">
                            <h2>News & Events</h2>
                        </div>
                        <div class="ann_list">
                            <ul>
                                <?php if(!empty($news)){$sno = 1;
                                    foreach($news as $key => $val){ 
                                        if($key < 5){
                                ?>
                                <li>
                                    <div class="ann_list_txt_hd"><span><?php echo $news[$key]['date']; ?></span> <?php echo $news[$key]['month']; ?></div>
                                    <div class="ann_list_txt">
                                        <p><?php echo $news[$key]['title']; ?></p>
                                    </div>
                                    <?php if(!empty($news[$key]['pdf_name'])){ ?>
                                        <div class="ann_list_btn">
                                            <a href="<?php echo base_url('library/uploads/news/'.$news[$key]['pdf_name']); ?>" target="_blank">View</a>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="ann_list_btn">
                                            <a href="<?php echo $news[$key]['video_link']; ?>" target="_blank">View</a>
                                        </div>
                                    <?php } ?>
                                </li>
                                <?php 
                                            }
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="btn_ann">
                            <a href="<?php echo base_url('news-and-events/'); ?>">View All News & Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="courses" class="courses-area courses-bg-height pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="mb-20"><h1 class="black_section_head">Current Offers</h1></div>
                    </div>
                </div>
            </div>
            <div class="courses-list">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="courses-wrapper course_div mb-30">
                            <div class="courses-thumb">
                                <a href="<?php echo base_url('STHE/'); ?>"><img src="<?php echo base_url('library/images/courses/offer-four.jpg'); ?>" alt=""></a>
                            </div>
                            <div class="courses-content courses-content-2">
                                <div class="courses_heading">
                                    <h3><span>STHE</span></h3>
                                </div>
                                <div class="course_para">
                                    <p><strong>Science Talent Hunt Exam.</strong></p>
                                    <p>Get upto 100% Scholarship.</p>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom courses-wrapper-bottom-2 d-flex justify-content-between">
                                <div class="courses-button courses-button-2 text-uppercase enr_btn width-10">
                                    <a href="<?php echo base_url('STHE/'); ?>">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="courses-wrapper course_div mb-30">
                            <div class="courses-thumb">
                                <a href="<?php echo base_url('enquiry/'); ?>"><img src="<?php echo base_url('library/images/courses/offer-two.jpg'); ?>" alt=""></a>
                            </div>
                            <div class="courses-content courses-content-2">
                                <div class="courses_heading">
                                    <h3><span>Super-50 For NEET-2022</span></h3>
                                </div>
                                <div class="course_para">
                                    <p><strong>Performance of NEET-2021.</strong></p>
                                    <p>Get upto 100% Discount.</p>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom courses-wrapper-bottom-2 d-flex justify-content-between">
                                <div class="courses-button courses-button-2 text-uppercase enr_btn">
                                    <a href="<?php echo base_url('enquiry/'); ?>"><span>Enroll Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="courses-wrapper course_div mb-30">
                            <div class="courses-thumb">
                                <a href="<?php echo base_url('enquiry/'); ?>"><img src="<?php echo base_url('library/images/courses/offer-three.jpg'); ?>" alt=""></a>
                            </div>
                            <div class="courses-content courses-content-2">
                                <div class="courses_heading">
                                    <h3><span>Repeat Batch For NEET-2022</span></h3>
                                </div>
                                <div class="course_para">
                                    <p><strong>Batch Starts from 02-Dec-2021.</strong></p>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom courses-wrapper-bottom-2 d-flex justify-content-between">
                                <div class="courses-button courses-button-2 text-uppercase enr_btn width-10">
                                    <a href="<?php echo base_url('enquiry/'); ?>">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="courses-wrapper course_div mb-30">
                            <div class="courses-thumb">
                                <a href="<?php echo base_url('enquiry/'); ?>"><img src="<?php echo base_url('library/images/courses/offer-one.jpg'); ?>" alt=""></a>
                            </div>
                            <div class="courses-content courses-content-2">
                                <div class="courses_heading">
                                    <h3><span>Repeat Batch For JEE-2022</span></h3>
                                </div>
                                <div class="course_para">
                                    <p><strong>Batch Start From 02-Dec-2021.</strong></p>
                                </div>
                            </div>
                            <div class="courses-wrapper-bottom courses-wrapper-bottom-2 d-flex justify-content-between">
                                <div class="courses-button courses-button-2 text-uppercase enr_btn width-10">
                                    <a href="<?php echo base_url('enquiry/'); ?>">Enroll Now</a>
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
                        <span class="counter">35</span>
                        <h3>Selection in <br><strong>AIIMS</strong></h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <span class="counter">301</span>
                        <h3>Selection in <br><strong>IIT</strong></h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <span class="counter">1,241</span>
                        <h3>Selection in <br><strong>NIT</strong></h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <span class="counter">1,100</span>
                        <h3>Selection in <br><strong>Medical Collage</strong></h3>
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
                    <form id="talkExpertHome" name="talkExpertHome" action="<?php echo base_url('Home/addExpert/'); ?>" method="POST" class="row">
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

    <section id="about" class="about-area pt-50 pb-70 about_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="mb-20">
                            <h3 class="black_section_head">IMS Advantage</h3>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Stay ahead with the all-round performance of your chosen stream.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-20">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Scholarship Facility</h3>
                        </div>
                        <div class="feature-text">
                            <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Highly Qualified & Experienced Faculty</h3>
                        </div>
                        <div class="feature-text">
                            <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Excellent Track Record</h3>
                        </div>
                        <div class="feature-text">
                            <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Comprehensive Study Material</h3>
                        </div>
                        <div class="feature-text">
                            <p>Sorem ipsum dolor sitcon sectet adipis icing elit sed do eiusmod tems. incididune.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
