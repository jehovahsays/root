<?php
gethostname();
$_SESSION['username'] = 'root@localhost';
$username = getenv('POST') ?: getenv('POST');
$username = getenv('USERNAME') ?: getenv('USER');
$ip = $localIp = gethostbyname(gethostname());
$handle = fopen("./link.html", "a"); //open log use "a" to write and grow log no deletion or use "r+" writes 1 line to the log it also deletes log
foreach($_POST as $variable => $value) { 
fwrite($handle, "root@localhost:~# searched for" . "\n" . "<a href=\"" . $value . ".html" . "\">$value</a></br></br>" . "\r\n");
$handle = fopen("./$value.html", "a");
fwrite($handle, "root@localhost:~# searched for" . "\n" . $value . "\r\n");
}
fclose($handle);
?>
<?php
$handle = fopen("./circumference/diameter.log", "a"); //open log use "a" to write and grow log no deletion or use "r+" writes 1 line to the log it also deletes log
fwrite($handle, $ip = $localIp = gethostname() . "\r\n");
fclose($handle);
?>
<?php
header_remove( 'X-Powered-By' );
header( 'Cache-control: none, no-cache, private, max-age=0' );
header( 'Pragma: no-cache' );
header( 'Content-Type-Options: nosniff' );
header( 'X-Content-Type-Options: nosniff' );
header( 'XSS-Protection: 1; mode=block' );
header( 'X-XSS-Protection: 1; mode=block' );
header( 'Vary: Accept-Encoding' );
header( 'viewport: width=device-width' );
header( 'Accept-Language: en-US,en;q=0.5' );
header( 'Connection: Keep-alive' );
header( 'Host: root@localhost' );
header( 'description: root@localhost' );
header( 'keywords: root@localhost' );
header( 'Vary: Accept-Encoding' );
header( 'Expires: 0' );
header( 'Referrer-Policy:  no-referrer' );
//include(realpath(getenv('DOCUMENT_ROOT')) .'/blackhole/blackhole.php');
//header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
//header( 'Public-Key-Pins: pin-sha256="";' );
//header( 'Content-Security-Policy: default-src "self";');
//include(realpath(getenv('DOCUMENT_ROOT')) .'/blackhole/blackhole.php');
//header( 'Strict-Transport-Security: max-age=0; includeSubDomains; preload' );
//header( 'google-site-verification: ' );
//header( 'msvalidate.01: ' );
//header( 'norton-safeweb-site-verification: ' );
//header( 'wot-verification: ' );
//header( 'Expect-CT:  enforce,max-age=30,report-uri=""' );
?>
<!DOCTYPE html>
<html lang="en">
<head>	
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
<meta name="apple-mobile-web-app-capable" content="yes">    
<meta name="viewport" content="width=device-width">
<meta http-equiv="Cache-Control" content="no-store, no-cache, private, max-age=0" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="theme-color" content="black" />
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<link rel="stylesheet" href="../index.css">
<!<script type="application/javascript"  src="../index.js">
<!</script>
    <style>
    html {
        box-sizing: border-box;
    }
    *, *:before, *:after {
        box-sizing: inherit;
    }
    html, body {
        height: 100%;
        margin: 0;
        color: white;
        font-size: 20pt;
    }
    h1 {
        font-family: sans-serif;
    }
    #background {
        width: 100%;
        height: 100%;
        display: block;
        position: fixed;
        left: 0;
        top: 0;
        z-index: -1;
        pointer-events: none;
        border: none;
    }
    #content {
        padding: 1em;
    }
    #content>* {
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }
    a {
      color: green;
    }
    a:visited {
      color: blue;
    }
    a:hover {
      color: red;
    }
  </style>
<title>root@localhost</title>
</head>

   <!<iframe id="background" src="./index.log"><!</iframe>
    <div id="content">
 <body bgcolor="black">
<!<body style="background-color:black;">

		<?php
$pathLen = 0;

function prePad($level)
{
  $ss = "";

  for ($ii = 0;  $ii < $level;  $ii++)
  {
    $ss = $ss . "|&nbsp;&nbsp;";
  }

  return $ss;
}

function myScanDir($dir, $level, $rootLen)
{
  global $pathLen;

  if ($handle = opendir($dir)) {

    $allFiles = array();

    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != "..") {
        if (is_dir($dir . "./" . $entry))
        {
          $allFiles[] = "D: " . $dir . "./" . $entry;
        }
        else
        {
          $allFiles[] = "F: " . $dir . "./" . $entry;
        }
      }
    }
    closedir($handle);

    natsort($allFiles);

    foreach($allFiles as $value)
    {
      $displayName = substr($value, $rootLen + 4);
      $fileName    = substr($value, 3);
      $linkName    = str_replace(" ", "%20", substr($value, $pathLen + 3));
      if (is_dir($fileName)) {
        echo prePad($level) . $linkName . "<br>\n";
        myScanDir($fileName, $level + 1, strlen($fileName));
      } else {
        echo prePad($level) . "<a href=\"" . $linkName . "\" style=\"text-decoration:none;\">" . $displayName . "</a><br>\n";
      }
    }
  }
}

?>

<center>	
<div style="text-align:left;">
  <ul class="pages"> 		
<li class="login page">
<table> 
<tr> 
<td> 
<label for="name">
<span class="box">	 
<h6>root@<?php echo gethostname(); ?>:~#
</h6>
</span>
</label> 
</td>

<td>
<div class="form">
<form action="../core.php?action=post" method="post">	 
<input type="text" name="username" class="usernameInput" style="height: 50px;"  style="text-align:left;" type="text" maxlength="14" autocomplete="false" placeholder="Start Game" />
</form>

</div>
</td> 
</tr> 
</table>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT, gaTrack: true, gaId: 'UA-60536321-1'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<h5>Sitemap</h5>
<p style="font-family:'Courier New', Courier, monospace; font-size:small;">


<?php
  $root = './';

  $pathLen = strlen($root);

  myScanDir($root, 0, strlen($root)); ?>
  
  
  
  </p>
  
 </li>
</ul>
</center>	
   </div>
   
</body>	
</html> 
