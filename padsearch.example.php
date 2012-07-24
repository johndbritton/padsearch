<?php
  // Notes
  // Fill out the database configuration section and the etherpad lite option
  // to reflect your local setup. Rename this file as necessary to match what
  // your webserver is expecting (padsearch.php or index.php, probably). 
  // jQuery is coming from the Google CDN, jQuery QuickSearch is coming from Github... YMMV
  // MIT License
  // Connect to your Etherpad DB and enjoy QuickSearch goodness.
  
  // ETHERPAD DATABASE CONFIGURATION
  $database_host = '';
  $database_name = '';
  $database_user = '';
  $database_password = '';
  // PUBLIC ETHERPAD URL
  $etherpad_baseurl = 'http://example.com/';
  // ETHERPAD LITE
  $etherpad_lite = false;
  // END CONFIGURATION OPTIONS

  $db = mysql_connect($database_host, $database_user, $database_password);
  mysql_select_db($database_name);

  $result = null;

  if($etherpad_lite) {
    $result = mysql_query("select distinct SUBSTRING(`key` FROM 5) as ID from store where `key` like 'pad:%' and `key` not like 'pad:%:%';");
  } else {
    $result = mysql_query("SELECT DISTINCT `ID` FROM `PAD_META`;");
  }

  while($row = mysql_fetch_array($result)) {
    $pads[] = $row['ID'];
  }
?>
<html>
<head>
  <title>Padsearch</title>
  <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
  <style type="text/css">
   body{margin: auto; text-align: center;}
   #search{font-size: 4em; font-family: 'Arvo', serif;}
   ul{margin: 0; padding: 0;}
   li{font-size: 2em; list-style-type: none; margin: 20px 0; font-family: 'Actor', sans-serif;}
   a{text-decoration: none; color: #000;}
   a:hover {background-color: yellow;}
   a:hover:after {content: ' \00bb';}
  </style>
</head>
<body>
<div id="container">
  <form>
    <input type="text" id="search" placeholder="padsearch">
  </form>
  <ul>
    <?php foreach($pads as $pad) { ?>
      <li class="pad">
        <a target="_blank" href="<?php 
	 echo $etherpad_baseurl;
  	 if($etherpad_lite) { echo "p/"; } 
  	 echo $pad; 
	?>"><?php echo $pad; ?></a>
      </li>
    <?php } ?>
  </ul>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></s$
  <script type="text/javascript" src="https://raw.github.com/riklomas/quicksearch/master/jquery.quicksearch$
  <script type="text/javascript">
    $('input#search').quicksearch('li');
  </script>
</div>
</body>
</html>
