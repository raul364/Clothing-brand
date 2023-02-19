<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Luar</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/default.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  </head>
  <body>
    <div class="desktop-store" id="main container">
      <nav class="topnav" id="topnav">
        <ul class="left-nav">
          <li>
            <a href="./index.php" class="logo1">
              <img class="logo" src="../imports/images/dragon.png" width="46" heigth="46"  />
          </a>
          </li>

          <li><a href="./index.php" class="is-uppercase dropdown">Women</a></li>
          <div class="dropdown-content">
            <div class="menu">
              <ul>
                <li class="menu-item is-uppercase">
                  <button class="menu-buttons" href="#/women/new">
                    <span >New</span>
                  </button>
                </li>
                <li class="menu-item is-uppercase" >
                  <button class="menu-buttons" id="clothes" onclick="displaySubMenu(id)">
                    <span>Clothes</span>
                  </button>
                  
                </li>
                <li class="menu-item is-uppercase">
                  <button class="menu-buttons" id="shoes" onclick="displaySubMenu(id)">
                    <span>Shoes</span>
                  </button>
                </li>
                <li class="menu-item is-uppercase" >
                  <button class="menu-buttons" id="Accessories" onclick="displaySubMenu(id)">
                    <span>Accessories</span>
                  </button>
                  
                </li>
                <li class="menu-item is-uppercase">
                  <button class="menu-buttons" >
                    <span>Collection</span>
                  </button>
                </li>
            
              </ul>
              <div class="show-sub-menu">
                <ul id="sub-clothes" style="display:none">
                    <li class="submenu-item is-uppercase" >
                      <a href="#/women/">
                        <span>Jackets & Coats</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Hoodies & Sweatshirts</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Knitwear</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Dresses</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>T-Shirts</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Shirts & Blouses</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Trousers</span>
                      </a>
                    </li><li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Skirts</span>
                      </a>
                    </li>
                  </ul>
                <ul id="sub-shoes" style="display:none">
                    <li class="submenu-item is-uppercase" >
                      <a href="#/women/">
                        <span>View All</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>New</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Boots & Ankle Boots</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Trainers</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Flats</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Heels</span>
                      </a>
                    </li>
                  </ul>
                <ul id="sub-Accessories" style="display:none">
                    <li class="submenu-item is-uppercase" >
                      <a href="#/women/">
                        <span>View all</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Bags</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Jewllery</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Scarfs</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Glasses</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Hats</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Belts</span>
                      </a>
                    </li><li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Hair Accessories</span>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
          <li><a href="./mens.php" class="is-uppercase">Men</a></li>

          <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="bi bi-list" style="font-size: 1rem"></i>
          </a></li>
        </ul>

        <ul class="search-bar">
          <form action="/search_page.php">
            <li><input type="text" class="search-text is-uppercase" placeholder="Search" name="search"></li>
            <li><button class="searchBtn" type="submit"><span class="material-symbols-outlined"> search </span></button>
        </form>
          </ul>
          <?php
          if(empty($_SESSION["user-id"])){?>
            <ul class="right-nav">
              <li><a href="#basket"><i class="bi bi-bag"></i></a></li>
              <li><a href="../account/Login.php"><i class="bi bi-person-fill"></i></a></li>
              
            </ul>
            <?php }?>  
        <?php
          if(isset($_SESSION["user-id"])){?>
            <ul class="right-nav">
              <li><a href="#basket"><i class="bi bi-bag"></i></a></li>
                <div class="dropdown">
                  <li><a class="dropdown"><i class="bi bi-person-fill"></i></a>
                    <div class="dropdown-content">
                      <p> Welcome <?php echo($_SESSION['user-name']) ?></p>
                      <a href="#">Account</a>
                      <a href="#">Settings</a>
                      <a href="../account/logout.php" onclick=''>Log out</a>
                    </div>
                  </li>
                </div>
                
              </ul>
        
        
        <?php
          //session_destroy();
        }?>
      </div>
      <div>
            <div class="menu">
              <ul>
                <li class="menu-item is-uppercase">
                  <button class="menu-buttons" href="#/women/new">
                    <span >New</span>
                  </button>
                </li>
                <li class="menu-item is-uppercase" >
                  <button class="menu-buttons" id="clothes" onclick="displaySubMenu(id)">
                    <span>Clothes</span>
                  </button>
                  
                </li>
                <li class="menu-item is-uppercase">
                  <button class="menu-buttons" id="shoes" onclick="displaySubMenu(id)">
                    <span>Shoes</span>
                  </button>
                </li>
                <li class="menu-item is-uppercase" >
                  <button class="menu-buttons" id="Accessories" onclick="displaySubMenu(id)">
                    <span>Accessories</span>
                  </button>
                  
                </li>
                <li class="menu-item is-uppercase">
                  <button class="menu-buttons" >
                    <span>Collection</span>
                  </button>
                </li>
            
              </ul>
              <div class="show-sub-menu">
                <ul id="sub-clothes" style="display:none">
                    <li class="submenu-item is-uppercase" >
                      <a href="#/women/">
                        <span>Jackets & Coats</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Hoodies & Sweatshirts</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Knitwear</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Dresses</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>T-Shirts</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Shirts & Blouses</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Trousers</span>
                      </a>
                    </li><li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Skirts</span>
                      </a>
                    </li>
                  </ul>
                <ul id="sub-shoes" style="display:none">
                    <li class="submenu-item is-uppercase" >
                      <a href="#/women/">
                        <span>View All</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>New</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Boots & Ankle Boots</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Trainers</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Flats</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Heels</span>
                      </a>
                    </li>
                  </ul>
                <ul id="sub-Accessories" style="display:none">
                    <li class="submenu-item is-uppercase" >
                      <a href="#/women/">
                        <span>View all</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Bags</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Jewllery</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Scarfs</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Glasses</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Hats</span>
                      </a>
                    </li>
                    <li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Belts</span>
                      </a>
                    </li><li class="submenu-item is-uppercase">
                      <a href="#/women/">
                        <span>Hair Accessories</span>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
            
          </div>

    </nav>

    <div class="link-backdrop">
        <a href="#women" style="height: 0px;">
          <img
          src="../imports/images/female.jpg"
          style="width: 100%; height: 950px; overflow: hidden; object-fit: cover;"
        />
      </a>
    </div>
    <div id="discount-bar">
      <span class="is-uppercase discount-banner">
        Discount code: 50offRaul
      </span>
      <hr class="line-fade"/>
    </div>
    <div class="trending">
      <span class="trending-title is-uppercase">Trending</span>
      <div id="homepage-showcase">
      </div>
    </div>


  </body>
  <script>
    function myFunction() {
      var x = document.getElementById("topnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    
    var prevIdGiven = "0";
    function displaySubMenu(idGiven){
      if(document.getElementById(prevIdGiven)){
        document.getElementById(prevIdGiven).style.display ="none";
      }
      var submenu = "sub-"+idGiven;
      var getId = document.getElementById(submenu);
      getId.style.display = "block";
      prevIdGiven = submenu;
    }

    $(document).ready(function(){
        htmlElements="";
        images = 12;
        for(i = 0; i < images; i++) {
          htmlElements +='<div class="homepage-piece" id=' + i + '></div>';
        }
        document.getElementById("homepage-showcase").innerHTML = htmlElements;
    });
  </script>
</html>
