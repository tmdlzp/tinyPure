<?php
	include_once TM_SRC . "semantic.php";
	$reg_url = TM_PATH . "user/register"; 
	$index_url = TM_PATH . "index";
?>
<style type="text/css">
	.content{width:900px; margin:auto;}
	.left_but{position:fixed;right:50px;top:100px;}
</style>
<body>
 <div class="ui toggle button blue small left_but">
		Hello
	</div>
<div class="content">
	<div class="ui purple inverted menu" id="main_menu">
	  <a class="active item" href="<?php echo $index_url?>">
		<i class="home icon"></i> 清新
	  </a>
	  <a class="item">
		<i class="mail icon"></i> 消息
	  </a>
	  <a class="item">
		<i class="user icon"></i> 朋友
	  </a>
	   <a class="item">
		<i class="music icon"></i> 音乐
	  </a>
	  <a class="item right" href="<?php echo $reg_url ?>">
		<i class="user icon"></i> 注册
	  </a>
	</div>
	<?php
		if(isset($content)){
			include $content;
		}
	?>
</div>

<div class="ui red left_con vertical sidebar menu">
  <a class="item">
    <i class="home icon"></i>
    Home
  </a>
  <a class="active item">
    <i class="heart icon"></i>
    Current Section
  </a>
  <a class="item">
    <i class="facebook icon"></i>
    Like us on Facebook
  </a>
  <div class="item">
    <b>More</b>
    <div class="menu">
      <a class="item">About</a>
      <a class="item">Contact Us</a>
    </div>
  </div>

</body>
<script>
	$(function(){
		$("#main_menu a").click(function(){
			$("#main_menu a").removeClass("active");
			$(this).addClass("active");

		});		

		$(".left_but").click(function(){
			$('.left_con.sidebar').sidebar('toggle');			
		});
		
	})	
</script>