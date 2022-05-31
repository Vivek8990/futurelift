var call = document.querySelector('#callFilter');
var show = document.querySelector('.left_side');
  call.onclick =()=>{
    call.classList.toggle('toggle-filter');
    show.classList.toggle('show-filter')
  }

  $('.boxfilterDitails').slice(0, 5).show();
  $('.loadMore').on('click',function(){
    $('.boxfilterDitails:hidden').slice(0, 5).show();
    if($('.boxfilterDitails:hidden').length==0){
      $('.loadMore').fadeOut();
    }
  })


  // read More Function

  function readFunction(){
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("readMore");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }