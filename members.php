<?php
/*
Template Name: Members
*/

if (!is_user_logged_in()) {
  auth_redirect();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    <meta name="keywords" content="Team,619,Cavalier,Robotics,FIRST,UVA,University,of,Virginia,FRC">
    <meta name="description" content="Website of FIRST Robotics Competition Team 619: Cavalier Robotics">
    <meta charset="UTF-8">
      <meta charset="UTF-8">
    		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/localhost:8888\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.2.3"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='http://localhost:8888/wp-includes/css/dashicons.min.css?ver=4.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='http://localhost:8888/wp-includes/css/admin-bar.min.css?ver=4.2.3' type='text/css' media='all' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost:8888/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost:8888/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.2.3" />
<link rel='canonical' href='http://localhost:8888/members/' />
<link rel='shortlink' href='http://localhost:8888/?p=156' />
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/style-members.css" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery.sticky.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#sticker").sticky({topSpacing:32});
  });
</script>
  </head>
  <body>
    <div class="navbar" id="sticker">
      <ul>
        <li><a href="javascript:void(0)" id='menu_discussion'>Discussion</a></li>
        <li><a href="javascript:void(0)" id='menu_calendar'>Calendar</a></li>
        <li><a href="javascript:void(0)" id='menu_fundraising'>Fundraising</a></li>
        <li><a href="javascript:void(0)" id='menu_outreach'>Outreach</a></li>
        <li><a href="http://www.carobotics.org" >Main Site</a></li>
      </ul>
    </div> <!--end navbar-->
    <div id="calendar">
      <h1>Calendar</h1>
      <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%230C2340&amp;src=bqp9g4gv1dsaf9oqglkmatugpo%40group.calendar.google.com&amp;color=%23060D5E&amp;ctz=America%2FNew_York" style=" border-width:0 " width="100%" height="600" frameborder="0" scrolling="no"></iframe>
    </div><!--end calendar-->
    <!--Discussion-->
    <div id="discussion">
      <h1>Discussion</h1>
<?php
ct_get_discussion(array(
  'count' => 100,
  'indent' => "      ",
  'show_admin_posts' => false,
  'author_can' => ""
));
?>
   </div><!--end discussion-->
   <div id="fundraising">
      <h1>Fundraising</h1>
      <div class="post">
        <h2>Amazon</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo condimentum accumsan. Mauris viverra enim ac scelerisque faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In ultrices eget est a auctor. Nulla efficitur eros dictum consequat ullamcorper. Duis lacus tellus, tempus ac luctus a, tristique sit amet purus. Sed condimentum nunc et sapien mollis viverra. Curabitur ut nibh libero. Nam maximus tempor quam, a fermentum dui ultrices a. Mauris fermentum, orci eu ullamcorper cursus, felis est venenatis lectus, nec volutpat leo mauris eget ex. Aliquam lacinia facilisis orci.</p>
      </div>
      <div class="post">
        <h2>Food Lion</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo condimentum accumsan. Mauris viverra enim ac scelerisque faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In ultrices eget est a auctor. Nulla efficitur eros dictum consequat ullamcorper. Duis lacus tellus, tempus ac luctus a, tristique sit amet purus. Sed condimentum nunc et sapien mollis viverra. Curabitur ut nibh libero. Nam maximus tempor quam, a fermentum dui ultrices a. Mauris fermentum, orci eu ullamcorper cursus, felis est venenatis lectus, nec volutpat leo mauris eget ex. Aliquam lacinia facilisis orci.</p>
      </div>
      <div class="post">
        <h2>Grant</h2>
        <p>We're submitting a grant to TechnoMachine Corp! If you can help write, contact Matt ASAP.</p>
      </div>
   </div><!--end fundraising-->
   <div id="outreach">
      <h1>Outreach</h1>
      <div class="post">
        <h2>VTEEA</h2>
        <p>
Sally Sylvester, director of FRC, is asking for our help at the annual VTEEA Conference (Virginia Technology & Engineering Education Association) on Thursday, July 30th.  The conference will be held at UVA.   You can read more about VTEEA's 3 day conference at VTEEA.org.  
        </p>
        <p>
FIRST will have a booth with interactive workshops on Thursday, July 30th from 8:30am - 12:00.  They would like our students to help out with the workshops and to display our robot.  We will probably take both Jenga and the Tri-bot.
        </p>
        <p>
This is another great opportunity to get exposure for our team.  Please let me know if you'd like to help out ASAP as we need to let Sally know ASAP.
        </p>
        <p>

We will meet at the lab Thursday at 10:45am, load up and head over to UVA.  We will drop students off at the door, with Jenga.  Unfortunately, they couldn't get it running yesterday so it will just be a show piece.  Once at Thornton Hall, go to room #THNE304.
        </p>
        <p>
Sally, the director of VAFIRST, would like one or two of you to share a few words on your experience with First and the impact it has had on you.  
        </p>
      </div>
      <div id="outreachHours">
<?php
$spreadsheet = "https://docs.google.com/spreadsheets/d/1O83QoVdi6R-yf7XJJa4UuSP44WPwL6ompZiY3AbhkwE/pub?output=csv";

$file = fopen($spreadsheet, "r");
$data = array();
if($file != false) {
  while(!feof($file)) {
    $data[] = fgetcsv($file);
  }
  fclose($file);
} else {
  echo "            <p>Sorry, we cannot display the outreach hours right now</p>\n";
}

$headings = $data[0];
unset($data[0]);
sort($data);
array_unshift($data, $headings);

echo "<div class='column'>";
echo "<table>";
for($i = 0; $i<count($data)/2; $i++) {
  echo "<tr>";
  foreach($data[$i] as $value) {
    echo "<td>$value</td>";
  }
  echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "<div class='column'>";
echo "<table>";
echo "<tr>";
foreach($data[0] as $value) {
  echo "<td>$value</td>";
}
echo "</tr>";
for(; $i<count($data); $i++) {
  echo "<tr>";
  foreach($data[$i] as $value) {
    echo "<td>$value</td>";
  }
  echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
     </div><!--Outreach Hours-->
   </div><!--end outreach-->
      <!--Footer-->
      <div class="footer" id='footer'>
        <img src="<?php bloginfo('template_url'); ?>/images/Logo.png" alt="Team 619" id="Logo" />
      </div> <!--end footer -->
    <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
  <?php wp_footer(); ?>
  </body>
</html>