<?php

$s1s=0;
$s2s=0;
$s3s=0;
$s4s=0;
$s5s=0;
$s6s=0;
$s7s=0;
$s8s=0;
$s9s=0;
$s10s=0;
$s11s=0;
$s12s=0;
$s13s=0;
$s14s=0;
$s15s=0;
$s16s=0;
$s17s=0;
$s18s=0;
$s19s=0;
$s20s=0;
$s21s=0;
$s22s=0;
$s23s=0;
$s24s=0;
$s25s=0;
$s26s=0;
$s27s=0;
$s28s=0;
$s29s=0;
$s30s=0;
$s31s=0;
$s32s=0;
$s33s=0;
$s34s=0;
$s35s=0;
$s36s=0;
$s37s=0;
$s38s=0;
$s39s=0;
$s40s=0;
$s41s=0;
$s42s=0;
$s43s=0;
$s44s=0;
$s45s=0;
$s46s=0;
$s47s=0;
$s48s=0;
$s49s=0;





include_once "config.php";

$sql = "SELECT * FROM `booking`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $availability=$row["availability"];
        if ($seat==1 && $not_available==1) $s1s=1;
        if ($seat==2 && $not_available==1) $s2s=1;
        if ($seat==3 && $not_available==1) $s3s=1;
        if ($seat==4 && $not_available==1) $s4s=1;
        if ($seat==5 && $not_available==1) $s5s=1;
        if ($seat==6 && $not_available==1) $s6s=1;
        if ($seat==7 && $not_available==1) $s7s=1;
        if ($seat==8 && $not_available==1) $s8s=1;
        if ($seat==9 && $not_available==1) $s9s=1;
        if ($seat==10 && $not_available==1) $s10s=1;
        if ($seat==11 && $not_available==1) $s11s=1;
        if ($seat==12 && $not_available==1) $s12s=1;
        if ($seat==13 && $not_available==1) $s13s=1;
        if ($seat==14 && $not_available==1) $s14s=1;
        if ($seat==15 && $not_available==1) $s15s=1;
        if ($seat==16 && $not_available==1) $s16s=1;
        if ($seat==17 && $not_available==1) $s17s=1;
        if ($seat==18 && $not_available==1) $s18s=1;
        if ($seat==19 && $not_available==1) $s19s=1;
        if ($seat==20 && $not_available==1) $s20s=1;
        if ($seat==21 && $not_available==1) $s21s=1;
        if ($seat==22 && $not_available==1) $s22s=1;
        if ($seat==23 && $not_available==1) $s23s=1;
        if ($seat==24 && $not_available==1) $s24s=1;
        if ($seat==25 && $not_available==1) $s25s=1;
        if ($seat==26 && $not_available==1) $s26s=1;
        if ($seat==27 && $not_available==1) $s27s=1;
        if ($seat==28 && $not_available==1) $s28s=1;
        if ($seat==29 && $not_available==1) $s29s=1;
        if ($seat==30 && $not_available==1) $s30s=1;
        if ($seat==31 && $not_available==1) $s31s=1;
        if ($seat==32 && $not_available==1) $s32s=1;
        if ($seat==33 && $not_available==1) $s33s=1;
        if ($seat==34 && $not_available==1) $s34s=1;
        if ($seat==35 && $not_available==1) $s35s=1;
        if ($seat==36 && $not_available==1) $s36s=1;
        if ($seat==37 && $not_available==1) $s37s=1;
        if ($seat==38 && $not_available==1) $s38s=1;
        if ($seat==39 && $not_available==1) $s39s=1;
        if ($seat==40 && $not_available==1) $s40s=1;
        if ($seat==41 && $not_available==1) $s41s=1;
        if ($seat==42 && $not_available==1) $s42s=1;
        if ($seat==43 && $not_available==1) $s43s=1;
        if ($seat==44 && $not_available==1) $s44s=1;
        if ($seat==45 && $not_available==1) $s45s=1;
        if ($seat==46 && $not_available==1) $s46s=1;
        if ($seat==47 && $not_available==1) $s47s=1;
        if ($seat==48 && $not_available==1) $s48s=1;
        if ($seat==49 && $not_available==1) $s49s=1;
        if ($seat==50 && $not_available==1) $s50s=1;
        if ($seat==51 && $not_available==1) $s51s=1;
        if ($seat==52 && $not_available==1) $s52s=1;
        if ($seat==53 && $not_available==1) $s53s=1;
        if ($seat==54 && $not_available==1) $s54s=1;
       

    }

} 
$conn->close();


if ($s1s==1)  $s1="car";
else $s1="refresh";

if ($s2s==1)  $s2="car";
else $s2="refresh";

if ($s3s==1)  $s3="car";
else $s3="refresh";

if ($s4s==1)  $s4="car";
else $s4="refresh";

if ($s5s==1)  $s5="car";
else $s5="refresh";

if ($s6s==1)  $s6="car";
else $s6="refresh";

if ($s7s==1)  $s7="car";
else $s7="refresh";

if ($s8s==1)  $s8="car";
else $s8="refresh";

if ($s9s==1)  $s9="car";
else $s9="refresh";

if ($s10s==1)  $s10="car";
else $s10="refresh";

if ($s11s==1)  $s11="car";
else $s11="refresh";

if ($s12s==1)  $s12="car";
else $s12="refresh";

if ($s13s==1)  $s13="car";
else $s13="refresh";

if ($s14s==1)  $s14="car";
else $s14="refresh";

if ($s15s==1)  $s15="car";
else $s15="refresh";

if ($s16s==1)  $s16="car";
else $s16="refresh";

if ($s17s==1)  $s17="car";
else $s17="refresh";

if ($s18s==1)  $s18="car";
else $s18="refresh";

if ($s19s==1)  $s19="car";
else $s19="refresh";

if ($s20s==1)  $s20="car";
else $s20="refresh";

if ($s21s==1)  $s21="car";
else $s21="refresh";

if ($s22s==1)  $s22="car";
else $s22="refresh";

if ($s23s==1)  $s23="car";
else $s23="refresh";

if ($s24s==1)  $s24="car";
else $s24="refresh";

if ($s25s==1)  $s25="car";
else $s25="refresh";

if ($s26s==1)  $s26="car";
else $s26="refresh";

if ($s27s==1)  $s27="car";
else $s27="refresh";

if ($s28s==1)  $s28="car";
else $s28="refresh";

if ($s29s==1)  $s29="car";
else $s29="refresh";

if ($s30s==1)  $s30="car";
else $s30="refresh";

if ($s31s==1)  $s31="car";
else $s31="refresh";

if ($s32s==1)  $s32="car";
else $s32="refresh";

if ($s33s==1)  $s33="car";
else $s33="refresh";

if ($s34s==1)  $s34="car";
else $s34="refresh";

if ($s3s==1)  $s35="car";
else $s35="refresh";

if ($s36s==1)  $s36="car";
else $s36="refresh";

if ($s37s==1)  $s37="car";
else $s37="refresh";


if ($s38s==1)  $s38="car";
else $s38="refresh";


if ($s39s==1)  $s39="car";
else $s39="refresh";


if ($s40s==1)  $s40="car";
else $s40="refresh";


if ($s41s==1)  $s41="car";
else $s41="refresh";


if ($s42s==1)  $s42="car";
else $s42="refresh";


if ($s43s==1)  $s43="car";
else $s43="refresh";


if ($s44s==1)  $s44="car";
else $s44="refresh";


if ($s45s==1)  $s45="car";
else $s45="refresh";


if ($s46s==1)  $s46="car";
else $s46="refresh";


if ($s47s==1)  $s47="car";
else $s47="refresh";


if ($s48s==1)  $s48="car";
else $s48="refresh";

if ($s49s==1)  $s49="car";
else $s49="refresh";

setInfo($s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17,$s18,$s19,$s20,$s21,$s22,$s23,$s24,$s25,$s26,$s27,$s28,$s29,$s30,$s31,$s32,$s33,$s34,$s35,$s36,$s37,$s38,$s39,$s40,$s41,$s42,$s43,$s44,$s45,$s46,$s47,$s48,$s49);


function setInfo($s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17,$s18,$s19,$s20,$s21,$s22,$s23,$s24,$s25,$s26,$s27,$s28,$s29,$s30,$s31,$s32,$s33,$s34,$s35,$s36,$s37,$s38,$s39,$s40,$s41,$s42,$s43,$s44,$s45,$s46,$s47,$s48,$s49) {
echo"<table class='w3-table'>
    <tr>
      <th onclick='book(1)'> <i class='w3-xxlarge'><i class='fa fa-$s1'></i></i></th>
      <th> </th>
      <th> </i></th>
      <th> </i></i></th>
      <th> <i class='w3-xxlarge'><i class='fa fa-car'></i></i></th>
    </tr>
  
    <tr>
      <th onclick='book(2)'> <i class='w3-xxlarge'><i class='fa fa-$s2'></i></i></th>
      <th></th>
      <th onclick='book(3)'> <i class='w3-xxlarge'><i class='fa fa-$s3'></i></i></th>
      <th onclick='book(4)'> <i class='w3-xxlarge'><i class='fa fa-$s4'></i></i></th>
      <th onclick='book(5)'>  <i class='w3-xxlarge'><i class='fa fa-$s5'></i></i></th>
    </tr>

    <tr>
    <th></th>
    <th></th>     
    <th></th>
      <th onclick='book(6)'> <i class='w3-xxlarge'><i class='fa fa-$s6'></i></i></th>
      <th onclick='book(7)'>  <i class='w3-xxlarge'><i class='fa fa-$s7'></i></i></th>
    </tr>

    <tr>
      <th onclick='book(11)'> <i class='w3-xxlarge'><i class='fa fa-$s11'></i></i></th>
      <th onclick='book(10)'> <i class='w3-xxlarge'><i class='fa fa-$s10'></i></i></th>
      <th></th>
      <th onclick='book(9)'> <i class='w3-xxlarge'><i class='fa fa-$s9'></i></i></th>
      <th onclick='book(8)'>  <i class='w3-xxlarge'><i class='fa fa-$s8'></i></i></th>
    </tr>


    <tr>
      <th onclick='book(12)'> <i class='w3-xxlarge'><i class='fa fa-$s12'></i></i></th>
      <th onclick='book(13)'> <i class='w3-xxlarge'><i class='fa fa-$s13'></i></i></th>
      <th></th>
      <th onclick='book(14)'> <i class='w3-xxlarge'><i class='fa fa-$s14'></i></i></th>
      <th onclick='book(15)'> <i class='w3-xxlarge'><i class='fa fa-$s15'></i></i></th>
    </tr>

    <tr>
      <th onclick='book(19)'> <i class='w3-xxlarge'><i class='fa fa-$s19'></i></i></th>
      <th onclick='book(18)'> <i class='w3-xxlarge'><i class='fa fa-$s18'></i></i></th>
      <th></th>
      <th onclick='book(17)'> <i class='w3-xxlarge'><i class='fa fa-$s17'></i></i></th>
      <th onclick='book(16)'>  <i class='w3-xxlarge'><i class='fa fa-$s16'></i></i></th>
    </tr>

    <tr>
      <th onclick='book(20)'> <i class='w3-xxlarge'><i class='fa fa-$s20'></i></i></th>
      <th onclick='book(21)'> <i class='w3-xxlarge'><i class='fa fa-$s21'></i></i></th>
      <th></th>
      <th onclick='book(22)'> <i class='w3-xxlarge'><i class='fa fa-$s22'></i></i></th>
      <th onclick='book(23)'>  <i class='w3-xxlarge'><i class='fa fa-$s23'></i></i></th>
    </tr>

    <tr>
      <th onclick='book(27)'> <i class='w3-xxlarge'><i class='fa fa-$s27'></i></i></th>
      <th onclick='book(26)'> <i class='w3-xxlarge'><i class='fa fa-$s26'></i></i></th>
      <th></th>
      <th onclick='book(25)'> <i class='w3-xxlarge'><i class='fa fa-$s25'></i></i></th>
      <th onclick='book(24)'>  <i class='w3-xxlarge'><i class='fa fa-$s24'></i></i></th>
    </tr>

    <tr>
      <th onclick='book(28)'> <i class='w3-xxlarge'><i class='fa fa-$s28'></i></i></th>
      <th onclick='book(29)'> <i class='w3-xxlarge'><i class='fa fa-$s29'></i></i></th>
      <th onclick='book(30)'> <i class='w3-xxlarge'><i class='fa fa-$s30'></i></i></th>
      <th onclick='book(31)'> <i class='w3-xxlarge'><i class='fa fa-$s31'></i></i></th>
      <th onclick='book(32)'> <i class='w3-xxlarge'><i class='fa fa-$s32'></i></i></th>
    </tr>    
  </table

  
  
  ";
}

function ND_3708($s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17,$s18,$s19,$s20,$s21,$s22,$s23,$s24,$s25,$s26,$s27,$s28,$s29,$s30,$s31,$s32,$s33,$s34,$s35,$s36,$s37,$s38,$s39,$s40,$s41,$s42,$s43,$s44,$s45,$s46,$s47,$s48,$s49) {
  echo
  "
  <table class='w3-table'>
      <tr>
        <th onclick='book(1)'> <i class='w3-xxlarge'><i class='fa fa-$s1'></i></i></th>
        <th> </th>
        <th> </i></th>
        <th> </i></i></th>
        <th> <i class='w3-xxlarge'><i class='fa fa-car'></i></i></th>
      </tr>
    
      <tr>
        <th onclick='book(2)'> <i class='w3-xxlarge'><i class='fa fa-$s2'></i></i></th>
        <th></th>
        <th onclick='book(3)'> <i class='w3-xxlarge'><i class='fa fa-$s3'></i></i></th>
        <th onclick='book(4)'> <i class='w3-xxlarge'><i class='fa fa-$s4'></i></i></th>
        <th onclick='book(5)'>  <i class='w3-xxlarge'><i class='fa fa-$s5'></i></i></th>
      </tr>
  
      <tr>
      <th></th>
      <th></th>     
      <th></th>
        <th onclick='book(6)'> <i class='w3-xxlarge'><i class='fa fa-$s6'></i></i></th>
        <th onclick='book(7)'>  <i class='w3-xxlarge'><i class='fa fa-$s7'></i></i></th>
      </tr>
  
      <tr>
        <th onclick='book(11)'> <i class='w3-xxlarge'><i class='fa fa-$s11'></i></i></th>
        <th onclick='book(10)'> <i class='w3-xxlarge'><i class='fa fa-$s10'></i></i></th>
        <th onclick='book(32)'> <i class='w3-xxlarge'><i class='fa fa-$s32'></i></i></th>
        <th onclick='book(9)'> <i class='w3-xxlarge'><i class='fa fa-$s9'></i></i></th>
        <th onclick='book(8)'>  <i class='w3-xxlarge'><i class='fa fa-$s8'></i></i></th>
      </tr>
  
  
      <tr>
        <th onclick='book(12)'> <i class='w3-xxlarge'><i class='fa fa-$s12'></i></i></th>
        <th onclick='book(13)'> <i class='w3-xxlarge'><i class='fa fa-$s13'></i></i></th>
        <th></th>
        <th onclick='book(14)'> <i class='w3-xxlarge'><i class='fa fa-$s14'></i></i></th>
        <th onclick='book(15)'> <i class='w3-xxlarge'><i class='fa fa-$s15'></i></i></th>
      </tr>
  
      <tr>
        <th onclick='book(19)'> <i class='w3-xxlarge'><i class='fa fa-$s19'></i></i></th>
        <th onclick='book(18)'> <i class='w3-xxlarge'><i class='fa fa-$s18'></i></i></th>
        <th></th>
        <th onclick='book(17)'> <i class='w3-xxlarge'><i class='fa fa-$s17'></i></i></th>
        <th onclick='book(16)'>  <i class='w3-xxlarge'><i class='fa fa-$s16'></i></i></th>
      </tr>
  
      <tr>
        <th onclick='book(20)'> <i class='w3-xxlarge'><i class='fa fa-$s20'></i></i></th>
        <th onclick='book(21)'> <i class='w3-xxlarge'><i class='fa fa-$s21'></i></i></th>
        <th></th>
        <th onclick='book(22)'> <i class='w3-xxlarge'><i class='fa fa-$s22'></i></i></th>
        <th onclick='book(23)'>  <i class='w3-xxlarge'><i class='fa fa-$s23'></i></i></th>
      </tr>
  
      <tr>
        <th onclick='book(27)'> <i class='w3-xxlarge'><i class='fa fa-$s27'></i></i></th>
        <th onclick='book(26)'> <i class='w3-xxlarge'><i class='fa fa-$s26'></i></i></th>
        <th></th>
        <th onclick='book(25)'> <i class='w3-xxlarge'><i class='fa fa-$s25'></i></i></th>
        <th onclick='book(24)'>  <i class='w3-xxlarge'><i class='fa fa-$s24'></i></i></th>
      </tr>
  
      <tr>
        <th onclick='book(28)'> <i class='w3-xxlarge'><i class='fa fa-$s28'></i></i></th>
        <th onclick='book(29)'> <i class='w3-xxlarge'><i class='fa fa-$s29'></i></i></th>
        <th></th>
        <th onclick='book(30)'> <i class='w3-xxlarge'><i class='fa fa-$s30'></i></i></th>
        <th onclick='book(31)'> <i class='w3-xxlarge'><i class='fa fa-$s31'></i></i></th>
      </tr>    
    </table
  
    
    
    ";
  }


  
function ND_5909($s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17,$s18,$s19,$s20,$s21,$s22,$s23,$s24,$s25,$s26,$s27,$s28,$s29,$s30,$s31,$s32,$s33,$s34,$s35,$s36,$s37,$s38,$s39,$s40,$s41,$s42,$s43,$s44,$s45,$s46,$s47,$s48,$s49) {
  echo
  "
  <table class='w3-table'>
      <tr>
      <th> </th>
      <th> </th>
        <th> </i></th>
        <th> </i></i></th>
        <th> <i class='w3-xxlarge'><i class='fa fa-car'></i></i></th>
      </tr>
    
      <tr>
        <th onclick='book(30)'> <i class='w3-xxlarge'><i class='fa fa-$s30'></i></i></th>
        <th></th>
        <th onclick='book(39)'> <i class='w3-xxlarge'><i class='fa fa-$s39'></i></i></th>
        <th onclick='book(1)'> <i class='w3-xxlarge'><i class='fa fa-$s1'></i></i></th>
        <th onclick='book(2)'>  <i class='w3-xxlarge'><i class='fa fa-$s2'></i></i></th>
      </tr>
  
      <tr>
        <th onclick='book(28)'> <i class='w3-xxlarge'><i class='fa fa-$s28'></i></i></th>
        <th onclick='book(29)'> <i class='w3-xxlarge'><i class='fa fa-$s29'></i></i></th>
        <th onclick='book(38)'> <i class='w3-xxlarge'><i class='fa fa-$s38'></i></i></th>
        <th onclick='book(3)'> <i class='w3-xxlarge'><i class='fa fa-$s3'></i></i></th>
        <th onclick='book(4)'>  <i class='w3-xxlarge'><i class='fa fa-$s4'></i></i></th>
      </tr>
  
      <tr>
        <th onclick='book(26)'> <i class='w3-xxlarge'><i class='fa fa-$s26'></i></i></th>
        <th onclick='book(27)'> <i class='w3-xxlarge'><i class='fa fa-$s27'></i></i></th>
        <th onclick='book(37)'> <i class='w3-xxlarge'><i class='fa fa-$s37'></i></i></th>
        <th onclick='book(5)'> <i class='w3-xxlarge'><i class='fa fa-$s5'></i></i></th>
        <th onclick='book(6)'>  <i class='w3-xxlarge'><i class='fa fa-$s6'></i></i></th>
      </tr>

      <tr>
        <th onclick='book(24)'> <i class='w3-xxlarge'><i class='fa fa-$s24'></i></i></th>
        <th onclick='book(25)'> <i class='w3-xxlarge'><i class='fa fa-$s25'></i></i></th>
        <th onclick='book(36)'> <i class='w3-xxlarge'><i class='fa fa-$s36'></i></i></th>
        <th onclick='book(7)'> <i class='w3-xxlarge'><i class='fa fa-$s7'></i></i></th>
        <th onclick='book(8)'>  <i class='w3-xxlarge'><i class='fa fa-$s8'></i></i></th>
      </tr>

        <tr>
        <th onclick='book(22)'> <i class='w3-xxlarge'><i class='fa fa-$s22'></i></i></th>
        <th onclick='book(23)'> <i class='w3-xxlarge'><i class='fa fa-$s23'></i></i></th>
        <th onclick='book(35)'> <i class='w3-xxlarge'><i class='fa fa-$s35'></i></i></th>
        <th onclick='book(9)'> <i class='w3-xxlarge'><i class='fa fa-$s9'></i></i></th>
        <th onclick='book(10)'>  <i class='w3-xxlarge'><i class='fa fa-$s10'></i></i></th>
      </tr>
  
      <tr>
      <th onclick='book(20)'> <i class='w3-xxlarge'><i class='fa fa-$s11'></i></i></th>
      <th onclick='book(21)'> <i class='w3-xxlarge'><i class='fa fa-$s21'></i></i></th>
      <th onclick='book(34)'> <i class='w3-xxlarge'><i class='fa fa-$s34'></i></i></th>
      <th onclick='book(11)'> <i class='w3-xxlarge'><i class='fa fa-$s11'></i></i></th>
      <th onclick='book(12)'>  <i class='w3-xxlarge'><i class='fa fa-$s12'></i></i></th>
    </tr>

    <tr>
    <th onclick='book(31)'> <i class='w3-xxlarge'><i class='fa fa-$s31'></i></i></th>
    <th onclick='book(32)'> <i class='w3-xxlarge'><i class='fa fa-$s32'></i></i></th>
    <th onclick='book(33)'> <i class='w3-xxlarge'><i class='fa fa-$s33'></i></i></th>
    <th onclick='book(13)'> <i class='w3-xxlarge'><i class='fa fa-$s13'></i></i></th>
    <th onclick='book(14)'>  <i class='w3-xxlarge'><i class='fa fa-$s14'></i></i></th>
  </tr>

  <tr>
  <th onclick='book(19)'> <i class='w3-xxlarge'><i class='fa fa-$s19'></i></i></th>
  <th onclick='book(18)'> <i class='w3-xxlarge'><i class='fa fa-$s18'></i></i></th>
  <th onclick='book(17)'> <i class='w3-xxlarge'><i class='fa fa-$s17'></i></i></th>
  <th onclick='book(16)'> <i class='w3-xxlarge'><i class='fa fa-$s16'></i></i></th>
  <th onclick='book(15)'>  <i class='w3-xxlarge'><i class='fa fa-$s15'></i></i></th>
</tr>

    </table
  
    
    
    ";
  }



  function ND_2010($s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,$s9,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17,$s18,$s19,$s20,$s21,$s22,$s23,$s24,$s25,$s26,$s27,$s28,$s29,$s30,$s31,$s32,$s33,$s34,$s35,$s36,$s37,$s38,$s39,$s40,$s41,$s42,$s43,$s44,$s45,$s46,$s47,$s48,$s49) {
    echo
    "
    <table class='w3-table'>
        <tr>
        <th> </th>
        <th> </th>
          <th> </i></th>
          <th> </i></i></th>
          <th> <i class='w3-xxlarge'><i class='fa fa-car'></i></i></th>
        </tr>
      
        
    
        <tr>
          <th onclick='book(3)'> <i class='w3-xxlarge'><i class='fa fa-$s3'></i></i></th>
          <th onclick='book(4)'> <i class='w3-xxlarge'><i class='fa fa-$s4'></i></i></th>
          <th ></th>
          <th onclick='book(1)'> <i class='w3-xxlarge'><i class='fa fa-$s1'></i></i></th>
          <th onclick='book(2)'>  <i class='w3-xxlarge'><i class='fa fa-$s2'></i></i></th>
        </tr>
    
        <tr>
          <th onclick='book(5)'> <i class='w3-xxlarge'><i class='fa fa-$s5'></i></i></th>
          <th onclick='book(6)'> <i class='w3-xxlarge'><i class='fa fa-$s6'></i></i></th>
          <th ></th>
          <th onclick='book(7)'> <i class='w3-xxlarge'><i class='fa fa-$s7'></i></i></th>
          <th onclick='book(8)'>  <i class='w3-xxlarge'><i class='fa fa-$s8'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(11)'> <i class='w3-xxlarge'><i class='fa fa-$s11'></i></i></th>
          <th onclick='book(12)'> <i class='w3-xxlarge'><i class='fa fa-$s12'></i></i></th>
          <th ></th>
          <th onclick='book(9)'> <i class='w3-xxlarge'><i class='fa fa-$s9'></i></i></th>
          <th onclick='book(10)'>  <i class='w3-xxlarge'><i class='fa fa-$s10'></i></i></th>
        </tr>
        
        <tr>
          <th onclick='book(13)'> <i class='w3-xxlarge'><i class='fa fa-$s13'></i></i></th>
          <th onclick='book(14)'> <i class='w3-xxlarge'><i class='fa fa-$s14'></i></i></th>
          <th ></th>
          <th onclick='book(15)'> <i class='w3-xxlarge'><i class='fa fa-$s15'></i></i></th>
          <th onclick='book(16)'>  <i class='w3-xxlarge'><i class='fa fa-$s16'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(19)'> <i class='w3-xxlarge'><i class='fa fa-$s19'></i></i></th>
          <th onclick='book(20)'> <i class='w3-xxlarge'><i class='fa fa-$s20'></i></i></th>
          <th ></th>
          <th onclick='book(17)'> <i class='w3-xxlarge'><i class='fa fa-$s17'></i></i></th>
          <th onclick='book(18)'>  <i class='w3-xxlarge'><i class='fa fa-$s18'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(21)'> <i class='w3-xxlarge'><i class='fa fa-$s21'></i></i></th>
          <th onclick='book(22)'> <i class='w3-xxlarge'><i class='fa fa-$s22'></i></i></th>
          <th ></th>
          <th onclick='book(23)'> <i class='w3-xxlarge'><i class='fa fa-$s23'></i></i></th>
          <th onclick='book(24)'>  <i class='w3-xxlarge'><i class='fa fa-$s24'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(27)'> <i class='w3-xxlarge'><i class='fa fa-$s27'></i></i></th>
          <th onclick='book(28)'> <i class='w3-xxlarge'><i class='fa fa-$s28'></i></i></th>
          <th ></th>
          <th onclick='book(25)'> <i class='w3-xxlarge'><i class='fa fa-$s25'></i></i></th>
          <th onclick='book(26)'>  <i class='w3-xxlarge'><i class='fa fa-$s26'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(29)'> <i class='w3-xxlarge'><i class='fa fa-$s29'></i></i></th>
          <th onclick='book(30)'> <i class='w3-xxlarge'><i class='fa fa-$s30'></i></i></th>
          <th ></th>
          <th onclick='book(31)'> <i class='w3-xxlarge'><i class='fa fa-$s31'></i></i></th>
          <th onclick='book(32)'>  <i class='w3-xxlarge'><i class='fa fa-$s32'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(35)'> <i class='w3-xxlarge'><i class='fa fa-$s35'></i></i></th>
          <th onclick='book(36)'> <i class='w3-xxlarge'><i class='fa fa-$s36'></i></i></th>
          <th ></th>
          <th onclick='book(33)'> <i class='w3-xxlarge'><i class='fa fa-$s33'></i></i></th>
          <th onclick='book(34)'>  <i class='w3-xxlarge'><i class='fa fa-$s34'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(37)'> <i class='w3-xxlarge'><i class='fa fa-$s37'></i></i></th>
          <th onclick='book(38)'> <i class='w3-xxlarge'><i class='fa fa-$s38'></i></i></th>
          <th ></th>
          <th onclick='book(39)'> <i class='w3-xxlarge'><i class='fa fa-$s39'></i></i></th>
          <th onclick='book(40)'>  <i class='w3-xxlarge'><i class='fa fa-$s40'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(43)'> <i class='w3-xxlarge'><i class='fa fa-$s43'></i></i></th>
          <th onclick='book(44)'> <i class='w3-xxlarge'><i class='fa fa-$s44'></i></i></th>
          <th ></th>
          <th onclick='book(41)'> <i class='w3-xxlarge'><i class='fa fa-$s41'></i></i></th>
          <th onclick='book(42)'>  <i class='w3-xxlarge'><i class='fa fa-$s42'></i></i></th>
        </tr>

        <tr>
          <th onclick='book(45)'> <i class='w3-xxlarge'><i class='fa fa-$s45'></i></i></th>
          <th onclick='book(46)'> <i class='w3-xxlarge'><i class='fa fa-$s46'></i></i></th>
          <th onclick='book(47)'> <i class='w3-xxlarge'><i class='fa fa-$s47'></i></i></th>
          <th onclick='book(48)'> <i class='w3-xxlarge'><i class='fa fa-$s48'></i></i></th>
          <th onclick='book(49)'>  <i class='w3-xxlarge'><i class='fa fa-$s49'></i></i></th>
        </tr>

      
    
     
      </table
    
      
      
      ";
    }
  

  

  ?> 