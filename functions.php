<?php
//this is for database connection
require_once 'connection.php';


if (isset($_GET['gtstate'])) {
      
   
    searchcollegebyfilter();
  
  }
  
  if (isset($_GET['gtcity'])) {
         
  
    searchcollegebyfilter();
  
  }
  
  if (isset($_GET['gtfreerange'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gthostels'])) {
      echo "34342424"; 
    searchcollegebyfilter();
  }

  if (isset($_GET['gtspacialization'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gtdegree'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gtmode'])) {
          
    searchcollegebyfilter();
  
  
  }


  
  if (isset($_GET['gtfacilities'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['institutetype'])) {
          
    searchcollegebyfilter();
  
  
  }
  
  
  

//For new user registration
if (isset($_GET['signup'])) {
    $user = register($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:index.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:sign-up.php');
    }

}

if (isset($_GET['collegesearch'])) {
    $user = searchcollege($_POST);
   return $user;

}

if (isset($_GET['counseler'])) {
    $user = addcounseler($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        $_SESSION['counseler']=$user['counseler'];
        header('location:refer.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:counseler.php');
    }

}
if (isset($_GET['updatecollege'])) {
    $user = updatecollegedetails($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:collegelist.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:update.php');
    }

}
if (isset($_GET['scholership'])) {
    $user = scholership($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:index.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:scholorship.php');
    }


}

if (isset($_GET['addcollege'])) {
   
    $user = addnewCollege($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:addcollege.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:addcollege.php');
    }

}

if (isset($_GET['scholershipparent'])) {
    $user = scholershipparent($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:index.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
       header('location:scholorship_parent.php');
    }

}
//For new user registration
if (isset($_GET['admin_signup'])) {
    $user = adminregister($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:admin_login.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:admin_sign_up.php');
    }

}
//For new admission
if (isset($_GET['admission'])) {
   
    $user = admission($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
       
    } else {
        $_SESSION['msg'] = $user['errors'];
      
    }
    header('location:admission.php');
}
//this is for login
if (isset($_GET['login'])) {
    if ($_POST['email'] == '' || $_POST['password'] == '') {
        $_SESSION['msg'][] = 'All fields are required';

    } else {
        $user = checkUser($_POST);
        if (is_array($user)) {
            $_SESSION['userdata'] = $user;
            $_SESSION['userIsLoggedIn'] = true;
            header('location:index.php');
        } else {
            $_SESSION['msg'][] = 'Incorrect Email/Password !';
            header('location:log-in.php');
        }

    }

}
//this is for contact
if (isset($_GET['contact'])) {
    $user = contactform($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
       
    } else {
        $_SESSION['msg'] = $user['errors'];
      
    }
    header('location:index.php');
    }


//this is for login
if (isset($_GET['adminlogin'])) {
    if ($_POST['email'] == '' || $_POST['password'] == '') {
        $_SESSION['msg'][] = 'All fields are required';

    } else {
        $user = admincheckUser($_POST);
        if (is_array($user)) {
            $_SESSION['userdata'] = $user;
            $_SESSION['userIsLoggedIn'] = true;
            header('location:admin_dashboard.php');
        } else {
            $_SESSION['msg'][] = 'Incorrect Email/Password !';
            header('location:admin_login.php');
        }

    }

}

if (isset($_GET['logout'])) {
    session_destroy();
    header('location:log-in.php');

}
if (isset($_GET['adminlogout'])) {
    session_destroy();
    header('location:admin_login.php');

}
//this is for checking the user
function checkUser($data)
{
    $db = $GLOBALS['db'];
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $password = md5(mysqli_real_escape_string($db, $data['password']));
    $query = "SELECT * FROM users WHERE email_id='$email_id' AND password='$password'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery);

    if ($count > 0) {
        return $user;
    } else {

        return false;
    }
}
//this is for checking the user
function admincheckUser($data)
{
    $db = $GLOBALS['db'];
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $password = md5(mysqli_real_escape_string($db, $data['password']));
    $query = "SELECT * FROM admin_panel WHERE email_id='$email_id' AND password='$password'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery);

    if ($count > 0) {
        return $user;
    } else {

        return false;
    }
}
//this is for checking email
function checkEmail($data)
{
    $db = $GLOBALS['db'];
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $query = "SELECT * FROM users WHERE email_id='$email_id'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
    if (count($user) > 0) {
        return true;
    } else {

        return false;
    }
}
//this is for checking email
function admincheckEmail($data)
{
    $db = $GLOBALS['db'];
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $query = "SELECT * FROM admin_panel WHERE email_id='$email_id'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
    if (count($user) > 0) {
        return true;
    } else {

        return false;
    }
}


//this is for checking the user
function checkRefCode($data)
{
    $db = $GLOBALS['db'];
    $ref_code = mysqli_real_escape_string($db, $data['ref_code']);

    $query = "SELECT * FROM users WHERE user_code='$ref_code'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_all($runQuery) ?? array();
    if (count($user) > 0) {
        return true;
    } else {
        return false;
    }
}

//this id for generate user code
function genUserCode()
{
    $str = "AB1CDE2FG3HI4JK5LM6NO7PQ8RS9TU0VQXYZ" . time();
    $str = str_split($str, 1);
    $l = count($str);
    $user_code = '';
    for ($i = 0; $i < 6; $i++) {
        $tn = rand(0, $l);
        $user_code .= $str[$tn];
    }

    return $user_code;

}

//New User registration
function register($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $full_name = mysqli_real_escape_string($db, $data['name']);
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $password = md5(mysqli_real_escape_string($db, $data['password']));
    $mobile = mysqli_real_escape_string($db, $data['mobile']);
    $cfn_password = mysqli_real_escape_string($db, $data['cfn_password']);

   
    if(count($user['errors'])<1){
    $user_code =""; 
    $query="INSERT INTO users(full_name,email_id,password,ref_code,user_code,mobile,created) ";
    $query.="VALUES('$full_name','$email_id','$password','','$user_code','$mobile','$created')";
    $runQuery = mysqli_query($db,$query);
  
    $query1="SELECT * FROM users WHERE email_id='$email_id' AND password='$password'";
    $runQuery1=mysqli_query($db,$query1);
    $user=mysqli_fetch_array($runQuery1,MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery1);
         
        if($count>0)  {
            $_SESSION['userdata']=$user;
        }


    $_SESSION['userIsLoggedIn']=true;
    if($runQuery){
        $user['success']="user is created successfully !";

        
    }else{
        $user['errors'][]="Something went wrong !";
    }
    }
   return $user;
   
    
}
 
function totaluser(){

    $db=$GLOBALS['db'];
    $query="SELECT count(*) as total FROM users ";
    $runQuery=mysqli_query($db,$query);
    $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
   
   
    return $user;  
}
function getcollege($id){
   $db=$GLOBALS['db'];
   
   $query="SELECT c.*,af.*,ap.*,co.*,s.*,ct.* FROM college c join affiliation af on af.id=c.affiliated_id
 join   Approval ap on ap.id= c.approvel_id 
 join   Courses co on co.id= c.course_id
 join State s on s.id=c.state_id 
 join   Collage_type ct on ct.id=c.collage_type_id  ";
  
  $runQuery=mysqli_query($db,$query);
   $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
   
   
    return $user;   
}
function countrylist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM Country ";
    $runQuery=mysqli_query($db,$query);
    $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
   
   
    return $user;  
}
function statelist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM State ";
    $runQuery=mysqli_query($db,$query);
    
   
   
    return $runQuery;  
}
function citylist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM City ";
    $runQuery=mysqli_query($db,$query);
    
    return  $runQuery;  
}
function getCollegetype(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM Collage_type ";
    $runQuery=mysqli_query($db,$query);
    
    return $runQuery;  
}
function Agenceylist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM Agencey ";
    $runQuery=mysqli_query($db,$query);
    
    return  $runQuery;  
}
function Approvallist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM Approval ";
    $runQuery=mysqli_query($db,$query);
   
    return  $runQuery;  
}
function affiliationlist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM affiliation ";
    $runQuery=mysqli_query($db,$query);
   
    return $runQuery;  
}
function Courseslist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM Courses ";
    $runQuery=mysqli_query($db,$query);
    
    return $runQuery;  
}
function getuserlist(){

    $db=$GLOBALS['db'];
    $query="SELECT full_name, email_id, mobile ,created FROM  users  ";
    $runQuery=mysqli_query($db,$query);
   // $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
   
   
    return $runQuery;  
}

function scholershiplist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM Scholorship";
    $runQuery=mysqli_query($db,$query);
   // $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
   
   
    return $runQuery;  
}

function collegelist(){

    $db=$GLOBALS['db'];
    $query="SELECT c.*,af.affiliation_name,ap.approval_name	,co.course_name,s.state_name,ct.type FROM college c join affiliation af on af.id=c.affiliated_id
  join   Approval ap on ap.id= c.approvel_id 
  join   Courses co on co.id= c.course_id
  join State s on s.id=c.state_id 
  join   Collage_type ct on ct.id=c.collage_type_id order by c.id";
  
    $runQuery=mysqli_query($db,$query);
  
     return $runQuery;  
}

function getCollegeGroupByCategoury(){
    $db=$GLOBALS['db'];
    $query ="SELECT s.stream_name, COUNT(c.id) as count
    FROM college c
    join Courses cs on cs.id = c.course_id
    join sub_stream ss on ss.id = cs.sub_stream_id
    join Stream s on s.id = ss.stream_id
    GROUP BY s.stream_name";

    $runQuery = mysqli_query($db,$query);
    $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
    return $runQuery;
}
function getCollegeByCategoury($data){
    $db=$GLOBALS['db'];
    $query ="SELECT s.stream_name, c.*,ss.sub_stream_name,cs.course_name,st.state_name,
    af.affiliation_name,ap.approval_name,cty.type,ct.city_name
    FROM college c
    join Courses cs on cs.id = c.course_id
    join sub_stream ss on ss.id = cs.sub_stream_id
    join State st on st.id = c.state_id
    join Stream s on s.id = ss.stream_id
    join affiliation af on af.id= c.affiliated_id
    join Approval ap on ap.id = c.approvel_id
    join Collage_type cty on cty.id = c.collage_type_id
    join City ct on ct.id = c.city_id
   
    where  s.stream_name ='$data' ";

   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}


function searchcollege($data){
    
    $db=$GLOBALS['db'];
    $q= mysqli_real_escape_string($db, $data['term']);
    
    
    $query="SELECT c.*,af.affiliation_name,ap.approval_name	,co.course_name,s.state_name,ct.type FROM college c 
    join   Collage_type ct on ct.id=c.collage_type_id 
    where c.collage_name ='$q' or af.affiliation_name ='$q' or ap.approval_name ='$q' or co.course_name='$q' or s.state_name='$q' or ct.type='$q' ";

    $runQuery=mysqli_query($db,$query);

   return $runQuery;  


}
function totalscholershipapplied(){

    $db=$GLOBALS['db'];
    $query="SELECT count(*) as total FROM Scholorship ";
    $runQuery=mysqli_query($db,$query);
    $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
   
   
    return $user;  
}

function totalcollege(){

    $db=$GLOBALS['db'];
    $query="SELECT count(*) as total FROM college ";
    $runQuery=mysqli_query($db,$query);
    $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
   
   
    return $user;  
}
 function counslerlist(){
    $db=$GLOBALS['db'];
    $query="SELECT * FROM counsler";
    $runQuery=mysqli_query($db,$query);
   // $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
   
   
    return $runQuery;  
 }


    function getRefList($data){
        $db=$GLOBALS['db'];
        $ref_code=$data['ref_code'];
        $query="SELECT * FROM users WHERE ref_code='$ref_code'";
        $runQuery=mysqli_query($db,$query);
        $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ?? array();
        return $user;
        
    }
   



//this is for password matching
function passwordMatch($data)
{

    $password = ($data['password']);
    $cfnpassword = $data['cfn_password'];

    if ($password == $cfnpassword) {
        return true;
    } else {
        return false;
       
    }
}


    function passwordCheck ($data){
        $password=($data['password']);
       
        if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,12}$/', $password))  {
            return true;
        }else{
            return false;
        }
        }
//to get refered uer list
        function getRefUserList($data){
            $db=$GLOBALS['db'];
            $ref_code=$data;
            $query="SELECT * FROM users WHERE ref_code='$ref_code'";
            $runQuery=mysqli_query($db,$query);
            $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ?? array();
            return $user;
            
        }


//New User registration
function admission($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $full_name = mysqli_real_escape_string($db, $data['fullname']);
    $mobilenumber = mysqli_real_escape_string($db, $data['mobilenumber']);
    $emailid = md5(mysqli_real_escape_string($db, $data['emailid']));
    $fathername = mysqli_real_escape_string($db, $data['fathername']);
    $fathermobilenumber = mysqli_real_escape_string($db, $data['fathermobilenumber']);
    $tenpercentages = mysqli_real_escape_string($db, $data['10thpercentages']);
    $twelvethpercentages = mysqli_real_escape_string($db, $data['12thpercentages']);
    $graduationpercentages = mysqli_real_escape_string($db, $data['graduationpercentages']);
    $selectcourse = mysqli_real_escape_string($db, $data['selectcourse']);
    $specilization = mysqli_real_escape_string($db, $data['specilization']);
    $selectcollege = mysqli_real_escape_string($db, $data['selectcollege']);
    $permanentaddress = mysqli_real_escape_string($db, $data['permanentaddress']);
    $city = mysqli_real_escape_string($db, $data['city']);
    $pincode = mysqli_real_escape_string($db, $data['pincode']);
 
    if ($full_name == '' || $mobilenumber == '' || $emailid == '' || $fathername == '' || $fathermobilenumber == '' || $tenpercentages == ''|| $twelvethpercentages == ''|| $graduationpercentages == ''|| $selectcourse == ''|| $specilization == ''|| $selectcollege == ''|| $permanentaddress == ''|| $city == ''|| $pincode == ''){
        $user['errors'][] = "all fields are required !";
    }
    
    $query="INSERT INTO admission(full_name,student_mobile_name,email_id,fathe_name,father_mobile_number,10th_percentage,12t_percentage,graduation_percentage,select_course,specialization,select_college,permanent_address,city,pin_code,created) ";

    $query.="VALUES('$full_name','$mobilenumber','$emailid','$fathername','$fathermobilenumber','$tenpercentages','$twelvethpercentages','$graduationpercentages',
    '$selectcourse','$specilization','$selectcollege','$permanentaddress','$city','$pincode','$created')";
    echo  $query;
    $runQuery = mysqli_query($db,$query);
    
   
    if($runQuery){
        $user['success']="5 form submitted successfuly!";

        
    }else{
        $user['errors'][]="Something went wrong !";
    }
   
   return $user;
   
    
}
 //New User registration
function adminregister($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $name = mysqli_real_escape_string($db, $data['name']);
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $password = md5(mysqli_real_escape_string($db, $data['password']));
    $role = mysqli_real_escape_string($db, $data['role']);
    
    

    if ($name == '' || $email_id == '' || $password == '' || $role == '' ) {
        $user['errors'][] = "all fields are required !";
    }
    
    if (admincheckEmail($data)) {
        $user['errors'][] = "User already exists";
    
    
    }
    if(count($user['errors'])<1){
    $user_code = genUserCode(); 
    $query="INSERT INTO admin_panel(admin_name,email_id,password,role,created) ";
    $query.="VALUES('$name','$email_id','$password','$role','$created')";
    $runQuery = mysqli_query($db,$query);
    
    

    
    if($runQuery){
        $user['success']="user is created successfully !";

        
    }else{
        $user['errors'][]="Something went wrong !";
    }
    }
   return $user;
   
    
}
   //New User registration
function scholership($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $name = mysqli_real_escape_string($db, $data['fullname']);
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $password = md5(mysqli_real_escape_string($db, $data['password']));
    $mobile = mysqli_real_escape_string($db, $data['mobile']);
    $admission = mysqli_real_escape_string($db, $data['admission']);
    $hspersentage = mysqli_real_escape_string($db, $data['hspersentage']);
    $collegeName = mysqli_real_escape_string($db, $data['collegeName']);
    $courese = mysqli_real_escape_string($db, $data['courese']);
    

    if ($name == '' || $email_id == '' || $password == '' || $mobile == ''
    || $admission == '' || $hspersentage == '' || $collegeName == '' || $courese == '' ) {
        $user['errors'][] = "all fields are required !";
    }
   
    if (!checkStudent($data)) {
        $user['errors'][] = "Invalid emailid or password";
    
    }
   
    if(count($user['errors'])<1){
       
        $query="INSERT INTO Scholorship
        (fullname,email,password,mobile,admissionid,hspersentage,collegename,coursename,created) ";
        $query.="VALUES('$name','$email_id','$password','$mobile','$admission','$hspersentage','$collegeName','$courese','$created')";
       
        $runQuery = mysqli_query($db,$query);
        
        if($runQuery){
          $user['success']="Scholership form submitted successfully !";
    
            
        }else{
           $user['errors'][]="Something went wrong !";
        }
    }
   return $user;
   
    
}

function scholershipparent($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $fathername = mysqli_real_escape_string($db, $data['fathername']);
    $fatheroccupation = mysqli_real_escape_string($db, $data['fatheroccupation']);
    $mobile = md5(mysqli_real_escape_string($db, $data['mobile']));
    $mothername = mysqli_real_escape_string($db, $data['mothername']);
    $motheroccupation = mysqli_real_escape_string($db, $data['motheroccupation']);
    $address = mysqli_real_escape_string($db, $data['address']);
    $pin = mysqli_real_escape_string($db, $data['pin']);
   

    if ($fathername == '' || $fatheroccupation == '' || $mobile == '' || $mothername == ''
    || $motheroccupation == '' || $address == '' || $pin == '') {
        $user['errors'][] = "all fields are required !";
    }
   
   
   
    if(count($user['errors'])<1){
       
        $query="INSERT INTO parent_scholorship
        (fathername,fatheroccupation,mobile,mothername,motheroccupation,address,pincode,created) ";
        $query.="VALUES('$fathername','$fatheroccupation','$mobile','$mothername','$motheroccupation','$address','$pin','$created')";
       
        $runQuery = mysqli_query($db,$query);
        
        if($runQuery){
          $user['success']="Scholership form submitted successfully !";
    
            
        }else{
           $user['errors'][]="Something went wrong !";
        }
    }
   return $user;
   
    
}

function checkStudent($data)
{
    $db = $GLOBALS['db'];
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $password = md5(mysqli_real_escape_string($db, $data['password']));
    $query = "SELECT * FROM users WHERE email_id='$email_id'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
   
    if (count($user) > 0) {
       $chk = strcmp($password,$user[0]['password']); 
       
       if($chk != 0){
       return false;
       }
       else {
          return true;
       }
    } 
    else{
       return false;
    }
}

//New college addition
function addnewCollege($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $collage_name = mysqli_real_escape_string($db, $data['collage_name']);
    $state_id = mysqli_real_escape_string($db, $data['state_id']);
    $Collage_type = mysqli_real_escape_string($db, $data['Collage_type']);
    $approvel_id = mysqli_real_escape_string($db, $data['approvel_id']);
    $affiliated_id = mysqli_real_escape_string($db, $data['affiliated_id']);
    $course_id = mysqli_real_escape_string($db, $data['course_id']);
    $gender = mysqli_real_escape_string($db, $data['gender']);
    
    if ($collage_name == '' || $state_id == '' || $Collage_type == '' || $approvel_id == '' ||
     $affiliated_id == '' || $course_id == '' || $gender == '') {
        $user['errors'][] = "all fields are required !";
    }
    
    
    $query="INSERT INTO college(collage_name,state_id,collage_type_id,approvel_id,
    affiliated_id,course_id,gender,created,updated) ";
    $query.="VALUES('$collage_name','$state_id','$Collage_type','$approvel_id',
    '$affiliated_id','$course_id','$gender','$created','$created')";
    echo $query;
    $runQuery = mysqli_query($db,$query);
    
    

    
    if($runQuery){
        $user['success']="college added successfully !";

        
    }else{
        $user['errors'][]="Something went wrong !";
    }
   
   return $user;
   
    
}


//updatecollege 
function updatecollegedetails($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $collage_name = mysqli_real_escape_string($db, $data['collage_name']);
    $state_id = mysqli_real_escape_string($db, $data['state_id']);
    $Collage_type = mysqli_real_escape_string($db, $data['Collage_type']);
    $approvel_id = mysqli_real_escape_string($db, $data['approvel_id']);
    $affiliated_id = mysqli_real_escape_string($db, $data['affiliated_id']);
    $course_id = mysqli_real_escape_string($db, $data['course_id']);
    $gender = mysqli_real_escape_string($db, $data['gender']);
    $id = mysqli_real_escape_string($db, $data['id']);
    
    if ($collage_name == '' || $state_id == '' || $Collage_type == '' || $approvel_id == '' ||
     $affiliated_id == '' || $course_id == '' || $gender == '') {
        $user['errors'][] = "all fields are required !";
    }
    
    
    $query="update  college set
    collage_name='$collage_name',state_id='$state_id',collage_type_id='$Collage_type',approvel_id='$approvel_id',
    affiliated_id='$affiliated_id',course_id='$course_id',gender='$gender',updated='$created' Where id='$id'";
    
    echo $query;
    $runQuery = mysqli_query($db,$query);
    
    

    
    if($runQuery){
        $user['success']="college added successfully !";

        
    }else{
        $user['errors'][]="Something went wrong !";
    }
   
   return $user;
   
    
}



function addcounseler($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $name = mysqli_real_escape_string($db, $data['name']);
    $email = mysqli_real_escape_string($db, $data['email']);
    $dateofbirth = mysqli_real_escape_string($db, $data['dateofbirth']);
    $gender = mysqli_real_escape_string($db, $data['gender']);
    $laguage = mysqli_real_escape_string($db, $data['laguage']);
    $Preferred = mysqli_real_escape_string($db, $data['Preferred']);
    $workSchedule = mysqli_real_escape_string($db, $data['workSchedule']);
    $salary = mysqli_real_escape_string($db, $data['salary']);
    $code =  genUserCode();
    if ($name == '' || $email == '' || $dateofbirth == ''
     || $gender == '' ||
     $laguage == '' || $Preferred == '' || $workSchedule == '' || $salary == '') {
        $user['errors'][] = "all fields are required !";
    }
    
    
    $query="INSERT INTO counsler(fullname,email,dob,gender,
    	language,preferedlanguage,workschedule,created,salary,refercode) ";
    $query.="VALUES('$name','$email','$dateofbirth','$gender','$laguage',
    '$Preferred','$workSchedule','$created','$salary','$code')";
    echo $query;
    
    $runQuery = mysqli_query($db,$query);
    
    

    
    if($runQuery){
        $user['counseler']=$code;
        echo $code;
        $user['success']="Counseler added successfully !";

        
    }else{
        $user['errors'][]="Something went wrong !";
    }
   
   return $user;
   
    
}
  //New User registration
  function contactform($data)
  {
      $db = $GLOBALS['db'];
      $user = array();
      $user['errors'] = array();
      $created = date("Y-m-d h:i:s");
      $name = mysqli_real_escape_string($db, $data['name']);
      $email_id = mysqli_real_escape_string($db, $data['email']);
      $mobile = (mysqli_real_escape_string($db, $data['mobile']));
      $state = mysqli_real_escape_string($db, $data['state']);
      $city = mysqli_real_escape_string($db, $data['city']);
      $course = mysqli_real_escape_string($db, $data['course']);
      $message = mysqli_real_escape_string($db, $data['message']);
      
      
  
      if ($name == '' || $email_id == '' || $mobile == '' || $state == ''
      || $city == '' || $course == '' || $message == ''  ) {
          $user['errors'][] = "all fields are required !";
      }
     
      
         
          $query="INSERT INTO contact
          (name,email,mobile,state,city,course,messages) ";
           $query.="VALUES('$name','$email_id','$mobile','$state','$city','$course','$message')";
         echo $query;
          $runQuery = mysqli_query($db,$query);
          
          if($runQuery){
            $user['success']="Scholership form submitted successfully !";
      
              
          }else{
             $user['errors'][]="Something went wrong !";
          }
      
     return $user;
     
      
  }

  function getTopCollege($data){
    $db=$GLOBALS['db'];
    $query ="SELECT s.stream_name, c.*,ss.sub_stream_name,cs.course_name,st.state_name,
    af.affiliation_name,ap.approval_name,ct.city_name,a.agencey_name,re.review,r.rating
    FROM college c
    join Courses cs on cs.id = c.course_id
    join sub_stream ss on ss.id = cs.sub_stream_id
    join State st on st.id = c.state_id
    join Stream s on s.id = ss.stream_id
    join affiliation af on af.id= c.affiliated_id
    join Approval ap on ap.id = c.approvel_id
    join City ct on ct.id = c.city_id
    join college_agencey ag on ag.college_id = c.id
    join Agencey a on a.id =ag.agencey_id
    join Reviews re on re.collage_id = c.id
    join rating r on r.collage_id = c.id";
   
    

   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}

function getCollegelist($data){
    $db=$GLOBALS['db'];
    $query ="SELECT s.stream_name, c.*,ss.sub_stream_name,cs.course_name,st.state_name,
    af.affiliation_name,ap.approval_name,ct.city_name
    FROM college c
    join Courses cs on cs.id = c.course_id
    join sub_stream ss on ss.id = cs.sub_stream_id
    join State st on st.id = c.state_id
    join Stream s on s.id = ss.stream_id
    join affiliation af on af.id= c.affiliated_id
    join Approval ap on ap.id = c.approvel_id
    join City ct on ct.id = c.city_id

   
    where  s.stream_name ='$data' ";

   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}


function searchcollegebyfilter(){
    
    $db=$GLOBALS['db'];
   $state=$_COOKIE["state"];
   $city =$_COOKIE["city"];
   $mode=$_COOKIE["study"];
   $type=$_COOKIE["type"];
echo $state;
echo $city;
echo $mode;
echo $type;
   $query="SELECT c.*,af.affiliation_name,ap.approval_name	,co.course_name,s.state_name,ct.type FROM college c 
   join affiliation af on af.id=c.affiliated_id
   join   Approval ap on ap.id= c.approvel_id 
   join   Courses co on co.id= c.course_id
   join   State s on s.id=c.state_id 
   join   Collage_type ct on ct.id=c.collage_type_id 
   join City cy on cy.id = c.city_id
   where  " ;
if($state && !$city && !$type){
   
    $query.="s.state_name='$state'";
}
if(!$state && $city  && !$type){
    
    $query.="cy.city_name='$city'";
}

if(!$state && !$city  && $type){
   
    $query.="ct.type='$type'";
}
if($state && $city  && !$type){
   
    $query.="s.state_name='$state' and cy.city_name='$city'";
}
if($state && !$city  && $type){
   
    $query.="s.state_name='$state' and ct.type='$type'";
}
if(!$state && $city  && $type){
 
    $query.="cy.city_name='$city' and ct.type='$type'";
}
if($state && $city  && $type){
 
    $query.="cy.city_name='$city' and ct.type='$type' and s.state_name='$state'";
}

echo $query;
    $runQuery=mysqli_query($db,$query);

    $row =mysqli_fetch_all($runQuery,MYSQLI_ASSOC);

print_r( $row );
}
  ?>
