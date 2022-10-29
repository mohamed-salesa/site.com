<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	*{
	margin: 0;
	padding:0 ;
	font-family: century gothic;
}

header{
	background-image:url(bg.jpg);
	height: 100vh;
	background-size:100% ;
	background-position: center;

}
ul{
	float: right;
	list-style-type: none;
    margin-top: 25px;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: white;
	padding: 5px 20px;
	border: 1px solid transparent;
    transition: 0.6 ease;
}
ul li a:hover{
	background-color: green;
	color: blue;
}
ul li.active a{
	background-color: white;
	color: blue;
}


main{
	max-width: 1200px;
	margin: auto;
}
.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1{
	color: white;
	font-size: 70px;

}
.button{
	position: absolute;
	top: 63%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.btn{
	border: 1px solid black;
	padding: 10px 30px;
	color: white;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color: green;
	color: white;

}

	border-radius: 3px 0 0 3px;
}  .slideshow-container{
	max-width: 1000px;
	position: relative;
	margin: auto;
}
/*hide the images by default */
.mySlides{
	display: none;
}
/*Next and previous buttons */
.prev, .next{
	cursor: pointer;
	position: absolute;
	top: 50%;
	width: auto;
	margin-top: -22px;
	padding: 16px;

}
.post{
	position: left;
}

		
	</style>	
	
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li class="active"><a href="#">home</a></li>
				<li><a href="http://localhost/dolo/about.php">About</a></li>
				<li><a href="http://localhost/dolo/g.php">gallary</a></li>
				
			</ul>
			
		</div>
		<div class="title">
			<h1>Doch-car site</h1>
			
		</div>
		<div class="button">
			<a href="https://www.google.com/search?q=how+repair+windows+10&source=lnms&tbm=vid&sa=X&sqi=2&ved=2ahUKEwi888W11Kz3AhUxjJUCHcH7BsgQ_AUoAXoECAEQAw&biw=1366&bih=625&dpr=1#" class="btn">watch vedio</a>
			<a href="http://localhost/dolo/l.php#" class="btn">learn more</a>
			
		</div>
	
	</header>
	

</body>
</html>