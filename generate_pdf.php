<?php
require('fpdf186/fpdf.php'); // Adjust the path as needed

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Student List', 0, 1, 'C');
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

include('connection.php');
$query = "SELECT name, gender, previous_school, class, photo FROM register";
$result = mysqli_query($connection, $query);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(50, 10, $row['name'], 1, 0);
    $pdf->Cell(30, 10, $row['gender'], 1, 0);
    $pdf->Cell(60, 10, $row['previous_school'], 1, 0);
    $pdf->Cell(50, 10, getClassLabel($row['class']), 1, 1);
}

function getClassLabel($classValue)
{
    switch ($classValue) {
        case 1:
            return 'Social';
        case 2:
            return 'Social Science';
        case 3:
            return 'Language';
        default:
            return 'Unknown';
    }
}

$pdf->Output();
mysqli_close($connection);
?>
