
    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb_item">
                        <ul>
                            <li><a href="<?php echo base_url('home/'); ?>"><i class="ti-home"></i></a></li>
                            <li><span><i class="ti-angle-right"></i></span></li>
                            <li><a href="javascript:void(0)">Student Hub</a></li>
                            <li><span><i class="ti-angle-right"></i></span></li>
                            <li><a href="javascript:void(0)"><?php echo $page_title; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_section pt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
					<div class="announ_container about-title-section about-title-section-2 mb-30">
						<h1>
							<?php echo $page_title; ?> - <?php if($announcment[0]['stream'] == '1'){echo 'Medical';}elseif($announcment[0]['stream'] == '2'){echo 'Engineering';}elseif($announcment[0]['stream'] == '0'){echo 'Pre-Foundation';}else{echo ' ';} ?>
						</h1>
						<p style="border-bottom: 1px solid #ccc;padding-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<div class="annou_table ann_list">
							<ul>
								<?php if(!empty($announcment)){$sno = 1;
	                                    foreach($announcment as $key => $val){ 
	                                ?>
	                                <li>
	                                    <div class="ann_list_txt_hd"><span><?php echo $announcment[$key]['date']; ?></span> <?php echo $announcment[$key]['month']; ?></div>
	                                    <div class="ann_list_txt">
	                                        <p><?php echo $announcment[$key]['title']; ?></p>
	                                    </div>
	                                    <?php if(!empty($announcment[$key]['pdf_name'])){ ?>
	                                    	<div class="ann_list_btn">
		                                        <a href="<?php echo base_url('library/uploads/'.$folderName.'/'.$announcment[$key]['pdf_name']); ?>" target="_blank">View</a>
		                                    </div>
	                                    <?php }else{ ?>
	                                    	<div class="ann_list_btn">
		                                        <a href="<?php echo $announcment[$key]['video_link']; ?>" target="_blank">View</a>
		                                    </div>
	                                    <?php } ?>
	                                </li>
	                                <?php 
	                                            $sno++;
	                                        }
	                                    }
	                                ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
