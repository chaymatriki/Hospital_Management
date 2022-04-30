<?php require('connexion.php'); 
  $medicaments=$pdo->query("SELECT * FROM medicament");
  if (isset($_POST["export"])) {
  $output="";
  $output .= '<table class="table" bordered="1">
                <tr>
                   <th>Id</th>
                   <th>Nom</th>
                   <th>Stock</th>
                   <th>Prix</th>
                </tr>';
foreach ($medicaments as $medicament) {
	$output .= '
	    <tr>
	        <td>'.$medicament["id_med"].'</td>
	        <td>'.$medicament["nom"].'</td>
	        <td>'.$medicament["stock"].'</td>
	        <td>'.$medicament["prix"].'</td>
	    </tr>';
}
$output .= '<table>';
header('Content-Type: application/xls');
header('Content-Disposition:attachment; filename=download.xls');
echo $output; }
?>