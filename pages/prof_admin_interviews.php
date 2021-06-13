<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Главная страница "Томасина"</title>
	<link rel="stylesheet" href="../../style.css">
</head>
<body>

<?php include "moduls/mod_reg.php" ?>
<?php include "moduls/mod_log.php" ?>
<?php include "moduls/nav_menu.php" ?>

<div class="container-fluid background pt-5">
	<div class="row justify-content-center">	
		<div class="col-lg-1 col-0"> </div> 
    <div class="row col-lg-10 col-12">
    <div class="col-md-4 col-12">
    <div class="col-12 content py-5 mb-5" id="col-left">
			<ul class="nav flex-column nav-left">
  				<li class="nav-item">
  					<div class="row nav-left-row">	
  						<div class="col-lg-2 col-12"><p id="center-i"><img src="/tomasina/pic/settings.png" alt="" class="item-m"></p></div>
  						<div class="col-lg-10 col-12"><a class="nav-link" href="/tomasina/pages/prof/edit">Редактировать профиль</a></div>
  					</div>	
  				</li>
  				<li class="nav-item">
  					<div class="row nav-left-row ">	
  						<div class="col-lg-2 col-12"><p id="center-i"><img src="/tomasina/pic/interview.png" alt="" class="item-m"></p></div>
  						<div class="col-lg-10 col-12"><a class="nav-link" href="/tomasina/pages/prof/interviews">Собеседования</a></div>
  					</div>
  				</li>
  				<li class="nav-item">
  					<div class="row nav-left-row">	
  						<div class="col-lg-2 col-12"><p id="center-i"><img src="/tomasina/pic/cat.png" alt="" class="item-m"></div>
  						<div class="col-lg-10 col-12"><a class="nav-link" href="/tomasina/pages/prof/cats">Приобрести котика</a></div>
  					</div>
  				</li>
			</ul>
		</div>
		<div class="col-12">	</div>
		</div>	
		<div class="col-md-7 offset-md-1 col-12 content mb-5">
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item" aria-current="page"><a href="#">Личный кабинет</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Собеседования</li>
  				</ol>
			</nav>
			<h1>СОБЕСЕДОВАНИЯ</h1>
      <table class="table mt-4 table-success table-hover table_int">
        <thead>
          <tr align="center">
            <th rowspan="2" scope="col" align="center" style="border-bottom-color: #000000">Дата</th>
            <th colspan="3" scope="col" align="center">Баллы</th>
            <th  rowspan="2" scope="col" align="center" style="border-bottom-color: #000000">Итоговая оценка</th>
          </tr>
        <tr>
          <td align="center">Оценка подготовки дома</td>
          <td align="center">Оценка транспортировки</td>
          <td align="center">Оценка обеспечения питанием</td>
        </tr>
        </thead>
      <tbody>
        <tr align="center">
          <th scope="row">1</th>
          <td>9</td>
          <td>8</td>
          <td>10</td>
          <td>9</td>
        </tr>
        <tr align="center">
          <th scope="row">2</th>
          <td>4</td>
          <td>2</td>
          <td>1</td>
          <td>Не пройдено</td>
        </tr>
      </tbody>
      </table>
      <div class="row justify-content-center">
        <div class="col-2"> </div>
          <div class="col-6">     
            <button type="button" class="btn btn-info col-12" data-bs-toggle="modal" data-bs-target="#ModFormInterviews">Записаться на собеседование</button>
          </div>
        <div class="col-2"> </div>
      </div>
		</div>
</div>
<div class="col-1"> </div>
<div class="modal fade" id="ModFormInterviews" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content">
      <form class="needs-validation" novalidate>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">ЗАПИСЬ НА СОБЕСЕДОВАНИЕ</h5>
      </div>
      <div class="modal-body">
        Выберите дату и диапазон времени, в который вы желаете, чтобы с вами связался наш оператор. 
          <div class="form-group mt-2">
            <label for="validData">Введите дату:</label>
            <input type="date" class="form-control mt-1" id="validData" required>
            <div class="invalid-feedback">
            Введите дату
            </div>
          </div>
        <label for="ValidTime" class="form-label mt-2">Время:</label>
        <select class="form-select" aria-label="Default select example" id="ValidTime" required>
          <option selected disabled value="">Выберите время</option>
          <option value="1">10:00-14:00</option>
          <option value="2">14:00-18:00</option>
          <option value="3">18:00-22:00</option>
        </select> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Отправить</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include "moduls/footer.php" ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="jquery-3.6.0.min.js"></script>
	<script src="jq.js"></script>
</body>
</html>