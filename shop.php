<!DOCTYPE html>
<html lang="tw">
<title>商品-李家農產品銷售網</title>
<?php include("head.php"); ?>

<head>
    <style>
        .pic {
            max-width: 700px;
            overflow: hidden;
        }

        .pic img {
            transform: scale(1, 1);
            transition: all 1s ease-out;
        }

        .pic img:hover {
            transform: scale(1.2, 1.2);
        }
    </style>
    <style>
        .txt{
            font-size: 30px;
        }
    </style>
    <style>
        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <br />
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <div class="pic">
                        <a href="grava1.php" title="水晶芭樂">
                            <img src="pic/grava1.jpg" class="rounded" alt="水晶芭樂圖片" title="水晶芭樂" height="350" width="300">
                        </a>
                    </div>
                    <div class="txt">
                        <a href="grava1.php" title="水晶芭樂">
                            水晶芭樂
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <div class="pic">
                        <a href="grava2.php">
                            <img src="pic/grava2.jpg" class="rounded" alt="珍珠芭樂圖片" title="珍珠芭樂" height="350" width="300">
                        </a>
                    </div>
                    <div class="txt">
                        <a href="grava2.php" title="珍珠芭樂">
                            珍珠芭樂
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <div class="pic">
                        <a href="grava3.php">
                            <img src="pic/grava3.jpg" class="rounded" alt="芭樂乾圖片" title="芭樂乾" height="350" width="300">
                        </a>
                    </div>
                    <div class="txt">
                        <a href="grava3.php" title="芭樂乾">
                            芭樂乾
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <div class="pic">
                        <a href="grava1.php" title="咖啡豆">
                            <img src="pic/coffee.jpg" class="rounded" alt="咖啡豆圖片" title="咖啡豆" height="350" width="300">
                        </a>
                    </div>
                    <div class="txt">
                        <a href="coffee1.php" title="咖啡豆">
                            咖啡豆
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <div class="pic">
                        <a href="grava2.php" title="濾掛式咖啡">
                            <img src="pic/coffee_box.jpg" class="rounded" alt="濾掛式咖啡圖片" title="濾掛式咖啡" height="350" width="300">
                        </a>
                    </div>
                    <div class="txt">
                        <a href="coffee2.php" title="濾掛式咖啡">
                            濾掛式咖啡
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <!--<div class="pic">
                        <a href="grava3.php">
                            <img src="pic/grava3.jpg" class="rounded" alt="芭樂乾圖片" title="芭樂乾" height="350" width="300">
                        </a>
                    </div>
                    <div class="txt">
                        <a href="grava3.php" title="芭樂乾">
                            芭樂乾
                        </a>
                    </div>-->
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</body>


<!--<body>
    <div class="container">
        <br />
        <div class="row justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="pic">
                            <a href="grava1.php"><img src="pic/grava1.jpg" class="img-fluid rounded-start" alt="水晶芭樂圖片" title="水晶芭樂" height="200" width="200"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="grava1.php"><span class="card-title" style="color:#006400; font-size: 35px">水晶芭樂</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="pic">
                            <a href="grava2.php"><img src="pic/grava2.jpg" class="img-fluid rounded-start" alt="珍珠芭樂圖片" title="珍珠芭樂" height="200" width="200"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="grava2.php"><span class="card-title" style="color:#006400; font-size: 35px">珍珠芭樂</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="pic">
                            <a href="grava3.php"><img src="pic/grava3.jpg" class="img-fluid rounded-start" alt="芭樂乾圖片" title="芭樂乾" height="200" width="200" ></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="grava3.php"><span class="card-title" style="color:#006400; font-size: 35px">芭樂乾</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="pic">
                            <a href="coffee1.php"><img src="pic/coffee.jpg" class="img-fluid rounded-start" alt="咖啡豆圖片" title="咖啡豆" height="200" width="200"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="coffee1.php"><span class="card-title" style="color:#006400; font-size: 35px">咖啡豆</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="pic">
                            <a href="coffee2.php"><img src="pic/coffee_box.jpg" class="img-fluid rounded-start" alt="濾掛式咖啡圖片" title="濾掛式咖啡" height="200" width="200"></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="coffee2.php"><span class="card-title" style="color:#006400; font-size: 35px">濾掛式咖啡</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>




<body>
        <div class="container">
            <br />
            <div class="card mb-3">
                <img src="pic/grava1.jpg" class="card-img-top" alt="水晶芭樂圖片" title="水晶芭樂">
                <div class="card-body">
                    <h5 class="card-title">水晶芭樂</h5>
                </div>
            </div>
            <div class="card mb-3">
                <img src="pic/grava2.jpg" class="card-img-top" alt="珍珠芭樂圖片" title="珍珠芭樂">
                <div class="card-body">
                    <h5 class="card-title">珍珠芭樂</h5>
                </div>
            </div>
            <div class="card mb-3">
                <img src="pic/grava3.jpg" class="card-img-top" alt="芭樂乾圖片" title="芭樂乾">
                <div class="card-body">
                    <h5 class="card-title">芭樂乾</h5>
                </div>
            </div>
            <div class="card mb-3">
                <img src="pic/coffee.jpg" class="card-img-top" alt="咖啡豆圖片" title="咖啡豆">
                <div class="card-body">
                    <h5 class="card-title">咖啡豆</h5>
                </div>
            </div>
            <div class="card mb-3">
                <img src="pic/coffee2.jpg" class="card-img-top" alt="濾掛式咖啡圖片" title="濾掛式咖啡">
                <div class="card-body">
                    <h5 class="card-title">濾掛式咖啡</h5>
                </div>
            </div>
        </div>

        <div class="container">
        <br />
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="pic">
                        <img src="pic/grava1.jpg" class="img-fluid rounded-start" alt="水晶芭樂圖片" title="水晶芭樂">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <span class="card-title" style="color:#006400; font-size: 35px">水晶芭樂</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>-->

</html>