
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

    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb_item">
                        <ul>
                            <li><a href="<?php echo base_url('home/'); ?>"><i class="ti-home"></i></a></li>
                            <li><span><i class="ti-angle-right"></i></span></li>
                            <li><a href="javascript:void(0)">Courses</a></li>
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
                    <form id="talkExpert" name="talkExpert" action="<?php echo base_url('Courses/addEnquiryAbt/'); ?>" method="POST" class="row">
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
