<?php
$connect = mysqli_connect("localhost", "root", "", "sinisa");


$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM cegek 
	WHERE Naziv_Firme LIKE '%".$search."%'
	OR Opstina LIKE '%".$search."%' 
	OR mesto LIKE '%".$search."%' 
	OR Kategorija LIKE '%".$search."%' 
	OR Podkategorija LIKE '%".$search."%'
	OR image
	OR image2
	";
}
else
{
	$query = "
	SELECT * FROM cegek ORDER BY id";

	// select name from podkategorija where id = $row['podkategorija_id']
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '
					
';
	while($row = mysqli_fetch_array($result))
	{

		$podkategory = mysqli_query( $connect, 'SELECT * FROM podkategorija where sid = ' . $row['Podkategorija'] );
		$x = mysqli_fetch_assoc( $podkategory );


		$output .= '
		<center><table>
		<tr width="100%">
			<td><hr class="new5"></td>
		</tr>
		<tr style="background-color:#C0C0C0;">
				<td style="font-size:2vw" width="1200px" height="50px"><center>'.$row["mesto"].'</td></center>

			</tr>
			<tr style="background-color:#D8D8D8;">

				<td style="font-size:2vw" width="1200px" height="50px"><center>'.$x['sname'].'</td></center>

			</tr>
			</table>
			<table>
			<tr>
			<th></th>
			<th>
			<a href="'.$row["O_nama"].'"><button class="button button1">O Nama</button></a>
			<a href="'.$row["Radno_Vreme"].'"><button class="button button1">Radno Vreme</button></a>
			<a href="'.$row["Galerija"].'"><button class="button button1">Galerija</button></a>
			<a href="'.$row["Podaci_Firme"].'"><button class="button button1">Podaci Firme</button></a>
			<a href="'.$row["Gde_smo"].'"><button class="button button1">Gde Smo</button></a>
			<a href="'.$row["Web_Page"].'"><button class="button button1">Web Site</button></a>
			<a href="'.$row["Facebook"].'"><button class="button button1">Facebook</button></a>
			<a href="'.$row["Kontakt"].'"><button class="button button1">Kontakt</button></a></th>
			<th></th>
			</tr>
			<tr>
			<th></th>	
			<td><center><img src="Image/images/'.$row["image"].'" width="350px" height="225px"></td></center>
				<th></th>	
			
		</tr>
			<tr>
		<th></th>	
			<td><center><img src="Image/images/'.$row["image2"].'" width="350px" height="225px"></td></center>
			<th></th>	
		</tr>
		
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
<style>
  hr.new5 {
  border: 2px solid gray;
  border-radius: 5px;
}
img {
  border: 2px solid black;
  border-radius: 4px;
  padding: 5px;
}
.button {
  border: none;
  color: black;
  padding: 13px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color: #D3D3D3;}
/* table, th, td {
  border: 1px solid black;
} */
</style>