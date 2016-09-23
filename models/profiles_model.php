<?php
class Profiles_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
    public function maxlicencedcode()
    {
        return $this->db->select('SELECT MAX(ng_licenceid) as Licencedid FROM tb_ng_guide');
    }
    public function licencedcode()
    {
        return $this->db->select('SELECT * FROM tb_numberformat');
    }
	public function Selectedlg()
	{
		return $this->db->select('SELECT * FROM languages');
	}
	public function nationalitylist()
	{
		return $this->db->select('SELECT * FROM nationality');
	}
	public function provinceslist()
	{
		return $this->db->select('SELECT * FROM provinces');
	}
	public function locationlist()
	{
		return $this->db->select('SELECT * FROM tb_location');
	}
	public function guidetypelist()
	{
		return $this->db->select('SELECT * FROM tb_guidetype');
	}
	public function addEditguide()
	{
		$result = false;
		$message = 'error';
		try{

			
			$dob = '';
			$issuedate = '';
			$exp_date = '';
			
			$dd = $_POST['dd'];
			$mm = $_POST['mm'];
			$yy = $_POST['yyyy'];
			$dob = $yy.'-'.$mm.'-'.$dd;
			
			$ddisd = $_POST['ddisd'];
			$mmisd = $_POST['mmisd'];
			$yyisd = $_POST['yyyyisd'];
			$issuedate = $yyisd.'-'.$mmisd.'-'.$ddisd;
			
			$dded = $_POST['dded'];
			$mmed = $_POST['mmed'];
			$yyed = $_POST['yyyyed'];
			$exp_date = $yyed.'-'.$mmed.'-'.$dded;
			
			$codeurl = '';
			$codeurl = $_POST['idprefix']."".$_POST['idnum'];
			
			$s_namekh = $_POST['lnamekh']." ".$_POST['fnamekh'];
			$s_nameen = $_POST['lnameen']." ".$_POST['fnameen'];
			
			$sth = $this->db->prepare("SELECT s_email
                    FROM tb_users WHERE 
                    s_email = :s_email ");
                $sth->execute(array(
                    ':s_email' => $_POST['email']
                ));
                $check = $sth->fetch();

                $count =  $sth->rowCount();
                if ($count > 0){
                    $message = "&nbsp; E-mail នេះមានរួចហើយ!!!";
                }else{
					
					$data = array(
						's_namekh' => $s_namekh,
						's_nameEn' => $s_nameen,
						'ng_codeurl' => $codeurl,
						'addedby' => $_SESSION['user_id'],
						'ng_code_prefix' => $_POST['idprefix'],
						'ng_licenceid' => $_POST['idnum'],
						'ng_fnamekh' => $_POST['fnamekh'],
						'ng_lnamekh' => $_POST['lnamekh'],
						'ng_fname' => $_POST['fnameen'],
						'ng_lname' => $_POST['lnameen'],
						'ng_gender' => $_POST['gender'],
						'ng_dob' => date("Y-m-d", strtotime($dob)),
						'ng_nationality_id' => $_POST['nationlist'],
						'ng_phone' => $_POST['phone'],
						'ng_pobid' => $_POST['poblist'],
						'ng_locationid' => $_POST['loclist'],
						'ng_langid' => $_POST['langlist'],
						'ng_issued_date' => date("Y-m-d", strtotime($issuedate)),
						'ng_expired_date' => date("Y-m-d", strtotime($exp_date)),
						'ng_certified' => $_POST['guidecert'],
						'cv_provide' => $_POST['cvprovided'],
						'renewal_type' => $_POST['renewaltype'],
						'behaviour_certified' => $_POST['behcert'],
						'guide_type' => $_POST['gtlist'],
						's_email' => $_POST['email'],
						'ng_photo' => $_FILES['ng_photos'],
						);
						
					$file_byfiles = $data['ng_photo'];
					if(!empty($file_byfiles['tmp_name'])){
							$name = $file_byfiles['name'];
							$tmpnm = $file_byfiles['tmp_name'];
							$dir = $dir = 'public/photosguide/'.$name;
							$move = move_uploaded_file($tmpnm, $dir);
					
						$last_id = $this->db->insert('tb_users', array(
							's_nameEn' => $data['s_nameEn'],
							's_namekh' => $data['s_namekh'],
							's_email' => strtolower($data['s_email']),
							'created_by' => $data['addedby'],
							'date_created' => date('Y-m-d'), // use GMT aka UTC 0:00  H:i:s
							's_photo' => $name
							//'su_pass' => Hash::create('sha256', $data['mpassword'], HASH_PASSWORD_KEY),
							));
						$this->db->insert('tb_ng_guide', array(
							'ng_userid' => $last_id,
							'ng_codeurl' => Hash::create('sha256', $data['ng_codeurl'], HASH_PASSWORD_KEY),
							'ng_code_prefix' => $data['ng_code_prefix'],
							'ng_licenceid' => $data['ng_licenceid'],
							'ng_fnamekh' => $data['ng_fnamekh'],
							'ng_lnamekh' => $data['ng_lnamekh'],
							'ng_fname' => $data['ng_fname'],
							'ng_lname' => $data['ng_lname'],
							'ng_gender' => $data['ng_gender'],
							'ng_dob' => date("Y-m-d",strtotime($data['ng_dob'])),
							'ng_nationality_id' => $data['ng_nationality_id'],
							'ng_phone' => $data['ng_phone'],
							'ng_pobid' => $data['ng_pobid'],
							'ng_locationid' => $data['ng_locationid'],
							'ng_langid' => $data['ng_langid'],
							'ng_issued_date' => date("Y-m-d", strtotime($data['ng_issued_date'])),
							'ng_expired_date' => date("Y-m-d", strtotime($data['ng_expired_date'])),
							'ng_certified' => $data['ng_certified'],
							'cv_provide' => $data['cv_provide'],
							'renewal_type' => $data['renewal_type'],
							'behaviour_certified' => $data['behaviour_certified'],
							'guide_type' => $data['guide_type'],
			
							
							'ng_photo' => $name
							));
							
						$result = true;
						$message = "&nbsp; ទិន្នន័យបានរក្សាទុក!";
						return $last_id;
						
					
					}else{
					 $last_id = $this->db->insert('tb_users', array(
							's_nameEn' => $data['s_nameEn'],
							's_namekh' => $data['s_namekh'],
							's_email' => strtolower($data['s_email']),
							'created_by' => $data['addedby'],
							'date_created' => date('Y-m-d') // use GMT aka UTC 0:00  H:i:s
						));
					$this->db->insert('tb_ng_guide', array(
							'ng_userid' => $last_id,
							'ng_codeurl' => Hash::create('sha256', $data['ng_codeurl'], HASH_PASSWORD_KEY),
							'ng_code_prefix' => $data['ng_code_prefix'],
							'ng_licenceid' => $data['ng_licenceid'],
							'ng_fnamekh' => $data['ng_fnamekh'],
							'ng_lnamekh' => $data['ng_lnamekh'],
							'ng_fname' => $data['ng_fname'],
							'ng_lname' => $data['ng_lname'],
							'ng_gender' => $data['ng_gender'],
							'ng_dob' => date("Y-m-d",strtotime($data['ng_dob'])),
							'ng_nationality_id' => $data['ng_nationality_id'],
							'ng_phone' => $data['ng_phone'],
							'ng_pobid' => $data['ng_pobid'],
							'ng_locationid' => $data['ng_locationid'],
							'ng_langid' => $data['ng_langid'],
							'ng_issued_date' => date("Y-m-d", strtotime($data['ng_issued_date'])),
							'ng_expired_date' => date("Y-m-d", strtotime($data['ng_expired_date'])),
							'ng_certified' => $data['ng_certified'],
							'cv_provide' => $data['cv_provide'],
							'renewal_type' => $data['renewal_type'],
							'behaviour_certified' => $data['behaviour_certified'],
							'guide_type' => $data['guide_type']
						));
						$result = true;
						$message = "&nbsp; ទិន្នន័យបានរក្សាទុក!";
							
						return $last_id; 
						  
						
					}
					
				}
			
			
			
		}catch (PDOException $e){echo "Error: " . $e->getMessage();}
		echo json_encode(array('result'=>$result,'message'=>$message));
	}
	
	
	public function userlist()
	{
		return $this->db->select('SELECT name, username FROM user_table WHERE user_id = 1');
	}
    public function depttoedit($deptid)
    {
        return $this->db->select('SELECT * FROM tb_dept WHERE deptid = :deptid',
                    array('deptid' => $deptid));
    }
	public function addDept()
	{
		$result = false;
        $message = "error";
        $deptid = '';
        @$deptid = $_POST['deptid'];
        try{
            if($deptid > 0){
                   $postData = array(
                            'deptname' => $_POST['deptname'],
                            'deptdescription' => $_POST['dept_description']); 
                    $this->db->update('tb_dept', $postData, 
                        "`deptid` = '{$deptid}'");
                        $result = true;
                        $message = "&nbsp;  ព័ត៌មានកែប្រែបានជោគជ័យ!";
            }else{
               $sth = $this->db->prepare("SELECT deptname
                    FROM tb_dept WHERE 
                    deptname = :deptname ");
                $sth->execute(array(
                    ':deptname' => $_POST['deptname']
                ));
                $check = $sth->fetch();

                $count =  $sth->rowCount();
                if ($count > 0){
                    $message = "&nbsp; ដេប៉ាតេម៉ង់ នេះមានរួចហើយ!!!";
                }else{
                    $data = array(
                        'deptname' => $_POST['deptname'],
                        'deptdescription' => $_POST['dept_description']);

                    $this->db->insert('tb_dept', array(
                        'deptname' => $data['deptname'],
                        'deptdescription' => $data['deptdescription']
                    ));
                    $result = true;
                    $message = "&nbsp;  ព័ត៌មានបានរក្សាទុកជោគជ័យ!";
                } 
            }
        }catch (PDOException $e){echo "Error: " . $e->getMessage();}
        echo json_encode(array('result'=>$result,'message'=>$message));
	}
	
	public function ListDepartment()
	{
		return $this->db->select("SELECT * FROM tb_dept ORDER BY deptid DESC");
	}
    
	public function membersview()
	{
		return $this->db->select('SELECT m.yt_m_id, m.yt_m_userid, u.yt_email, m.yt_m_firstnamekh, m.yt_m_lastnamekh, m.yt_m_firstnameen, m.yt_m_lastnameen, m.yt_m_phone, m.yt_m_gender, m.yt_m_dob, m.yt_m_city_id, c.yt_city_name, m.yt_m_reg_date, m.photos, m.POB, m.Curr_occupation, m.From_company_inst, m.major, m.grade_year, m.school_univer, m.Curr_address, m.type_of_group, m.if_other
FROM yt_members m, yt_users u, yt_city c
WHERE m.yt_m_userid = u.yt_userid AND m.yt_m_city_id = c.yt_city_id AND m.yt_m_userid ='.@$_SESSION['yt_userid']);
					//array('yt_m_userid' => Session::get('yt_userid')));//$_SESSION['yt_userid']));
	}
	public function editprofilesave($data)
	{
		$file_byfiles = $data['photos'];
			if(!empty($file_byfiles['tmp_name'])){
				$name = $file_byfiles['name'];
				$tmpnm = $file_byfiles['tmp_name'];
				$dir = $dir = 'public/members/'.$name;
				$move = move_uploaded_file($tmpnm, $dir);

				$postData1 = array(
                    'yt_email' => strtolower($data['memail'])
                );
                $this->db->update('yt_users', $postData1, 
				"`yt_userid` = '{$data['yt_userid']}'");
				
                if(empty($data['if_other'])){
					$postData = array(
	
						'yt_m_firstnamekh' => $data['firstnamekh'],			
						'yt_m_lastnamekh' => $data['lastnamekh'],
						'yt_m_firstnameen' => $data['firstnameen'],			
						'yt_m_lastnameen' => $data['lastnameen'],
						'yt_m_phone' => $data['phonecontact'],
						'yt_m_gender' => $data['mgender'],
						'yt_m_city_id' => $data['city'],
						'yt_m_dob' => date("Y-m-d",strtotime($data['dob'])),
		
						'POB' => $data['POB'],
						'From_company_inst' => $data['From_company_inst'],
						'Curr_occupation' => $data['Curr_occupation'],
						'major' => $data['major'],
						'grade_year' => $data['grade_year'],
						'school_univer' => $data['school_univer'],
						'Curr_address' => $data['Curr_address'],
						'type_of_group' => $data['type_of_group'],
						//'if_other' => $data['if_other'],
						'photos' => $name
						 );
				$this->db->update('yt_members', $postData, 
					"`yt_m_userid` = '{$data['yt_userid']}'");
				}else{
					$postData = array(
	
						'yt_m_firstnamekh' => $data['firstnamekh'],			
						'yt_m_lastnamekh' => $data['lastnamekh'],
						'yt_m_firstnameen' => $data['firstnameen'],			
						'yt_m_lastnameen' => $data['lastnameen'],
						'yt_m_phone' => $data['phonecontact'],
						'yt_m_gender' => $data['mgender'],
						'yt_m_city_id' => $data['city'],
						'yt_m_dob' => date("Y-m-d",strtotime($data['dob'])),
		
						'POB' => $data['POB'],
						'From_company_inst' => $data['From_company_inst'],
						'Curr_occupation' => $data['Curr_occupation'],
						'major' => $data['major'],
						'grade_year' => $data['grade_year'],
						'school_univer' => $data['school_univer'],
						'Curr_address' => $data['Curr_address'],
						'type_of_group' => $data['type_of_group'],
						'if_other' => $data['if_other'],
						'photos' => $name
						 );
				$this->db->update('yt_members', $postData, 
					"`yt_m_userid` = '{$data['yt_userid']}'");
				}
            
		}else{
			
			$postData1 = array(
                    'yt_email' => strtolower($data['memail'])
                );
                $this->db->update('yt_users', $postData1, 
				"`yt_userid` = '{$data['yt_userid']}'");
				
            if(empty($data['if_other'])){
					$postData = array(
	
						'yt_m_firstnamekh' => $data['firstnamekh'],			
						'yt_m_lastnamekh' => $data['lastnamekh'],
						'yt_m_firstnameen' => $data['firstnameen'],			
						'yt_m_lastnameen' => $data['lastnameen'],
						'yt_m_phone' => $data['phonecontact'],
						'yt_m_gender' => $data['mgender'],
						'yt_m_city_id' => $data['city'],
						'yt_m_dob' => date("Y-m-d",strtotime($data['dob'])),
		
						'POB' => $data['POB'],
						'From_company_inst' => $data['From_company_inst'],
						'Curr_occupation' => $data['Curr_occupation'],
						'major' => $data['major'],
						'grade_year' => $data['grade_year'],
						'school_univer' => $data['school_univer'],
						'Curr_address' => $data['Curr_address'],
						'type_of_group' => $data['type_of_group']
						 );
				$this->db->update('yt_members', $postData, 
					"`yt_m_userid` = '{$data['yt_userid']}'");
				}else{
					$postData = array(
	
						'yt_m_firstnamekh' => $data['firstnamekh'],			
						'yt_m_lastnamekh' => $data['lastnamekh'],
						'yt_m_firstnameen' => $data['firstnameen'],			
						'yt_m_lastnameen' => $data['lastnameen'],
						'yt_m_phone' => $data['phonecontact'],
						'yt_m_gender' => $data['mgender'],
						'yt_m_city_id' => $data['city'],
						'yt_m_dob' => date("Y-m-d",strtotime($data['dob'])),
		
						'POB' => $data['POB'],
						'From_company_inst' => $data['From_company_inst'],
						'Curr_occupation' => $data['Curr_occupation'],
						'major' => $data['major'],
						'grade_year' => $data['grade_year'],
						'school_univer' => $data['school_univer'],
						'Curr_address' => $data['Curr_address'],
						'type_of_group' => $data['type_of_group'],
						'if_other' => $data['if_other']
						 );
				$this->db->update('yt_members', $postData, 
					"`yt_m_userid` = '{$data['yt_userid']}'");
				}
        }
	}
}
?>