



<body>
  <div class="container-full-bg full-bg-hero">
    <div class="container">
      <div class="jumbotron">
        <div style="height:60%" class="row vertical-align text-white">
          <div style=""class="col-md-6 col-md-offset-3">
            <h1 style="background-color:rgba(8,8,8,0.8);font-size: 6.5rem;" class="text-center text-uppercase">1The Fickle 500</h1>
            <div style="background-color:rgba(8,8,8,0.6);" class="text-center" style="width:100%;color:#898989;top:-15px;position:relative"><span class="text-uppercase">the most exclusive underground club in Bangalore</span></div>   
          </div>
        </div>
        <div style="position: absolute;bottom: 0px;left:50%" class="center-block"><a href="#start-copy" class=""><span style="font-size: 20px;" class="glyphicon glyphicon-chevron-down"></span></a></div>
      </div>
    </div>
  </div>
  <!-- Hero Image Jumbotron -->
<!--     <div class="jumbotron jb-nomargin section-texture-lozenge">
      <div class="container jb-hero hero-container bg-img-car-black">
        <div class="form-group">
          &nbsp;
        </div>
        <div class="form-group">
          &nbsp;
        </div>
        <h1 style="color:black" class="text-center text-uppercase">The Fickle 500</h1>      
      </div>
    </div> -->

    <!-- TO THE TOP ARROW -->
<!--     <div style="position: fixed;bottom: 0;right:0" class="center-block"><a href="#start-copy" class=""><span style="font-size: 20px;" class="glyphicon glyphicon-chevron-up"></span></a></div>
-->
<!-- Jumbotron -->
<div id="start-copy" class="jumbotron jb-nomargin section-texture-white ">
  <div class="container">
    <h1>The Fickle 500</h1>
    <p><span class="">Welcome</span> to the most exclusive underground club in Bangalore.</p>

    <p>
     You were not born to do a 9-5 job, hang out with and be judged by boring &amp; mundane people and
     not live it up.
   </p>
   <p>
     Now, were you?
   </p>
   <p>
    Creed of the fickle 500: Fickle 500 was born out of a need for the most elite people in the city to be
    able to be able to mingle, party and join other similar people on a voyage to rid the world of poverty
    (Just kidding about the poverty part) in the most exclusive and underground venues (luxury villas
    with private pools, heritage buildings, abandoned warehouses and sometimes even outside the country in exotic locations on luxury yachts).
  </p>
  <p>
    The fickle 500 did not want any mundane and arbitrary restrictions on our fun times like the party must end at 1, the music must stop playing at 12-45 or you cannot jump into the pool of a pool side party. Ridiculous 
  </p>
  <p>
    What do we offer?
    <ul style="font-size: 2rem">
      <li>An environment where people can do whatever the fuck, without being judged.</li>
      <li>Exclusive locations, where you have never been, away from the prying eyes. The venue is revealed to the Fickle 500s, on the day of the event.</li>
      <li>We are filter out the creeps and the energy drains. Only the coolest people are allowed.
      </li>
      <li>Parties don’t end at 1, it goes on till you have danced all your alcohol off.
      </li>
      <li>Unique Networking opportunities that only we can offer (You are an upcoming model, new in the city? You can just meet the best fashion photographer who can shoot you an amazing portfolio)
      </li>
    </ul>
  </p>
  <p>
    How does it work?
    <ul style="font-size: 2rem">
      <li>You fill out your contact details in the contact form below</li>
      <li>We send you a couple of newsletters to tell you about who we are</li>
      <li>We send you a link with a list of questions?
      </li>
      <li>You fill out the questionnaire
      </li>
      <li>We review your answers to make sure you are eligible to be a part of the fickle 500
      </li>
      <li>If you get selected, we send you an invite to the latest event on the day it’s happening.</li>
      <li>We get to know each other :)
      </li>
    </ul>
  </p>
  
  <p>Who is this for? : Now, we just cannot let everyone in to this thing, can we? We can only entertain 500 people at most and the list keeps on changing. Our selection process is strict, but it ensures we keep the creeps and the teetotallers out.</p>

  <p>
    Please note,
    <ol style="font-size: 2rem">
      <li>It is not meant for boring people who cannot keep their secrets.</li>
      <li>It only for people who have interesting professions.
      </li>
      <li>It is not for people who hang out in hole in the wall dive bars in the city.</li>
    </ol>
  </p>
  <p>
    Now kindly fill out the contact form below, keep your fingers crossed and we might just go on a crazy journey. ☺
    Good luck!
  </p>

  <a href="#section-form" class="btn btn-primary">Continue..</a>
</div>
</div>

<div id="option" class="container test-debug">
  TEST DIFFERENT PATTERNS
  <a id="change-color-option" data-val="section-texture-triangle" href="#option">LUXURY</a>
  <a id="change-color-option" data-val="section-texture-lozenge" href="#option">LOZENGE</a>
  TEST THE DIFFERENT COLOURS - 
  <a id="change-color-option" data-val="section-embers" href="#option">EMBER</a>
  <a id="change-color-option" data-val="section-black" href="#option">black</a>
  <a id="change-color-option" data-val="section-ink" href="#option">ink</a>
  <a id="change-color-option" data-val="section-posy" href="#option">posy</a>
  <a id="change-color-option" data-val="section-green" href="#option">green</a>
  <a id="change-color-option" data-val="section-blue" href="#option">blue</a>
  <a id="change-color-option" data-val="section-chrome" href="#option">chrome</a>
</div>

<div id="section-form" class="container-fluid section-texture-lozenge text-white">
  <div class="container">
    <div class="row">
      <div class="form-group">
        &nbsp;
      </div>
      <h1>Request Form:</h1>
      <div class="col-sm-6">

        <?php echo form_open('apply',array('id' => 'request-link-form')); ?>

        <!-- <?php echo validation_errors(); ?> -->
        <?php 
        if($form_fail == "true"){
            // Code to scroll window to form.
          ?>
          <script type="text/javascript">
           $(document).ready(function() {
            $(window).scrollTop($("#section-form").offset().top);               
          });
        </script>
        <?php
      }
      ?>

      <div class="form-group">

        <label for="">Name:</label>
        <span class="error-text"><?php echo form_error('name'); ?></span>
        <input class="form-control" type="text" placeholder="Name..." name="name" />
      </div>

      <div class="form-group">
        <label for="">Phone No:<small>(no calls ever - only activation sms will be sent.)</small></label>
        <span class="error-text"><?php echo form_error('phno'); ?></span>
        <input class="form-control" type="text" placeholder="phone no..." name="phno" />
      </div>

      <div class="form-group">
        <label for="">Email: <small>(no spam ever - only activation email will be sent.)</small></label>
        <span class="error-text"><?php echo form_error('email'); ?></span>
        <input class="form-control" type="text" placeholder="email..." name="email" />
      </div>

      <div class="form-group">
        <label for="google-recaptcha"></label>
        <span class="error-text"><?php echo form_error('g-recaptcha-response'); ?></span>
        <div class="g-recaptcha" name="google-recaptcha" data-sitekey="6LdullcUAAAAAEfHtwxlbFxJ1rKpiejMDSfDcigq"></div>
      </div>

      <div class="form-group">
        <!-- <button class="btn btn-primary"></button> -->
        <input type="hidden" name="submitted" value="Y"/>
        <input class="btn btn-lg btn-primary" type="submit" value="Email me the application link" name="submit" />
      </div>
    </form>
  </div>
  <div class="col-sm-6 hidden-xs">
   <!-- <img style="width:100%;height:auto" src="./img/high-res/wine-bed-sm.jpg"/> -->
   <!-- <img style="width:60%;height:auto" src="./img/wine-glasses-white.png"/> -->

   <!-- <a href="./img/high-res/man-shadow.jpg">LINK</a> -->
 </div>
</div>
<div class="form-group">
  &nbsp;
</div>
</div>
</div>

<div class="container-fluid section-ink text-white">
  <div class="container">
    <h1>Steps:</h1>
    <p class="lead">Instructions on what will happen next:</p>
    <ul style="font-size: 2rem">
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate reprehenderit veritatis perspiciatis ex harum aspernatur laboriosam adipisci necessitatibus eos, deserunt sunt rerum voluptas unde deleniti laudantium repudiandae fuga officia dolorem.</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate reprehenderit veritatis perspiciatis ex harum aspernatur laboriosam adipisci necessitatibus eos, deserunt sunt rerum voluptas unde deleniti laudantium repudiandae fuga officia dolorem.</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate reprehenderit veritatis perspiciatis ex harum aspernatur laboriosam adipisci necessitatibus eos, deserunt sunt rerum voluptas unde deleniti laudantium repudiandae fuga officia dolorem.</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate reprehenderit veritatis perspiciatis ex harum aspernatur laboriosam adipisci necessitatibus eos, deserunt sunt rerum voluptas unde deleniti laudantium repudiandae fuga officia dolorem.</li>
    </ul>
  </div>
</div>





<!-- <?php echo validation_errors(); ?>

<?php echo form_open(); ?>
<input class="form-control" type="text" placeholder="Name..." name="name" />

<input class="form-control" type="text" placeholder="email..." name="email" />

<input class="form-control" type="text" placeholder="phone no..." name="phno" />


<div class="form-control">
    <div class="g-recaptcha" data-sitekey="6LdullcUAAAAAEfHtwxlbFxJ1rKpiejMDSfDcigq"></div>
</div>

<div class="text-center">
 <input class="btn btn-lg btn-primary text-center center-block" type="submit" value="apply" name="submit" />
</div>
</div>
</form>
-->
