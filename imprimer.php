<?php
include '../core/newsletterC.php';
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Tous les newsletters </h1>
		<table style="width:100%;border: 1px dashed">
		<tr>
			<th style="width: 20%">Nombre de mails par mois </th>
			<th style="width: 15%">Mail</th>
			<th style="width: 15%">Type</th>
			
		</tr>
		<?php
		$newsletter1C=new newsletterC();
		$liste=$newsletter1C->getnewsletter();
		foreach($liste as $row) {
			?>
			<tr>
				<td> <?php echo $row['nombre_mails'];?> </td>
			<td> <?php echo $row['mail'];?> </td>

			<td> <?php echo $row['type'];?> </td>
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