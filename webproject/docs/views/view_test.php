<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>view_test</title>

	<script src = "/js/jquery.min.js"></script>
</head>
<body>

	<a href="javascript:test1();">눌러</a>
	<script type="text/javascript">
		function test1(){
			$.ajax({
				url : '/index.php/example1/hi',
				dataType:"json",
				success:function(data){
					console.log(data.num1);
					console.log(data.str);
					setInterval(test1(),1000);
					console.log("메롱");
				}
			});
		}

	</script>

	
</body>
</html>
