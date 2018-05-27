<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller {

	public function __construct(){
		parent::__construct();

		//echo strtolower($_SERVER['HTTP_HOST']);
		// echo "The base url is".$this->config->item('base_url');
		// echo "data base changes are ".$db['default'];
		//	$this->load->helper('url');
		// $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		// $this->output->set_header('Pragma: no-cache');
		// $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	}

	private function refreshDataFromDB($uniqlink){
		$valM = $this->Data_model->getDataFromUniqLinkMain($uniqlink);
		$valD = $this->Data_model->getDataFromUniqLinkDetail($uniqlink);

		$v = array(
			'id' => $valM['ID'],
			'name' => $valM['NAME'],
			'email' => $valM['EMAIL'],
			'phno' => $valM['PHNO'],
			'uniqlink' => $valM['UNIQLINK'],
			'datelog' => $valM['DATELOG'],
			'status' => $valM['STATUS'],
			// 'p_id'  => $valD['p_id'] ?? "",
			'p_uniqlink' => $valD['p_uniqlink'] ?? "",
			'p_datelog' => $valD['p_datelog'] ?? "",
			'p_submitted' => $valD['p_submitted'] ?? "",
			'personal_age' => $valD['personal_age'] ?? "",
			'personal_sex' => $valD['personal_sex'] ?? "",
			'personal_country_of_origin' => $valD['personal_country_of_origin'] ?? "",
			'personal_social_facebook' => $valD['personal_social_facebook'] ?? "",
			'personal_social_instragram' => $valD['personal_social_instragram'] ?? "",
			'personal_social_twitter' => $valD['personal_social_twitter'] ?? "",
			'personal_social_snapchat' => $valD['personal_social_snapchat'] ?? "",
			'professional_work' => $valD['professional_work'] ?? "",
			'professional_linkedin_url' => $valD['professional_linkedin_url'] ?? "",
			'professional_top_or_close' => $valD['professional_top_or_close'] ?? "",
			'professional_annual_income' => $valD['professional_annual_income'] ?? "",
			'professional_media_or_entertainment' => $valD['professional_media_or_entertainment'] ?? "",
			'professional_portfolio_url' => $valD['professional_portfolio_url'] ?? "",
			'professional_biggest_achievement'  => $valD['professional_biggest_achievement'] ?? "",
			'professional_passion' => $valD['professional_passion'] ?? "",
			'social_facebook_friends' => $valD['social_facebook_friends'] ?? "",
			'social_fav_activity' => $valD['social_fav_activity'] ?? "",
			'social_fav_places_bangalore_hangout' => $valD['social_fav_places_bangalore_hangout'] ?? "", 
			'social_special_friend_email' => $valD['social_special_friend_email'] ?? "",
			'social_houseparty_invitation' => $valD['social_houseparty_invitation'] ?? "",
			'social_friends_opinion' => $valD['social_friends_opinion'] ?? "",
			'contribution_most_proud_thing_about_you' => $valD['contribution_most_proud_thing_about_you'] ?? "",
			'contribution_socialmedia_followers' => $valD['contribution_socialmedia_followers'] ?? "",
			'contribution_valueoffer_to_group' => $valD['contribution_valueoffer_to_group'] ?? "",
			'personality_three_interesting_things' => $valD['personality_three_interesting_things'] ?? "",
			'personality_angry' => $valD['personality_angry'] ?? "",
			'personality_happy' => $valD['personality_happy'] ?? "",
			'personality_world_opinion' => $valD['personality_world_opinion'] ?? "",
			'personality_role_model' => $valD['personality_role_model'] ?? "",
			'personality_activity_when_sad' => $valD['personality_activity_when_sad'] ?? "",
			'personality_good_books_read' => $valD['personality_good_books_read'] ?? "",
			'personality_desc_yourself' => $valD['personality_desc_yourself'] ?? "",
			'experience_countries_travelled' => $valD['experience_countries_travelled'] ?? "",
			'experience_fav_holiday_dest' => $valD['experience_fav_holiday_dest'] ?? "",
			'experience_culture_admire' => $valD['experience_culture_admire'] ?? "",
			'experience_most_adv_thing' => $valD['experience_most_adv_thing'] ?? ""
		);

		return $v;
	}

	// private function refreshDataFromDB_old($uniqlink){
	// 	$valM = $this->Data_model->getDataFromUniqLinkMain($uniqlink);
	// 	$valD = $this->Data_model->getDataFromUniqLinkDetail($uniqlink);
	
	// 	$v = array(
	// 		'id' => $valM['ID'],
	// 		'name' => $valM['NAME'],
	// 		'email' => $valM['EMAIL'],
	// 		'phno' => $valM['PHNO'],
	// 		'uniqlink' => $valM['UNIQLINK'],
	// 		'datelog' => $valM['DATELOG'],
	// 		'status' => $valM['STATUS'],
	// 		'age' => $valD['Age'] ?? "",
	// 		'sex' => $valD['Sex'] ?? "",
	// 		'countryoforigin' => $valD['CountryOrigin'] ?? "",
	// 		'profession' => $valD['Profession'] ?? "",
	// 		'mediaorno' => $valD['MediaOrNo'] ?? "",
	// 		'portfolio' => $valD['Portfolio'] ?? "",
	// 		'annualincome' => $valD['AnnualIncome'] ?? "",
	// 		'socialmedia' => $valD['SocialMedia'] ?? "",
	// 		'passion' => $valD['Passion'] ?? "",
	// 		'countriestravelled' => $valD['CountriesTravelled'] ?? "",
	// 		'uniquetrait' => $valD['UniqueTrait'] ?? "",
	// 		'offer' => $valD['Offer'] ?? "",
	// 		'houseparty' => $valD['HouseParty'] ?? "",
	// 		'friendsthink' => $valD['FriendsThink'] ?? "",
	// 		'embarassingmoment' => $valD['EmbarassingMoment'] ?? "",
	// 		'achievement' => $valD['Achievement'] ?? "",
	// 		'outfit' => $valD['OutFit'] ?? "",
	// 		'sadactivity' => $valD['SadActivity'] ?? "",
	// 		'mostcrazyadven' => $valD['MostCrazyAdven'] ?? "",
	// 		'favsocialactivity' => $valD['FavSocialActivity'] ?? ""
	// 	);

	// 	return $v;
	// }

	private function populateFormDataFromPost($uniqLink,$submittedValue){
		$formData = null;

		$formData = array(
			'personal_age' => $this->input->post('personal_age'),
			'personal_sex' => $this->input->post('personal_sex'),
			'personal_country_of_origin' => $this->input->post('personal_country_of_origin'),
			'personal_social_facebook' => $this->input->post('personal_social_facebook'),
			'personal_social_instragram' => $this->input->post('personal_social_instragram'),
			'personal_social_twitter' => $this->input->post('personal_social_twitter'),
			'personal_social_snapchat' => $this->input->post('personal_social_snapchat'),
			'professional_work' => $this->input->post('professional_work'),
			'professional_linkedin_url' => $this->input->post('professional_linkedin_url'),
			'professional_top_or_close' => $this->input->post('professional_top_or_close'),
			'professional_annual_income' => $this->input->post('professional_annual_income'),
			'professional_media_or_entertainment' => $this->input->post('professional_media_or_entertainment'),
			'professional_portfolio_url' => $this->input->post('professional_portfolio_url'),
			'professional_biggest_achievement'  => $this->input->post('professional_biggest_achievement'),
			'professional_passion' => $this->input->post('professional_passion'),
			'social_facebook_friends' => $this->input->post('social_facebook_friends'),
			'social_fav_activity' => $this->input->post('social_fav_activity'),
			'social_fav_places_bangalore_hangout' => $this->input->post('social_fav_places_bangalore_hangout'),
			'social_special_friend_email' => $this->input->post('social_special_friend_email'),
			'social_houseparty_invitation' => $this->input->post('social_houseparty_invitation'),
			'social_friends_opinion' => $this->input->post('social_friends_opinion'),
			'contribution_most_proud_thing_about_you' => $this->input->post('contribution_most_proud_thing_about_you'),
			'contribution_socialmedia_followers' => $this->input->post('contribution_socialmedia_followers'),
			'contribution_valueoffer_to_group' => $this->input->post('contribution_valueoffer_to_group'),
			'personality_three_interesting_things' => $this->input->post('personality_three_interesting_things'),
			'personality_angry' => $this->input->post('personality_angry'),
			'personality_happy' => $this->input->post('personality_happy'),
			'personality_world_opinion' => $this->input->post('personality_world_opinion'),
			'personality_role_model' => $this->input->post('personality_role_model'),
			'personality_activity_when_sad' => $this->input->post('personality_activity_when_sad'),
			'personality_good_books_read' => $this->input->post('personality_good_books_read'),
			'personality_desc_yourself'  => $this->input->post('personality_desc_yourself'),
			'experience_countries_travelled' => $this->input->post('experience_countries_travelled'),
			'experience_fav_holiday_dest' => $this->input->post('experience_fav_holiday_dest'),
			'experience_culture_admire' => $this->input->post('experience_culture_admire'),
			'experience_most_adv_thing' => $this->input->post('experience_most_adv_thing'),
			'p_uniqlink' => $uniqLink,
			'p_submitted' => $submittedValue
		);

			// print_r($formData);die();
		return $formData;
	}

	// private function populateFormDataFromPost_old($uniqLink,$submittedValue){
	// 	$formData = null;

	// 		$formData = array(
	// 				'age' => $this->input->post('age'),
	// 				'sex' => $this->input->post('sex'),
	// 				'countryoforigin' => $this->input->post('countryoforigin'),
	// 				'profession' => $this->input->post('profession'),
	// 				'mediaorno' => $this->input->post('mediaorno'),
	// 				'portfolio' => $this->input->post('portfolio'),
	// 				'annualincome' => $this->input->post('annualincome'),
	// 				'socialmedia' => $this->input->post('socialmedia'),
	// 				'passion' => $this->input->post('passion'),
	// 				'countriestravelled' => $this->input->post('countriestravelled'),
	// 				'uniquetrait' => $this->input->post('uniquetrait'),
	// 				'offer' => $this->input->post('offer'),
	// 				'houseparty' => $this->input->post('houseparty'),
	// 				'friendsthink' => $this->input->post('friendsthink'),
	// 				'embarassingmoment' => $this->input->post('embarassingmoment'),
	// 				'achievement' => $this->input->post('achievement'),
	// 				'outfit' => $this->input->post('outfit'),
	// 				'sadactivity' => $this->input->post('sadactivity'),
	// 				'mostcrazyadven' => $this->input->post('mostcrazyadven'),
	// 				'favsocialactivity' => $this->input->post('favsocialactivity'),
	// 				'uniqlink' => $uniqLink,
	// 				'submitted' => $submittedValue
	// 			);


	// 	return $formData;
	// }

	private function viewOnboard($data){

		// Managing Scroll Position
		$scrollPosition = $this->input->post('scrollPosition');
		$data['onboard']['scrollPosition'] = $scrollPosition;	

		$this->load->view('templates/header' , $data);
		$this->load->view('pages/onboard' , $data);
		$this->load->view('templates/footer');
	}

	public function link($uniqlink){
		$this->load->helper(array('form', 'url'));



		$data['title'] = 'Request Details';

		if($this->Data_model->isSubmitted($uniqlink)){
			$data['special_message'] = "Already Submitted.";
			$this->load->view('templates/header' , $data);
			$this->load->view('pages/onboardsubmitsuccess', $data);
			$this->load->view('templates/footer');

			// echo "Already Submitted - Thanks for applying. We will review and get back to you" ;
		}else{

			
			if($this->input->post('sbm') == 'save'){

				$formData = $this->populateFormDataFromPost($uniqlink,0);
				// $formData = array(
				// 	'age' => $this->input->post('age'),
				// 	'sex' => $this->input->post('sex'),
				// 	'countryoforigin' => $this->input->post('countryoforigin'),
				// 	'profession' => $this->input->post('profession'),
				// 	'uniqlink' => $uniqlink,
				// 	'submitted' => 0
				// );
				
				
				$id = $this->Data_model->addUpdateApplicationDetail($formData);
		// print_r($valD);die();

				$data['onboard'] = $this->refreshDataFromDB($uniqlink);
				
				// Handle Scroll Position
					

				$this->viewOnboard($data);
				// $this->load->view('templates/header' , $data);
				// $this->load->view('pages/onboard' , $data);
				// $this->load->view('templates/footer');

			}else if($this->input->post('sbm') == 'apply'){

				$data['onboard'] = $this->refreshDataFromDB($uniqlink);

				$this->form_validation->set_rules('personal_age','','required');
				$this->form_validation->set_rules('personal_sex','','required');
				$this->form_validation->set_rules('personal_country_of_origin','','required');
				$this->form_validation->set_rules('personal_social_facebook','','required');
				$this->form_validation->set_rules('personal_social_instragram','','required');
				$this->form_validation->set_rules('personal_social_twitter','','required');
				$this->form_validation->set_rules('personal_social_snapchat','','required');
				$this->form_validation->set_rules('professional_work','','required');
				$this->form_validation->set_rules('professional_linkedin_url','','required');
				$this->form_validation->set_rules('professional_top_or_close','','required');
				$this->form_validation->set_rules('professional_annual_income','','required');
				$this->form_validation->set_rules('professional_media_or_entertainment','','required');
				$this->form_validation->set_rules('professional_portfolio_url','','required');
				$this->form_validation->set_rules('professional_biggest_achievement','','required'); 
				$this->form_validation->set_rules('professional_passion','','required');
				$this->form_validation->set_rules('social_facebook_friends','','required');
				$this->form_validation->set_rules('social_fav_activity','','required');
				$this->form_validation->set_rules('social_fav_places_bangalore_hangout','','required'); 
				$this->form_validation->set_rules('social_special_friend_email','','required');
				$this->form_validation->set_rules('social_houseparty_invitation','','required');
				$this->form_validation->set_rules('social_friends_opinion','','required');
				$this->form_validation->set_rules('contribution_most_proud_thing_about_you','','required');
				$this->form_validation->set_rules('contribution_socialmedia_followers','','required');
				$this->form_validation->set_rules('contribution_valueoffer_to_group','','required');
				$this->form_validation->set_rules('personality_three_interesting_things','','required');
				$this->form_validation->set_rules('personality_angry','','required');
				$this->form_validation->set_rules('personality_happy','','required');
				$this->form_validation->set_rules('personality_world_opinion','','required');
				$this->form_validation->set_rules('personality_role_model','','required');
				$this->form_validation->set_rules('personality_activity_when_sad','','required');
				$this->form_validation->set_rules('personality_good_books_read','','required');
				$this->form_validation->set_rules('personality_desc_yourself','','required');
				$this->form_validation->set_rules('experience_countries_travelled','','required');
				$this->form_validation->set_rules('experience_fav_holiday_dest','','required');
				$this->form_validation->set_rules('experience_culture_admire','','required');
				$this->form_validation->set_rules('experience_most_adv_thing','','required');

				// $this->form_validation->set_rules('age','Age','required');
				// $this->form_validation->set_rules('sex','Sex','required');
				// $this->form_validation->set_rules('countryoforigin','Country of Origin','required');
				// $this->form_validation->set_rules('profession','Profession ','required');
				// $this->form_validation->set_rules('mediaorno','From Media/Entertainment Industry','required');
				// $this->form_validation->set_rules('portfolio','Portfolio ','required');
				// $this->form_validation->set_rules('annualincome','Annual Income ','required');
				// $this->form_validation->set_rules('socialmedia','Social Media Details','required');
				// $this->form_validation->set_rules('passion','Passion','required');
				// $this->form_validation->set_rules('countriestravelled','Countries Travelled ','required');
				// $this->form_validation->set_rules('uniquetrait','Unique Traits','required');
				// $this->form_validation->set_rules('offer','Unique Offer/Proposition','required');
				// $this->form_validation->set_rules('houseparty','House Party Invite','required');
				// $this->form_validation->set_rules('friendsthink','Friend\'s Opinion','required');
				// $this->form_validation->set_rules('embarassingmoment','Embarassing Moment','required');
				// $this->form_validation->set_rules('achievement','Achievement','required');
				// $this->form_validation->set_rules('outfit','Outfit','required');
				// $this->form_validation->set_rules('sadactivity','Fav. recreation when sad','required');
				// $this->form_validation->set_rules('mostcrazyadven','Crazy Adventure','required');
				// $this->form_validation->set_rules('favsocialactivity','Fav. Social Activity','required');

			//====================================================
				if ($this->form_validation->run() == FALSE)
				{
					// Handle Scroll Position
					$scrollPosition = $this->input->post('scrollPosition');
					$data['onboard']['scrollPosition'] = $scrollPosition;	

					$this->viewOnboard($data);
					// $this->load->view('templates/header' , $data);
					// $this->load->view('pages/onboard' , $data);
					// $this->load->view('templates/footer');
				}else{
			// Valdation passed - insert into database
					// $formData = array(
					// 	'age' => $this->input->post('age'),
					// 	'sex' => $this->input->post('sex'),
					// 	'countryoforigin' => $this->input->post('countryoforigin'),
					// 	'profession' => $this->input->post('profession'),
					// 	'uniqlink' => $uniqlink,
					// 	'submitted' => 1
					// );
					$formData = $this->populateFormDataFromPost($uniqlink,1);

					$id = $this->Data_model->addUpdateApplicationDetail($formData);

					$data['special_message'] = "";
					$this->load->view('templates/header' , $data);
					$this->load->view('pages/onboardsubmitsuccess', $data);
					$this->load->view('templates/footer');

					// echo "Thanks for applying. We will review and get back to you - ".$id ;
				}
			//====================================================
			}else{

				$data['onboard'] = $this->refreshDataFromDB($uniqlink);
				
				$this->viewOnboard($data);
				// $this->load->view('templates/header' , $data);
				// $this->load->view('pages/onboard' , $data);
				// $this->load->view('templates/footer');
			}
		}
	}

	public function sendEmailWithApplyLink(){
		// TODO fill it up
	}

	public function sendSMSWithApplyLink(){
				// TODO fill it up
	}

	public function index()
	{
		$data['title'] = "Some Header";	

		// DB Test		
		// $data['list'] = $this->Data_model->getLookupValue();

		$this->load->helper(array('form', 'url'));

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('phno','Phone No','required');
		$this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
		$this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

		$data['form_fail'] = "";
		$data['sectionid_to_scroll'] = "";

		if ($this->form_validation->run() == FALSE)
		{
			if($this->input->post('submitted') == "Y" ){
				$data['form_fail'] = "true";
				$data['sectionid_to_scroll'] = "section-form";
			}

			$this->load->view('templates/header' , $data);
			$this->load->view('pages/requestlink' , $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['form']['name'] = $this->input->post('name');
			$data['form']['email'] = $this->input->post('email');
			$data['form']['phno'] = $this->input->post('phno');

			$ret = $this->Data_model->addApplication($data['form']);
			// TODO SEND EMAIL 			
			// echo('Form Submit Success, id - '.$ret['id'].' and uniqlink - '.$ret['uniqlink']);
			// echo ("<br/><a target='_blank' href='http://localhost/fickle500/link/".$ret['uniqlink']."'>Click</a>");


			$host_link = base_url()."link/";

			//$email_body = "<br/><a target='_blank' href='$host_link".$ret['uniqlink']."'>Click</a>";

			$email_template_data = array(
				'name' => $data['form']['name'],
				'link' => $host_link.$ret['uniqlink']
			);

			// $email_body = $this->load->view('templates/email_requestlinksuccess.php',$email_template_data,TRUE);
			$email_body = $this->load->view('templates/email_announce.php',$email_template_data,TRUE);

			$email_data = array(
				'from' => "welcome@fickle500.in",
				'to' => $data['form']['email'],
				'fromname' => "fickle500 Team",
				'subject' => "Your exclusive invitation enclosed.",
				'body' => $email_body,
				'uniqlink' => $ret['uniqlink']
			);
			$this->sendEmail($email_data);

			$sms_data = array(
				'uniq_code' => $ret['uniqlink'],
				'name' => $data['form']['name'],
				'phoneno' => $data['form']['phno']
			);
			// $this->sendSMS($sms_data);

			// $this->load->view('templates/header' , $data);
			// $this->load->view('pages/requestlinksuccess' , $data);
			// $this->load->view('templates/footer');
			redirect('/requestsubmitted');
		}
	}

	function requestsubmitted(){

		$data = array();

		$this->load->view('templates/header' , $data);
		$this->load->view('pages/requestlinksuccess' , $data);
		$this->load->view('templates/footer');
	}

	function sendEmail($data){

		// echo("Email-Sent Function Called");
		// print_r($data);

		// Send Email Functionality
		$this->load->library('email');
		$config= Array(
			'protocol'  =>'smtp',
			'smtp_host' => 'localhost',
			'smtp_port' => 25,
			'smtp_user'=>  '',
			'smtp_pass' =>''
		);

		$mailtrap_config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.mailtrap.io',
			'smtp_port' => 2525,
			'smtp_user' => '1f3d9ea3d93ede',
			'smtp_pass' => '47b94395143de1',
			'crlf' => "\r\n",
			'newline' => "\r\n"
		);

		$gmail_config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'thefickle500@gmail.com',
			'smtp_pass' => 'jwpsougkugbnqjgu',
			// 'smtp_user' => 'simplerg2030@gmail.com',
			// 'smtp_pass' => 'jideyualursndbbq',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);

		$from = $data['from'];
		$fromname = $data['fromname'];
		$to = $data['to'];
		$subject = $data['subject'];
		$body = $data['body'];

		$this->load->library('email');

		// $this->email->initialize($mailtrap_config);
		$this->email->initialize($gmail_config);

		$this->email->set_newline("\r\n");
		$this->email->from($from,$fromname);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($body);
		$this->email->set_mailtype("html");

		if(!$this->email->send())
		{
			show_error($this->email->print_debugger());
		}

	}

	function sendSMS($data){
		// Send sms  functionality
		$msg = 'Hi '.$data['name'].'. Your exclusive link - http://localhost/fickle500/link/'.$data['uniq_code']. ' donot share. best of luck :)';
		$msg = rawurlencode($msg);

		$param = http_build_query(array(
			'authkey' => '170555A0lfTODiDsp59970d3d',
			'mobiles' => '91'.$data['phoneno'],
			'message' => $msg,
			'sender' => 'FICKLE',
			'route' => '4',
			'country' => '91'
		));		

		$url = 'https://control.msg91.com/api/sendhttp.php?'.$param ;

		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST , true);

//Ignore SSL certificate verification
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//get response
		// Send SMS
		$output = curl_exec($ch);

//Print error if any
		if(curl_errno($ch))
		{
			//echo 'error:' . curl_error($ch);
		}
		curl_close($ch);
	}

	function validate_captcha() {
		$captcha = $this->input->post('g-recaptcha-response');
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdullcUAAAAAEYIe-jvXTM7Lz1O99IusWBF1EMd&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
		//echo($response);
		//die();
		if ($response . 'success' == false) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

}
