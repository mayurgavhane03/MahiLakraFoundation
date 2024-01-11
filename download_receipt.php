<?php
require_once('tcpdf/tcpdf.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payment_id = $_POST['payment_id'];
    $name = $_POST['name'];

    $pdf = new TCPDF();
    $pdf->SetAutoPageBreak(true, 10);

    $pdf->AddPage();
    $pdf->SetFont('times', '', 12);
    $pdf->Cell(0, 10, 'We appreciate your contribution to the Mahi Lakra Foundation.', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Payment Receipt', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Name: ' . $name, 0, 1);
    $pdf->Cell(0, 10, 'Payment ID: ' . $payment_id, 0, 1);
    

    $filename = 'receipt_' . $payment_id . '.pdf';
    $pdf->Output($filename, 'D');
}
?>
