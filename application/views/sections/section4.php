<div id="section4" class="panel panel-primary text-black">
						<div  style="font-weight: bold" class="panel-heading"><span class="text-black">Section 4: Contribution</span></div>
						<div class="panel-body">
							<div class="form-group">
								<label>What is the one thing about you, are most proud of ?</label><span class="error-text"><?php echo form_error('contribution_most_proud_thing_about_you'); ?></span>
								<input class="form-control" type="text" placeholder="contribution_most_proud_thing_about_you" name="contribution_most_proud_thing_about_you" value="<?=$onboard['contribution_most_proud_thing_about_you']?>"/>
							</div>
							<div class="form-group">
								<label>How many social media followers to you have ? </label><span class="error-text"><?php echo form_error('contribution_socialmedia_followers'); ?></span>
								<input class="form-control" type="text" placeholder="contribution_socialmedia_followers" name="contribution_socialmedia_followers" value="<?=$onboard['contribution_socialmedia_followers']?>"/>
							</div>

							<div class="form-group">
								<label>What can you offer the group ? ( connections in a particular field, logistics, advice on venues etc)</label><span class="error-text"><?php echo form_error('contribution_valueoffer_to_group'); ?></span>
								<input class="form-control" type="text" placeholder="contribution_valueoffer_to_group" name="contribution_valueoffer_to_group" value="<?=$onboard['contribution_valueoffer_to_group']?>"/>
							</div>

							<!-- PANEL BODY -->

						</div>
						<div class="panel-footer">Panel footer
							<div class="pull-right">
								<a href="#section5">Next</a>
								<button class="btn btn-default" type="submit" value="save" name="sbm">Save</button>
							</div>
						</div>
					</div>