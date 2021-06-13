
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container">
    		<a class="navbar-brand" href="#">
      			<img src="/tomasina/pic/logo.png " alt="" width="80" height="80" class="d-inline-block align-text-top">
      		</a>
      		<a class="navbar-brand" id="Tomas" href="/tomasina/">
    		Кошачий приют <br>
    		&nbsp &nbsp &nbsp ТОМАСИНА
    		</a>
    		<button class="navbar-toggler" id="pop_down" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
        <?php 
          if (!empty($_SESSION['auth'])) { ?>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link btn" href="/tomasina/pages/prof" id="t_log" >Личный кабинет</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary" id="t_reg" href="/tomasina/moduls/logout.php">Выход</a>
                  </li>
                </ul>
              </div>
          <?php }
        else { 
          ?>
    	<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn" href="#" id="t_log" data-bs-toggle="modal" data-bs-target="#form_log">Логин</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-primary" id="t_reg" href="#" data-bs-toggle="modal" data-bs-target="#form_reg">Регистрация</a>
          </li>
        </ul>
      </div>
      <?php } ?>
      </div>
</nav>

<div class="container nav-down">	
		<div class="col-12">
		<div class="row justify-content-center">
		<button type="button" class="btn col-3"><a href="/tomasina/pages/help.php">КАК НАМ ПОМОЧЬ</a></button>
		<button type="button" class="btn col-3"><a href="/tomasina/pages/about.php">О НАС</a></button>	
		<button type="button" class="btn col-3"><a href="/tomasina/pages/contacts.php">КОНТАКТЫ</a></button>		
		</div>
	    </div>	
</div>