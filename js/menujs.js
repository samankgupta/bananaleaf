document.getElementById("veg").addEventListener("click", function() {
  var l1=document.getElementsByClassName("veg").length;
  for (var i = 0; i < l1; i++) {
  	document.getElementsByClassName("veg")[i].style.display="block";
  }
  var l2=document.getElementsByClassName("nonveg").length;
  for (var i = 0; i < l2; i++) {
  	document.getElementsByClassName("nonveg")[i].style.display="none";
  }
});
document.getElementById("nonveg").addEventListener("click", function() {
  var l1=document.getElementsByClassName("nonveg").length;
  for (var i = 0; i < l1; i++) {
  	document.getElementsByClassName("nonveg")[i].style.display="block";
  }
  var l2=document.getElementsByClassName("veg").length;
  for (var i = 0; i < l2; i++) {
  	document.getElementsByClassName("veg")[i].style.display="none";
  }
});
document.getElementById("both").addEventListener("click", function() {
  var l1=document.getElementsByClassName("veg").length;
  for (var i = 0; i < l1; i++) {
  	document.getElementsByClassName("veg")[i].style.display="block";
  }
  var l2=document.getElementsByClassName("nonveg").length;
  for (var i = 0; i < l2; i++) {
  	document.getElementsByClassName("nonveg")[i].style.display="block";
  }
});

window.addEventListener("scroll", function() {
  var value=window.scrollY;
  if(window.pageYOffset >350)
  {
  	document.getElementById("backtotop").style.display="block";	
  }
  else{
  	document.getElementById("backtotop").style.display="none";		
  }
});

$('.table tbody tr').click(function(event) {
  if (event.target.type !== 'radio') {
    if($(':radio', this).is(':checked'))
    {
      $(':radio', this).prop("checked", false);
    }
    else
    {
      $(':radio', this).prop("checked", true);
    }
  }
});
