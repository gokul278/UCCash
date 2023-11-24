<?php
include('../../requiredfiles/connectiondb.php');

$way = $_GET["way"]; // Change to GET to allow direct access via URL parameters

if ($way == "printinvoice") {
    require './TCPDF-main/tcpdf.php';

    $donatorID = $_GET["donatorID"];

    $id = '';
    $name = '';
    $address = '';
    $panno = '';
    $date='';
    $cost = '';

    $sql = "SELECT * FROM donation_messages WHERE donation_id = $donatorID";
    $res = $con->query($sql);

    foreach($res as $row){
        $id = $row["donation_id"];
        $name = $row["donation_name"];
        $date = $row["donation_date"];
        $address = $row["donation_address1"];
        $panno = $row["donation_panno"];
        $cost = $row["donation_amount"];
    }

    $pdf = new TCPDF();

$pdf->SetTitle('UCCASH FOUNDATION DONATION INVOICE');

$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);

$pdf->AddPage();

$pdf->SetFont('helvetica', '', 16);

$style = 'font-size:10px;border: 1px solid #7D7C7C;width:35%';
$style1 = 'font-size:10px;border: 1px solid #7D7C7C;width:35%';

$html = '
<div align="center">
<img src="./header.png" height="200">
<hr>
<table align="center" cellpadding="5"> 
<tr>
    <td style="text-align: start;font-size:10px;color:#7D7C7C"><div></div>Date:&nbsp;&nbsp;<span style="text-decoration:underline">'.$date.'</span></td>
    <td style="text-align: center;color:grey"><img src="./donation receipt.png" height="220%"></td>
    <td style="text-align: center;font-size:10px;color:#7D7C7C"><div></div>Receipt No:&nbsp;&nbsp;<span style="text-decoration:underline">'.$id.'</span></td>
</tr>
</table>
<div></div>
<table align="start" cellpadding="4">
    <tr>
        <td style="font-size:10px;border-left: 1px solid #7D7C7C;border-top: 1px solid #7D7C7C;width:30%"> Donation Receiver </td>
        <td style="font-size:10px;border: 1px solid #7D7C7C;width:35%">(1) Pan of the reporting person</td>
        <td style="font-size:11px;border: 1px solid #7D7C7C;width:35%"><b>AABTU3607L</b></td>
    </tr>
    <tr>
         <td style=" border-left: 1px solid #7D7C7C; width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%">(2) Name of the reporting person</td>
    <td style="font-size:11px; border: 1px solid #7D7C7C; width: 35%"><b>UCCASH FOUNDATION</b></td>
    </tr>
     <tr>
         <td style=" border-left: 1px solid #7D7C7C; width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(3) Address of the reporting person</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">2-1-133J, Kumaran Nagar, Morambukadu, Omalur Main Road, Konganapuram (PO), Edappadi (TK), Salem (DT), Tamilnadu, India - 637102</td>
    </tr>
         <tr>
         <td style=" border-left: 1px solid #7D7C7C; width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(4) Unique Registration Number</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C"></td>
    </tr>
    <tr>
    <td style=" border-left: 1px solid #7D7C7C;border-bottom: 1px solid #7D7C7C; width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(5) Contact Number</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">+91 9842434284</td>
    </tr>
   <tr>
        <td style="font-size:10px;border-left: 1px solid #7D7C7C;border-top: 1px solid #7D7C7C;width:30%;color:#7D7C7C"> Donor and Donations </td>
        <td style="font-size:10px;border: 1px solid #7D7C7C;width:35%;color:#7D7C7C">(6) Unique Identification Number (PAN)</td>
        <td style="font-size:10px;border: 1px solid #7D7C7C;width:35%;color:#7D7C7C">'.$panno.'</td>
    </tr>
    <tr>
         <td style=" border-left: 1px solid #7D7C7C; width: 30%;color:#7D7C7C">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(7) Name of Donor</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">'.$name.'</td>
    </tr>
     <tr>
         <td style=" border-left: 1px solid #7D7C7C; width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(8) Address of Donor</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">'.$address.'</td>
    </tr>
         <tr>
         <td style=" border-left: 1px solid #7D7C7C; width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(9) Amount of Donation Received</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C"><b>Rs.'.$cost.'</b></td>
    </tr>
    <tr>
    <td style=" border-left: 1px solid #7D7C7C;width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(10) Financial Year of Donation</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">2023-24</td>
    </tr>
    <tr>
    <td style=" border-left: 1px solid #7D7C7C; width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(11) Type of Donation</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">Others</td>
    </tr>
    <tr>
    <td style=" border-left: 1px solid #7D7C7C;border-bottom: 1px solid #7D7C7C; width: 30%">&nbsp;</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">(12) Section under witch donation is eligible for deduction</td>
    <td style="font-size:10px; border: 1px solid #7D7C7C; width: 35%;color:#7D7C7C">Section 80G</td>
    </tr>
</table>
<div align="start" style="font-size:10px;color:#7D7C7C">This 10BE certificate has been generated through from 10BD filed by <b>UCCASH FOUNDATION</b> on <b>'.date("d/m/Y").'</b><div>
<div align="start" style="font-size:11px;color:#7D7C7C"><b>Verification</b></div>
<div align="start" style="font-size:10px;color:#7D7C7C">
I, <b>Dr. Balakrishnan P</b> son of C.Palaniyappan solemnly declare that to the best of my knowledge and belief, the information given in the certificate is correct and complete and is in accordance with the provisions of the income-tax Act 1961. I further declare that I am making this certificate in my capacity, I am also competent to issue this certificate, I am holding Permanent Account Number <b>ATPPB3908E</b>.
</div>
<table>
    <tr>
    <td style="width: 30%">&nbsp;</td>
    <td style="width: 35%;color:#7D7C7C">&nbsp;</td>
    <td style="width: 35%;color:#7D7C7C"><img src="./sign.png" height="700%"></td>
    </tr>
</table>
';

$pdf->writeHTML($html);

$pdf->Output('UCCASH FOUNDATION DONATION INVOICE - ' . $name . '.pdf', 'D');
    exit;
}
?>