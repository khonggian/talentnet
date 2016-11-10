<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <title>Site Maintenance</title>
    <style type="text/css">
	  *{margin:0px;padding:0px;}
      body { text-align: center;padding: 150px 0 0 0;font-size: 1.000em;}
      h1 { font-size: 2.7em; color:#00BEFF;}
      body { font: 20px Helvetica, sans-serif; color: #333; }
      #article {background: url(<?=base_url()?>assets/img/maintenance.png) no-repeat left center; display: block; text-align: left; width: 40%; margin: 0 auto; padding: 0px 0px 0 265px;min-height: 300px;vertical-align: middle;}
      a { color: #dc8100; text-decoration: none; }
      a:hover { color: #333; text-decoration: none; }

    </style>
 
</head>
<body>
    <div id="article" class="centered">
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <?=nl2br($setting->maintenance_text)?>
    </div>
    </div>
</body>
</html>