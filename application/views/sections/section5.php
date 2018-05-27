<div id="section5" class="panel panel-primary text-black">
						<div  style="font-weight: bold" class="panel-heading"><span class="text-black">Section 5:Personality</span></div>
						<div class="panel-body">
							<!-- PANEL BODY -->
							<div class="form-group">
								<label>Tell us three interesting things about you ?</label><span class="error-text"><?php echo form_error('personality_three_interesting_things'); ?></span>
								<input class="form-control" type="text" placeholder="personality_three_interesting_things" name="personality_three_interesting_things" value="<?=$onboard['personality_three_interesting_things']?>"/>
							</div>
							<div class="form-group">
								<label>How often are you angry, sad, pissed or jealous ?</label><span class="error-text"><?php echo form_error('personality_angry'); ?></span><input class="form-control" type="text" placeholder="personality_angry" name="personality_angry" value="<?=$onboard['personality_angry']?>"/>
							</div>
							<div class="form-group">
								<label>How often are you happy, relaxed and smiling ?</label><span class="error-text"><?php echo form_error('personality_happy'); ?></span><input class="form-control" type="text" placeholder="personality_happy" name="personality_happy" value="<?=$onboard['personality_happy']?>"/>
							</div>
							<div class="form-group">
								<label>Do you think the world is cruel and harsh or fair and fun ?</label><span class="error-text"><?php echo form_error('personality_world_opinion'); ?></span><input class="form-control" type="text" placeholder="personality_world_opinion" name="personality_world_opinion" value="<?=$onboard['personality_world_opinion']?>"/>
							</div>
							<div class="form-group">
								<label>One person (male or female) you look up to ?</label><span class="error-text"><?php echo form_error('personality_role_model'); ?></span><input class="form-control" type="text" placeholder="personality_role_model" name="personality_role_model" value="<?=$onboard['personality_role_model']?>"/>
							</div>
							<div class="form-group">
								<label>What do you do when you are sad ?</label><span class="error-text"><?php echo form_error('personality_activity_when_sad'); ?></span><input class="form-control" type="text" placeholder="personality_activity_when_sad" name="personality_activity_when_sad" value="<?=$onboard['personality_activity_when_sad']?>"/>
							</div>
							<div class="form-group">
								<label>Have you read any good books lately ?</label><span class="error-text"><?php echo form_error('personality_good_books_read'); ?></span><input class="form-control" type="text" placeholder="personality_good_books_read" name="personality_good_books_read" value="<?=$onboard['personality_good_books_read']?>"/>
							</div>
							<div class="form-group">
								<label>How would you describe yourself ?</label><span class="error-text"><?php echo form_error('personality_desc_yourself'); ?></span><input class="form-control" type="text" placeholder="personality_desc_yourself" name="personality_desc_yourself" value="<?=$onboard['personality_desc_yourself']?>"/>
							</div>
						</div>
						<div class="panel-footer">Panel footer
							<div class="pull-right">
								<a href="#section6">Next</a>
								<button class="btn btn-default" type="submit" value="save" name="sbm">Save</button>
							</div>
						</div>
					</div>