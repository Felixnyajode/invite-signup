<?php 

class Data_model extends CI_Model{

	public function getConfig(){
		// $config = array(
		// 'env' => 'PROD',
		// 'applicationT' => 'application',
		// 'applicationdetailT' => 'applicationdetail',
		// );

		$config = array(
			'env' => 'DEV',
			'applicationT' => 'application',
			'applicationdetailT' => 'applicationdetail'
		);

		return $config;
	}

	public function __construct(){
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('file');
	}


	private function check_uniq_code($uniq_code){

		$this->db->where('UNIQLINK', $uniq_code);
		$result = $this->db->get($this->getConfig()['applicationT']);

		if($result->num_rows() >= 1){
			return false;
		}else{
			return true;
		}
	}

	public function getDataFromUniqLinkDetail($uniqlink){
		$this->db->where('p_uniqlink', $uniqlink);
		$query = $this->db->get($this->getConfig()['applicationdetailT']);		

		return $query->row_array();
	}

	public function getDataFromUniqLinkMain($uniqlink){
		$this->db->where('UNIQLINK', $uniqlink);
		$query = $this->db->get($this->getConfig()['applicationT']);		

		return $query->row_array();
	}

	public function isSubmitted($uniqlink){

		$this->db->where('p_uniqlink', $uniqlink);
		$query = $this->db->get($this->getConfig()['applicationdetailT']);	

		$ret = false;

		if($query->row_array()['p_submitted'] == 1){
			$ret = true;
		}else {
			$ret = false;
		}

		//print_r($ret+":value");
		return $ret;
	}
	



	public function addUpdateApplicationDetail($data){

		$appDetailTableName = $this->getConfig()['applicationdetailT'];

		$this->db->where('p_uniqlink', $data['p_uniqlink']);
		$result = $this->db->get($this->getConfig()['applicationdetailT']);
		$exist = null;

		if($result->num_rows() >= 1){
			$exist=true;
		}else{
			$exist=false;
		}

		if(!$exist){

			$data['p_datelog'] = date("Y-m-d H:i:s");
			$data['p_submitted'] = 0;
			$this->db->insert($appDetailTableName, $data); 
			// die();
			// echo "insert"; die();
			// $sql = "insert into ".$appDetailTableName."(age,sex,CountryOrigin,Profession,MediaOrNo,Portfolio,AnnualIncome,SocialMedia,Passion,CountriesTravelled,UniqueTrait,Offer,HouseParty,FriendsThink,EmbarassingMoment,Achievement,OutFit,SadActivity,MostCrazyAdven,FavSocialActivity,uniqlink,datelog,submitted) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),0)";

			// echo $sql; die();

			// $this->db->query($sql,array($data['age'],
			// 	$data['sex'],
			// 	$data['countryoforigin'],
			// 	$data['profession'],
			// 	$data['mediaorno'],
			// 	$data['portfolio'],
			// 	$data['annualincome'],
			// 	$data['socialmedia'],
			// 	$data['passion'],
			// 	$data['countriestravelled'],
			// 	$data['uniquetrait'],
			// 	$data['offer'],
			// 	$data['houseparty'],
			// 	$data['friendsthink'],
			// 	$data['embarassingmoment'],
			// 	$data['achievement'],
			// 	$data['outfit'],
			// 	$data['sadactivity'],
			// 	$data['mostcrazyadven'],
			// 	$data['favsocialactivity'],
			// 	$data['uniqlink']));
		}else{
			// echo "update".$data['p_uniqlink'];

			 
			// $currdate = date("Y-m-d H:i:s");
			// $date = new DateTime( "2011-01-01 15:00:00", $UTC );
			// $currdate->setTimezone(new DateTimeZone('Asia/Calcutta'));
			// echo $currdate; die();
			$data['p_datelog'] = date("Y-m-d H:i:s");
			$this->db->where('p_uniqlink', $data['p_uniqlink']);
			$this->db->update($appDetailTableName, $data);

			// print_r($data);
			// die();

			// $sql = "update ".$appDetailTableName." set age = ?,sex = ?,CountryOrigin = ?,Profession = ?,MediaOrNo = ?,Portfolio = ?,AnnualIncome = ?,SocialMedia = ?,Passion = ?,CountriesTravelled = ?,UniqueTrait = ?,Offer = ?,HouseParty = ?,FriendsThink = ?,EmbarassingMoment = ?,Achievement = ?,OutFit = ?,SadActivity = ?,MostCrazyAdven = ?,FavSocialActivity = ?,datelog = now(), submitted = ? where uniqlink ='".$data['uniqlink']."'";
			// $this->db->query($sql,array($data['age'],
			// 	$data['sex'],
			// 	$data['countryoforigin'],
			// 	$data['profession'],
			// 	$data['mediaorno'],
			// 	$data['portfolio'],
			// 	$data['annualincome'],
			// 	$data['socialmedia'],
			// 	$data['passion'],
			// 	$data['countriestravelled'],
			// 	$data['uniquetrait'],
			// 	$data['offer'],
			// 	$data['houseparty'],
			// 	$data['friendsthink'],
			// 	$data['embarassingmoment'],
			// 	$data['achievement'],
			// 	$data['outfit'],
			// 	$data['sadactivity'],
			// 	$data['mostcrazyadven'],
			// 	$data['favsocialactivity'],
			// 	$data['submitted']));
		}

		$ret['id'] = $this->db->insert_id();
		//$ret['uniqlink'] = $uniq_code;

		return $ret['id'];
	}

	private function getInsertSqlForAppDetailString($data){
		$sql = "";
		$appDetailTableName = $this->getConfig()['applicationdetailT'];

		// Adding datelog
		$data['p_datelog'] = "Now()";
		$data['p_submitted'] = 0;

		$this->db->insert($appDetailTableName, $data); 

		// $sql = "insert into ".$appDetailTableName."(" ;
		// //."(age,sex,CountryOrigin,Profession,MediaOrNo,Portfolio,AnnualIncome,SocialMedia,Passion,CountriesTravelled,UniqueTrait,Offer,HouseParty,FriendsThink,EmbarassingMoment,Achievement,OutFit,SadActivity,MostCrazyAdven,FavSocialActivity,uniqlink,datelog,submitted) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),0)";

		// $valueStr = " values(";
		// $i = 0 ;
		// $val = array();
		// $delimiter = ",";

		// // GETTING THE END ELEMENT
		// end($data);
		// $end_elem = key($data);

		// foreach($data as $key => $value){
		// 	// SETTING EMPTY FOR LAST ELEMENT
		// 	if ($key === $end_elem){
		// 		$delimiter = "";
		// 	}

		// 	$sql = $sql . $key.$delimiter;

		// 	if($key == 'p_submitted'){
		// 		$valueStr = $valueStr . "0".$delimiter ;
		// 	}else if($key == 'p_datelog'){
		// 		$valueStr = $valueStr . "NOW()".$delimiter ;
		// 	}else{
		// 		$valueStr = $valueStr . "?".$delimiter ;
		// 	}

		// 	// SETTING THE VALUE AND INCREMENTING
		// 	$val[$i] = $value;
		// 	$i = $i + 1;
		// }

		// $sql = $sql .") ". $valueStr . ")";
		// //echo ($sql);

		// $this->db->query($sql,array($data['age'],

		// 	return $sql;
	}

	public function addApplication($data){

		$uniq_code = null;
		do{
			$uniq_code = $this->get_random_alphanum();
		}while(!$this->check_uniq_code($uniq_code));	

		$tableName = $this->getConfig()['applicationT'];

		$sql = "insert into ".$tableName."(name,email,phno,UNIQLINK,datelog,status) values(?,?,?,?,NOW(),'APP')";
		$this->db->query($sql,array($data['name'],$data['email'],$data['phno'],$uniq_code));

		$ret['id'] = $this->db->insert_id();
		$ret['uniqlink'] = $uniq_code;

		return $ret;
	}

	private function get_random_alphanum(){
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$random_string_length = 6;
		$string = '';
		$max = strlen($characters) - 1;
		for ($i = 0; $i < $random_string_length; $i++) {
			$string .= $characters[mt_rand(0, $max)];
		}
		return $string;
	}


}