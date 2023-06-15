<?php
include ('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$sql = "SELECT * FROM chart_news";
$result = mysqli_query($conn, $sql);
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Judul');
$sheet->setCellValue('C1', 'Counter');

if(mysqli_num_rows($result) > 0){
    $i = 2;
    while($row = mysqli_fetch_assoc($result)){
        $sheet->setCellValue('A'.$i, $row['id']);
        $sheet->setCellValue('B'.$i, $row['judul']);
        $sheet->setCellValue('C'.$i, $row['counter']);
        $i++;
    }
}

$writer = new Xlsx($spreadsheet);
$writer->save('chart_news.xlsx');
header("location:chart_news.xlsx");
?>