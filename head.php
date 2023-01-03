<!DOCTYPE html>
<html>

<head>
  <title>李家農產品銷售網</title>
  <meta charset="utf-8">
  <meta name="description" content="李家農產品銷售網">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="index.php"><img src="pic/logo.png" height="50" width="50"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">首頁</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">商品</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">購物車</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order.php">訂單管理</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recipe.php">食譜</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mem_acc.php">會員帳號管理</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quest.php">常見問題</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">關於我們</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            帳號
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="sign_up.php">註冊</a></li>
            <!--<li><hr class="dropdown-divider"></li>-->
          </ul>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Type Here" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>  
  </nav>
  <?php include("footer.php"); ?>
</body>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</html>