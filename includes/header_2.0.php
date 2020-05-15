 
<!doctype html>
<body>
<section class="intro">
	
<button class="tablink" onclick="openPage('About', this, 'black')">Louigene</button>
<button class="tablink" onclick="openPage('News', this, 'black')" id="defaultOpen">Gallery</button>
<button class="tablink" onclick="openPage('Contact', this, 'black')">Contact</button>

<div id="About" class="tabcontent">

        	<?php 
			include 'about.html';
		?>
</div>
    
<div id="News" class="tabcontent">
	 <h3>Galleries</h3>
<!-- The four columns -->
<div class="row">
	 
  <div class="column">
        <h1>Louigene</h1>
      <h2>The man himself </h2>
    <a href="includes/gallery.html"> <img src="../MCDad/gallery/Louigene/camera.JPG" style="width:50%" onclick="myFunction(this);"></a> 
  </div>
  <div class="column">
             <h1>Events</h1>
      <h2>Everlasting memories</h2>      
     <a href="includes/gallery.html"> <img src="../MCDad/gallery/Louigene/chair.2.0.JPG"  style="width:50%" onclick="myFunction(this);"></a>
  </div>
  <div class="column">
         <h1>Model</h1>
      <h2>One on One Shot</h2>
    <a href="includes/gallery.html"> <img src="../MCDad/gallery/Louigene//li high la.JPG" style="width:50%" onclick="myFunction(this);"></a>
  </div>
</div>
<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>      	
    </div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
    
         	<?php 
			include 'contact.html';
		?>
</div>
    
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
		</section><!-- End of the header section-->
</body>
