<meta charset='utf-8'>
<?php

//DB설정
$db_host = 'localhost';
$db_user = 'jungnam1994';
$db_password = 'tjrdiddlwlsek1';
$db_database = 'jungnam1994';

//DB에 연결
$connect = mysql_connect("$db_host", "$db_user", "$db_password") or die(mysql_error());
mysql_select_db($db_database, $connect) or die(mysql_error());
mysql_query("SET NAMES 'utf8'");  //myadmin에 업로드시 한글깨짐현상 제거

//input에서 받은 데이터를 변수에 받아오기.
$stdnum = $_POST['stdnum'];
$pwd = $_POST['pwd'];
$major = $_POST['major'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$phone = $_POST['phone'];

//DB에 데이터 입력
$sql = "INSERT INTO LOGIN_INFO VALUES ('$stdnum','$pwd','$major','$age','$sex','$phone')";
$result = mysql_query($sql);

//DB입력시 오류가 있다면 오류를 출력하고 없으면 DB연결 끊기
if(!$result) die(mysql_error());
mysql_close($connect);

//처리가 완료 되었다면 성공 메세지 보여주고 이동할 페이지로 이동
echo "<script>alert(\"input Success!\");</script>";
echo "<script>location.href='http://jungnam1994.dothome.co.kr/member.html'</script>";
?>
