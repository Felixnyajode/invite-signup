					<div id="section6" class="panel panel-primary text-black">
						<div  style="font-weight: bold" class="panel-heading"><span class="text-black">Section 6: Adventures/Life Experiences</span></div>
						<div class="panel-body">
							<!-- PANEL BODY -->
							<div class="form-group">
								<label>How many countries have you travelled to ?</label>	<span class="error-text"><?php echo form_error('experience_countries_travelled'); ?></span>	
								<input class="form-control" type="text" placeholder="experience_countries_travelled" name="experience_countries_travelled" value="<?=$onboard['experience_countries_travelled']?>"/>
							</div>
							<div class="form-group">
								<label>What’s your favourite holiday destination ?</label><span class="error-text"><?php echo form_error('experience_fav_holiday_dest'); ?></span>
								<input class="form-control" type="text" placeholder="experience_fav_holiday_dest" name="experience_fav_holiday_dest" value="<?=$onboard['experience_fav_holiday_dest']?>"/>
							</div>
							<div class="form-group">
								<label>Which culture do you most admire ?</label><span class="error-text"><?php echo form_error('experience_culture_admire'); ?></span>
								<input class="form-control" type="text" placeholder="experience_culture_admire" name="experience_culture_admire" value="<?=$onboard['experience_culture_admire']?>"/>
							</div>
							<div class="form-group">
								<label>The most adventurous/crazy thing you did ?</label><span class="error-text"><?php echo form_error('experience_most_adv_thing'); ?></span>
								<input class="form-control" type="text" placeholder="experience_most_adv_thing" name="experience_most_adv_thing" value="<?=$onboard['experience_most_adv_thing']?>"/>
							</div>
						</div>
						<div class="panel-footer">Panel footer
							<div class="pull-right">
								<!-- <a href="#section2">Next</a> -->
								<button class="btn btn-default" type="submit" value="save" name="sbm">Save</button>
							</div>
						</div>
					</div>