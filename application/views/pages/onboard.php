<body>
	<div class="parent section-texture-lozenge text-white">
		<div class="container">
			<div>
				<h1>Welcome to the detailed discovery page</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque consequatur assumenda reiciendis, beatae maxime laborum necessitatibus sequi ducimus quos culpa eveniet repellat harum quas asperiores expedita fugiat rerum rem totam.</p>
				<p class="lead">your details name - <?=$onboard['name']?> (<?=$onboard['email']?>,<?=$onboard['phno']?>) </p>
				<p>Instructions</p>
				<ul>
					<li>Item 1</li>
					<li>Item 2</li>
					<li>Item 3</li>
					<li>Item 4</li>
					<li>Item 5</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="form-group">
				&nbsp;
			</div>
			<div class="form-group">
				<a href="#section1" class="btn btn-default">Start here.</a>
			</div>
		</div>
		<?php echo form_open(uri_string(),array('id' => 'onboard-form')); ?>
		<!-- <?php echo validation_errors(); ?> -->
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				<!-- 	<pre>
						<?php 
						print_r($onboard);
						?>
					</pre> -->

					<?php $this->view('sections/section1'); ?>
					<?php $this->view('sections/section2'); ?>
					<?php $this->view('sections/section3'); ?>
					<?php $this->view('sections/section4'); ?>
					<?php $this->view('sections/section5'); ?>
					<?php $this->view('sections/section6'); ?>
<!-- 
					<div id="section5" class="panel panel-primary text-black">
						<div style="font-weight: bold" class="panel-heading"><span class="text-black">Section 5</span></div>
						<div class="panel-body">
							<div class="form-group">
								<p class="lead">Just so we know that you are human. ;) </p>
								<label>google-capcha</label>
							</div>
						</div></div>
					-->

					<div class="form-group">
						<a href="#section1" class="btn btn-default">Section 1</a>
						<a href="#section2" class="btn btn-default">Section 2</a>
						<a href="#section3" class="btn btn-default">Section 3</a>
						<a href="#section4" class="btn btn-default">Section 4</a>
						<a href="#section5" class="btn btn-default">Section 5</a>
						<a href="#section6" class="btn btn-default">Section 6</a>

					</div>  
					<div id="saveGroup" class="form-group pull-right">
						<input id="scrollPosition" type="hidden" value="<?php echo $onboard['scrollPosition']?>" name="scrollPosition"/>
						<button class="btn btn-default" type="submit" value="save" name="sbm">Save</button>
						<button class="btn btn-primary" type="submit" value="apply" name="sbm">Submit</button>
					</div>

				</div>
			</div>
		</div>
	</form>

</div>



		<!-- <?php echo form_open(); ?>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<input class="form-control" type="text" placeholder="age..." name="personal_age" value="<?=$onboard['personal_age']?>"/>
					<input class="form-control" type="text" placeholder="sex..." name="personal_sex" value="<?=$onboard['personal_sex']?>"/>
					<input class="form-control" type="text" placeholder="personal_country_of_origin" name="personal_country_of_origin" value="<?=$onboard['personal_country_of_origin']?>"/>
					<input class="form-control" type="text" placeholder="personal_social_facebook" name="personal_social_facebook" value="<?=$onboard['personal_social_facebook']?>"/>
					<input class="form-control" type="text" placeholder="personal_social_instragram" name="personal_social_instragram" value="<?=$onboard['personal_social_instragram']?>"/>
					<input class="form-control" type="text" placeholder="personal_social_twitter" name="personal_social_twitter" value="<?=$onboard['personal_social_twitter']?>"/>
					<input class="form-control" type="text" placeholder="personal_social_snapchat" name="personal_social_snapchat" value="<?=$onboard['personal_social_snapchat']?>"/>

					<input class="form-control" type="text" placeholder="professional_work" name="professional_work" value="<?=$onboard['professional_work']?>"/>
					<input class="form-control" type="text" placeholder="professional_linkedin_url" name="professional_linkedin_url" value="<?=$onboard['professional_linkedin_url']?>"/>
					<input class="form-control" type="text" placeholder="professional_top_or_close" name="professional_top_or_close" value="<?=$onboard['professional_top_or_close']?>"/>
					<input class="form-control" type="text" placeholder="professional_annual_income" name="professional_annual_income" value="<?=$onboard['professional_annual_income']?>"/>
					<input class="form-control" type="text" placeholder="professional_media_or_entertainment" name="professional_media_or_entertainment" value="<?=$onboard['professional_media_or_entertainment']?>"/>
					<input class="form-control" type="text" placeholder="professional_portfolio_url" name="professional_portfolio_url" value="<?=$onboard['professional_portfolio_url']?>"/>
					<input class="form-control" type="text" placeholder="professional_biggest_achievement" name="professional_biggest_achievement" value="<?=$onboard['professional_biggest_achievement']?>"/> 
					<input class="form-control" type="text" placeholder="professional_passion" name="professional_passion" value="<?=$onboard['professional_passion']?>"/>

					<input class="form-control" type="text" placeholder="social_facebook_friends" name="social_facebook_friends" value="<?=$onboard['social_facebook_friends']?>"/>
					<input class="form-control" type="text" placeholder="social_fav_activity" name="social_fav_activity" value="<?=$onboard['social_fav_activity']?>"/>
					<input class="form-control" type="text" placeholder="social_fav_places_bangalore_hangout" name="social_fav_places_bangalore_hangout" value="<?=$onboard['social_fav_places_bangalore_hangout']?>"/> 
					<input class="form-control" type="text" placeholder="social_special_friend_email" name="social_special_friend_email" value="<?=$onboard['social_special_friend_email']?>"/>
					<input class="form-control" type="text" placeholder="social_houseparty_invitation" name="social_houseparty_invitation" value="<?=$onboard['social_houseparty_invitation']?>"/>
					<input class="form-control" type="text" placeholder="social_friends_opinion" name="social_friends_opinion" value="<?=$onboard['social_friends_opinion']?>"/>

					<input class="form-control" type="text" placeholder="contribution_most_proud_thing_about_you" name="contribution_most_proud_thing_about_you" value="<?=$onboard['contribution_most_proud_thing_about_you']?>"/>
					<input class="form-control" type="text" placeholder="contribution_socialmedia_followers" name="contribution_socialmedia_followers" value="<?=$onboard['contribution_socialmedia_followers']?>"/>
					<input class="form-control" type="text" placeholder="contribution_valueoffer_to_group" name="contribution_valueoffer_to_group" value="<?=$onboard['contribution_valueoffer_to_group']?>"/>

					<input class="form-control" type="text" placeholder="personality_three_interesting_things" name="personality_three_interesting_things" value="<?=$onboard['personality_three_interesting_things']?>"/>
					<input class="form-control" type="text" placeholder="personality_angry" name="personality_angry" value="<?=$onboard['personality_angry']?>"/>
					<input class="form-control" type="text" placeholder="personality_happy" name="personality_happy" value="<?=$onboard['personality_happy']?>"/>
					<input class="form-control" type="text" placeholder="personality_world_opinion" name="personality_world_opinion" value="<?=$onboard['personality_world_opinion']?>"/>
					<input class="form-control" type="text" placeholder="personality_role_model" name="personality_role_model" value="<?=$onboard['personality_role_model']?>"/>
					<input class="form-control" type="text" placeholder="personality_activity_when_sad" name="personality_activity_when_sad" value="<?=$onboard['personality_activity_when_sad']?>"/>
					<input class="form-control" type="text" placeholder="personality_good_books_read" name="personality_good_books_read" value="<?=$onboard['personality_good_books_read']?>"/>
					<input class="form-control" type="text" placeholder="personality_desc_yourself" name="personality_desc_yourself" value="<?=$onboard['personality_desc_yourself']?>"/>

					<input class="form-control" type="text" placeholder="experience_countries_travelled" name="experience_countries_travelled" value="<?=$onboard['experience_countries_travelled']?>"/>
					<input class="form-control" type="text" placeholder="experience_fav_holiday_dest" name="experience_fav_holiday_dest" value="<?=$onboard['experience_fav_holiday_dest']?>"/>
					<input class="form-control" type="text" placeholder="experience_culture_admire" name="experience_culture_admire" value="<?=$onboard['experience_culture_admire']?>"/>
					<input class="form-control" type="text" placeholder="experience_most_adv_thing" name="experience_most_adv_thing" value="<?=$onboard['experience_most_adv_thing']?>"/>
				</div>
			</div> -->
<!-- 		</div>
		<button class="btn btn-default" type="submit" value="save" name="sbm">Save</button>
		<button class="btn btn-primary" type="submit" value="apply" name="sbm">Submit</button>

	</form>
</div> -->