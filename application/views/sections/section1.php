    
					<div id="section1" class="panel panel-primary text-black">
						<div  style="font-weight: bold" class="panel-heading"><span class="text-black">Section1 : Personal</span></div>
						<div class="panel-body">
							<div class="form-group">
								<label>Age (Number between 1-99)</label>
								<span class="error-text"><?php echo form_error('personal_age'); ?></span>
								<input class="form-control" type="text" placeholder="age..." name="personal_age" value="<?=$onboard['personal_age']?>"/>
							</div>
							<div class="form-group">
								<label>Sex</label>
								<span class="error-text"><?php echo form_error('personal_sex'); ?></span>
								<input class="" type="radio" placeholder="sex..." name="personal_sex" value="M" <?php echo ($onboard['personal_sex'] == 'M') ? ("checked") : "" ?>/>Male
								<input class="" type="radio" placeholder="sex..." name="personal_sex" value="F" <?php echo ($onboard['personal_sex'] == 'F') ? ("checked") : "" ?> />Female
							</div>
							<div class="form-group">
								<label>Country of Origin ? <span class="word-limit">(50 characters)</span></label>
								<span class="error-text"><?php echo form_error('personal_country_of_origin'); ?></span>
								<input class="form-control" type="text" placeholder="personal_country_of_origin" name="personal_country_of_origin" value="<?=$onboard['personal_country_of_origin']?>"/>
							</div> <div class="form-group">
								<label>Social Media - Facebook <i class="fa fa-facebook"></i></label>
								<span class="error-text"><?php echo form_error('personal_social_facebook'); ?></span>
								<div class="input-group">
									<span class="input-group-addon" id="basic-addon3">https://www.facebook.com/</span>
									<input class="form-control" type="text" placeholder="personal_social_facebook" name="personal_social_facebook" value="<?=$onboard['personal_social_facebook']?>"/>
								</div>

							</div>  <div class="form-group">
								<label>Social Media - Instagram <i class="fa fa-instagram"></i></label>
								<span class="error-text"><?php echo form_error('personal_social_instragram'); ?></span>

								<div class="input-group">
									<span class="input-group-addon" id="basic-addon3">https://www.instagram.com/</span>
									<input class="form-control" type="text" placeholder="personal_social_instragram" name="personal_social_instragram" value="<?=$onboard['personal_social_instragram']?>"/>
								</div>
							</div>
							<div class="form-group">
								<label>Social Media - Twitter <i class="fa fa-twitter"></i> </label><span class="error-text"><?php echo form_error('personal_social_twitter'); ?></span>
								
							<div class="input-group">
									<span class="input-group-addon" id="basic-addon3">https://twitter.com/</span>
							<input class="form-control" type="text" placeholder="personal_social_twitter" name="personal_social_twitter" value="<?=$onboard['personal_social_twitter']?>"/>
							</div>

							</div>  <div class="form-group">
								<label>Social Media - Snapchat <i class="fa fa-video-camera"></i></label><span class="error-text"><?php echo form_error('personal_social_snapchat'); ?></span>
								
							<div class="input-group">
									<span class="input-group-addon" id="basic-addon3">@</span>
							<input class="form-control" type="text" placeholder="personal_social_snapchat" name="personal_social_snapchat" value="<?=$onboard['personal_social_snapchat']?>"/>
							</div>

							</div>
						</div>
						<div class="panel-footer">Panel footer
							<div class="pull-right">
								<a href="#section2">Next</a>
								<button class="btn btn-default" type="submit" value="save" name="sbm">Save</button>
							</div>
						</div>
						
					</div>