<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>蝦毀?原來你在這!</title>
    <link rel="icon" href="img/1.png">
    <link rel="stylesheet" type="text/css" href="Display.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>

</head>


<body>

    <input type="checkbox" name="" id="menu">

    <div class="header">
        <label class="logo">
            <a href="index.php" style="text-decoration: none;color: #2C3E50;"><img src="img/1.png" width="50px" height="50px">&nbsp;蝦毀?原來你在這!
            </a></label>

        
        <label for="menu" class="btn"> 
                    <span>選單</span>
                </label>
        <nav>
            <a href="index.php"><b>首頁</b></a>
            <a href="Introduction.php"><b>基本介紹</b></a>
            <a href="Display.php"><b>即時顯示數據</b></a>
            <a href=""><b>資料庫</b></a>
            <a href=""><b>蝦子動態</b></a>
        </nav>
    </div>
    <div>
        <canvas id="temp" width="150" height="20%"></canvas>
        <canvas id="trans" width="150" height="20%"></canvas>
        <?php require_once("catchData.php");?>
        <script>
            var ctx = document.getElementById('temp').getContext('2d');
            var temp_val = <?php echo $temp; ?>;
            var temp = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: temp_val,
                    datasets: [
                        {
                        label: 'temp',
                        data: temp_val
                        }
                    ]
                }
            });
            
            var ctx = document.getElementById('trans').getContext('2d');
            var trans_val = <?php echo $trans; ?>;
            var trans = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: trans_val,
                    datasets: [
                    {
                        label: 'trans',
                        data: trans_val
                    }
                    ]
            }
            });
    
        </script>
    </div>
    <div class="footer">
        <div class="footer__slogan">蝦毀?<span>原來你在這!</span></div>
        <div>
            
        </div>
        <div class="footer__menu">
            
            <ul>
                <li>
                    <a href="Introduction.php">
                        <span class="translate_tw">基本介紹</span>
                        <span class="translate_en">Basic Introduction</span>
                    </a>
                </li>
                <li>
                    <a href="Display.php">
                        <span class="translate_tw">即時顯示數據</span>
                        <span class="translate_en">Display Data Instantly</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="translate_tw">資料庫</span>
                        <span class="translate_en">Database</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="translate_tw">蝦子動態</span>
                        <span class="translate_en">whiteleg Shrimp Dynamic</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="footer__contact">
            <p class="footer__email">指導教授 | 陳灯能教授</p>
            <p class="footer__email">小組隊長 | 林暐竣</p>
            <p class="footer__email">小組成員 | 吳冠儀 吳書婷</p>
            <br>
            <p class="footer__copyright"> Copyright © 蝦毀?原來你在這! ALL RIGHTS RESERVED.
            <a href="#" class="back-to-top"><img src="img/0.png" height="50" width="50"></a>
            <br>since 2022.
            </p>
        </div>

        
        

</div></body>

</html>