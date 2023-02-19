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
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  </head>
  <body>
    <div class="desktop-store" id="main container">
      <nav class="topnav" id="topnav">
        <ul class="left-nav">
          <li>
            <a href="./index.php" class="logo1">
              <img
                class="logo"
                src="../imports/images/dragon.png"
                width="46"
                heigth="46"
              />
            </a>
          </li>

          <li><a href="./index.php" class="is-uppercase">Women</a></li>
          <li><a href="./mens.php" class="is-uppercase">Men</a></li>

          <li>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="bi bi-list" style="font-size: 1rem"></i>
            </a>
          </li>
        </ul>

        <ul class="search-bar">
          <form action="/search_page.php">
            <li>
              <input
                type="text"
                class="search-text is-uppercase"
                placeholder="Search"
                name="search"
              />
            </li>
            <li>
              <button class="searchBtn" type="submit">
                <span class="material-symbols-outlined"> search </span>
              </button>
            </li>
          </form>
        </ul>

        <ul class="right-nav">
          <li>
            <a href="../account/Login.php"
              ><i class="bi bi-person-fill"></i
            ></a>
          </li>
          <li>
            <a href="#basket"><i class="bi bi-bag"></i></a>
          </li>
        </ul>
      </nav>
      <div>
        <div class="menu">
          <ul>
            <li class="menu-item is-uppercase">
              <button class="menu-buttons" href="#/men/new">
                <span>New</span>
              </button>
            </li>
            <li class="menu-item is-uppercase">
              <button
                class="menu-buttons"
                id="clothes"
                onclick="displaySubMenu(id)"
              >
                <span>Clothes</span>
              </button>
            </li>
            <li class="menu-item is-uppercase">
              <button
                class="menu-buttons"
                id="shoes"
                onclick="displaySubMenu(id)"
              >
                <span>Shoes</span>
              </button>
            </li>
            <li class="menu-item is-uppercase">
              <button
                class="menu-buttons"
                id="Accessories"
                onclick="displaySubMenu(id)"
              >
                <span>Accessories</span>
              </button>
            </li>
            <li class="menu-item is-uppercase">
              <button class="menu-buttons">
                <span>Collection</span>
              </button>
            </li>
          </ul>
          <div class="show-sub-menu">
            <ul id="sub-clothes" style="display: none">
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Jackets & Coats</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Hoodies & Sweatshirts</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Knitwear</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Overshirts</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>T-Shirts</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Shirts</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Trousers</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Shorts</span>
                </a>
              </li>
            </ul>
            <ul id="sub-shoes" style="display: none">
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>View All</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>New</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Ankle Boots</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Trainers</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Smart shoes</span>
                </a>
              </li>
            </ul>
            <ul id="sub-Accessories" style="display: none">
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>View all</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Bags</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Jewllery</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Caps and Hats</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Glasses</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Socks</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Belts</span>
                </a>
              </li>
              <li class="submenu-item is-uppercase">
                <a href="#/men/">
                  <span>Underwear</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="link-backdrop">
      <a href="#Men" class="active"
        ><img
          src="../imports/images/reception.jpg"
          style="width: 100%; height: 950px; object-fit: cover"
        />
      </a>
    </div>

    <div id="discount-bar">
      <span class="is-uppercase discount-banner">
        Discount Code: 50offRaul
      </span>
    </div>
    <div class="trending">
      <span class="trending-title is-uppercase">Trending</span>
      <div id="homepage-showcase"></div>
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
    function displaySubMenu(idGiven) {
      if (document.getElementById(prevIdGiven)) {
        document.getElementById(prevIdGiven).style.display = "none";
      }
      var submenu = "sub-" + idGiven;
      var getId = document.getElementById(submenu);
      getId.style.display = "block";
      prevIdGiven = submenu;
    }

    $(document).ready(function () {
      htmlElements = "";
      images = 12;
      for (i = 0; i < images; i++) {
        htmlElements += '<div class="homepage-piece" id=' + i + "></div>";
      }
      document.getElementById("homepage-showcase").innerHTML = htmlElements;
    });
  </script>
</html>
