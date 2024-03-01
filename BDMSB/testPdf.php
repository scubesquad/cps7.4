<?php
require_once 'global.php';
require_once(ROOT_CLASSES.'tcpdf/tcpdf.php');
ini_set("max_execution_time", 300000);
error_reporting(E_ALL);
ini_set("display_errors", 1);
	
	$pdf = new TCPDF();
	$pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
	$pdf->AddPage();


	$template_img_generate = dirname(__FILE__) . "\images/Cheque Wave.png";

    // $image1 = @imagecreatefrompng(dirname(__FILE__) . "\images\Cheque Wave.png");
    // $pdf->Image($template_img_generate, $revAccnoX, $arrPos[$i]["revAccnoY"], 33.5, 3, "PNG", '', 'R', true,$dpi = 300, $palign = '', $ismask = false, $imgmask = false, $border = 0, $fitbox = false, $hidden = false, $fitonpage = false, $alt = false,false);

    $pdf->Image($template_img_generate, 10, 60, 33.5, 3, '', '', 'R', false);

    $pdf->Output('name.pdf', 'I');

?>