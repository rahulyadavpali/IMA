
    <script type="text/javascript">
        $().ready(function(){
            $("#contactForm").validate({
                rules:{
                    name: {required: true}, mobile: {required: true, minlength: 10}
                },
                messages: {
                    name: {required: "Please enter full name."}, mobile: {required: "Please enter your 10-digit mobile number."}
                }
            });
        });
    </script>

    <!-- contact message start -->
    <?php if($this->session->flashdata('contactMessage')){ ?>
        <div id="courseModel" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <p style="text-align: center;margin-top: 10px;">
                            <strong>
                                <?php echo $this->session->flashdata('contactMessage'); ?>
                            </strong>
                        </p>
                        <div class="modal-footer">
                            <button type="button" id="corBtn" name="corBtn" class="btn btn-default cor_btn" data-dismiss="modal" onclick="<?php unset($_SESSION['contactMessage']);?>">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb_item">
                        <ul>
                            <li><a href="<?php echo base_url('home/'); ?>"><i class="ti-home"></i></a></li>
                            <li><span><i class="ti-angle-right"></i></span></li>
                            <li><a href="javascript:void(0)">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advisors-area gray-bg pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="contact-info-text">
                        <div class="section-title mb-20">
                            <div class="section-title-heading mb-10">
                                <h1>Interested?</h1>
                            </div>
                            <div class="section-title-para">
                                <p>Call Us and schedule your counselling, we are waiting for your call.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info mb-50 wow fadeInRight" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                        <ul>
                            <li>
                                <div class="contact-icon"><i class="ti-mobile"></i></div>
                                <div class="contact-text">
                                    <h5>Call Us</h5>
                                    <span><a href="tel:02912772432">0291-2772432</a></span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="ti-email"></i></div>
                                <div class="contact-text">
                                    <h5>Email Us</h5>
                                    <span><a href="mailto:enquiry@imajodhpur.com">enquiry@imajodhpur.com</a></span><br/>
                                    <span><a href="mailto:admissions@imajodhpur.com">admissions@imajodhpur.com</a></span><br/>
                                    <span><a href="mailto:ceo@imajodhpur.com">ceo@imajodhpur.com</a></span><br/>
                                    <span><a href="mailto:director@imajodhpur.com">director@imajodhpur.com</a></span>
                                </div>
                            </li>
                            <li>
                                <div class="contact-icon"><i class="ti-location-pin"></i></div>
                                <div class="contact-text">
                                    <h5>Location</h5>
                                    <span>IIT Medical Academy, Main Pal Road, Near Barktullah Khan Stadium, Jodhpur (Raj.)</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
                    <div class="events-details-form faq-area-form mb-30 p-0">
                        <form id="contactForm" action="<?php echo base_url('Contact/mailSave'); ?>" method="POST">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="events-form-title mb-25">
                                        <h2>Do You Have Any Questions</h2>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 cnt_frm">
                                    <input type="text" id="name" name="name" placeholder="Name :">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 cnt_frm">
                                    <input type="number" id="mobile" name="mobile" placeholder="Mobile No :" onkeypress="if(this.value.length==10)return false;">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 cnt_frm">
                                    <input type="email" id="email" name="email" placeholder="Email :">
                                </div>
                                <div class="col-xl-12 cnt_frm">
                                    <textarea cols="30" rows="10" id="message" name="message" placeholder="Message :"></textarea>
                                </div>
                                <div class="col-xl-12 cnt_frm">
                                    <div class="faq-form-btn events-form-btn">
                                        <button class="btn m-0" id="submitContact" name="submitContact" value="1">submit now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-area">
        <div class="cnt_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14310.79749661838!2d72.9980246!3d26.2714186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2f69dbb671a8ff62!2sIMA%20Jodhpur%20(IIT%20Academy%20%26%20Medical%20Academy)!5e0!3m2!1sen!2sin!4v1576498971482!5m2!1sen!2sin" loading="lazy" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </div>
    </section>
