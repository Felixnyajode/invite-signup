<div id="section2" class="panel panel-primary text-black">
						<div  style="font-weight: bold" class="panel-heading"><span class="text-black">Section 2:Professional</span></div>
						<div class="panel-body">
							<!-- PANEL BODY -->
							<div class="form-group">
								<label>Tell us about your work in a paragraph</label><span class="error-text"><?php echo form_error('professional_work'); ?></span><textarea class="form-control" type="text" placeholder="professional_work" name="professional_work"><?=$onboard['professional_work']?></textarea>
							</div>
							<div class="form-group">
								<label>The Url of your LinkedIn profile</label><span class="error-text"><?php echo form_error('professional_linkedin_url'); ?></span>

								<div class="input-group">
									<span class="input-group-addon" id="basic-addon3">https://www.linkedin.com/in/</span>
									<input class="form-control" type="text" placeholder="professional_linkedin_url" name="professional_linkedin_url" value="<?=$onboard['professional_linkedin_url']?>"/>
								</div>
							</div>
							<div class="form-group">
								<label>Would you say you are at the top/very close to the top in your profession ?</label><span class="error-text"><?php echo form_error('professional_top_or_close'); ?></span><input class="form-control" type="text" placeholder="professional_top_or_close" name="professional_top_or_close" value="<?=$onboard['professional_top_or_close']?>"/>
							</div>
							<div class="form-group">
								<label>What is your annual income ?</label><span class="error-text"><?php echo form_error('professional_annual_income'); ?></span><input class="form-control" type="text" placeholder="professional_annual_income" name="professional_annual_income" value="<?=$onboard['professional_annual_income']?>"/>
							</div>
							<div class="form-group">
								<label>Are you in the media/entertainment industry ?</label><span class="error-text"><?php echo form_error('professional_media_or_entertainment'); ?></span><input class="form-control" type="text" placeholder="professional_media_or_entertainment" name="professional_media_or_entertainment" value="<?=$onboard['professional_media_or_entertainment']?>"/>
							</div>
							<div class="form-group">
								<label>If so, share your portfolio Url </label><span class="error-text"><?php echo form_error('professional_portfolio_url'); ?></span><input class="form-control" type="text" placeholder="professional_portfolio_url" name="professional_portfolio_url" value="<?=$onboard['professional_portfolio_url']?>"/>
							</div>
							<div class="form-group">
								<label>What has been the biggest achievement in your career so far ?</label><span class="error-text"><?php echo form_error('professional_biggest_achievement'); ?></span><input class="form-control" type="text" placeholder="professional_biggest_achievement" name="professional_biggest_achievement" value="<?=$onboard['professional_biggest_achievement']?>"/> 
							</div>
							<div class="form-group">
								<label>What is your passion/interest/motivation right now ?</label><span class="error-text"><?php echo form_error('professional_passion'); ?></span><input class="form-control" type="text" placeholder="professional_passion" name="professional_passion" value="<?=$onboard['professional_passion']?>"/>
							</div>
						</div>
						<div class="panel-footer">Panel footer
							<div class="pull-right">
								<a href="#section3">Next</a>
								<button class="btn btn-default" type="submit" value="save" name="sbm">Save</button>
							</div>
						</div>
					</div>