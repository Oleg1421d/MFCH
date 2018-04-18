<?php
    if (isset($_COOKIE['SQLshort']) && $_COOKIE['SQLshort']=='letter'){
		$ec=1;
	} else {
	$ec=0;
    $beg=0;
	$noc=$_COOKIE['numcts'];
	$log=$_COOKIE['login'];
 	$connection = mysqli_connect('127.0.0.1','root','','MyChat_db');
 if ($connection==false) exit();
 $result = mysqli_query($connection,'SELECT `nick`, `question`, `id`, `data`, `ToWho` FROM `Coments2` WHERE `'.$_COOKIE['SQLshort'].'`LIKE "'.$log.'" ORDER BY data DESC'); 
 $lt=mysqli_num_rows($result);
 if ($noc>mysqli_num_rows($result)) {
	 $en=mysqli_num_rows($result);
 } else $en=$noc;
  for ($i=0;$i<$en;$i++) {
	 $q[$i]=mysqli_fetch_assoc($result);
}
 for ($e=$beg;$e<$en;$e++) {
	 ?>
	 <table class="com" border="0" id="<?echo $e?>">
	 <tr>
	 <td>
	 <div class="leftimg">
	 <?if (isset($_COOKIE['SQLshort'])){
        if ($_COOKIE['SQLshort']=='nick'){
			ECHO 'Кому:';
		}
	 }	 ?>
	 <div style="margin-top:10px;">
	 <label class="NL">
	 	 <?php
	 if (isset($_COOKIE['SQLshort'])){
		if ($_COOKIE['SQLshort']=='nick') {
			for ($three=0;$three<3;$three++)echo($q[$e][ToWho][$three]);

		} else for ($three=0;$three<3;$three++)echo($q[$e][nick][$three]);
	 } else for ($three=0;$three<3;$three++)echo($q[$e][nick][$three]);
	 ?>
	 </label>
	 </div>
	 <strong>
	 <div id="nickname" style="max-width:70px; word-wrap:break-word; width:70px;margin-top:14px;">
	 <?php
	 if (isset($_COOKIE['SQLshort'])){
		if ($_COOKIE['SQLshort']=='nick') {
			echo($q[$e][ToWho]);
		} else echo($q[$e][nick]);
	 } else echo($q[$e][nick]);
	 ?>
	 </div>
	 </strong>
	 </div>
	 <a style="margin-right:1000px;">
	 <?php
     echo('Надіслано '.$q[$e][data]);
	 ?>
	 </a>
	 <br/>
	 <br/>
	 <div style="max-width:1193px; word-wrap:break-word;">
	 <?php
	 $k=1;
	 $brakepoint[0]=-1;
	 for($h=0;$h<strlen($q[$e][question]);$h++){
	 $chek=substr($q[$e][question],$h, 1);
	 if ($chek=="\n") {
		 $brakepoint[$k]=$h;
		 $k++;
	 }
	 }
     $brakepoint[$k]=strlen($q[$e][question]);
	 for ($rezalt=0;$rezalt<$k;$rezalt++){
     echo substr($q[$e][question],$brakepoint[$rezalt]+1,$brakepoint[$rezalt+1]-$brakepoint[$rezalt]-1)."<br/>";
	 }
	 ?>
	 </div>
	</td>
	</tr>
	 </table>
	 <hr style="margin-left:12px;width:1219px; border: none;color:#b700d7; background-color:#b700d7; height: 2px;">
	 <?php
 }
}
 ?>
 <script>
 if (<?echo $ec?>==1){
	 $('#pp').hide();$('#form').show();
 }
 </script>
