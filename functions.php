<?php
//this is for database connection
require_once 'connection.php';


  
//For new user registration
if (isset($_GET['kyc'])) {
    unset($_SESSION['msg']);

   
   $user =  addkyc($_POST,$_FILES);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:kyc.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:kyc.php');
    }

}
 //applynow 

 if (isset($_GET['applynow'])) {
    unset($_SESSION['msg']);

   
   $user =  applynow($_POST);
    // if (isset($user['success'])) {
    //     $_SESSION['msg'][] = $user['success'];
    //     header('location:collegepage.php');
    // } else {
    //     $_SESSION['msg'] = $user['errors'];
    //     header('location:collegepage.php');
    // }

}


if ($_GET['fn'] == "kycupdate")
{
    if (!empty($_GET['id']))
    {
         $db = $GLOBALS['db'];
        $id=$_GET['id'];
  $type=$_GET['status'];
    echo $id;
     $query = "update  counsler_kyc set status='$type' WHERE counslerid = $id ";
   echo $query; 
    $runQuery = mysqli_query($db, $query);
    
     header("location:counselerdetails.php?id=".$id);
    
    }
}


//For new user registration
if (isset($_GET['signup'])) {
    unset($_SESSION['msg']);
    $user = register($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:index.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:sign-up.php');
    }

}

//For new user registration
if (isset($_GET['addreferal'])) {
    unset($_SESSION['msg']);
    $user = addreferal($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:counslerlist.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:addreferal.php');
    }

}
if (isset($_GET['collegesearch'])) {
    $user = searchcollege($_POST);
   return $user;

}

if (isset($_GET['counseler'])) {
    unset($_SESSION['msg']);
    $user = addcounseler($_POST);

    if (isset($user['success']) && is_array($user)) {
        $_SESSION['msg'][] = $user['success'];
        $_SESSION['counseler']=$user['counseler'];
        
            $_SESSION['userdata'] = $user;
            $_SESSION['userIsLoggedIn'] = true;
            header('location:referandearnsharecode.php');
       
       
    } else {
        $_SESSION['msg'] = $user['errors'];
       header('location:counselerForm.php');
    }

}

if (isset($_GET['updatecollege'])) {
    unset($_SESSION['msg']);
   // echo "00000";
    $user = updatecollegedetails($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:collegelist.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:update.php');
    }

}
if (isset($_GET['collegeblog'])) {
    unset($_SESSION['msg']);
    echo "00000";
    $user = addcollegeblog($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:college_blog.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
        header('location:college_blog.php');
    }

}




if (isset($_GET['scholership'])) {
    unset($_SESSION['msg']);
    $user = scholership($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
        header('location:index.php');
    } else {
        $_SESSION['msg'] = $user['errors'];
       header('location:scholership.php');
    }


}

if (isset($_GET['addcollege'])) {
    unset($_SESSION['msg']);
  
    $user = addnewCollege($_POST,$_FILES);
//     if (isset($user['success'])) {
//         $_SESSION['msg'][] = $user['success'];
//         echo 'asasasa';
       
//     } else {
//         $_SESSION['msg'] = $user['errors'];
//         echo 'errrrr';
        
//     }
// echo 'lllllllllll';
header("location:collegelist.php");
exit();
}

if (isset($_GET['scholershipparent'])) {
    unset($_SESSION['msg']);
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
    unset($_SESSION['msg']);
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
    
    unset($_SESSION['msg']);
    $user = admission($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
       
    } else {
        $_SESSION['msg'] = $user['errors'];
      
    }
    header('location:admission.php');
}

if (isset($_GET['student'])) {
    
    unset($_SESSION['msg']);
    $user = admission($_POST);
    if (isset($user['success'])) {
        $_SESSION['msg'][] = $user['success'];
       
    } else {
        $_SESSION['msg'] = $user['errors'];
      
    }
    header('location:addstudent.php');
}
//this is for login
if (isset($_GET['login'])) {
    unset($_SESSION['msg']);
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

          
if (isset($_GET['counselerlogin'])) {
    unset($_SESSION['msg']);
    if ($_POST['email'] == '' || $_POST['password'] == '') {
        $_SESSION['msg'][] = 'All fields are required';

    } else {
        $user = checkCounselerdata($_POST);
        if (is_array($user)) {
            $_SESSION['userdata'] = $user;
            $_SESSION['userIsLoggedIn'] = true;
            header('location:referandearnsharecode.php');
        } else {
            $_SESSION['msg'][] = 'Incorrect Email/Password !';
            header('location:counselerlog-in.php');
        }

    }

}



//this is for contact
if (isset($_GET['contact'])) {
    unset($_SESSION['msg']);
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
    unset($_SESSION['msg']);
    if ($_POST['email'] == '' || $_POST['password'] == '') {
        $_SESSION['msg'][] = 'All fields are required';

    } else {
        $user = admincheckUser($_POST);
        if (is_array($user)) {
            $_SESSION['userdata'] = $user;
            $_SESSION['adminIsLoggedIn'] = true;
            header('location:admin_dashboard.php');
        } else {
            $_SESSION['msg'][] = 'Incorrect Email/Password !';
            header('location:admin_login.php');
        }

    }

}

if (isset($_GET['logout'])) {
    session_destroy();
    header('location:index.php');

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

    function checkcounsler($data)
{
    $db = $GLOBALS['db'];
    $email_id = $data;
    // $password = md5(mysqli_real_escape_string($db, $data['password']));
    $query = "SELECT * FROM counsler WHERE email_id='$email_id'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery);

    if ($count > 0) {
        return true;
    } else {

        return false;
    }
}

function  getCollegeByCourse($term){
    echo "dhfkjdsfkhsdf";
    echo $term;
   $db=$GLOBALS['db'];
   $query ="SELECT s.specialization_name, c.*,s.specialization_name,ds.degree_name,st.state_name,
   af.affiliation_name,ap.approval_name,cty.type,ct.city_name
   FROM college c
   INNER JOIN college_degree cd on cd.college_id=c.id 
    INNER JOIN Degree ds on ds.id = cd.degree_id 
    INNER JOIN college_specilization cs on cs.college_id= c.id 
    INNER JOIN Spacialization s on s.id = cs.specilization_id 
    INNER JOIN college_stream cst on cst.college_id= c.id 
    INNER JOIN stream sm on sm.id = cst.stream_id 
    INNER JOIN State st on st.id = c.state_id
    INNER JOIN affiliation af on af.id= c.affiliated_id
    INNER JOIN Approval ap on ap.id = c.approvel_id
    INNER JOIN Collage_type cty on cty.id = c.collage_type_id
    INNER JOIN City ct on ct.id = c.city_id
  
   where  ds.degree_name like ('%$term%')";
echo  $query;
  $runQuery = mysqli_query($db,$query);
  
  
   return $runQuery;
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
    $refercode = mysqli_real_escape_string($db, $data['refercode']);
    
    if ( $email_id == '' || $password == '' || $full_name == '' ||  $mobile == ''  ) {
        $user['errors'][] = "all fields are required !";
    }
    
    if (checkEmail($data)) {
        $user['errors'][] = "User already exists";
    
    
    }
   
   
    if(count($user['errors'])<1){
        
    $user_code =""; 
    $query="INSERT INTO users(full_name,email_id,password,ref_code,user_code,mobile,created) ";
    $query.="VALUES('$full_name','$email_id','$password','','$user_code','$mobile','$created')";
    $runQuery = mysqli_query($db,$query);
    $last_id = $db->insert_id;

    echo $last_id;
    $query1="SELECT * FROM users WHERE email_id='$email_id' AND password='$password'";
    $runQuery1=mysqli_query($db,$query1);
    $user=mysqli_fetch_array($runQuery1,MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery1);


    $queryCounseler="SELECT id from counsler where refercode='$refercode'";
    $runCounseler=mysqli_query($db,$queryCounseler);
    $Counseler=mysqli_fetch_array($runCounseler,MYSQLI_ASSOC);   
    $counts = mysqli_num_rows($runCounseler);
    
    if($counts>0)  {
        echo "oooo";
        $amount='100';
        $cid=$Counseler['id'];
       
        $refer="INSERT INTO refer(name,email,counseler_id) ";
        $refer.="VALUES('$full_name','$email_id','$cid')";
        $runRefer = mysqli_query($db,$refer);


        $refercc="INSERT INTO counseler_wallet(amount,type,status,created,counseler_id) ";
        
        $refercc.="VALUES('$amount','credit','success','$created','$cid')";echo $refercc;
        $runRefercc = mysqli_query($db,$refercc);
        echo "kkkkkkk";
    }


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
   
  
    $query ="SELECT c.*
    FROM college c


    where c.id=$id";

    
    $runQuery=mysqli_query($db,$query);
    $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
    
    
        return $user;   
}
function getcity(){
   $db=$GLOBALS['db'];
   
   $query="SELECT * FROM City order by city_name";
  
  $runQuery=mysqli_query($db,$query);
  
   
    return $runQuery;   
}

function getstate(){
    $db=$GLOBALS['db'];
    
    $query="SELECT * FROM State ";
   
   $runQuery=mysqli_query($db,$query);
   
    
     return $runQuery;   
 }

function getstudymode(){
    $db=$GLOBALS['db'];
    
    $query="SELECT * FROM study_mode ";
   
   $runQuery=mysqli_query($db,$query);
   
    
     return $runQuery;   
 }

function getinstutiontype(){
    $db=$GLOBALS['db'];
    
    $query="SELECT * FROM Collage_type ";
   
   $runQuery=mysqli_query($db,$query);
   
    
     return $runQuery;   
 }


function gethostel(){
    $db=$GLOBALS['db'];
    
    $query="SELECT * FROM hostels ";
   
   $runQuery=mysqli_query($db,$query);
   
    
     return $runQuery;   
 }


function getfacility(){
    $db=$GLOBALS['db'];
    
    $query="SELECT * FROM facilities ";
   
   $runQuery=mysqli_query($db,$query);
   
    
     return $runQuery;   
 }
 function getdegreelist($term){
    $db=$GLOBALS['db'];
  //  echo "ooooooooooo";
    $query="SELECT d.* FROM Degree d INNER JOIN stream s on s.id = d.stream_id where s.stream='$term'";
  // echo $query;
   $runQuery=mysqli_query($db,$query);
   
    //print_r($runQuery);
     return $runQuery;   
 }
 function getspecilizationlist($term){
    $db=$GLOBALS['db'];
    
    $query="SELECT s.* FROM Spacialization s INNER JOIN stream sm on sm.id = s.stream_id where sm.stream='$term'";
   
   $runQuery=mysqli_query($db,$query);
   
  // echo $runQuery;
     return $runQuery;   
 }
 function getdegreelists(){
    $db=$GLOBALS['db'];
  //  echo "ooooooooooo";
    $query="SELECT d.* FROM Degree d ";
  // echo $query;
   $runQuery=mysqli_query($db,$query);
   
    //print_r($runQuery);
     return $runQuery;   
 }
 function getspecilizationlists(){
    $db=$GLOBALS['db'];
    
    $query="SELECT s.* FROM Spacialization s";
   
   $runQuery=mysqli_query($db,$query);
   
  // echo $runQuery;
     return $runQuery;   
 }
 function getstreamlist(){
    $db=$GLOBALS['db'];
    
    $query="SELECT * FROM stream ";
   
   $runQuery=mysqli_query($db,$query);
   
    
     return $runQuery;   
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
    $query="SELECT * FROM City order by city_name";
    $runQuery=mysqli_query($db,$query);
    
   
   
    return $runQuery;  
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
    $query="SELECT * FROM Degree order by stream_id";
    $runQuery=mysqli_query($db,$query) ;
    
    return $runQuery;  
}
function specilizationlist(){

    $db=$GLOBALS['db'];
    $query="SELECT * FROM Spacialization order by stream_id";
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
    $query="SELECT c.*,af.affiliation_name,ap.approval_name	,co.degree_name,s.state_name,ct.type FROM college c INNER JOIN affiliation af on af.id=c.affiliated_id
  INNER JOIN   Approval ap on ap.id= c.approvel_id 
  INNER JOIN college_degree cd on cd.college_id = c.id
  INNER JOIN   Degree co on co.id= cd.degree_id
  INNER JOIN State s on s.id=c.state_id 
  INNER JOIN   Collage_type ct on ct.id=c.collage_type_id order by c.id";
  
    $runQuery=mysqli_query($db,$query);
  
     return $runQuery;  
}

function studentlist(){

    $db=$GLOBALS['db'];
    $query="SELECT * from admission where isremoved='0'";
  
    $runQuery=mysqli_query($db,$query);
  
     return $runQuery;  
}

function getCollegeGroupByCategoury(){
    $db=$GLOBALS['db'];
    $query ="SELECT s.specialization_name, COUNT(c.id) as count
    FROM college c
    INNER JOIN college_degree cd on cd.college_id=c.id 
    INNER JOIN Degree ds on ds.id = cd.degree_id 
    INNER JOIN college_specilization cs on cs.college_id= c.id 
    INNER JOIN Spacialization s on s.id = cs.specilization_id 
    INNER JOIN college_stream cst on cst.college_id= c.id 
    INNER JOIN stream sm on sm.id = cst.stream_id  
    GROUP BY sm.stream";

    $runQuery = mysqli_query($db,$query);
    $user = mysqli_fetch_all($runQuery,MYSQLI_ASSOC) ;
    return $runQuery;
}
function getCollegeByCategoury($data){
   // echo $data;
    $db=$GLOBALS['db'];
    $query ="SELECT s.specialization_name, c.*,s.specialization_name,ds.degree_name,st.state_name,
    af.affiliation_name,ap.approval_name,cty.type,ct.city_name
    FROM college c
    INNER JOIN college_degree cd on cd.college_id=c.id 
    INNER JOIN Degree ds on ds.id = cd.degree_id 
    INNER JOIN college_specilization cs on cs.college_id= c.id 
    INNER JOIN Spacialization s on s.id = cs.specilization_id 
    INNER JOIN college_stream cst on cst.college_id= c.id 
    INNER JOIN stream sm on sm.id = cst.stream_id 
    INNER JOIN State st on st.id = c.state_id
    INNER JOIN affiliation af on af.id= c.affiliated_id
    INNER JOIN Approval ap on ap.id = c.approvel_id
    INNER JOIN Collage_type cty on cty.id = c.collage_type_id
    INNER JOIN City ct on ct.id = c.city_id
   
    where  sm.stream ='$data' ";
 //echo $query;
   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}



function getCollegeBystate($data){
    $db=$GLOBALS['db'];
    $query ="SELECT s.specialization_name, c.*,s.specialization_name,ds.degree_name,st.state_name,
    af.affiliation_name,ap.approval_name,cty.type,ct.city_name
    FROM college c
    INNER JOIN college_degree cd on cd.college_id=c.id 
    INNER JOIN Degree ds on ds.id = cd.degree_id 
    INNER JOIN college_specilization cs on cs.college_id= c.id 
    INNER JOIN Spacialization s on s.id = cs.specilization_id 
    INNER JOIN college_stream cst on cst.college_id= c.id 
    INNER JOIN stream sm on sm.id = cst.stream_id 
    INNER JOIN State st on st.id = c.state_id
    INNER JOIN affiliation af on af.id= c.affiliated_id
    INNER JOIN Approval ap on ap.id = c.approvel_id
    INNER JOIN Collage_type cty on cty.id = c.collage_type_id
    INNER JOIN City ct on ct.id = c.city_id
   
    where  st.state_name ='$data' ";

   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}


function getCollegeBycity($data){
    $db=$GLOBALS['db'];
    $query ="SELECT s.specialization_name, c.*,s.specialization_name,ds.degree_name,st.state_name,
    af.affiliation_name,ap.approval_name,cty.type,ct.city_name
    FROM college c
    INNER JOIN college_degree cd on cd.college_id=c.id 
    INNER JOIN Degree ds on ds.id = cd.degree_id 
    INNER JOIN college_specilization cs on cs.college_id= c.id 
    INNER JOIN Spacialization s on s.id = cs.specilization_id 
    INNER JOIN college_stream cst on cst.college_id= c.id 
    INNER JOIN stream sm on sm.id = cst.stream_id 
    INNER JOIN State st on st.id = c.state_id
    
    INNER JOIN affiliation af on af.id= c.affiliated_id
    INNER JOIN Approval ap on ap.id = c.approvel_id
    INNER JOIN Collage_type cty on cty.id = c.collage_type_id
    INNER JOIN City ct on ct.id = c.city_id
   
    where  ct.city_name ='$data' ";

   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}
function searchcollege($data){
    
    $db=$GLOBALS['db'];
    $q= mysqli_real_escape_string($db, $data['term']);
    
    
    $query="SELECT c.*,af.affiliation_name,ap.approval_name	,co.degree_name,s.state_name,ct.type FROM college c 
    INNER JOIN   Collage_type ct on ct.id=c.collage_type_id 
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
    $emailid = mysqli_real_escape_string($db, $data['emailid']);
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
    
    $query="INSERT INTO admission(full_name,student_mobile_name,email_id,fathe_name,father_mobile_number,10th_percentage,12t_percentage,graduation_percentage,select_course,specialization,select_college,permanent_address,city,pin_code,created,isremoved) ";

    $query.="VALUES('$full_name','$mobilenumber','$emailid','$fathername','$fathermobilenumber','$tenpercentages','$twelvethpercentages','$graduationpercentages',
    '$selectcourse','$specilization','$selectcollege','$permanentaddress','$city','$pincode','$created','0')";
   
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
    if (checkscholership($email_id)){
     
        $user['errors'][] = "scholership form already submitted";
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
function checkscholership($data)
{
    $db = $GLOBALS['db'];
    $email_id = $data;
    // $password = md5(mysqli_real_escape_string($db, $data['password']));
    $query = "SELECT * FROM Scholorship WHERE email='$email_id'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery);

    if ($count > 0) {
        return true;
    } else {

        return false;
    }
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
function addnewCollege($data,$files)
{ 
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $collage_name = mysqli_real_escape_string($db, $data['collage_name']);
    $state_id = mysqli_real_escape_string($db, $data['state_id']);
    $city_id = mysqli_real_escape_string($db, $data['city_id']);
    $Collage_type = mysqli_real_escape_string($db, $data['Collage_type']);
    
    // $affiliated_id = mysqli_real_escape_string($db, $data['affiliated_id']);
    $affiliated_id ='1';

    $stream = mysqli_real_escape_string($db, $data['stream_id']);
    $specilization = mysqli_real_escape_string($db, $data['specilization_id']);
    $course_id = mysqli_real_escape_string($db, $data['course_id']);


    $gender = mysqli_real_escape_string($db, $data['gender']);
    $rank = mysqli_real_escape_string($db, $data['rank']);
    $fees = mysqli_real_escape_string($db, $data['fees']);
    $logo =$files['logo']['tmp_name'];
    $bruchre = $files['brucher']['tmp_name'];
    $logoupload = base64_encode(file_get_contents(addslashes($logo)));
    $brucherupload = base64_encode(file_get_contents(addslashes($bruchre)));
    $college_contact =mysqli_real_escape_string($db, $data['college_contact']);
    $address=mysqli_real_escape_string($db, $data['address']);
    $cllege_details=mysqli_real_escape_string($db, $data['college_details']);
    $mode = $data['mode'];
    $hostel = $data['hostel'];
    $facility = $data['facility'];
    //print_r($data['vehicle1']);facility
   
    $approvel_id =  $data['vehicle1'];


    
    if ($collage_name == '' || $state_id == '' || $Collage_type == '' || $approvel_id == '' ||
     $affiliated_id == '' || $course_id == '' || $gender == '' || $logo || $bruchre) {
        $user['errors'][] = "all fields are required !";
    }
   
  // print_r($data);
    
    $query="INSERT INTO college(collage_name,state_id,collage_type_id,approvel_id,
    affiliated_id,gender,created,updated,city_id,rank,logo,bruchre,college_contact,address,cllege_details) ";
    $query.="VALUES('$collage_name','$state_id','$Collage_type','1',
    '$affiliated_id','$gender','$created','$created','$city_id','$rank','$logoupload','$brucherupload','$college_contact','$address','$cllege_details')";
    
    $runQuery = mysqli_query($db,$query);
    
    $last_id = $db->insert_id;
   
    
            if($runQuery){
                    //data entry in college_fee
                $queryfee="INSERT INTO college_fee(college_id,course_id,course_fee) ";
                $queryfee.="VALUES('$last_id','$course_id','$fees')";
            
                $runQueryfee = mysqli_query($db,$queryfee);
                //data entry in college_degree
                $querydegree="INSERT INTO college_degree(college_id,degree_id) ";
                $querydegree.="VALUES('$last_id','$course_id')";
            
                $runQuerydegree = mysqli_query($db,$querydegree);
                //data entry in college_specilization
                $queryspec="INSERT INTO college_specilization(college_id,specilization_id) ";
                $queryspec.="VALUES('$last_id','$specilization')";
            
                $runQueryspec = mysqli_query($db,$queryspec);
                //data entry in college_stream
                $querystrem="INSERT INTO college_stream(college_id,stream_id) ";
                $querystrem.="VALUES('$last_id','$stream')";

                $runQuerystrem = mysqli_query($db,$querystrem);
    
                $user['success']="college added successfully !";
                //data entry in rating
                $queryrating="INSERT INTO rating(collage_id,rating,created) ";
                $queryrating.="VALUES('$last_id','8','$created')";

                $runQueryrating = mysqli_query($db,$queryrating);
               // echo $queryrating;
               // echo '--------------------------';
                $user['success']="college added successfully !";

                //data entry in review
                $queryreview="INSERT INTO Reviews(collage_id,review,created) ";
                $queryreview.="VALUES('$last_id','Very good college for students.','$created')";
               // echo $queryreview;
               // echo '----------------------------';
                $runQueryreview = mysqli_query($db,$queryreview);

                $user['success']="college added successfully !";

                foreach ($mode as $key => $value) {
                    $modeid = $mode[$key];
                        //data entry in college_approvel
                    $querymode="INSERT INTO collage_mode(collage_id,study_mode_id	) ";
                    $querymode.="VALUES('$last_id','$modeid')";
                    
                    $runQuerymode = mysqli_query($db,$querymode);
                }
                foreach ($hostel as $key => $value) {
                    $hostelid = $hostel[$key];
                        //data entry in college_approvel
                    $queryhostel="INSERT INTO collage_hostel(collage_id,hostel_id) ";
                    $queryhostel.="VALUES('$last_id','$hostelid')";
                    echo $queryhostel;
                    $runQueryhostel = mysqli_query($db,$queryhostel);
                }
                //facility

                foreach ($facility as $key => $value) {
                    $facilityid = $facility[$key];
                        //data entry in collage_facilities
                    $queryfacility="INSERT INTO collage_facilities(collage_id,facility_id	) ";
                    $queryfacility.="VALUES('$last_id','$facilityid')";
                    echo $queryfacility;
                    $runQueryfacility = mysqli_query($db,$queryfacility);
                }

                foreach ($approvel_id as $key => $value) {
                    $id = $approvel_id[$key];
                        //data entry in college_approvel
                    $queryapproval="INSERT INTO college_approvel(college_id,approvel_id	) ";
                    $queryapproval.="VALUES('$last_id','$id')";

                    $runQueryapproval = mysqli_query($db,$queryapproval);
                }

                foreach ($files['gallery']['tmp_name'] as $key => $value) {
                    $gallery = $files['gallery']['tmp_name'][$key];
                    $filename = $files['gallery']['name'][$key];
                    $galleryupload = base64_encode(file_get_contents(addslashes($gallery)));
                        //data entry in college_gallery
                    $querygallery="INSERT INTO college_gallery(name,url,college_id,created) ";
                    $querygallery.="VALUES('$filename','$galleryupload','$last_id','$created')";

                    $runQuerygallery = mysqli_query($db,$querygallery);
                }
                
            }
            
            else{
                $user['errors'][]="Something went wrong !";
            }
        
           return $user;
        
    
}


//updatecollege 
function updatecollegedetails($data)
{

  //  print_r($data);
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
    $city_id = mysqli_real_escape_string($db, $data['city_id']);
    $rank = mysqli_real_escape_string($db, $data['rank']);
  //  echo $id;
   
    if ($collage_name == '' || $state_id == '' || $Collage_type == '' || $approvel_id == '' ||
     $affiliated_id == '' || $course_id == '' || $gender == '') {
        $user['errors'][] = "all fields are required !";
    }
   
    $query="update  college set
    collage_name='$collage_name',state_id='$state_id',collage_type_id='$Collage_type',approvel_id='$approvel_id',
    affiliated_id='$affiliated_id',degree_id='$course_id',gender='$gender',updated='$created',rank='$rank',city_id='$city_id' Where id='$id'";
    
   // echo $query;
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
    $password = md5(mysqli_real_escape_string($db, $data['password']));
    $dateofbirth = mysqli_real_escape_string($db, $data['dateofbirth']);
    $gender = mysqli_real_escape_string($db, $data['gender']);
    $laguage = mysqli_real_escape_string($db, $data['laguage']);
    $Preferred = mysqli_real_escape_string($db, $data['Preferred_language']);
    $workSchedule = mysqli_real_escape_string($db, $data['workSchedule']);
    $salary = mysqli_real_escape_string($db, $data['salary']);
    $code =  genUserCode();
    if ($name == '' || $email == '' || $dateofbirth == ''
     || $gender == '' ||
     $laguage == '' || $Preferred == '' || $workSchedule == '' || $salary == '' || $password == '')
     
     {
        $user['errors'][] = "all fields are required !";
   }
  
     if (checkcounsler($email))
    {
        $user['errors'][]="counsler already added";
   }
    else{
    $query="INSERT INTO counsler(fullname,email_id,dob,gender,
    	language,preferedlanguage,workschedule,created,salary,refercode,password) ";
    $query.="VALUES('$name','$email','$dateofbirth','$gender','$laguage',
    '$Preferred','$workSchedule','$created','$salary','$code','$password')";
   
    $runQuery = mysqli_query($db,$query);
    
    if($runQuery){
        
        $user['success']="Counseler added successfully !";
        $querys = "SELECT * FROM counsler WHERE id='$db->insert_id;'";
        $runQuerys = mysqli_query($db, $querys);
        $user = mysqli_fetch_array($runQuerys, MYSQLI_ASSOC);
        $user['success']="Counseler added successfully !";
        
     
    }else{
        
        $user['errors'][]="Something went wrong !";
    }
}
   return $user;

    
}


 function gettotalrefer($id){
    $db = $GLOBALS['db'];
    $counselerid = $id;
    //echo 'sdsd';
    $query = "SELECT count(*)as total FROM refer WHERE counseler_id='$counselerid'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery);
    
    
    return $user['total'];
    
 }

 function gettotalrefereduser($id){
    $db = $GLOBALS['db'];
    $counselerid = $id;
   
    $query = "SELECT * FROM refer   WHERE counseler_id='$counselerid'";
    $runQuery = mysqli_query($db, $query);
    // $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    // $count = mysqli_num_rows($runQuery);
    
    
    return  $runQuery;
    
 }

function getBalance($id){
    $db = $GLOBALS['db'];
    $counselerid = $id;
    $querycredit = "SELECT sum(amount) as credit FROM counseler_wallet WHERE counseler_id='$counselerid' and type='credit' and status='success'";
    $runQuerycredit = mysqli_query($db, $querycredit);
    $credit = mysqli_fetch_array($runQuerycredit, MYSQLI_ASSOC);

    $querycreditpending = "SELECT sum(amount) as credit FROM counseler_wallet WHERE counseler_id='$counselerid' and type='credit' ";
    $runQuerycreditpending = mysqli_query($db, $querycreditpending);
    $creditpending = mysqli_fetch_array($runQuerycreditpending, MYSQLI_ASSOC);


    $querydebit = "SELECT sum(amount) as debit FROM counseler_wallet WHERE counseler_id='$counselerid' and type='debit' and status='success'";
    $runQuerydebit = mysqli_query($db, $querydebit);
    $debit = mysqli_fetch_array($runQuerydebit, MYSQLI_ASSOC);
    $available = $credit['credit']-$debit['debit'];
    $total =$creditpending['credit']-$debit['debit'];
    
    $counseler['available']=$available;
    $counseler['total']=$total;
    return $counseler;
    
 }


function getcounselerBalance($id){
    $db = $GLOBALS['db'];
    $counselerid = $id;
    $querycredit = "select * from counseler_wallet where counseler_id='$counselerid'";
    $runQuery = mysqli_query($db, $querycredit);
    // $credit = mysqli_fetch_array($runQuerycredit, MYSQLI_ASSOC);

    
    return $runQuery ;
    
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
       //  echo $query;
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
    $query ="SELECT s.specialization_name, c.*,s.specialization_name,ds.degree_name,st.state_name,
    af.affiliation_name,ap.approval_name,ct.city_name,a.agencey_name,re.review,r.rating
    FROM college c
    INNER JOIN college_degree cd on cd.college_id=c.id 
    INNER JOIN Degree ds on ds.id = cd.degree_id 
    INNER JOIN college_specilization cs on cs.college_id= c.id 
    INNER JOIN Spacialization s on s.id = cs.specilization_id 
    INNER JOIN college_stream cst on cst.college_id= c.id 
    INNER JOIN stream sm on sm.id = cst.stream_id 
    INNER JOIN State st on st.id = c.state_id
    
    INNER JOIN affiliation af on af.id= c.affiliated_id
    INNER JOIN Approval ap on ap.id = c.approvel_id
    INNER JOIN City ct on ct.id = c.city_id
    INNER JOIN college_agencey ag on ag.college_id = c.id
    INNER JOIN Agencey a on a.id =ag.agencey_id
    INNER JOIN Reviews re on re.collage_id = c.id
    INNER JOIN rating r on r.collage_id = c.id";
   
    

   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}

function getCollegelist($data){
    $db=$GLOBALS['db'];
    $query ="SELECT s.specialization_name, c.*,s.specialization_name,ds.degree_name,st.state_name,
    af.affiliation_name,ap.approval_name,ct.city_name
    FROM college c
    INNER JOIN Degree ds on ds.id = c.degree_id
    INNER JOIN Spacialization s on s.id = ds.specialization_id
    INNER JOIN State st on st.id = c.state_id
    
    INNER JOIN affiliation af on af.id= c.affiliated_id
    INNER JOIN Approval ap on ap.id = c.approvel_id
    INNER JOIN City ct on ct.id = c.city_id

   
    where  s.specialization_name ='$data' ";

   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}
//counseler kyc
function addkyc($data,$files)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
  

    $email_id = mysqli_real_escape_string($db, $data['email']);
    
    $pannumber = mysqli_real_escape_string($db, $data['pannumber']);

    // $adhar =$files['adhar']['tmp_name'];
    $pan = $files['pan']['tmp_name'];
    $panupload = base64_encode(file_get_contents(addslashes($pan)));
    // $adharupload = base64_encode(file_get_contents(addslashes($adhar)));
  //   echo "fsfnjdfnkdjskjd";
     if ($email_id == '' || $pannumber == ''  ) {
       $user['errors'][] = "all fields are required !";
    }
     $query1="SELECT * FROM counsler WHERE email_id='$email_id'";
     echo  $query1; 
     $runQuery1=mysqli_query($db,$query1);
     $counseler=mysqli_fetch_array($runQuery1,MYSQLI_ASSOC);
     $count = mysqli_num_rows($runQuery1);
       
        if($count<1)  {
            $user['errors'][] = "Counseler not rgistered.";
        }
        else{
            $cou=$counseler['id'];

            $query1="SELECT * FROM counsler WHERE email_id='$email_id'";
            echo  $query1; 
            $runQuery1=mysqli_query($db,$query1);
            $counseler=mysqli_fetch_array($runQuery1,MYSQLI_ASSOC);
            $count = mysqli_num_rows($runQuery1);

        }
    if(count($user['errors'])<1){
    
    
   echo "0000000";
    $query="INSERT INTO counsler_kyc(pan,pannumber,counslerid,created,status) ";
    $query.="VALUES('$panupload','$pannumber',' $cou','$created','processing')";
    echo $query;
    $runQuery = mysqli_query($db,$query);
    echo "11111";
    if($runQuery){
        $user['success']="KYC submitted successfully !";

        
    }
    }
   return $user;
   
    
}

function getCollegeByRank(){
    $db=$GLOBALS['db'];
    $query ="SELECT s.specialization_name, c.*,ds.degree_name,sm.stream,st.state_name, af.affiliation_name,ap.approval_name,cty.type,ct.city_name,rt.rating,count(rv.id) as rv FROM college c 
    INNER JOIN college_degree cd on cd.college_id=c.id 
    INNER JOIN Degree ds on ds.id = cd.degree_id 
    INNER JOIN college_specilization cs on cs.college_id= c.id 
    INNER JOIN Spacialization s on s.id = cs.specilization_id 
    INNER JOIN college_stream cst on cst.college_id= c.id 
    INNER JOIN stream sm on sm.id = cst.stream_id 
    INNER JOIN State st on st.id = c.state_id 
    INNER JOIN affiliation af on af.id= c.affiliated_id 
    INNER JOIN Approval ap on ap.id = c.approvel_id 
    INNER JOIN Collage_type cty on cty.id = c.collage_type_id 
    INNER JOIN City ct on ct.id = c.city_id 
    INNER JOIN rating rt on rt.collage_id= c.id 
    INNER JOIN Reviews rv on rv.collage_id = c.id group by c.id 
    order by c.rank ";


echo $qyery;
  $runQuery = mysqli_query($db,$query);
   
   
   return $runQuery;
}
function getCollegeDetail($id){
    $db=$GLOBALS['db'];
    $query ="SELECT s.specialization_name, c.*,s.specialization_name,ds.degree_name,st.state_name,
    af.affiliation_name,ap.approval_name,cty.type,ct.city_name,rt.rating,count(rv.id) as rv
    FROM college c
    INNER JOIN college_degree cd on cd.college_id=c.id 
    INNER JOIN Degree ds on ds.id = cd.degree_id 
    INNER JOIN college_specilization cs on cs.college_id= c.id 
    INNER JOIN Spacialization s on s.id = cs.specilization_id 
    INNER JOIN college_stream cst on cst.college_id= c.id 
    INNER JOIN stream sm on sm.id = cst.stream_id 
    INNER JOIN State st on st.id = c.state_id
   
    INNER JOIN affiliation af on af.id= c.affiliated_id
    INNER JOIN Approval ap on ap.id = c.approvel_id
    INNER JOIN Collage_type cty on cty.id = c.collage_type_id
    INNER JOIN City ct on ct.id = c.city_id
    INNER JOIN rating rt on rt.collage_id= c.id
   INNER JOIN Reviews rv on rv.collage_id = c.id
   group by c.id
    order by c.rank limit 8";

   $runQuery = mysqli_query($db,$query);
   
   
    return $runQuery;
}

function checkCounselerdata($data)
{
    $db = $GLOBALS['db'];
    $email_id = mysqli_real_escape_string($db, $data['email']);
     $password = md5(mysqli_real_escape_string($db, $data['password']));
    $query = "SELECT * FROM counsler WHERE email_id='$email_id' and password='$password'";
    
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery);

    if ($count > 0) {
        return $user;
    } else {

        return false;
    }
   // print_r($user);
}
function checkkyc($id){
    $db = $GLOBALS['db'];
  
    $query = "SELECT * FROM counsler_kyc WHERE counslerid='$id' ";
    
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery);

    if ($count > 0) {
        return $user;

       
    } else {

       return "Pending";
    }
}
function counselerdeatails($id){

    $db = $GLOBALS['db'];
   
    $query = "SELECT * FROM counsler WHERE id = $id ";
    
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_array($runQuery, MYSQLI_ASSOC);
    $count = mysqli_num_rows($runQuery);

    if ($count > 0) {
        return $user;
    } else {

        return false;
    }
}

function addcollegeblog($data)
{

  //  print_r($data);
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
   // $collage_name = mysqli_real_escape_string($db, $data['name']);
    $blog= mysqli_real_escape_string($db, $data['description']);
   
    if ($collage_name == '' || $state_id == '') {
        $user['errors'][] = "all fields are required !";
    }
   
    // $query = "SELECT * FROM college WHERE collage_name='$collage_name' ";
    
    // $runQuery1 = mysqli_query($db, $query);
    // $users = mysqli_fetch_array($runQuery1, MYSQLI_ASSOC);
    // $count = mysqli_num_rows($runQuery1);

    // if($count<1)  {
    //     $user['errors'][] = "College not rgistered.";
    // }
    // else{
       
       // $cou=$users['id'];

        $query="INSERT INTO collageblog(blog) ";
        $query.="VALUES('$blog')";
        echo $query;
        $runQuery = mysqli_query($db,$query);
    
        if($runQuery){
            $user['success']="Blog added successfully !";
    
            
        }
        else{
            $user['errors'][]="Something went wrong !";
        }

   // }
    
    
   
   return $user;
   
    
}

function getDegreeByStream() 
{
    if(isset($_GET['data'])) 
    {
        $data = $_GET['data'];
        $db=$GLOBALS['db'];
    
    $query="SELECT * FROM Degree where stream_id ='$data' ";
 
    $runQuery=mysqli_query($db,$query);
   
    $runQuery1 = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
    echo json_encode($runQuery1 );
 // print_r($runQuery1);
 // $result = JSON.stringify($runQuery1);
    return $runQuery1;
    }
}
    if (isset($_GET['action']) && $_GET['action'] == 'getdegree'){
        getDegreeByStream();

     
    }

    function getSpecilizationByStream() 
    {
        if(isset($_GET['data'])) 
        {
            $data = $_GET['data'];
            $db=$GLOBALS['db'];
    
    $query="SELECT * FROM Spacialization where stream_id= '$data'";
   
   $runQuery=mysqli_query($db,$query);
   $runQuery1 = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
  
    // return $runQuery;
        }
    }
        if (isset($_GET['action']) && $_GET['action'] == 'getspecilization'){
            getSpecilizationByStream();
        }


        function getBlog(){
          
            $db=$GLOBALS['db'];
            $query ="SELECT * from collageblog order by id desc";
        //
          $runQuery = mysqli_query($db,$query);
         
         
           
            return $runQuery;
        }

function get_college($id){
    $db=$GLOBALS['db'];
    
//     $query="SELECT * FROM college where id= '$id'";
//   // echo $query;
//    $runQuery=mysqli_query($db,$query);
//     $runQuery1 = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
//   // print_r($runQuery1);
//     return  $runQuery1;

$query ="SELECT s.specialization_name, c.*,s.specialization_name,ds.degree_name,st.state_name,
af.affiliation_name,ap.approval_name,cty.type,ct.city_name
FROM college c
INNER JOIN college_degree cd on cd.college_id=c.id 
INNER JOIN Degree ds on ds.id = cd.degree_id 
INNER JOIN college_specilization cs on cs.college_id= c.id 
INNER JOIN Spacialization s on s.id = cs.specilization_id 
INNER JOIN college_stream cst on cst.college_id= c.id 
INNER JOIN stream sm on sm.id = cst.stream_id 
INNER JOIN State st on st.id = c.state_id

INNER JOIN affiliation af on af.id= c.affiliated_id
INNER JOIN Approval ap on ap.id = c.approvel_id
INNER JOIN Collage_type cty on cty.id = c.collage_type_id
INNER JOIN City ct on ct.id = c.city_id

where  c.id ='$id' ";
//print_r($runQuery1);
$runQuery = mysqli_query($db,$query);
//$runQuery1 = mysqli_fetch_array($runQuery,MYSQLI_ASSOC);
//print_r($runQuery1);
return $runQuery;
}
function get_course($id){
    $db=$GLOBALS['db'];
    
    $query="SELECT d.degree_name, d.duration,e.details,f.course_fee FROM college_degree cd 
    INNER JOIN  Degree d on d.id = cd.degree_id
    INNER JOIN eligibility e on e.id =d.eligibility_id
    INNER JOIN college_fee f on f.course_id = d.id
    
     where cd.college_id= '$id'";
 // echo $query;
   $runQuery=mysqli_query($db,$query);
   // $runQuery1 = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
  
    return  $runQuery;
}
function get_placement($id){
    $db=$GLOBALS['db'];
    
    $query="SELECT * FROM Placement where placement_collage_id= '$id'";
  // echo $query;
   $runQuery=mysqli_query($db,$query);
   // $runQuery1 = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
// print_r($runQuery1);
    return  $runQuery;
}
function get_college_gellary($id){
    $db=$GLOBALS['db'];
    
    $query="SELECT * FROM college_gallery where college_id= '$id'";
  // echo $query;
   $runQuery=mysqli_query($db,$query);
  //  $runQuery1 = mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
// print_r($runQuery1);
    return  $runQuery;
}


function applynow($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
  
//message
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $mobile = mysqli_real_escape_string($db, $data['mobile']);
    $program = mysqli_real_escape_string($db, $data['program']);
    $board = mysqli_real_escape_string($db, $data['board']);
    $stream = mysqli_real_escape_string($db, $data['stream']);
    $city = mysqli_real_escape_string($db, $data['city']);
    $course = mysqli_real_escape_string($db, $data['course']);
    $message = mysqli_real_escape_string($db, $data['message']);
  // return $user;
   print_r($data);
    
}

function addreferal($data)
{
    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $created = date("Y-m-d h:i:s");
    $full_name = mysqli_real_escape_string($db, $data['name']);
    $email_id = mysqli_real_escape_string($db, $data['emailid']);
    $collegename = mysqli_real_escape_string($db, $data['collegename']);
    $referal = mysqli_real_escape_string($db, $data['referal']);
    $amount = mysqli_real_escape_string($db, $data['amount']);
    $status = mysqli_real_escape_string($db, $data['status']);
    
    if ( $email_id == '' || $collegename == '' || $full_name == '' ||  $referal == ''  || $amount =='' || $status=='') {
        $user['errors'][] = "all fields are required !";
    }
    
    
    $queryCounseler="SELECT id from counsler where refercode='$referal'";
    $runCounseler=mysqli_query($db,$queryCounseler);
    $Counseler=mysqli_fetch_array($runCounseler,MYSQLI_ASSOC);   
    $counts = mysqli_num_rows($runCounseler);
    
    

        if($counts>0)  {
           
            $id=$Counseler['id'];

            $refer="INSERT INTO refer(name,email,counseler_id,college) ";
            $refer.="VALUES('$full_name','$email_id','$id','$collegename')";
            $runRefer = mysqli_query($db,$refer);


            $refercc="INSERT INTO counseler_wallet(amount,type,status,created,counseler_id) ";
            
            $refercc.="VALUES('$amount','credit','$status','$created','$id')";echo $refercc;
            $runRefercc = mysqli_query($db,$refercc);
                if($runQuery){
                    $user['success']="Added successfully !";
            
                    
                }else{
                    $user['errors'][]="Something went wrong !";
                }
        }


    
    
   // }
   return $user;
   
    
}
  ?>
