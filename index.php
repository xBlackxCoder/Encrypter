<?php
/*
       __________.__                 __            
___  __\______   \  | _____    ____ |  | _____  ___
\  \/  /|    |  _/  | \__  \ _/ ___\|  |/ /\  \/  /
 >    < |    |   \  |__/ __ \\  \___|    <  >    < 
/__/\_ \|______  /____(____  /\___  >__|_ \/__/\_ \
      \/       \/          \/     \/     \/      \/
        By xBlackx | @xBlackx_Coder
*/

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>xBlackx Encryptor</title>
    <meta name="keywords" content="Encryptor can help, if you need to circumvent word filters. Hide something from Spam Filters, Bots, but you want to keep it readable for humans.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/horizontal-menu.css">
    <script src="assets/obfuscator.js"></script>
</head>
<body class="horizontal-layout dark-layout 2-columns navbar-floating footer-static pace-done menu-expanded horizontal-menu">
<!-- Atom Spinner !-->
<div id="loader-wrapper" class="loader-wrapper">
  <div class="atom-spinner">
    <div class="spinner-inner">
      <div class="spinner-line"></div>
        <div class="spinner-line"></div>
        <div class="spinner-line"></div>
        <div class="spinner-circle">&#9679;</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Loading !-->
<script type="text/javascript">
setTimeout(function(){document.getElementById("loader-wrapper").style.display="none";}, 4000); 
</script>
<!-- Checker Main !-->
<div class="card">
    <div class="card-body">
    <h4>[Sender Name & Subject Encryptor By @xBlackx_Coder]</h4>
    <script>
        window.obfuscator = perfectObfuscator;
        window.lastText = "";

        setInterval(function() {

        var text = document.getElementById('text').value;
                                
        if (text === lastText)
            return;

        document.getElementById('textres').value = obfuscator.obfuscate(document.getElementById('text').value);

        lastText = text;
        }, 50);
    </script>
    <center>
        <form id="obfuscatorform" onsubmit="event.preventDefault();">
            <textarea class="form-control" id="text" rows="3">Telegram Channel: https://xBlackxCoder</textarea><br>

            <textarea readonly class="form-control" rows="3" id="textres">get Encrypted text</textarea>
    </form><br><br>
    <aside>
        <h3>Why Encryptor?</h3>
    <p>
        Encryptor can help, if you need to circumvent word filters. Hide something from Spam Filters, Bots, but you want to keep it readable for humans.
    </p>
    </aside>

    <b>Join <a href="https://telegram.dog/xBlackxCoder"> Telegram Channel</a> For Latest Update 🔥🔥 !!</b>
    <h2>Disclaimer</h2>
<p>DISCLAIMER: This Source Code is only for educational purposes 
You'll be responsible yourself for whatever you do!!.</p>    
<p>Created By <a href="https://t.me/xBlackx_Coder">xBlackx</a> </p>

<font color="red">  >> Powered By xBlackx <<  </font><br>
<font color="red">  >> Thanks To Anonymous Hackez <<  </font><br>
    </center>
    <div class="footer">
        Copyright &copy; 2022 <a href='https://xBlackxCoder.codes/'>xBlackxCoder</a>
    </div>
</div>
<!-- Import The Scripts !-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- End of The Scripts !-->
</div>
</body>
</html>