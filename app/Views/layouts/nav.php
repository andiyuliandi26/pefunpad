<?php
//var_dump($menu);

?>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light pt-md-3" id="ftco-navbar">
    <div class="container">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center font-pef" id="ftco-nav">
        <ul class="navbar-nav">
			<?php
				//foreach($menu as $items){
				//    if($items->type == 'image'){
				//        echo "<li class='nav-item ml-3'><a class='navbar-brand' href='{$items->path}'><img src='{$items->imagepath}' height='50'/></a></li>";						
				//    }else{
				//        echo "<li class='nav-item'><a href='{$items->path}' class='nav-link'>{$items->title}</a></li>";
				//    }
                   
				//    //else{
				//    //    echo "<li class='nav-item dropdown'>
				//    //            <a class='nav-link dropdown-toggle' href='{$items->path}' id='dropdown04' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>{$items->title}</a>
				//    //              <div class='dropdown-menu' aria-labelledby='dropdown04'>
				//    //                <a class='dropdown-item' href='#'>Webinar</a>
				//    //                <a class='dropdown-item' href='#'>Portfolio Single</a>
				//    //              </div>
				//    //          </li>";
				//    //}
				//}
				// if(logged_in()){
				//        echo "<li class='nav-item'><a href='/logout' class='nav-link'>Logout</a></li>";
				//    }
			?>
            
          <li class="nav-item"><a href="/roadshow" class="nav-link">Roadshow</a></li>            
          <li class="nav-item"><a href="/virtualtour" class="nav-link">Virtual Tour</a></li>     
          <li class="nav-item"><a href="/ruangkarya" class="nav-link">Ruang Karya</a></li>
          <li class="nav-item"><a href="/tesmiba" class="nav-link">Tes Miba</a></li>
          <li class="nav-item bg-awan"><a href="/webinar" class="nav-link text-danger font-weight-bold px-md-3">Webinar</a></li>
            
          <li class="nav-item ml-3"><a class="navbar-brand" href="/"><img src="<?= base_url(); ?>/images/logopef.png" height="50"/></a></li>
                   
          <li class="nav-item bg-awan"><a href="/mainevent" class="nav-link text-danger font-weight-bold">Main Event</a></li>
          <li class="nav-item"><a href="/fakultas" class="nav-link">Fakultas</a></li>
          <li class="nav-item"><a href="/kemahasiswaan" class="nav-link">Kemahasiswaan</a></li>
          <li class="nav-item"><a href="/merchandise" class="nav-link">Merchandise</a></li>            
          <li class="nav-item"><a href="/openmic" class="nav-link">Spektrum Alumni</a></li>
            <?php
            if(logged_in()){
                echo "<li class='nav-item'><a href='/logout' class='nav-link fa fas fa-power-off'></a></li>";
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>