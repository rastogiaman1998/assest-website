<?php
   require_once('./common/db.php');
   require './sections/vendor/autoload.php';
   use PhpOffice\PhpSpreadsheet\Spreadsheet;
   use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
   
  

         $finaltable="";

         if(isset($_POST['addtocart'])) {  
         
            $finaltable .= "<table class='table'>";
            
            $finaltable .= "<tr>
            <td colspan='2'><h5>Margshree Enterprises<h5></td>
            <td colspan='2'><h5>Customer London Brewrry Shop, 10 Paddington Street</h5></td>
          </tr>";
            $finaltable .= "<tr><td>Model</td><td>Name</td><td>Height</td><td>Width</td><td>Depth</td><td>Images</td></tr>";

            foreach($_POST['item_selected'] as $item)
                      { 

                          $sql1 ="SELECT * FROM productdetails WHERE product_id = $item";
                          $result = $conn->query($sql1); 
                          $finaltable .= "<tr>";
                          while($row = $result->fetch_assoc()){
                           $finaltable .= "<td>".$row['model']."</td>";
                           $finaltable .= "<td>".$row['name']."</td>";
                           $finaltable .= "<td>".$row['height']."</td>";
                           $finaltable .= "<td>".$row['width']."</td>";
                           $finaltable .= "<td>".$row['depth']."</td>";

                           /* $image = '<img width="100px" height="100px" src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/>';
                           if($image){

                            echo '<td>'.$image.'</td>';
                           } */
                        

                          }
                          $finaltable .= "</tr>";

                      }

                      $finaltable .= "</table>";
         
         }

         echo $finaltable;

         // Export table



$reader = new \PhpOffice\PhpSpreadsheet\Reader\Html();
$reader->setReadDataOnly(false);
$spreadsheet = $reader->loadFromString($finaltable);


$styleArray = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
    ],
    'borders' => [
        'top' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
        ],
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
        'rotation' => 90,
        'startColor' => [
            'argb' => 'f6ff33',
        ],
        'endColor' => [
            'argb' => 'f6ff33',
        ],
    ],
];

$styleArrayForTableHeader = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
    ],
    'borders' => [
        'top' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
        ],
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
        'rotation' => 90,
        'startColor' => [
            'argb' => 'EB3656',
        ],
        'endColor' => [
            'argb' => 'EB3656',
        ],
    ],
];


$spreadsheet->getActiveSheet()->getStyle('A1:F1')->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->mergeCells("A1:B1");
$spreadsheet->getActiveSheet()->mergeCells("C1:F1");

$spreadsheet->getActiveSheet()->getStyle('A2:F2')->applyFromArray($styleArrayForTableHeader);

$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$spreadsheet->getActiveSheet()->freezePane('B2');


$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save('write.xlsx')


      ?>
 <button type="submit" name="submitbutton" class="btn btn-danger">Get it on your Email</button>
            <button type="submit" name="submitbutton" class="btn btn-danger">Download Excel</button>
            <button type="submit" name="submitbutton" class="btn btn-danger">Modify cart</button>
            <button type="submit" name="submitbutton" class="btn btn-danger">Get Packing Estimate</button>
