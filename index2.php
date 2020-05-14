<?PHP

//session_start();

 //$BCode=$_POST['BCode'];

 //$_SESSION["BCode"]=$BCode;

?>

<!DOCTYPE html>
<html lang="auto">
<head>
	<title>Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>

<div class="container" style="text-align:center;line-height:100px;">
  <h2>生物辨識 & 證件拍照</h2>
</BR>
<pre>
<font size=4>
AMY Hotel 會依照隱私權政策保護所有旅客的隱私，個人資料或所儲存的網站資料，除了可能涉及
違法、侵權、或違反服務條款、或經本人同意以外， AMY Hotel 不會任意監視、增刪、修改或關
關閉，或將個人資料內容交予第三者，包括贊助之廣告廠商。

服務中若有部分服務是 AMY Hotel 與其他合作廠商或夥伴所共同經營者，如果您不願將自身
個人資料揭露給其他合作廠商，您可以選擇不使用這些特定服務，但如您開始使用這些特定服務，
即表示您同意將個人資料提供給該特定服務之合作廠商； AMY Hotel 將在資料蒐集或傳輸前明確
告知您，再將您的個人資料揭露給該特定服務之合作廠商。

您同意在下列的情況下， AMY Hotel 可查看或提供您的個人資料給法院、主管機關、或提出適當
證明主張其權利受侵害之第三人：
(1) 因法令或依司法行政機關之命令
(2) 為執行本會員服務條款之需要
(3) 為維護會員服務系統的正常運作與安全
(4) 為保護其他使用者或其他第三人的合法權益

</font>
</pre>

<form action="src/index.html" method="post" onsubmit="return checkForm(this);">
<p><b><input id="field_terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" type="checkbox" required name="terms"> 我已閱讀並同意遵守AMY Hotel <u>服務條款與隱私權政策</u></b></p>
<b>

<button class="btn btn-default" style="color:blue; width:150px; height:100px;font-size:34px;" onclick="location.href='http://127.0.0.1/hotel/index.php';" type="button"><span>取消</span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn btn-default"  type="submit"  id="myBtn" disabled  value="確定" style="color:blue; width:150px; height:100px;font-size:34px;" >確定</button></b>
</form>

</div>





<script>

  document.getElementById("field_terms").setCustomValidity("請勾選並同意服務條款!");

</script>
<div id="datetime">
    <script>
        setInterval("document.getElementById('datetime').innerHTML=new Date().toLocaleString();", 1000);
    </script>
</div>
<div id="myTimer"></div>
<script>
	var sec = 3;
	var myTimer = document.getElementById('myTimer');
	var myBtn = document.getElementById('myBtn');
	window.onload = countDown;

function countDown() {
  if (sec < 10) {
    myTimer.innerHTML = "0" + sec;
  } else {
    myTimer.innerHTML = sec;
  }
  if (sec <= 0) {
    $("#myBtn").removeAttr("disabled");
   // $("#myBtn").removeClass().addClass("btnEnable");
    $("#myTimer").fadeTo(2500, 0);
    //myBtn.innerHTML = "Click Me!";
    return;
  }
  sec -= 1;
  window.setTimeout(countDown, 1000);
}
</script>
</body>
</html>
