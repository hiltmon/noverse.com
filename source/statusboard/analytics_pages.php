<?php

define('ga_title','Top Pages Today');
define('days_to_report', 0); // No of days excluding today!

// a4573209w8816168p9189812
  
define('ga_profile_id','9189812');

require 'gapi.class.php';

date_default_timezone_set('America/New_York');

$ga = new gapi('1030684386720-qf85he75l8mdmnij4vtlp1dmpfobq273@developer.gserviceaccount.com', 'Noverse-GAPI-34df33b55414.p12');

$start_date = date("Y-m-d", strtotime('-' . days_to_report . ' days'));
$end_date = date("Y-m-d");

$metrics = array('pageviews');
$ga->requestReportData(ga_profile_id, array('PageTitle'), $metrics, array('-pageViews'), null, $start_date, $end_date);

echo '<table id="analytics_pages">';
	
foreach($ga->getResults() as $result2) {
	echo '<tr>';
	echo '<td class="pageViews" style="width:15%;text-align:right;color:yellow;">' . $result2->getPageviews() . '</td>';
	echo '<td class="pageTitle" style="width:85%;">' . $result2 . '</td>';
	echo '</tr>';
}

echo '</table>';
	
?>
