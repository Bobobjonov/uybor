
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        div.card{
            border:3px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div.card:hover{
            box-shadow: 0px 0px 15px 0px black;
            /*border: none;*/
        }
        div.card:hover div.box1 {
            border-bottom:2px solid red;
            transition-delay: 0.1s;
        }
        div.box{
            width: 90%;
            height: 2px;
            background-color: black;
            margin: 0 auto;
        }
        div.box div.inner_box{
            width: 20%;
            height: 2px;
            background-color: red;
            margin: 0 auto;
        }
        .wrapper{
          margin-top: 30px;
        }


    </style>
</head>
<body>
<div class="wrapper">
    <div class="row">
        <div class="col-md-6">
            <a href="<?=\yii\helpers\Url::to(['blog'])?>">
                <div class="card">
                    <div class="box1">
                        <span class=""> <i style="color: #000;" class="fa fa-hotel"></i></span>
                        <h3 style="color: black">Kvartiralar</h3>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-md-6">
            <a href="<?=\yii\helpers\Url::to(['../error/kvartiralar'])?>">
                <div class="card">
                    <div class="box1">
                        <span class=""><i class="fa fa-home" style="color: black"></i> </span>
                        <h3 style="color: black; font-family: bold">Hovli Uylar</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>
<div class="box">
    <div class="inner_box"></div>
</div>

<div class="wrapper">
    <div class="row">
    </div>
</div>
<div class="wrapper">
    <div class="row">
    </div>
</div>
</body>
</html>
