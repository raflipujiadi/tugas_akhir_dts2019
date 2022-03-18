<!-- start menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">latihan CRUD Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul id="menuList" class="navbar-nav mr-auto">
        <?php foreach ($pages as $filename => $pageTitle) { 
            if ($filename == $currentPage) { ?>
       <li class="nav-item active"><a class="nav-link" href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a></li>

            <?php } else { ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a></li>
            <?php
            } //if 
         } //foreach 
            ?>
    </ul>
        </nav>