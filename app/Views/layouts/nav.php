<?php
//var_dump($menu);

?>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light pt-3" id="ftco-navbar">
    <div class="container">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="ftco-nav">
        <ul class="navbar-nav">
			<?php
			    foreach($menu as $items){
                    if($items->type == 'image'){
						echo "<li class='nav-item ml-3'><a class='navbar-brand' href='{$items->path}'><img src='{$items->imagepath}' height='90'/></a></li>";
					}else{
                        echo "<li class='nav-item'><a href='{$items->path}' class='nav-link'>{$items->title}</a></li>";
					}

					//else{
					//    echo "<li class='nav-item dropdown'>
					//            <a class='nav-link dropdown-toggle' href='{$items->path}' id='dropdown04' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>{$items->title}</a>
					//              <div class='dropdown-menu' aria-labelledby='dropdown04'>
					//                <a class='dropdown-item' href='#'>Webinar</a>
					//                <a class='dropdown-item' href='#'>Portfolio Single</a>
					//              </div>
					//          </li>";
					//}
				}
			?>

          <!--<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Ruang Karya</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Roadshow</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Info Fakultas</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Lembaga Kemahasiswaan</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Merchendise</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="portfolio.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Premium</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">Webinar</a>
                <a class="dropdown-item" href="#">Portfolio Single</a>
              </div>
          </li>-->
          <!--<li class="nav-item btn btn-primary btn-outline-white "><a href="contact.html" class="nav-link"><span>Log In</span></a></li>-->
        </ul>
      </div>
    </div>
  </nav>