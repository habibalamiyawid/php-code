<?php
interface Printer{
    function print();

}
class PaperPrinter implements Printer{
    public function print(){
        echo "print from printer";
    }

}
class TreeDPrinter{
    public function create(){
        echo "Create from 3D printer";
    }

} //if i implement here error will occurs, cause there is no function named print
class PDFPrinter implements Printer{
    public function print(){
        echo "print the PDF ";
    }

}
function PrintDoc(Printer $printer){//if u use printer like this then its a type
    $printer->print();
}
$pdf=new PDFPrinter();
PrintDoc($pdf);

//but if i 3D printer in the same way it will show error
?>