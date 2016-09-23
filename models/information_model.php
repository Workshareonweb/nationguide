<?php
class Information_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
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
    
    public function addEditPosition()
	{
		$result = false;
        $message = "error";
        $posid = '';
        @$posid = $_POST['posid'];
        try{
            if($posid > 0){
                   $postData = array(
                            'pos_name' => $_POST['posname'],
                            'pos_des' => $_POST['pos_description']); 
                    $this->db->update('tb_position', $postData, 
                        "`pos_id` = '{$posid}'");
                        $result = true;
                        $message = "&nbsp;  ព័ត៌មានកែប្រែបានជោគជ័យ!";
            }else{
               $sth = $this->db->prepare("SELECT pos_name
                    FROM tb_position WHERE 
                    pos_name = :posname ");
                $sth->execute(array(
                    ':posname' => $_POST['posname']
                ));
                $check = $sth->fetch();

                $count =  $sth->rowCount();
                if ($count > 0){
                    $message = "&nbsp; មុខតំណែងមួយ នេះមានរួចហើយ!!!";
                }else{
                    $data = array(
                        'pos_name' => $_POST['posname'],
                        'pos_des' => $_POST['pos_description']);

                    $this->db->insert('tb_position', array(
                        'pos_name' => $data['pos_name'],
                        'pos_des' => $data['pos_des']
                    ));
                    $result = true;
                    $message = "&nbsp;  ព័ត៌មានបានរក្សាទុកជោគជ័យ!";
                } 
            }
        }catch (PDOException $e){echo "Error: " . $e->getMessage();}
        echo json_encode(array('result'=>$result,'message'=>$message));
	}
    public function ListPosition()
    {
        return $this->db->select('SELECT * FROM tb_position ORDER BY pos_id DESC');
    }
    public function jobpostoedit($pos_id)
    {
        return $this->db->select('SELECT * FROM tb_position WHERE pos_id = :pos_id',
                    array('pos_id' => @$pos_id));
    }
    
    public function Listtimework()
    {
        return $this->db->select('SELECT * FROM tb_timework ORDER BY tw_id DESC');
    }
    public function twtoEdit($tw_id)
    {
        return $this->db->select('SELECT * FROM tb_timework WHERE tw_id = :tw_id',
                    array('tw_id' => @$tw_id));
    }
    public function addEditTimework()
	{
		$result = false;
        $message = "error";
        $tw_id = '';
        @$tw_id = $_POST['twid'];
        try{
            if($tw_id > 0){
                   $postData = array(
                            'tw_time' => $_POST['txttw'],
                            'tw_des' => $_POST['tw_description']); 
                    $this->db->update('tb_timework', $postData, 
                        "`tw_id` = '{$tw_id}'");
                        $result = true;
                        $message = "&nbsp;  ព័ត៌មានកែប្រែបានជោគជ័យ!";
            }else{
               $sth = $this->db->prepare("SELECT tw_time
                    FROM tb_timework WHERE 
                    tw_time = :tw_time ");
                $sth->execute(array(
                    ':tw_time' => $_POST['txttw']
                ));
                $check = $sth->fetch();

                $count =  $sth->rowCount();
                if ($count > 0){
                    $message = "&nbsp; ម៉ោងការងារ នេះមានរួចហើយ!!!";
                }else{
                    $data = array(
                        'tw_time' => $_POST['txttw'],
                        'tw_des' => $_POST['tw_description']);

                    $this->db->insert('tb_timework', array(
                        'tw_time' => $data['tw_time'],
                        'tw_des' => $data['tw_des']
                    ));
                    $result = true;
                    $message = "&nbsp;  ព័ត៌មានបានរក្សាទុកជោគជ័យ!";
                } 
            }
        }catch (PDOException $e){echo "Error: " . $e->getMessage();}
        echo json_encode(array('result'=>$result,'message'=>$message));
	}
    public function Listjobtype()
    {
        return $this->db->select('SELECT * FROM tb_jobtype ORDER BY job_id DESC');
    }
    public function addEditjb()
	{
		$result = false;
        $message = "error";
        $job_id = '';
        @$job_id = $_POST['jobid'];
        try{
            if($job_id > 0){
                   $postData = array(
                            'job_name' => $_POST['jobname'],
                            'job_des' => $_POST['job_description']); 
                    $this->db->update('tb_jobtype', $postData, 
                        "`job_id` = '{$job_id}'");
                        $result = true;
                        $message = "&nbsp;  ព័ត៌មានកែប្រែបានជោគជ័យ!";
            }else{
               $sth = $this->db->prepare("SELECT job_name
                    FROM tb_jobtype WHERE 
                    job_name = :jobname ");
                $sth->execute(array(
                    ':jobname' => $_POST['jobname']
                ));
                $check = $sth->fetch();

                $count =  $sth->rowCount();
                if ($count > 0){
                    $message = "&nbsp; ប្រភេទការងារ នេះមានរួចហើយ!!!";
                }else{
                    $data = array(
                        'job_name' => $_POST['jobname'],
                        'job_des' => $_POST['job_description']);

                    $this->db->insert('tb_jobtype', array(
                        'job_name' => $data['job_name'],
                        'job_des' => $data['job_des']
                    ));
                    $result = true;
                    $message = "&nbsp;  ព័ត៌មានបានរក្សាទុកជោគជ័យ!";
                } 
            }
        }catch (PDOException $e){echo "Error: " . $e->getMessage();}
        echo json_encode(array('result'=>$result,'message'=>$message));
	}
    public function jbtoEdit($job_id)
    {
        return $this->db->select('SELECT * FROM tb_jobtype WHERE job_id = :job_id',
                    array('job_id' => @$job_id));
    }
    public function ListDayofWork()
    {
        return $this->db->select('SELECT * FROM tb_dayofwork ORDER BY dowid DESC');
    }
    public function addEditdow()
	{
		$result = false;
        $message = "error";
        $dow_id = '';
        @$dow_id = $_POST['dowid'];
        try{
            if($dow_id > 0){
                   $postData = array(
                            'dow_name' => $_POST['txtdow'],
                            'dow_des' => $_POST['dow_description']); 
                    $this->db->update('tb_dayofwork', $postData, 
                        "`dowid` = '{$dow_id}'");
                        $result = true;
                        $message = "&nbsp;  ព័ត៌មានកែប្រែបានជោគជ័យ!";
            }else{
               $sth = $this->db->prepare("SELECT dow_name
                    FROM tb_dayofwork WHERE 
                    dow_name = :downame ");
                $sth->execute(array(
                    ':downame' => $_POST['txtdow']
                ));
                $check = $sth->fetch();

                $count =  $sth->rowCount();
                if ($count > 0){
                    $message = "&nbsp; ថ្ងៃបំពេញការងារ នេះមានរួចហើយ!!!";
                }else{
                    $data = array(
                        'dow_name' => $_POST['txtdow'],
                        'dow_des' => $_POST['dow_description']);

                    $this->db->insert('tb_dayofwork', array(
                        'dow_name' => $data['dow_name'],
                        'dow_des' => $data['dow_des']
                    ));
                    $result = true;
                    $message = "&nbsp;  ព័ត៌មានបានរក្សាទុកជោគជ័យ!";
                } 
            }
        }catch (PDOException $e){echo "Error: " . $e->getMessage();}
        echo json_encode(array('result'=>$result,'message'=>$message));
	}
    public function dowtoEdit($dowid)
    {
        return $this->db->select('SELECT * FROM tb_dayofwork WHERE dowid = :dowid',
                    array('dowid' => @$dowid));
    }
    
	//page login
	public function run()
	{
		$sth = $this->db->prepare("SELECT yt_userid, yt_mroleid
				FROM yt_users WHERE 
				yt_email = :login AND yt_password = :password AND yt_user_status = 1");
		$sth->execute(array(
			':login' => $_POST['username'],
			':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
		));
		$data = $sth->fetch();
		
		$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
			Session::set('yt_mroleid', $data['yt_mroleid']);
			Session::set('loggedIn', true);
			Session::set('yt_userid', $data['yt_userid']);
			
			if((Session::get('yt_mroleid'))== 1)
			{
				//header('location: ../administrators/');
                echo "Superadmin";
			}
			if((Session::get('yt_mroleid'))== 2)
			{
				//header('location: ../administrators/');
                echo "admin";
			}
			if((Session::get('yt_mroleid'))== 3)
			{
				//header('location: ../home/');
                echo "partner";
			}
			if((Session::get('yt_mroleid'))== 4)
			{
				//header('location: ../home/');
                echo "member";
			}
		} else {
			//header('location: ../pages/trylogin');
		}
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