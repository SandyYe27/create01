<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #container{
            width: 500px;
            border:1px solid red ;
            padding-bottom: 30px;
        }
        h1{
            margin: 0 auto;
        }
        span{
            margin: 0 auto;

        }
    </style>
</head>
<body>
    <div id="container">
        <h3>{{$data['user_name']}}，您好</h3>
        <br>
        <h5>謝謝您，我們已收到您的訂單，訂單編號：{{$data['order_id']}}</h5>
        <br>
        <span>為了保護您的個人資料安全，我們不會在通知信中顯示交易明細，您可登入測驗服務專區至歷史訂單紀錄查詢。
            ★提醒您，若尚未完成訂單繳費，請盡速付款，以免訂單逾期而影響您的權益。
            如繳費資料遺失，可前往 歷史訂單紀錄 重新列印或查詢。
        </span>
        <br>
    </div>
</body>
</html>
