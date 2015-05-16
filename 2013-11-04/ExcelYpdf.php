<?

function Imagen($pdf, $imagen, $fila, $columna)
{
$pdf->Image($imagen, (int)$columna*2.113, (int)$fila*3);
}

function lineaH($pdf, $fila, $columna, $longitud)
{
$pdf->setLineStyle(1,'round');
$pdf->setStrokeColor(0,0,0);
$pdf->line((int)$columna*7.38, 830-(int)$fila*13.39,(int)($columna+$longitud)*7.38, 830-(int)$fila*13.39);
}

function palabraPDF($pdf, $fila, $columna, $texto)
{
//$pdf->addText((int)$columna*7.38, 830-(int)$fila*13.39, 6, $texto);
$pdf->SetFont('Courier','',10);
$pdf->SetXY((int)$columna*2.113, (int)$fila*3);
$pdf->Cell( 0, 0 , $texto);
}

function numAcol($columna)
{
if ($columna<27)
	return chr(ord('A')+$columna-1);
else	
	return 'A'.chr(ord('A')+($columna-26)-1);
}

if (isset($_GET["pdf"])) 
   if( $_GET["pdf"]=="1" )
	{	

	include('../pdf/fpdf.php');
	$pdf =& new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Courier','',6);
	$datacreator = array ("Title"=>"el titulo","Author"=>"el autor","Subject"=>"PDF ejemplo","Creator"=>"nn","Producer"=>"nn" );

	Imagen($pdf, '../images/Logo1.jpg', 0, 2);

	palabraPDF($pdf, 12, 3, "AAAAAA", 11);

	$col=30;

        $pdf->SetFillColor(206, 216, 218);  
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(128,0,0);
        $pdf->SetLineWidth(.3);
        $pdf->SetFont('','');
	$header = array('Descripción', 'Cantidad', 'Precio');
        $w = array(55, 25, 25);
        $pdf->SetY(50);
        $pdf->SetX($col);
        for($i=0;$i<count($header);$i++)
          $pdf->Cell($w[$i],7,$header[$i],1,0,'C',true);

	$pdf->Ln();
	$pdf->SetX($col);

	$datos3[] =array("primero", "10", "12.34");
	$datos3[] =array("segundo", "20", "15.74");


	    foreach($datos3 as $row)
    		{
        		
		$pdf->SetX($col);
        	$pdf->Cell($w[0],6,$row[0],'LR',0,'L',false);
        	$pdf->Cell($w[1],6,number_format($row[1], 3),'LR',0,'L',false);
        	$pdf->Cell($w[2],6,number_format($row[2], 2),'LR',0,'R',false);
        	$pdf->Ln();
		}

    	$pdf->SetX($col);
    	$pdf->Cell(array_sum($w),0,'','T');

	    $pdf->Output();
    	exit();
	}

if (isset($_GET["excel"])) 
   if( $_GET["excel"]=="1" )
	{	

			require_once("../excel/PHPExcel.php");
			require_once("../excel/PHPExcel/Writer/Excel5.php");
			$objPHPExcel = new PHPExcel();
			$objPHPExcel->getProperties()->setCreator("autor");
			$objPHPExcel->getProperties()->setLastModifiedBy("autor");
			$objPHPExcel->getProperties()->setTitle("titulo del Excel");
			$objPHPExcel->getProperties()->setSubject("Asunto");
			$objPHPExcel->getProperties()->setDescription("Descripcion");
			$objPHPExcel->setActiveSheetIndex(0);

			$fila=3;

			$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);
			$objPHPExcel->getActiveSheet()->SetCellValue(numAcol(1).$fila, "AAAA");
			$objPHPExcel->getActiveSheet()->SetCellValue(numAcol(3).$fila, "BBBB");

			$objPHPExcel->getActiveSheet()->setTitle('Reporte');
			$objPHPExcel->getSecurity()->setLockWindows(true);
			$objPHPExcel->getSecurity()->setLockStructure(true);
 
 
			// Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel.
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="reporte.xls"');
			header('Cache-Control: max-age=0');

			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			$objWriter->save('php://output');
			exit();

	}

?>


<script>
function verPDF()
{

dt = new Date(); 
window.open( "pru6.php?pdf=1" +"&nocache="+dt.getSeconds()+dt.getMilliseconds(),"_blank") ;

}
function verExcel()
{

dt = new Date(); 
window.open( "pru6.php?excel=1" +"&nocache="+dt.getSeconds()+dt.getMilliseconds(),"_blank") ;

}
</script>


<input type="button" value="pdf"  onclick="verPDF()">
<input type="button" value="excel"  onclick="verExcel()">
