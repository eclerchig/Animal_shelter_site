

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Главная страница "Томасина"</title>
	<link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>

<?php include "moduls/mod_reg.php" ?>
<?php include "moduls/mod_log.php" ?>
<?php include "moduls/nav_menu.php" ?>

<div class="container-fluid background pt-5">
	<div class="row justify-content-center">	
		<div class="col-lg-2 col-1">	</div>	
		<div class="col-lg-8 col-10 content pt-5 mb-5">
		<h1 id="title_m">О ПРИЮТЕ</h1>
		<br>
		<p>	Этот сайт создан волонтерами с единственной целью – спасти жизни кошек и найти им новый дом и любящих хозяев.
			<br>	
		</p>
		<p>	В нашей стране приютов для кошек совсем немного. В частном adoption центре "Томасина" более 100 кошек: подавляющая часть животных принесена туда добрыми людьми или бывшими хозяевами. Кошки очень разные - ласковые и не очень, своенравные, боязливые, игривые, грустные, веселые. И все-все – очень красивые!
			<br>	
		</p>
		<p>	Все наши подопечные мечтают об одном – найти свой дом и любящих хозяев.
			<br>	
		</p>
		<p>	Мы – их единственный шанс выжить и обрести новую жизнь. К сожалению, в нашей стране люди опасаются брать кошек из приютов/adoption центров. На самом деле любому по силам спасти животное и подарить ему новую жизнь, тепло, ласку, внимание! Поверьте, животные не останутся в долгу. Они подарят вам свою душу, сердце и станут самыми преданными вашими друзьями! 
		</p>
		<h1 id="title_m" class="mt-5">КАК МЫ РАБОТАЕМ</h1>

		<div class="row justify-content-center">	
			<img src="pic/footprint-svg.png" alt="" id="point" class="mt-5 mb-3">
		</div>	
		<div class="row justify-content-center">	
			<div class="col-3"></div>
			<div class="col-6">
				<p>	
				Мы поможем выбрать вам нового друга. 
На нашем попечении находится свыше 100 котиков!
Вы можете просмотреть галерею с нашими подопечными 
не входя в личный кабинет!  </p>
			</div>
			<div class="col-3"></div>
		</div>

		<div class="row justify-content-center">	
			<img src="pic/footprint-svg.png" alt="" id="point" class="mt-5 mb-3">
		</div>	
		<div class="row justify-content-center">	
			<div class="col-3"></div>
			<div class="col-6">
				<p>	
				Приглядели нового друга?
Зарегистрируйтесь/авторизуйтесь на сайте и запишитесь 
на прохождение собеседования.
Смотрите историю своих собеседований в личном кабинете! </p>
			</div>
			<div class="col-3"></div>
		</div>
		<div class="row justify-content-center">	
			<img src="pic/footprint-svg.png" alt="" id="point" class="mt-5 mb-3">
		</div>	
		<div class="row justify-content-center">	
			<div class="col-3"></div>
			<div class="col-6">
				<p>	
				После прохождения собеседования оставьте заявку на получение понравившегося вам любимца.
Приезжайте к нам для встречи с котиком, чтобы потом забрать его к себе домой!</p>
			</div>
			<div class="col-3"></div>
		</div>
		<div class="row justify-content-center">
		<div class="col-4">	</div>
		<div class="col-4">		
	    	<button type="button" class="btn btn-info" style="width: 100%"><a href="pages/cats/cats.php">ЗАБРАТЬ КОТИКА</a></button>
	    </div>
	    <div class="col-4">	</div>		
	    </div>
	    </div>	
	    <div class="col-lg-2 col-1">	</div>

	 </div>	
</div>

<?php include "moduls/footer.php" ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="jquery-3.6.0.min.js"></script>
	<script src="jq.js"></script>
</body>
</html>