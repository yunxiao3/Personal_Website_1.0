<?PHP
echo  "<br>";
echo "你好".$_COOKIE["name"].':这是您第'.$_COOKIE['count'].'次登录网站';	
echo"&nbsp";


?>




<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<style>
.h1{

   font-family:隶书;
   font-size:20px;
   margin:0px;
   background:#00CED1;
   color:blue;
}
	.div{
	text-align:right;
	float:right;
	 color:blue;


	
	}


	#h1{
	margin:0px,auto;
	font-size:35px;
	padding:0px;
	color:black;
	font-family:华文隶书;
	
	}

	</style>

<script type="text/javascript">
function getTime() {

    var dateObj = new Date();

    var year = dateObj.getFullYear();//年
    var month = dateObj.getMonth()+1;//月  (注意：月份+1)
    var date = dateObj.getDate();//日
    var day = dateObj.getDay();
    var weeks = ["星期日","星期一","星期二","星期三","星期四","星期五","星期六"];
    var week = weeks[day];//根据day值，获取星期数组中的星期数。
    var hours = dateObj.getHours();//小时
    var minutes = dateObj.getMinutes();//分钟
    var seconds = dateObj.getSeconds();//秒

    if(month<10){
        month = "0"+month;
    }
    if(date<10){
        date = "0"+date;
    }
    if(hours<10){
        hours = "0"+hours;
    }
    if(minutes<10){
        minutes = "0"+minutes;
    }
    if(seconds<10){
        seconds = "0"+seconds;
    }

    var newDate = year+"年"+month+"月"+date+"日"+hours+":"+minutes+":"+seconds+"&nbsp &nbsp";
    document.getElementById("date1").innerHTML = "" + newDate;//在div中写入时间
    setTimeout('getTime()', 500);//每隔500ms执行一次getTime()
}
</script>

<title>实时显示时间</title>
</head>
<body onload="getTime()"  class=h1>
 
    <div   class=div  id="date1"></div>
	 <div   class=div  >        <span   id=h1  > Life is too short to be ordinary     &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span></div>
</body>
</html>
