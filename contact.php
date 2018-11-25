<html>
<head>
    <title>Kapcsolat</title>
    <meta content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <div id="searchbar" align=right>
    
    <form method="get" action="http://www.google.com/search">
        <span>Keresés: </span>
        <input type="hidden" name="ie" value="UTF-8">
        <input type="hidden" name="oe" value="UTF-8">
        <input type="hidden" name="domains" value="weboldal cime">
        <input type="hidden" name="sitesearch" value="weboldal cime">
        <input type="text" name="q" size="20" maxlength="255" value="">
        <input type="submit" name="btnG" value="Keresés">        
    </form>
    </div>
    <div id="menu" align=center>
     <a href="index.php?site=main" id="menulink">Főoldal</a>
     <a href="index.php?site=poundforpound" id="menulink">Súlycsoport nélküli ranglista</a>
     <a href="index.php?site=biggestcheat" id="menulink">Legnagyobb bunda</a>
     <a href="index.php?site=matchofthecentury" id="menulink">Az évszázad meccse</a>
     <a href="index.php?site=contact" id="menulink">Kapcsolat</a>
        
    </div>
    <center>
        <?php
        $failed=true;
        $failtext="";
        if(isset($_POST['email'])&&isset($_POST['theme'])&&isset($_POST['text']))
        {
            if(!empty($_POST['email'])&&!empty($_POST['theme'])&&!empty($_POST['text']))
            {
                $email =$_POST['email'];
                $theme = $_POST['theme'];
                $text = $_POST['text'];
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    ?>
                    <p><?php echo $email ?></p>
                    <p><?php echo $theme ?></p>
                    <p><?php echo $text ?></p>
        
        <?php
                    $failed=false;
                }else $failtext = '<p style="color:#FF5252;">Hibás e-mail cím!</p>';
            }else $failtext = '<p style="color:#FF5252;">Minden mezőt kikell tölteni!</p>';
            if($failed == true)
            {
            ?>
        <div>
            <p><?php echo $failtext ?></p>
            <form method="post" action="index.php?site=contact">
            <span id="input"><p>E-Mail cím</p><input type="email" name="email" size="25" maxlength="255" value=""><br></span>
            <span id="input"><p>Tárgy:</p><input type="text" name="theme" size="25" maxlength="255" value=""><br></span>
            <span id="input"><p>Üzenet:</p><textarea rows="4" cols="50" name="text" size="25" maxlength="255" value=""></textarea><br></span>
                <p><input type="submit" value="Küldés"></p>
            </form>
        </div>
        <?php               
            }
        }else
        {
            ?>
        <div>
            <form method="post" action="index.php?site=contact">
            <span id="input"><p>E-Mail cím</p><input type="email" name="email" size="25" maxlength="255" value=""><br></span>
            <span id="input"><p>Tárgy:</p><input type="text" name="theme" size="25" maxlength="255" value=""><br></span>
            <span id="input"><p>Üzenet:</p><textarea rows="4" cols="50" name="text" size="25" maxlength="255" value=""></textarea><br></span>
            <input type="submit" value="Küldés">
            </form>
        </div>
        <?php
        }
        ?>
    </center>
    <div id="footer">
        <a href="https://www.ringtv.com/" id="footerlink">Eredeti oldal</a>
    </div>
</body>
</html>