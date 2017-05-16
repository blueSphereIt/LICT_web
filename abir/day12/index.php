<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script  src="jquery.js">
		
	</script>
	<script >
		$(document).ready(function () {
			$(".intro").click(function(){
				$(this).hide();

			});
			$("h2").click(function(){
				alert("This is header");
			});
			/*$("button").click(function(){
				$("ul.ul1 li:nth-child(3)").hide();
			});*/
			$("button").click(function(){
				$("div.main div:nth-child(4) div:nth-child(1)").hide();
			});

		});
	
		
	</script>
</head>
<body>
<h2 class="intro">Header intro</h2>
<h2 >Header</h2>
<p>This is sample</p>

<div class="main">
	<div>
		
	</div>
	<div>
		<p class="intro">This is sample intro in div-main div-2</p>
	</div>
	<div>
		<ul class="ul1">
			<li>milk</li>
			<li>cat</li>
			<li>dog</li>
		</ul>
	</div>
	<div>
		<div>
			<p>div-main div-3 div</p>
		</div>
	</div>
	
</div>

<button>Click to hide</button>
</body>
</html>