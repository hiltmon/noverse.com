<?php

/* Thanks to http://davidwalsh.name/web-service-php-mysql-xml-json */
/* Must have at least a lat and a lon */
if (isset($_GET['lat']) && isset($_GET['lon']))
{
  /* Max results */
  $max_rows = isset($_GET['maxRows']) ? intval($_GET['maxRows']) : 100;
  /* Format, XML or JSON */
  $format = isset($_GET['fmt']) ? $_GET['fmt'] : 'xml';
  
  $orig_lat = floatval($_GET['lat']);
  $orig_lon = floatval($_GET['lon']);
  
  /* Max distance to search */
  $radius = isset($_GET['radius']) ? intval($_GET['radius']) : 10;
  
  /* Unit o search */
  $miles = 3959;
  $km = 6371;
  $default_factor = isset($_GET['d']) ? $_GET['d'] : 'km';
  $factor = ($default_factor == 'km') ? $km : $miles;
  
  /* Dev database
  $link = mysql_connect('127.0.0.1', 'root', 'joshua00') or die('Cannot connect to database');
  mysql_select_db('geonames') or die ('Cannot select database');
  */
  
  /* Prod database */
  $link = mysql_connect('mysql.noverse.com', 'sightstosee', 'sights2see') or die('Cannot connect to database');
  mysql_select_db('noverse_com') or die ('Cannot select database');

  /* Log the lookup */
  $log_query = "insert into lookupstats (latitude, longitude, radius, factor) values ($orig_lat, $orig_lon, $radius, '$default_factor');";
  mysql_query($log_query, $link) or die('Bad query:  '.$log_query);
  
  /* Haversine formula */
  $query = "SELECT *, ( $factor * acos( cos( radians($orig_lat) ) * cos( radians( `latitude` ) ) * cos( radians( `longitude` ) - radians($orig_lon) ) + sin( radians($orig_lat) ) * sin( radians( `latitude` ) ) ) ) AS distance FROM wikidata dest having distance < $radius ORDER BY id;";
  $result = mysql_query($query, $link) or die('Bad query:  '.$query);
  
  /* create one master array of the records */
  $sites = array();
  $count = 0;
  if (mysql_num_rows($result)) 
  {
    while ( ($site = mysql_fetch_assoc($result)) && ($count < $max_rows) )
    {
      $sites[] = array('site'=>$site);
      $count++;
    }
  }
  
  /* output in necessary format */
  if($format == 'json') 
  {
    header('Content-type: application/json');
    echo json_encode(array('sites'=>$sites));
  }
  else 
  {
    header('Content-type: text/xml');
    echo '<sites>';
    /* echo '<factor>',htmlspecialchars($default_factor, ENT_COMPAT, "UTF-8"),'</factor>'; */
    /* echo '<query>',htmlspecialchars($query, ENT_COMPAT, "UTF-8"),'</query>'; */
    foreach($sites as $index => $site) 
    {
      if (is_array($site))
      {
        foreach($site as $key => $value)
        {
          echo '<',$key,'>';
          if (is_array($value)) 
          {
            foreach($value as $tag => $val) 
            {
              echo '<',$tag,'>',htmlspecialchars($val, ENT_COMPAT, "UTF-8"),'</',$tag,'>';
              /* echo '<',$tag,'>',htmlentities($val, ENT_COMPAT, "UTF-8"),'</',$tag,'>'; */
              /* echo '<',$tag,'>',$val,'</',$tag,'>'; */
            }
          }
          echo '</',$key,'>';
        }
      }
    }
    echo '</sites>';
  }

  /* disconnect from the db */
  @mysql_close($link);
}

?>
