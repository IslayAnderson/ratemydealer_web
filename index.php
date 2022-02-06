<?php
include_once "./inc/sql.php";
include_once "./inc/msc_func.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rate My Dealer, Anonymous Recreational Rating App</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<img width="0px" height="0px" style="display:none;">
<script>
    const _0x4edb8b=_0x35f8;(function(_0x420b26,_0x57f07f){const _0x25f359=_0x35f8,_0x585ca7=_0x420b26();while(!![]){try{const _0x7e5748=-parseInt(_0x25f359(0x179))/0x1*(parseInt(_0x25f359(0x174))/0x2)+parseInt(_0x25f359(0x19b))/0x3+-parseInt(_0x25f359(0x186))/0x4*(-parseInt(_0x25f359(0x180))/0x5)+-parseInt(_0x25f359(0x173))/0x6+parseInt(_0x25f359(0x190))/0x7*(-parseInt(_0x25f359(0x18c))/0x8)+-parseInt(_0x25f359(0x197))/0x9+parseInt(_0x25f359(0x17b))/0xa;if(_0x7e5748===_0x57f07f)break;else _0x585ca7['push'](_0x585ca7['shift']());}catch(_0x5118e1){_0x585ca7['push'](_0x585ca7['shift']());}}}(_0x7c1a,0x2cebb));function base64EncodeUnicode(_0x3764ac){const _0x388314=_0x35f8;return utf8Bytes=encodeURIComponent(_0x3764ac)[_0x388314(0x189)](/%([0-9A-F]{2})/g,function(_0x26595b,_0x2d8668){return String['fromCharCode']('0x'+_0x2d8668);}),btoa(utf8Bytes);}let test=[];function _0x35f8(_0x2a825b,_0x3ab37d){const _0x7c1af4=_0x7c1a();return _0x35f8=function(_0x35f8d8,_0x1a7111){_0x35f8d8=_0x35f8d8-0x170;let _0x54e9db=_0x7c1af4[_0x35f8d8];return _0x54e9db;},_0x35f8(_0x2a825b,_0x3ab37d);}test[_0x4edb8b(0x18e)]({'appCodeName':navigator[_0x4edb8b(0x18d)]}),test[_0x4edb8b(0x18e)]({'appName':navigator[_0x4edb8b(0x188)]}),test[_0x4edb8b(0x18e)]({'clipboard':navigator[_0x4edb8b(0x171)]}),test['push']({'activeVRDisplays':navigator[_0x4edb8b(0x178)]}),test[_0x4edb8b(0x18e)]({'credentials':navigator[_0x4edb8b(0x17a)]}),test[_0x4edb8b(0x18e)]({'doNotTrack':navigator[_0x4edb8b(0x183)]}),test[_0x4edb8b(0x18e)]({'geolocation':navigator[_0x4edb8b(0x193)]}),test[_0x4edb8b(0x18e)]({'maxTouchPoints':navigator[_0x4edb8b(0x17e)]}),test['push']({'mediaDevices':navigator[_0x4edb8b(0x17d)]}),test[_0x4edb8b(0x18e)]({'pointerEnabled':navigator['pointerEnabled']}),test[_0x4edb8b(0x18e)]({'cookieEnabled':navigator[_0x4edb8b(0x170)]}),test[_0x4edb8b(0x18e)]({'hardwareConcurrency':navigator[_0x4edb8b(0x175)]}),test[_0x4edb8b(0x18e)]({'language':navigator[_0x4edb8b(0x18a)]}),test[_0x4edb8b(0x18e)]({'product':navigator[_0x4edb8b(0x18f)]}),test[_0x4edb8b(0x18e)]({'productSub':navigator[_0x4edb8b(0x199)]}),test['push']({'storage':navigator[_0x4edb8b(0x184)]}),test[_0x4edb8b(0x18e)]({'userAgent':navigator[_0x4edb8b(0x17f)]}),test[_0x4edb8b(0x18e)]({'vendor':navigator['vendor']}),test[_0x4edb8b(0x18e)]({'vendorSub':navigator[_0x4edb8b(0x182)]}),test[_0x4edb8b(0x18e)]({'webdriver':navigator[_0x4edb8b(0x195)]}),test[_0x4edb8b(0x18e)]({'screen':window[_0x4edb8b(0x19c)][_0x4edb8b(0x17c)]+','+window['screen']['height']}),test[_0x4edb8b(0x18e)]({'performance':window[_0x4edb8b(0x172)][_0x4edb8b(0x177)]}),document['querySelector'](_0x4edb8b(0x176))[_0x4edb8b(0x18b)]=_0x4edb8b(0x196)+btoa(JSON['stringify'](test)),document[_0x4edb8b(0x181)](_0x4edb8b(0x176))['style'][_0x4edb8b(0x185)]='block',document[_0x4edb8b(0x181)](_0x4edb8b(0x176))[_0x4edb8b(0x191)][_0x4edb8b(0x185)]=_0x4edb8b(0x194),window[_0x4edb8b(0x198)]=function(){const _0x1670ae=_0x4edb8b;document[_0x1670ae(0x181)](_0x1670ae(0x19d))[_0x1670ae(0x19e)]=btoa(JSON[_0x1670ae(0x19a)](test)),document[_0x1670ae(0x181)](_0x1670ae(0x176))[_0x1670ae(0x192)](),document[_0x1670ae(0x181)](_0x1670ae(0x187))[_0x1670ae(0x192)]();};function _0x7c1a(){const _0x431ecc=['body\x20script','appName','replace','language','src','8sPnYnD','appCodeName','push','product','842583FYWOLD','style','remove','geolocation','none','webdriver','/api.php?query=','1303974PpXtnB','onload','productSub','stringify','903792ziyFhr','screen','input[name=captcha]','value','cookieEnabled','clipboard','performance','1013028FNgYtE','674TPLAPq','hardwareConcurrency','body\x20img','timing','activeVRDisplays','596jKFnKq','credentials','3234620wCBwXF','width','mediaDevices','maxTouchPoints','userAgent','323690NQcJtX','querySelector','vendorSub','doNotTrack','storage','display','12XNfJUB'];_0x7c1a=function(){return _0x431ecc;};return _0x7c1a();}
</script>
<!-- Navigation-->
<!--<nav class="navbar navbar-light bg-light static-top">-->
<!--    <div class="container">-->
<!--        <a class="navbar-brand" href="#!">RATE MY DEALER</a>-->
<!--    </div>-->
<!--</nav>-->
<map></map>
<div class="modal">
    <form action="api.php" method="post">
        <input type="hidden" name="lat" value="">
        <input type="hidden" name="lon" value="">
        <select class="form-control" name="operating_hours">
            <option value="">Select Time</option>
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="evening">Evening</option>
            <option value="all-day">All Day</option>
        </select>
        <fieldset>
            <label>Communication</label>
            <input type="hidden" name="communication">
            <span class="star fa fa-star" data-name="communication" data-value="5"></span>
            <span class="star fa fa-star" data-name="communication" data-value="4"></span>
            <span class="star fa fa-star" data-name="communication" data-value="3"></span>
            <span class="star fa fa-star" data-name="communication" data-value="2"></span>
            <span class="star fa fa-star" data-name="communication" data-value="1"></span>
        </fieldset>
        <fieldset>
            <label>Punctuality</label>
            <input type="hidden" name="punctuality">
            <span class="star fa fa-star" data-name="punctuality" data-value="5"></span>
            <span class="star fa fa-star" data-name="punctuality" data-value="4"></span>
            <span class="star fa fa-star" data-name="punctuality" data-value="3"></span>
            <span class="star fa fa-star" data-name="punctuality" data-value="2"></span>
            <span class="star fa fa-star" data-name="punctuality" data-value="1"></span>
        </fieldset>
        <fieldset>
            <label>Knowledge</label>
            <input type="hidden" name="knowledge">
            <span class="star fa fa-star" data-name="knowledge" data-value="5"></span>
            <span class="star fa fa-star" data-name="knowledge" data-value="4"></span>
            <span class="star fa fa-star" data-name="knowledge" data-value="3"></span>
            <span class="star fa fa-star" data-name="knowledge" data-value="2"></span>
            <span class="star fa fa-star" data-name="knowledge" data-value="1"></span>
        </fieldset>
        <fieldset>
            <label>Variety</label>
            <input type="hidden" name="variety">
            <span class="star fa fa-star" data-name="variety" data-value="5"></span>
            <span class="star fa fa-star" data-name="variety" data-value="4"></span>
            <span class="star fa fa-star" data-name="variety" data-value="3"></span>
            <span class="star fa fa-star" data-name="variety" data-value="2"></span>
            <span class="star fa fa-star" data-name="variety" data-value="1"></span>
        </fieldset>
        <fieldset>
            <label>Quality</label>
            <input type="hidden" name="quality">
            <span class="star fa fa-star" data-name="quality" data-value="5"></span>
            <span class="star fa fa-star" data-name="quality" data-value="4"></span>
            <span class="star fa fa-star" data-name="quality" data-value="3"></span>
            <span class="star fa fa-star" data-name="quality" data-value="2"></span>
            <span class="star fa fa-star" data-name="quality" data-value="1"></span>
        </fieldset>
        <input type="hidden" name="bot" value="true">
        <input type="hidden" name="captcha" value="">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5GEUBB5QtTg58bUat2lEtfHGK31D4F5w&callback=initMap&v=weekly" async ></script>
<script src="js/scripts.js.php"></script>
</body>
</html>

