<html>
<meta http-equiv="Content-Type" content="text/html;Charset=utf-8"/>
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $.get("./pro.php",{path:"message"},function(data){
	$("#viewPic").attr("src",data);
	});
});
</script>
<style type="text/css">
@media only screen and (min-width: 200px) and (max-width: 600px){
	body{width:400px;margin:15px auto;}
	h2{text-align:center;}
	img{width:400px;display:block;}
}

@media only screen and (min-width: 601px) and (max-width: 5000px){
	body{width:800px;margin:15px auto;}
	h2{ text-align:center;}
	img{ width:800px;display:block;}
}
</style>
<title>计算结果展示</title>
</head>
<body>
<h2>计算结果展示</h2><br/><hr/><br/>
<img id="viewPic" src="" alt="" />
</body>
</html>

