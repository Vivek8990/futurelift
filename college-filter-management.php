<?php
require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
$term=$_GET['q'];
$_SESSION['term']=$term;

$city = getcity();
$State = getstate();
$studymode= getstudymode();
$getinstutiontype= getinstutiontype();
$hostel = gethostel();
$facility = getfacility();
$degreelist = getdegreelist();
$specilizationlist = getspecilizationlist();

if (isset($_GET['gtstate'])) {
      
   
	$colleges =   searchcollegebyfilter();
  
  }
  
  if (isset($_GET['gtcity'])) {
         
  
		$colleges =  searchcollegebyfilter();
  
  }
  
  if (isset($_GET['gtfreerange'])) {
          
		$colleges = searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gthostels'])) {
      echo "34342424"; 
			$colleges =  searchcollegebyfilter();
  }

  if (isset($_GET['gtspacialization'])) {
          
		$colleges =  searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gtdegree'])) {
          
		$colleges =   searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['gtmode'])) {
          
		$colleges =  searchcollegebyfilter();
  
  
  }


  
  if (isset($_GET['gtfacilities'])) {
          
		$colleges =  searchcollegebyfilter();
  
  
  }
  
  if (isset($_GET['institutetype'])) {
          
		$colleges = searchcollegebyfilter();
  
  
  }
  
 print_r($college);   
function searchcollegebyfilter(){
    
    $db=$GLOBALS['db'];
   $state=$_COOKIE["state"];
   $city =$_COOKIE["city"];
   $mode=$_COOKIE["study"];
   $type=$_COOKIE["type"];
   $degree=$_COOKIE["degree"];
   $spacialization = $_COOKIE["spacialization"];
   $hostels = $_COOKIE["hostels"];
   $freerange = $_COOKIE["freerange"];
   $facilities =$_COOKIE["facilities"];
   



   $query="SELECT c.*,af.affiliation_name,ap.approval_name	,s.state_name,ct.type ,
   co.degree_name,ss.specialization_name 
   FROM college c 
   join affiliation af on af.id=c.affiliated_id
   join Approval ap on ap.id= c.approvel_id 
   join Degree co on co.id= c.degree_id
   join State s on s.id=c.state_id 
   join Collage_type ct on ct.id=c.collage_type_id 
   join City cy on cy.id = c.city_id
   
   join Spacialization ss on ss.id = co.specialization_id
   join Country cty on cty.id = s.country_id
   join collage_mode cm on cm.collage_id = c.id
   join study_mode sm on sm.id = cm.study_mode_id
   join collage_hostel ch on ch.collage_id= c.id
   join hostels h on h.id = ch.hostel_id
   join collage_facilities cf on cf.collage_id = c.id
   join facilities fa on fa.id = cf.facility_id
  
   where  cty.country_name='India'" ;

    if($state){ $query.=" and s.state_name='$state'"; }
    if($city){ $query.=" and cy.city_name='$city'"; } 
    if($type){ $query.=" and ct.type='$type'"; }
    if($degree){ $query.=" and co.degree_name='$degree'"; }
    if($mode){ $query.=" and sm.mode='$mode'"; }
    if($hostels){ $query.=" and h.type='$hostels'"; }
    // if($freerange){ $query.=" and co.degree_name='$freerange'"; }

    if($facilities){ $query.=" and fa.facility='$facilities'"; }
    if($spacialization){ $query.=" and ss.specialization_name='$spacialization'"; }


    echo $query;
		$runQuery=mysqli_query($db,$query);
		print_r($runQuery);
return $runQuery;
     
    }
?>







<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>future lift management Colleges in india</title>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">

	<!-- Font Awesome CDN Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<script src="https://kit.fontawesome.com/c9c459e62c.js" crossorigin="anonymous"></script>

	<!-- General Initialization -->
	<script src="js/general.js" type="text/javascript"> </script>

	<!-- Bootsrtap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Custome CSS Link -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/college.css">

	<!-- swiper js -->
	

</head>

<body>
	<header class="header">
		<a href="index.html" class="logo"><img src="images/logoBrand-01.png" alt=""></a>
		<nav class="navbar">
			<div class="user">
				<i class="fas fa-user"></i>
			</div>
			<a href="career.html" class="active">Career Solutions</a>
			<a href="explore-colleges.html" class="active">explore colleges</a>
			<a href="" class="active"> partner</a>
			<a href="admission.html" class="active">admission</a>
			<div class="dropdown">
				<a herf="" type="button" class=" active dropdown-toggle" data-bs-toggle="dropdown">
					more
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Colleges</a></li>
					<li><a class="dropdown-item" href="#">counseler</a></li>
					<li><a class="dropdown-item" href="#">news</a></li>
				</ul>
			</div>

			<?php if($login){?>
       
       <a  href="#" class="active"><?php  echo ($data['email_id']);?></a>
       <a class="active" href="functions.php?logout">Signout</a><?php }
      ?>
      <div class="btnGroup">
        <?php if(!$login){ ?>
        <a href="log-in.php" class="btn btn-sign">log in</a>
        <a href="sign-up.php" class="btn">sign up</a>
        <?php    
        } 
        ?>

			<div class="btnGroup">
				<a href="log-in.html" class="btn btn-sign">log in</a>
				<a href="sign-up.html" class="btn">sign up</a>
			</div>
		</nav>
		<i class="fas fa-bars" id="manu-bars"></i>
	</header>
	<section class="college_filter_page_management" id="management">
		<div class="container shadow">
			<div class="row">
				<h1 class="heading text-center">management colleges in india</h1>
				<h2 class="text-center">fullfil your college ditails</h2>
				<p class="lead p-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scelerisque enim ligula venenatis dolor. Maecenas nisl est,<span id="dots">...</span><span id="more">ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, perferendis ipsam eos iusto officiis mollitia iure possimus incidunt facilis, praesentium veniam nihil quam laborum asperiores! Beatae illo sapiente veritatis unde quo, optio nobis aut aliquid voluptas laboriosam labore sint odit pariatur ratione expedita! Perferendis vitae ex commodi eaque accusamus corrupti dolorum asperiores qui, adipisci labore fugiat corporis aut, nostrum optio mollitia eveniet numquam possimus officiis! Doloribus, quas. Earum iure possimus delectus, quibusdam aliquid, aut maiores distinctio labore atque, illum reiciendis quam? Assumenda praesentium consequuntur nulla iusto totam minima laudantium vero ipsa exercitationem fuga qui aspernatur, sequi modi. Atque perferendis dicta mollitia dolorem numquam magni excepturi, quibusdam reprehenderit beatae ipsa ex ratione sed earum nemo temporibus animi in magnam distinctio molestias enim quas. Reprehenderit ut praesentium sequi quas sed dolores ea hic beatae, iste aliquid eveniet fugit, consectetur omnis accusamus eligendi. Corporis aperiam explicabo debitis sequi repellendus eveniet facilis doloribus eaque dolore optio impedit placeat est nostrum dolorum, temporibus deserunt quis deleniti sed ut laborum accusantium ipsum nemo, reprehenderit saepe. Eius nobis ipsa sequi animi quibusdam minus a debitis earum quas. Autem, sed recusandae aut id minus magnam voluptates, aliquid quaerat temporibus impedit exercitationem optio corrupti soluta ad nemo ducimus quam. sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
				<a onclick="readFunction()" id="readMore" class="readMore">Read more</a>
			</div>
		</div>
		<div class="filterCall mt-5">
			<h4 id="callFilter">
				show filter
			</h4>
		</div>
		<?php
								while($row =mysqli_fetch_array($degreelist,MYSQLI_ASSOC))

{
		echo "			
									<div class='filterContent'>
										<div class='filterContentCheck d-flex'>
											<input type='checkbox' class='form-check-input degree' name='degree' value='".$row['degree_name']."'>
											<label for='' class='form-label'>".$row['degree_name']."</label>
											<span>(1004)</span>
										</div>
									</div>";

}

?>



		<div class="divider py-5"></div>
		<div class="container">
			<div class="row mobile-width">
				<div class="col-lg-3  left_side" id="showFilter">
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="digree-filterOpen">digree</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#digree-filterShow" aria-expanded="true"
								aria-controls="digree-filterShow" style="width: 20%;">
							</button>
						</div>
						<div id="digree-filterShow" class="filter-collapse collapse show"
							aria-labelledby="digree-filterOpen collapseOne">
							<div class="filter-body">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">management of business administration(MBA)</label>
											<span>(1004)</span>
										</div>
									</div>

									<?php
								while($row =mysqli_fetch_array($specilizationlist,MYSQLI_ASSOC))

{
		echo "			
									<div class='filterContent'>
										<div class='filterContentCheck d-flex'>
											<input type='checkbox' class='form-check-input spacialization' name='spacialization' value='".$row['specialization_name']."'>
											<label for='' class='form-label'>".$row['specialization_name']."</label>
											<span>(1004)</span>
										</div>
									</div>";

}

?>


									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">B.B.A (Bachelor of Business Administration)</label>
											<span>(1004)</span>
										</div>
									</div>
									<?php
								while($row =mysqli_fetch_array($State,MYSQLI_ASSOC))

{
		echo "			
									<div class='filterContent'>
										<div class='filterContentCheck d-flex'>
											<input type='checkbox' class='form-check-input state' name='state' value='".$row['state_name']."'>
											<label for='' class='form-label'>".$row['state_name']."</label>
											<span>(1004)</span>
										</div>
									</div>";

}

?>


									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">P.G.D.M (Post Graduate Diploma In Management)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">M.Phil. (Master of Philosophy)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">M.M.S. (Master of Management Studies)</label>
											<span>(1004)</span>
										</div>
									</div>

									<?php
 while($row =mysqli_fetch_array($city,MYSQLI_ASSOC))

  {
			echo "					
									<div class='filterContent'>
										<div class='filterContentCheck d-flex'>
											<input type='checkbox' class='form-check-input city' name='city' value='".$row['city_name']."'>
											<label for='' class='form-label'>".$row['city_name']."</label>
											<span>(1004)</span>
										</div>
									</div>
									";

	}?>

									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">MHRDM (Master in Human Resources Development Management)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">.B.B.A + M.B.A</label>
											<span>(1004)</span>
										</div>
									</div>
									<?php
 while($row =mysqli_fetch_array($studymode,MYSQLI_ASSOC))

  {
			echo "		<div class='filterContent'>
										<div class='filterContentCheck d-flex'>
											<input type='checkbox' class=form-check-input studymode' name='studymode' value='".$row['mode']."'>
											<label for='' class='form-label'>".$row['mode']."</label>
											<span>(1004)</span>
										</div>
									</div>";



	}?>

									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">B.M.S (Bachelor of Management Studies)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Executive M.B.A.</label>
											<span>(1004)</span>
										</div>
									</div>
									<?php
 while($row =mysqli_fetch_array($getinstutiontype,MYSQLI_ASSOC))

  {
			echo "		<div class='filterContent'>
										<div class='filterContentCheck d-flex'>
											<input type='checkbox' class='form-check-input studymode' name='studymode' value='".$row['type']."'>
											<label for='' class='form-label'>".$row['type']."</label>
											<span>(1004)</span>
										</div>
									</div>";



		}	?>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Ph.D. (Doctor of Philosophy)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">B.B.M (Bachelor of Business Management)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Certificate</label>
											<span>(1004)</span>
										</div>
									</div>
									<?php
 while($row =mysqli_fetch_array($hostel,MYSQLI_ASSOC))

  {

								
							echo	"	<div class='filterContent'>
										<div class='filterContentCheck d-flex'>
											<input type='checkbox' class='form-check-input hostels' name='hostels' value='".$row['type']."'>
											<label for='' class='form-label'>".$row['type']."'s</label>
											<span>(1004)</span>
										</div>
									</div>";

									}
									?>
								

									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Post Graduate Diploma</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">P.G.P.M (Post Graduate Program in Management)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">M.M.M (Master of Applied Management)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">M.I.B (Master of International Business) </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Executive P.G.D.M</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">M.M.M (Master of Marketing Management)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">M.P.M (Master of Personal Management)</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="state-filterOpen">state</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#state-filterShow" aria-expanded="true"
								aria-controls="div-city-filterShow" style="width: 20%;">
								
							</button>
						</div>
						<div id="state-filterShow" class="filter-collapse collapse"
							aria-labelledby="state-filterOpen">
							<div class="filter-body">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Arunachal Pradesh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Assam</label>
											<span>(1004)</span>
										</div>
									</div>

									<?php
 while($row =mysqli_fetch_array($facility,MYSQLI_ASSOC))

  {

								
							echo	"

									<div class='filterContent'>
										<div class='filterContentCheck d-flex'>
											<input type='checkbox' class='form-check-input facilities' name='facilities' value='".$row['facility']."'>
											<label for=''  class='form-label'>".$row['facility']."</label>
											<span>(1004)</span>
										</div>
									</div>";
	}
	?>

									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">biha</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Chandigarh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Chhattisgarh</label>
											<span>(1004)</span>
										</div>
									</div>
									<?php
 while($row =mysqli_fetch_array($colleges ,MYSQLI_ASSOC))

  {

  echo "
					<div class='boxfilterDitails  shadow p-3 my-3'>
						<div class='logowithDitail'>
							<div class='col-logo'>
							<img src='data:image;base64,".$row['logo']."' alt='' class='img-fluid'>
							</div>
							<div class='col-name'>
								<h3><a href=''>".$row['collage_name']."</a></h3>
								<p>approved by: <span>". $row['approval_name'] ."</span> government of india</p>
								<p>type :  ".$row['type']."</p>
								<i class='fa fa-star'></i>
								<i class='fa fa-star'></i>
	
								<i class='fa fa-star'></i>
								<i class='fa fa-star'></i>
								<i class='fa fa-star'></i>
							</div>
							<div class='aplyButton'>
								<a href='' class='btn'>aply now</a>
							</div>
						</div>
						<div class='ditail  clearfix'>
							<div class='structurDitail float-start'>
								<a href='' class='downBtn'>structure</a>
							</div>
							<div class='getBrochure float-end'>
							<a href='data:image;base64,".$row['bruchre']."' class='downBtn' download><i class='fa fa-download'></i> brochure</a>
							</div>
						</div>
					</div>
				";
	}
				?>

									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Delhi</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Gujarat</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Haryana</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Himachal Pradesh </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Jammu & Kashmir </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Jharkhand </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Karnataka </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Kerala  </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Madhya Pradesh </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Maharashtra </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Manipur</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Mizoram</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Orissa</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Pondicherry</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="divcity-filterOpen">city</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#city-filterShow" aria-expanded="true"
								aria-controls="city-filterShow" style="width: 20%;">
								
							</button>
						</div>
						<div id="city-filterShow" class="filter-collapse collapse"
							aria-labelledby="divcity-filterOpen">
							<div class="filter-body">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Abohar</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Agra</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Ahmedabad</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Ahmednagar</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Aizawl</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Akola</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Aligarh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Allahabad</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Ambala </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Amravati </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Amreli</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Amritsar</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Anandpur Sahib</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Anantnag)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Auraiya</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Aurangabad</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Aurangabad (Bh)</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Azamgarh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Bagalkot</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="StudyMode-filterOpen">studu mode</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#divStudyMode-filterShow" aria-expanded="true"
								aria-controls="divStudyMode-filterShow" style="width: 20%;">
								
							</button>
						</div>
						<div id="divStudyMode-filterShow" class="filter-collapse collapse"
							aria-labelledby="StudyMode-filterOpen">
							<div class="filter-body">
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Regular</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Part Time</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Distance Learning</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="divInstituteType-filterOpen">institute type</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#divInstituteType-filterShow" aria-expanded="true"
								aria-controls="divInstituteType-filterShow" style="width: 20%;">
								
							</button>
						</div>
						<div id="divInstituteType-filterShow" class="filter-collapse collapse"
							aria-labelledby="divInstituteType-filterOpen">
							<div class="filter-body">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">government</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">private</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">public</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="hostel-filterOpen">hostel</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#hostelFilter-filterShow" aria-expanded="true"
								aria-controls="hostelFilter-filterShow" style="width: 20%;">
								
							</button>
						</div>
						<div id="hostelFilter-filterShow" class="filter-collapse collapse"
							aria-labelledby="hostel-filterOpen">
							<div class="filter-body">
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">boy's</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">girl's</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="freeRange-filterOpen">fee range</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#free-range-filterShow" aria-expanded="true"
								aria-controls="free-range-filterShow" style="width: 20%;">
							</button>
						</div>
						<div id="free-range-filterShow" class="filter-collapse collapse"
							aria-labelledby="freeRange-filterOpen">
							<div class="filter-body">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Less Than 1 Lakh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">1 to 2 Lakh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">2 to 3 Lakh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">3 to 4 Lakh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">4 to 5 Lakh</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Greater than 5 Lakh</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="facilities-filterOpen">facilities</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#facilitiesFilter-filterShow" aria-expanded="true"
								aria-controls="facilitiesFilter-filterShow" style="width: 20%;">
								
							</button>
						</div>
						<div id="facilitiesFilter-filterShow" class="filter-collapse collapse"
							aria-labelledby="facilities-filterOpen">
							<div class="filter-body">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">A/C</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">ATM</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">AV Lav</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Academic Zone</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Canteen</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Computer Lab</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Conference Room</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Convo. Hall</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Counselling</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Cultural Zone</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Fest</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Ground</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Guest House</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Gym</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Hospital</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Hostel</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Math Lab</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Wi-Fi</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Sports</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="spacialization-filterOpen">spacialization</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#spacializationFilter-filterShow" aria-expanded="true"
								aria-controls="spacializationFilter-filterShow" style="width: 20%;">
								
							</button>
						</div>
						<div id="spacializationFilter-filterShow" class="filter-collapse collapse"
							aria-labelledby="spacialization-filterOpen">
							<div class="filter-body">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Business Administration</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">General Management</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Human Resources Management</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Finance</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Marketing</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Management</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">International Business</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Business Management</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Operational Management </label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Business Analytics</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Information Technology</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Retail Management</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Logistics & Supply Chain Management</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Digital Marketing</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Entrepreneurship/Family Business</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Executive MBA</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Systems</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Supply Chain Management</label>
											<span>(1004)</span>
										</div>
									</div>
									<div class="filterContent">
										<div class="filterContentCheck d-flex">
											<input type="checkbox" class="form-check-input">
											<label for="" class="form-label">Accounting</label>
											<span>(1004)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- college information -->
				<div class="col-lg-9 col-md-12 right_side mt-5">
					<div class="boxfilterDitails  shadow p-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (9).png" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">seacom skills universitiy</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="college-page.html" target="_blank" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (10).png" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">guru nanak institute of hotel management</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (13).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">CNK College Of Nursing</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (16).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">bharat technology</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (14).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">presidency college bangalore</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (20).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">Indian Institute of Business Management</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (20).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">Indian Institute of Business Management</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (20).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">Indian Institute of Business Management</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (20).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">Indian Institute of Business Management</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (20).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">Indian Institute of Business Management</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (20).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">Indian Institute of Business Management</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
					<div class="boxfilterDitails  shadow p-3 my-3">
						<div class="logowithDitail">
							<div class="col-logo">
								<img src="images/partner/images (20).jpeg" alt="" >
							</div>
							<div class="col-name">
								<h3><a href="">Indian Institute of Business Management</a></h3>
								<p>approved by: <span>aicte mhrd</span> government of india</p>
								<p>type : private</p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
	
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="aplyButton">
								<a href="" class="btn">aply now</a>
							</div>
						</div>
						<div class="ditail  clearfix">
							<div class="structurDitail float-start">
								<a href="" class="downBtn">structure</a>
							</div>
							<div class="getBrochure float-end">
								<a href="" class="downBtn"><i class="fa fa-download"></i> brochure</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<button type="button" class="btn mb-5 center-block loadMore">Load More</button>



	<!-- footer start -->
	<footer id="footer" class="footer-area section-padding">
		<div class="container">
		  <div class="container">
			<div class="row">
			  <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.2s">
				<div class="footer-logo mb-3">
				  <img src="images/logoBrand-01.png" alt="" class="img-fluid">
				</div>
			  </div>
			  <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.4s">
				<h3 class="footer-titel">quick links</h3>
				<ul>
				  <li><a href="about.html">about us</a></li>
				  <li><a href="">FAQs</a></li>
				  <li><a href="policy.html">privacy policy</a></li>
				  <li><a href="refund_cancelletion.html">refunds & cancellations</a></li>
				</ul>
			  </div>
			  <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.6s">
				<h3 class="footer-titel">our services</h3>
				<ul>
				  <li><a href="#">Career</a></li>
				  <li><a href="#">Team</a></li>
				  <li><a href="#">Clients</a></li>
				</ul>
			  </div>
			  <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 footer_div" data-wow-delay="0.8s">
				<h3 class="footer-titel">Find us on</h3>
				<div class="social-icon">
				  <a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><i class="fab fa-facebook-square"></i></a>
				  <a href="https://instagram.com/futurelift_education?utm_medium=copy_link"><i class="fab fa-instagram-square"></i></a>
				  <a href=" https://twitter.com/Futurelift_edu?s=09"><i class="fab fa-twitter-square"></i></a>
				  <a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><i class="fab fa-youtube-square"></i></a>
				  <a href="https://www.linkedin.com/company/futurelift-duication"><i class="fab fa-linkedin"></i></a>
				</div>
			  </div>
			</div>
		  </div>  
		</div>     
	  </footer> 
	  <!-- footer end -->
	
	  <section id="copyright">
		<div class="container">
		  <div class="row">
			<div class="col-md-12">
			  <p>Copyright © 2022 future lift All Right Reserved</p>
			</div>
		  </div>
		</div>
	  </section>








</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/list.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script src="js/filter.js"></script>



</html>