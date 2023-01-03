<!DOCTYPE html>
<html lang="tw">
<title>水晶芭樂-李家農產品銷售網</title>
<?php include("head.php"); ?>

<head>
    <style>
        .wrap {
            width: 960px;
            margin: 0 auto;
        }

        .topbox {
            background-color: lightblue;
            width: 100%;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .boxBottom {
            display: flex;
            margin-top: 1%;

            .boxLeft,
            .boxRight {
                width: calc(100% * 6 / 12);
                background-color: yellow;
                margin: 0 1%;

            }

            .boxRight {
                height: 400px;
                overflow-y: auto;

                p {
                    line-height: 1.5;
                    padding: 1em;

                }
            }

            .boxLeft {
                width: 100%;

                img {
                    max-width: 100%;
                }

            }
        }
    </style>
</head>

<body>
    <br />
    <div class="wrap">
        <div class="topbox">
            this is header
        </div>
        <div class="boxBottom">
            <div class="boxLeft">
                <img src="pic/grava1.jpg" alt="" height="200" >
            </div>
            &nbsp;
            <div class="boxRight">
                <p>test</p>
            </div>
        </div>

    </div>
</body>

</html>