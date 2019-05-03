<?php
include '../core/restaurantC.php';
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Tous les restaurants </h1>
		<table style="width:100%;border: 1px dashed">
		<tr>
			<th style="width: 20%">Cin </th>
			<th style="width: 15%">Nom</th>
			<th style="width: 15%">Nom du restaurant</th>
			<th style="width: 15%">Type</th>			
			<th style="width: 15%">Description</th>

			
		</tr>
		<?php
		$restaurant1C=new restaurantC();
		$liste=$restaurant1C->getrestaurant();
		foreach($liste as $row) {
			?>
			<tr>
				<td> <?php echo $row['cin'];?> </td>
			<td> <?php echo $row['nom'];?> </td>
			<td> <?php echo $row['nom_restaurant'];?> </td>
			<td> <?php echo $row['type'];?> </td>
			<td> <?php echo $row['description'];?> </td>

		</tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>