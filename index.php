<script>
document.cookie="SQL=";
document.cookie="corect=0";
if (<?if (isset($_COOKIE['numcts'])){
	echo 1;
} else echo 0;?>==0) document.cookie='numcts=10';
</script>
<?php
$corect=$_COOKIE['corect'];
	if (isset($_POST['ENTER'])) {
		$login=$_POST["login"];
		$password=$_POST["password"];
		$connectionchat = mysqli_connect('127.0.0.1','root','','MyChat_db');
if ($connectionchat==false) exit();
$resultchek = mysqli_query($connectionchat,"SELECT * FROM `ChatUsers` WHERE login='".htmlspecialchars($login)."'");
$chek=mysqli_fetch_assoc($resultchek);
if (($chek['password']==$password)&&(isset($chek['password']))){
$corect=1; 
echo $corect;
}else {
$corect=0; 
echo $corect;
}
}
?>
<script>
if (<?echo$corect?>==1){
	document.cookie="login=<?echo $login ?>";
	document.cookie="corect=1";
	document.cookie='SQLshort=ToWho';
}else document.cookie="login=";
</script>
<?php 
if (isset($_COOKIE['SQLshort'])){
	if ($_COOKIE['SQLshort']=='nick') {
		$CFB=2;
	} else if ($_COOKIE['SQLshort']=='ToWho'){
		$CFB=1;
	} else $CFB=3;
} else {
	$CFB=1;
	$_COOKIE['SQLshort']='ToWho';
}
?>
<!DOCTYPE html>
<html>
   <head>
   <meta chersat="UTF-8"/>
  <title>MFCH</title>
  <meta http-equiv="Content-Type" content="text/html; Charset=UTF-8"> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
  //alert(document.cookie);
function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
  function mode() {
    $.ajax({
        url: 'mode.php',
        success: function(data) {
			$('#pp').html(data);
        }
    });
}
var timeInterval = 10000;
 setInterval(mode, timeInterval);
 if(getCookie('SortBy')=='') document.cookie="SortBy=new";
jQuery('document').ready(function(){
	if (<?echo $CFB?>==1){
		jQuery('#income').css('background','#b700d7');
        jQuery('#outcome').css('background','#8600b3');
        jQuery('.uploadButton').css('background','#8600b3');
	} else if (<?echo $CFB?>==2) {
		jQuery('#outcome').css('background','#b700d7');
        jQuery('#income').css('background','#8600b3');
        jQuery('.uploadButton').css('background','#8600b3'); 
	} else {
		jQuery('#outcome').css('background','#8600b3');
        jQuery('#income').css('background','#8600b3');
        jQuery('.uploadButton').css('background','#b700d7');
	}
	function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
	jQuery('#nn').hide();
	jQuery('#hide').hide();
	if (parseInt(getCookie('numcts'))>=<?	$connection = mysqli_connect('127.0.0.1','root','','MyChat_db');
 	$connection = mysqli_connect('127.0.0.1','root','','MyChat_db');
 if ($connection==false) exit();
  $result = mysqli_query($connection,'SELECT `nick`, `question`, `id`, `data`, `ToWho` FROM `Coments2` WHERE `'.$_COOKIE['SQLshort'].'`LIKE "'.$log.'" ORDER BY data DESC');
 echo mysqli_num_rows($result);?>){
	 jQuery('#showmore').hide();
	 jQuery('#showevr').hide();
 }
 	if (parseInt(getCookie('numcts'))>10){
 jQuery('#hide').show();
 }
 if (parseInt(getCookie('numcts'))+10>=<?
 echo mysqli_num_rows($result);?>){
	 jQuery('#showmore').hide();
 }
	jQuery('#form').hide();
	if (getCookie('login')=='') {
		jQuery('.body').hide();
		//alert(document.cookie);
	}else{
	jQuery('#lsp').hide();	
	jQuery('.body').show();
	}
jQuery('.js-copybtn').on('click', function(event) {  
cft();
});
jQuery('.js-cutbtn').on('click', function(event) {  
cft();
jQuery('#mn2').val('');
});
jQuery('.switchbtn').on('click',function(){
var s01,s02;
s01=jQuery('#mn1').val();
s02=jQuery('#mn2').val();
jQuery('#mn1').val(s02);
jQuery('#mn2').val(s01);	
});
jQuery('#way').on('change',function(){
document.cookie="SortBy="+jQuery('#way').val();
//alert(document.cookie);
mode();
});
jQuery('#income').on('click',function(){
document.cookie='SQL=SELECT `nick`, `question`, `id`, `data`, `ToWho` FROM `Coments2` WHERE `ToWho`LIKE "'+getCookie('login')+'"ORDER BY data DESC';
document.cookie='SQLshort=ToWho';
mode();
//alert(document.cookie);
});
jQuery('#outcome').on('click',function(){
document.cookie='SQL=SELECT `nick`, `question`, `id`, `data`, `ToWho` FROM `Coments2` WHERE `nick`LIKE "'+getCookie('login')+'"ORDER BY data DESC';
document.cookie='SQLshort=nick';
mode();	
});
jQuery('#CB').on('click',function(){
document.cookie='SQL=SELECT `nick`, `question`, `id`, `data`, `ToWho` FROM `Coments2` WHERE `ToWho`LIKE "'+getCookie('login')+'"ORDER BY data DESC';
document.cookie='SQLshort=ToWho';
mode();	
document.cookie='pcs=1';
document.cookie='OK=1';
//document.cookie='ENTE=1'
});
jQuery('#income').on('click',function(){
jQuery('#income').css('background','#b700d7');
jQuery('#outcome').css('background','#8600b3');
jQuery('.uploadButton').css('background','#8600b3');
});
jQuery('#outcome').on('click',function(){
jQuery('#outcome').css('background','#b700d7');
jQuery('#income').css('background','#8600b3');
jQuery('.uploadButton').css('background','#8600b3');
});
jQuery('.uploadButton').on('click',function(){
jQuery('#outcome').css('background','#8600b3');
jQuery('#income').css('background','#8600b3');
jQuery('.uploadButton').css('background','#b700d7');
document.cookie='SQLshort=letter';
});
alert(document.cookie);
 mode();
});
</script>
	
	
	

    <style type="text/css">
    .first{
margin-left:10PX;
font-size:18px;		
}
.com{
	margin-left:12px;
	 max-width:1219px;
	 width:1219px;
}
.mainform{
  margin-left:13px;
  width:1000px;
}

#CB{
 font-size:25px;
width:350px;
height:35px;
}	
.mcw{
	width:1220px;
	resize: none;
}

#comteg{
	margin-left:10px;
	font-size:35px;
}

#com_cancel{
font-size:25px;
width:350px;
height:35px;
}

.answerform{
	margin-left:10px;
}

#btn{
	background:#ccc;
	width:100px;
}
.uploadButton {
    width: 200px;
    padding: 3px;
    color: #FFF;
	background:#8600b3;
    font-size: 25px;
    text-align: center;
    border-radius: 3px;
    cursor: pointer;
}

.uploadButton:hover {
 background:#b700d7;
}
.come {
    width: 200px;
    padding: 3px;
    color: #FFF;
	background:#8600b3;
    font-size: 25px;
    text-align: center;
    border-radius: 3px;
    cursor: pointer;
}

.come:hover {
 background:#b700d7;
 /*background:#3df;*/
}
.failen{
  font-size:25px;
}

.js-copybtn{
	font-size:20px;
}

.js-cutbtn{
	font-size:20px;
}

.switchbtn{
	WIDTH:200px;
	font-size: 20px;
    font-weight: bold;
    font-family: Tahoma;
    text-align: center;
	height:58px;
}
   .leftimg {
    border-right: 2px solid #b700d7;;
    float:left;
    margin: 0px 7px 2px 0px;
   }
   .color:hover {
  background:#53ea93;
}
.NL{
    width: 200px;
    padding: 10px;
    color: #FFF;
	background:#d500e6;
    font-size: 25px;
    text-align: center;
    border-radius: 10px;
}
	</style>
	<?php
	$foolfile="text.txt";
	?>
	</head>
   <body style="width: 1200px">
   <center id="lsp">
   <h1 style="font-size:40px; margin-top:100px;">MFCH авторизація</h1>
   <form  method="POST" action="">
   <div style="font-size:27px; margin-right:360px;">Логін:</div>
   <input type="text" name="login" style="font-size:20px; width:430px;"/><br/>
   <div style="font-size:27px; margin-right:340px;">Пароль:</div>
   <input type="password" name="password" style="font-size:20px;width:430px;"/><br/>
   <input type="submit" value="Увійти в систему" style="margin-top:10px; font-size:30px;"name="ENTER"OnClick="document.cookie='ENTER=1'"/>
   </form>
   <div>Ви ще не зариєстровані?</div>
   <a href="http://newmember" target="_blank">Тоді зариєструйтеся</a>
   </center>
   <div class="body">
      <?php
   $g="";
	if ($_COOKIE["OK"]=='1') {
	$g=$_POST["name"];
	$t=$_COOKIE["login"];
	$ToW=$_POST["ToWho"];
		add_coments(htmlspecialchars($t),htmlspecialchars($g),htmlspecialchars($ToW));
	}
   ?>
   <?php
 function add_coments($n,$s,$tw){
	 $connection = mysqli_connect('127.0.0.1','root','','MyChat_db');
	 if ($connection==false) exit();
 $add=mysqli_query($connection,'INSERT INTO `Coments2`(`question`,`nick`,`ToWho`) VALUES("'.$s.'","'.$n.'","'.$tw.'")'); 
 }
 ?>
 <label class = "come"id="income"style="margin-left:12px;font-size:25px;"Onclick="$('#pp').show(); $('#form').hide();"> Отримані </label>
 <label class = "come"id="outcome"style="margin-left:7px;"Onclick="$('#pp').show();$('#form').hide();"> Надіслані</label>
 <label class="uploadButton"style="margin-left:4px;"Onclick="$('#pp').hide();$('#form').show();">Надіслати повідомлення</label>
 <form name = "mform" action="" method="post" id="form" class="mainform">
   <div style="font-size:20px;">
 Кому:
 </div>
 <input class="mcw" name="ToWho"/>
  <div style="font-size:20px;">
 Повідомлення:
 </div>
 <textarea type="text" name="name" class="mcw"  rows="10" ></textarea>
 <br/>
 <input type="submit" name="OK" value="Надіслати" id="CB" style="font-size:25px;width:350px;height:35px;"/>
 <input type="button" name="cancel" value="Скасувати" id="com_cancel"OnClick="$('#form').hide();$('#pp').show(); $('#nn').hide();document.cookie='OK=0'"/>
 </form >
<hr style="margin-left:12px;width:1219px; border: none;color:#b700d7; background-color:#b700d7; height: 2px;">
 <div id="pp"></div>
 <form action="" method="post">
    <input id="showmore" style="margin-left:10px; font-size:20px; font-align:center" value="Показати ще" type="submit" OnClick="
   document.cookie='pcs=1';
   document.cookie='numcts=<?$nts=$nts+10;echo $nts;?>';
   "/>
   <input id="showevr" style="margin-left:10px; font-size:20px; font-align:center" value="Показати всі" type="submit" OnClick="
   document.cookie='pcs=1';
   document.cookie='numcts=<?	
   $connection = mysqli_connect('127.0.0.1','root','','MyChat_db');
   if ($connection==false) exit();
   $result = mysqli_query($connection,"SELECT * FROM `Coments2`");
   $nts=mysqli_num_rows($result); echo $nts;?>';
   "/>
      <input id="hide" style="margin-left:10px; font-size:20px; font-align:center" value="Сховати" type="submit" OnClick="
   document.cookie='pcs=1';
   document.cookie='numcts=10';
   "/>
</form>

  <script>
 document.cookie='press=0';
 document.cookie='pcs=0';
 document.cookie='OK=0';
 </script>
 </div>
   </body>
</html>
