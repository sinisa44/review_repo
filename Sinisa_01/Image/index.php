<?php


  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sinisa" );

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
	  $image = $_FILES['image']['name'];
	  $image2 = $_FILES['image2']['name'];
	  // Get text
	  $Naziv_Firme = mysqli_real_escape_string($db, $_POST['Naziv_Firme']);
	  $Opstina = mysqli_real_escape_string($db, $_POST['Opstina']); 
	  $mesto = mysqli_real_escape_string($db, $_POST['mesto']); 
	  $Kategorija = mysqli_real_escape_string($db, $_POST['Kategorija']);
	  $Podkategorija = mysqli_real_escape_string($db, $_POST['Podkategorija']);
	  $Facebook = mysqli_real_escape_string($db, $_POST['Facebook']);
	  $Web_Page = mysqli_real_escape_string($db, $_POST['Web_Page']);
	  $Google_Maps = mysqli_real_escape_string($db, $_POST['Google_Maps']);
	  $Prosireni_Podaci = mysqli_real_escape_string($db, $_POST['Prosireni_Podaci']);
	  $O_nama = mysqli_real_escape_string($db, $_POST['O_nama']);
	  $Radno_Vreme = mysqli_real_escape_string($db, $_POST['Radno_Vreme']);
	  $Galerija = mysqli_real_escape_string($db, $_POST['Galerija']);
	  $Podaci_Firme = mysqli_real_escape_string($db, $_POST['Podaci_Firme']);
	  $Gde_smo = mysqli_real_escape_string($db, $_POST['Gde_smo']);
	  $Kontakt = mysqli_real_escape_string($db, $_POST['Kontakt']);
	  

  	// image file directory
	  $target = "images/".basename($image);
	  if( isset( $image2 ) ){
	  	$target2 = "images/".basename($image2);
	  }
	//   $target = "images/".basename($image);	  

	$sql = "INSERT INTO cegek (Naziv_Firme, Opstina, mesto, Kategorija, Podkategorija, image, image2, Facebook, Web_Page, Google_Maps, Prosireni_Podaci, O_nama, Radno_Vreme, Galerija, Podaci_Firme, Gde_smo, Kontakt) VALUES ('$Naziv_Firme', '$Opstina', '$mesto', '$Kategorija', '$Podkategorija', '$image', '$image2', '$Facebook', '$Web_Page', '$Google_Maps', '$Prosireni_Podaci', '$O_nama', '$Radno_Vreme', '$Galerija', '$Podaci_Firme', '$Gde_smo', '$Kontakt')";
	// execute query

  	mysqli_query($db, $sql);

	if( move_uploaded_file( $_FILES['image2']['tmp_name'], $target2)) {
		$msg = 'Image uploaded successfully';
	}else{
		$msg = 'Failed to upload image';
	}

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target) ) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
	  }  
	}
 
  $result1 = mysqli_query($db, "SELECT * FROM eu_srb_mesta");
  $result4 = mysqli_query($db, "SELECT * FROM eu_srb_mesta");
  $result2 = mysqli_query($db, "SELECT * FROM kategorija");
  $result3 = mysqli_query($db, "SELECT * FROM podkategorija");
  $result5 = mysqli_query($db, "SELECT * FROM opstina");
  $result6 = mysqli_query($db, "SELECT * FROM mesto");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<h4 align="center"><a href="logout.php">Logout</a></h4>
<center><h1>Registration Page</h1></center>
<div id="content">
<form method="POST" action="index.php" enctype="multipart/form-data">
	  <div>
	  Naziv Firme: <input type="text" name="Naziv_Firme" required="required">
  		</div>
		  <div>
	  O Nama: <input type="text" name="O_nama" >
  		</div>
		  <div>
	  Radno Vreme: <input type="text" name="Radno_Vreme" >
  		</div>
		  <div>
	  Galerija: <input type="text" name="Galerija" >
  		</div>
		  <div>
	  Podaci Firme: <input type="text" name="Podaci_Firme" >
  		</div>
		  <div>
	  Gde smo: <input type="text" name="Gde_smo" >
  		</div>
		  <div>
	  Kontakt: <input type="text" name="Kontakt" >
  		</div>
		  <div>
	  Instagram: <input type="text" name="">
  		</div>
		  <div>
	  Facebook: <input type="text" name="Facebook" >
  		</div>
		  <div>
	  Youtube: <input type="text" name="">
  		</div>
		  <div>
	  Web Page: <input type="text" name="Web_Page" >
  		</div>
		  <div>
	  News Letter: <input type="text" name="">
  		</div>
		  <div>
	  RSS: <input type="text" name="" >
  		</div>
		  <div>
	  Google_Maps: <input type="text" name="Google_Maps" >
  		</div>
	  <div>
		Opstina: <select name="Opstina" required="required">
		<option value="Becej">Becej</option>
	  </select>
  	  </div>
	  <div>
      Mesto: <select name="mesto" required="required">
	  <option value="Becej">Becej</option>
	  </select>
  	  </div>
		<div>
        Kategorija : 
        <select id="Kategorija" name="Kategorija" >
        	<option value="">Select Kategorija</option>
        </select>
				</div>
				<div>
        Podkategorija : 
        <select id="Podkategorija" name="Podkategorija">
        	<option value=""></option>
        </select>
		</div>

  	<input type="hidden" name="size" value="1000000">
  	<div>
	  Visit Card Page 1: <input type="file" name="image" >
  	</div>
	  <div>
	  Visit Card Page 2: <input type="file" name="image2">
  	</div>
		<div>
		Prosireni Podaci: <select name="Prosireni_Podaci" required="required">
	  <option value="NE">NE&nbsp</option>
	  <option value="DA">DA&nbsp</option>
	  </select>
  	  </div>
  	<div>
  		<button type="submit" name="upload">Upload</button>
  	</div>
  </form>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  	function loadData(type, category_id){
  		$.ajax({
  			url : "load-cs.php",
  			type : "POST",
  			data: {type : type, id : category_id},
  			success : function(data){
  				if(type == "stateData"){
  					$("#Podkategorija").html(data);
  				}else{
  					$("#Kategorija").append(data);
  				}
  				
  			}
  		});
  	}

  	loadData();

  	$("#Kategorija").on("change",function(){
  		var country = $("#Kategorija").val();

  		if(country != ""){
  			loadData("stateData", country);
  		}else{
  			$("#Podkategorija").html("");
  		}

  		
  	})
  });
</script>
</body>
</html>
