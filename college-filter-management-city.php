
<?php
require_once 'functions.php';
$login = $_SESSION['userIsLoggedIn'];
$data=$_SESSION['userdata'];
$term=$_GET['city'];
$_SESSION['term']=$term;
$colleges = getCollegeBycity($term);

$city = getcity();
$State = getstate();
$studymode= getstudymode();
$getinstutiontype= getinstutiontype();
$hostel = gethostel();
$facility = getfacility();
$degreelist = getdegreelist();
$specilizationlist = getspecilizationlist();
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
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<script src="https://use.fontawesome.com/2054339f84.js"></script>
	<script src="https://kit.fontawesome.com/78ddd3cd4c.js" ></script>

</head>

<body>
	<header class="header">
		<a href="index.php" class="logo"><img src="images/logoBrand-01.png" alt=""></a>
		<nav class="navbar">
			<div class="user">
				<i class="fas fa-user"></i>
			</div>
			<a href="career.php" class="active">Career Solutions</a>
			<a href="explore-colleges.php" class="active">explore colleges</a>
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
      </div>
		</nav>
		<i class="fas fa-bars" id="manu-bars"></i>
	</header>
	<section class="college_filter_page_management" id="management">
		<div class="divider py-5"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3  left_side">
					<div class="filter-item  shadow">
						<div class="toggle-heade clearfix">
							<h2 class="filter_info-header float-start" id="digree-filterOpen">degree</h2>
							<button class="accordion-button filterBtn float-end" type="button" data-bs-toggle="collapse"
								data-bs-target="#digree-filterShow" aria-expanded="true"
								aria-controls="digree-filterShow" style="width: 20%;">
								
							</button>
						</div>
						<div id="digree-filterShow" class="filter-collapse collapse show"
							aria-labelledby="digree-filterOpen collapseOne">
							<div class="filter-body shadow">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
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
							<div class="filter-body shadow">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
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
							<div class="filter-body shadow">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class='filterItems'>
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
							<div class="filter-body shadow">
								<div class="filterItems ">
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
							<div class="filter-body shadow">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
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
							<div class="filter-body shadow">
								<div class="filterItems ">
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
							<div class="filter-body shadow">
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
							<div class="filter-body shadow">
								<div class="searchFilter mt-3">
									<input type="text" class="form-control">
								</div>
								<div class="filterItems ">
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
								
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- college information -->
				<div class="col-lg-9 col-md-12 right_side">
				<?php
 while($row =mysqli_fetch_array($colleges,MYSQLI_ASSOC))

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

				</div>
			</div>
		</div>
		</div>
	</section>


	<!-- footer Start -->
	<footer class="footer">
		<div class="row">
		  <div class="main-first d-flex flex-wrap align-items-center">
			<div class="main1 col-3">
				<a href="index.php" class="logo"><img src="images/logoBrand-01.png" alt="" ></a>
			</div>
			<div class="footerHead">
				<h4 class="text-light ">quick links</h4>
				<ul>
					<li><a href="about.html">about us</a></li>
					<li><a href="">FAQs</a></li>
					<li><a href="policy.html">privacy policy</a></li>
					<li><a href="refund_cancelletion.html">refunds & cancellations</a></li>
				</ul>
			</div>
			<div class="footerHead">
				<h4 class="text-light">our services</h4>
				<ul>
					<li><a href="">contact us</a></li>
					<li><a href="">....</a></li>
					<li><a href="">....</a></li>
				</ul>
			</div>
			<div class="main2 col-3">
				<a href="https://www.facebook.com/Future-Lift-Education-PVT-LTD-112127913993548/"><i class="fab fa-facebook-square"></i></a>
				<a href="https://instagram.com/futurelift_education?utm_medium=copy_link"><i class="fab fa-instagram-square"></i></a>
				<a href=" https://twitter.com/Futurelift_edu?s=09"><i class="fab fa-twitter-square"></i></a>
				<a href="https://youtube.com/channel/UCvY_1Aon-HqSHzqWwvIU2zQ"><i class="fab fa-youtube-square"></i></a>
				<a href="https://www.linkedin.com/company/futurelift-duication"><i class="fab fa-linkedin"></i></a>
	
			</div>
		</div>
	  </div>
		<hr>
		<p>copyrights&copy;<span> future lift</span>-2022</p>
	</footer>
	  <!-- Footer End -->








</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/list.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>


<script> 

    let stateCheckBox = document.querySelectorAll('.state')
    var state= [];
    stateCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
          state.push(event.target.value)
          console.log(state);
          document.cookie = "state="+state;
          window.location.href = "college-filter-managements.php?gtstate";
        }
      })
    })
    
    let cityCheckBox = document.querySelectorAll('.city')
    var city= [];
    cityCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
          city.push(event.target.value)
          console.log(city);
          document.cookie = "city="+city;
          window.location.href = "college-filter-managements.php?gtcity";
        }
      })
    })
    
    let studyCheckBox = document.querySelectorAll('.studymode')
    var study= [];
    studyCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            study.push(event.target.value)
            console.log(study);
            document.cookie = "study="+study;
          window.location.href = "college-filter-managements.php?gtmode";
        }
      })
    })
    
    let institutetypeCheckBox = document.querySelectorAll('.institutetype')
    var type= [];
    institutetypeCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            type.push(event.target.value)
            console.log(type);
            document.cookie = "type="+type;
          window.location.href = "college-filter-managements.php?institutetype";
        }
      })
    }) 
    
    
    let facilitiesCheckBox = document.querySelectorAll('.facilities')
    var facilities= [];
    facilitiesCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            facilities.push(event.target.value)
          console.log(facilities);
          document.cookie = "facilities="+facilities;
          window.location.href = "college-filter-managements.php?gtfacilities";
        }
      })
    })

    let freerangeCheckBox = document.querySelectorAll('.freerange')
    var freerange= [];
    freerangeCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            freerange.push(event.target.value)
          console.log(freerange);
          document.cookie = "freerange="+freerange;
          window.location.href = "college-filter-managements.php?gtfreerange";
        }
      })
    })
    let hostelsCheckBox = document.querySelectorAll('.hostels')
    var hostels= [];
    hostelsCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            hostels.push(event.target.value)
          console.log(hostels);
          document.cookie = "hostels="+hostels;
          window.location.href = "college-filter-managements.php?gthostels";
        }
      })
    })
    let spacializationCheckBox = document.querySelectorAll('.spacialization')
    var spacialization= [];
    spacializationCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            spacialization.push(event.target.value)
          console.log(spacialization);
          document.cookie = "spacialization="+spacialization;
          window.location.href = "college-filter-managements.php?gtspacialization";
        }
      })
    })

    let degreeCheckBox = document.querySelectorAll('.degree')
    var degree= [];
    degreeCheckBox.forEach((checkbox) => { 
      checkbox.addEventListener('change', (event) => {
        if (event.target.checked) {
            degree.push(event.target.value)
          console.log(degree);
          document.cookie = "degree="+degree;
          window.location.href = "college-filter-managements.php?gtdegree";
        }
      })
    })
    </script>

</html>