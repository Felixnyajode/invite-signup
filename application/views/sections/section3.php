<div id="section3" class="panel panel-primary text-black">
						<div  style="font-weight: bold" class="panel-heading"><span class="text-black">Section 3: Social</span></div>
						<div class="panel-body">
							<!-- PANEL BODY -->	
							<div class="form-group">
								<label>How many Facebook connects do you have ?</label><span class="error-text"><?php echo form_error('social_facebook_friends'); ?></span><input class="form-control" type="text" placeholder="social_facebook_friends" name="social_facebook_friends" value="<?=$onboard['social_facebook_friends']?>"/>
							</div>	
							<div class="form-group">
								<label>What’s your Favorite thing to do socially ?</label><span class="error-text"><?php echo form_error('social_fav_activity'); ?></span><input class="form-control" type="text" placeholder="social_fav_activity" name="social_fav_activity" value="<?=$onboard['social_fav_activity']?>"/>
							</div>	
							<div class="form-group">
								<label>What are your favourite places in Bangalore to hang-out ?</label><span class="error-text"><?php echo form_error('social_fav_places_bangalore_hangout'); ?></span><input class="form-control" type="text" placeholder="social_fav_places_bangalore_hangout" name="social_fav_places_bangalore_hangout" value="<?=$onboard['social_fav_places_bangalore_hangout']?>"/> 
							</div>	
							<div class="form-group">
								<label>If you can invite one person to Fickle 500 who would it be ?</label><span class="error-text"><?php echo form_error('social_special_friend_email'); ?></span><input class="form-control" type="text" placeholder="social_special_friend_email" name="social_special_friend_email" value="<?=$onboard['social_special_friend_email']?>"/>
							</div>	
							<div class="form-group">
								<label>When was the last time you were invited to a house party ?</label><span class="error-text"><?php echo form_error('social_houseparty_invitation'); ?></span><input class="form-control" type="text" placeholder="social_houseparty_invitation" name="social_houseparty_invitation" value="<?=$onboard['social_houseparty_invitation']?>"/>
							</div>	
							<div class="form-group">
								<label>What do your closest friends think about you ?</label><span class="error-text"><?php echo form_error('social_friends_opinion'); ?></span><input class="form-control" type="text" placeholder="social_friends_opinion" name="social_friends_opinion" value="<?=$onboard['social_friends_opinion']?>"/>
							</div>
						</div>
						<div class="panel-footer">Panel footer
							<div class="pull-right">
								<a href="#section4">Next</a>
								<button class="btn btn-default" type="submit" value="save" name="sbm">Save</button>
							</div>
						</div>
					</div>