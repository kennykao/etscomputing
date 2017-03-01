<? // -*- C++ -*-

/* the following turns off Notice: Use of undefined constant errors globally without editing php.ini */
/* Options: E_WARNING, E_ERROR, E_ALL -- see http://us.php.net/error_reporting for more options. */
error_reporting(E_ERROR);

/* global variables */

$bosVersion = "3.0";
$versionTag = "Khaki";
$releaseDate = "May 2001";
$styleFile = "bos.css";

/* The path for $lockFile is set after my.inc is included below. */

$pageTitles = array("Home", "View Schedule", "Available Subs",
		    "Post Sub", "Time Edit", "About", "Logout");
@$pageFiles  = array("$BOS_HTDOCS_ROOT/index.php", "$BOS_HTDOCS_ROOT/view.php", "$BOS_HTDOCS_ROOT/avail.php",
                    "$BOS_HTDOCS_ROOT/post.php", "$BOS_HTDOCS_ROOT/time-edit.php",
                    "$BOS_HTDOCS_ROOT/about.php", "$BOS_HTDOCS_ROOT/logout.php");
/* old - includes ability to reauthenticate
$pageTitles = array("Home", "View Schedule", "Available Subs",
                    "Post Sub", "Time Edit", "Re-Authenticate", "About", "Logout");
$pageFiles  = array("$BOS_HTDOCS_ROOT/index.php", "$BOS_HTDOCS_ROOT/view.php", "$BOS_HTDOCS_ROOT/avail.php",
                    "$BOS_HTDOCS_ROOT/post.php", "$BOS_HTDOCS_ROOT/time-edit.php", "$BOS_HTDOCS_ROOT/re-auth.php",
                    "$BOS_HTDOCS_ROOT/about.php", "$BOS_HTDOCS_ROOT/logout.php");
*/

$addHeaderText = "";

$schedList = array("nchan","nicoles","crumpler","jamesf","anthony","darlene","sched", "ammon.reagan","natalie.montanez","rslong","jsuen","nchung94");
$adminList = array("nchan","nicoles","crumpler","anthony","darlene","jamesf","ammon.reagan","natalie.montanez","rslong","nchung94");

@define( BOS_LOG_LEVEL, 0 );
@define( BOS_ERROR_LEVEL, 0 );

/* constants */

@define( SHIFTS_TABLE, "shifts" );
@define( SUB_TABLE, "subs" );
@define( FACILITIES_TABLE, "facilities" );
@define( EMP_TABLE, "employees" );
@define( GROUPS_TABLE, "groups" );
@define( GROUP_MEMBERSHIP_TABLE, "group_membership" );
@define( ADMIN_TABLE, "bos_admin" );
@define( CLASS_TABLE, "class" );
@define( TIME_EDIT_TABLE, "time_edit" );
@define( BACKTOBACK_EXCEPTIONS_TABLE, "backtoback_exceptions" );
@define( NEWS_TABLE, "news" );
@define( NONCALNET_AUTH_TABLE, "noncalnet_auth" );

@define( SUB_FLAG_NORMAL, 0 );
@define( SUB_FLAG_EMERGENCY, 1 );

@define( SHIFT_FLAG_NORMAL, 0 );
@define( SHIFT_FLAG_OPENING, 1 );
@define( SHIFT_FLAG_CLOSING, 2 );

/**
 * The following code is to keep require() from including something twice...
 **/

$bos_reqs[0] = "include/bos.php";

function bos_require($req) {
  global $bos_reqs;
  for ($i = 0; $i < sizeof($bos_reqs); $i++) {
    if ($bos_reqs[$i] == $req) {
      return "";
    }
  }
  $bos_reqs[] = $req;
  return "include(\"$req\");";
}

eval(bos_require("include/misc.php"));
eval(bos_require("include/my.inc"));
eval(bos_require("include/bos-cookies.php"));
eval(bos_require("include/database.php"));
eval(bos_require("include/employee.php"));

/* setting variables from my.inc */

$lockFile = "$BOS_LOCK_DIR/bos.lock";

/* BOS-wide setup */

$db = CreateDBObject();

/* BOS specific functions */

function addHeader($addString) {
  global $addHeaderText;
  $addHeaderText .= $addString;
}


function BOS_baseName($pathStr) {
  global $BOS_URL_ROOT;

  $shortenedPath = "";
  $prevOk = true;
  for ($i = 0; $i <  strlen($pathStr); $i++) {
    if (!($prevOk && ($i < strlen($BOS_URL_ROOT)) &&
	  (!strcmp(substr($pathStr,$i,1),substr($BOS_URL_ROOT,$i,1))))) {
      $shortenedPath .= substr($pathStr,$i,1);
      $prevOk = false;
    }
  }
  return $shortenedPath;
}

/*
 * $title: Page title
 */
function bosHeader($title) {
  global $bosVersion;
  global $versionTag;
  global $styleFile;
  global $addHeaderText;
  global $BOS_URL_ROOT;
  global $PHP_SELF;
  global $REMOTE_ADDR;
  global $db;
  global $adminList;
  global $lockFile;
  global $BOSLogin;



  if ($title == "Logout") {
    killLoginCookie();
  } else {
    session_start();
    setLoginCookie();
  }
  header( "Content-Type: text/html; charset=iso-8859-1");
  header( "Cache-Control: no-cache, must-revalidate;");

  echo("<html>\n");
  echo("<head>\n");
  echo("<title>".$title." | BOS ".$bosVersion."</title>\n");
  echo($addHeaderText);
  echo("<link rel=\"stylesheet\" href=\"".$BOS_URL_ROOT."/".$styleFile.
       "\" type=\"text/css\" title=\"BOS Style\">\n");
  echo("</head>\n");
  echo("<body>\n");
  // begin page header
  ?>
  <div class="header">
  <table border=0 cellspacing=0 cellpadding=4 width=100% bgcolor=#003C77>
  <tr>
  <td width=100%>
  <table border=0 cellpadding=2 cellspacing=0 width=100%>
  <tr bgcolor=black>
  <td align=left>
  <strong class="bosName"><font color=#0080FF>Better</font> 
  <font color=#FFFF80>Off</font>
  <font color=#C05050>Sched</font></strong><br>
  <span class="version"><font color=#50A0C0>ver. 
  <? echo($bosVersion." (<span class=\"khaki\">".$versionTag."</span>)"); ?>
  </font>
  </span><br>
  </td>
  <td align=right>
  <?
  echo ("<span class=\"loginLine\">");
  if ( authUser() && $title != "Logout") {
    echo "<font color=#EEA547 size=-1>";
    echo "Welcome, $BOSLogin<br>";
    //$auth_time=date('(g:i a)', $_SESSION['cookieLifetime']);
  } else {
    killLoginCookie();
    echo("<font color=#BBBBBB size=-1>");
    echo("not logged in<br>");
    unset($auth_time);
  }
  //echo(" logged in " . (isset($auth_time) ? " $auth_time" : "") . "<br>");
  echo("</font>");
  echo("</span>");
  ?>

  <font color=#70C0E0 size=+2>
  <span class="pageTitle">
  <?
  echo(spacedString(strtolower($title)));
  if (bosPausedP()) {
    echo("<br><font face=\"Arial\" size=\"-2\" color=\"#AA99BB\">(BOS is down.)</font>"); 
  }
  ?></span>
  </font>
  
  </td>
  </tr>
  </table>
  </td>
  </tr>
  <tr>
  <td valign=center><? headerLinks(); ?></td>
  </tr>
  </table>
  </div>
  <br>
  <? ;
  // end page header

  if ($title == "Logout") {
    echo("<h1>Thank you for using BOS</h1><p class=\"par\">You have logged out.  Your session has ended.</p>");
    bosFooter();
    exit();
  }

  // check to make sure this page needs to be logged into (about.php and docs/*
  // dont need to be authorized), then get the login cookie if necessary.
  //$urlPieces = explode("/",BOS_basename($PHP_SELF));
  //if (($title != "About") &&
  //    ($urlPieces[0] != "docs")) {
    if ( getLoginCookie() ) {
      // if getLoginCookie() returns true, then it was necessary to ask, and we
      // should not process the page any further.
      bosFooter();
      exit();
    }
    if (bosPausedP() && (!is_member_of($_SESSION['BOSLogin'], $adminList))) {
      echo("BOS is temporarily unavailable.<br><br>");
      echo("<table border=0 cellspacing=0 cellpadding=1 width=\"100%\">\n");
      echo("<tr valign=\"top\">\n");
      echo("<td bgcolor=\"#9988AA\" align=\"right\">\n");
      echo("<font face=\"Courier\" size=\"smaller\">\n");
      $lft = filectime($lockFile);
      echo(date("h:ia, m/d/y", $lft));
      echo("</font>\n");
      echo("</td>\n");
      echo("</tr>\n");
      echo("<tr><td bgcolor=\"#332244\"><img src=\"graphics/spacer.gif\"></td></tr>\n");
      echo("<tr valign=\"top\">\n");
      echo("<td bgcolor=\"#BBAACC\">\n");
      echo("<font face=\"Courier\" size=\"smaller\">\n");
      $lfh = fopen($lockFile, "r");
      echo("<pre>");
      fpassthru($lfh);
      echo("</pre>");
      echo("</font>\n");
      echo("</td>\n");
      echo("</tr>\n");
      echo("</table>\n");

      bosFooter();
      exit();
    }
  //}

  // The following code is not currently in use.
  // Look for a non-null "bosDown" entry in the bos_admin table,
  // indicating that BOS is down. 
  $query = "SELECT * FROM " . ADMIN_TABLE . " WHERE bosDown IS NOT NULL";
  if ( ! $db->query( $query ) ) {
    bosDieError( 0, __FILE__, "Could not query " . ADMIN_TABLE . " in DB.",
		 "Query: " . $query );
  }
  $db->fetch_result_row( $result );
  if ( @$result[bosDown] ) {
    if ( $result[bosAllow] != $REMOTE_ADDR ) {
      echo "<h1>BOS is unavailable...</h1>\n";
      echo "<p class=\"error\">" . $result[bosDown] . "</p>\n";
      bosFooter();
      exit();
    }
  }
}

function bosSidebarHeader() {
  global $bosVersion;
  global $versionTag;
  global $styleFile;
  global $addHeaderText;
  global $BOS_URL_ROOT;
  global $BOSLogin;
  global $PHP_SELF;

  if ($title == "Logout") {
    killLoginCookie();
  } else {
    session_start();
    setLoginCookie();
  }
  header( "Content-Type: text/html; charset=iso-8859-1");
  header( "Cache-Control: no-cache, must-revalidate;");

  echo("<HTML>");
  echo("<HEAD>");
  echo("<TITLE>".$title." | BOS ".$bosVersion."</TITLE>");
  echo($addHeaderText);
  echo "<base href=\"$BOS_URL_ROOT\" target=\"_CONTENT\">\n";
  echo("<LINK REL=\"stylesheet\" HREF=\"".$BOS_URL_ROOT."/".$styleFile.
       "\" TYPE=\"text/css\" TITLE=\"BOS Style\">");
  echo("</HEAD>");
  echo("<BODY>");
  
  echo "<div class=\"header\">\n";
  echo "<strong class=\"bosName\"><font color=#0080FF>Better</font> <font color=#FFFF80>Off</font> <font color=#C05050>Sched</font></strong>\n";
  echo("<div align=\"right\" class=\"loginLine\">");
  if ($BOSLogin != "") {
    echo($BOSLogin);
  } else {
    echo("not");
  }
  echo(" logged in<br />");
  echo "</div>";
  echo "</div>\n";
}

function bosSidebarLinks() {
  echo "<a href=\"/\">BOS2</a><br />\n";
}

function bosFooter() {
  global $PHP_SELF;
  global $bosVersion;
  global $BOS_URL_ROOT;
  global $BOS_DB_NAME;
  
  // begin page footer
  ?>
<br>
<div class="footer">
<table border=0 cellspacing=0 cellpadding=4 width=100% bgcolor=#003C77>
<tr>
<td width=100%>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
<tr valign=middle class="topRow">
        <td align=left class="topRow">
          <span class="bosName">Better Off Sched</span><br>
          <span class="version">(version <? echo($bosVersion) ?>)</tt></span>
        </td>
        <td align=right>
            <span class="log">
            <? $loadTime = time(); echo(BOS_basename($PHP_SELF)); ?>
	    loaded
	      <? if ( $BOS_DB_NAME != "bos" ) {
		echo "(using db " . $BOS_DB_NAME . ") ";
	      } ?>
            <? echo(date("h:i:sa D j M",$loadTime)); ?>
            </span>
        </td>
      </tr>
      <tr bgcolor=black>
        <td align=center valign=middle colspan=2>
          <span class="props">
	       
          <a href="<? echo($BOS_URL_ROOT); ?>"><img src="graphics/footer/bos.gif" alt="BOS" border=0 align=center></a>
          &nbsp;&nbsp;
          <? echo(spacedString("is powered by")); ?>
          &nbsp;&nbsp;
          <a href="http://www.w3.org/Style/CSS/"><img src="graphics/footer/css.gif" alt="CSS" border=0 align=center></a>
          &nbsp;<img src="graphics/white.gif" alt="">&nbsp;<img src="graphics/white.gif" alt="">&nbsp;<img src="graphics/white.gif" alt="">&nbsp;
          <a href="http://www.php.net/"><img src="graphics/footer/php3.gif" alt="PHP3" border=0 align=center></a>
          &nbsp;<img src="graphics/white.gif" alt="">&nbsp;<img src="graphics/white.gif" alt="">&nbsp;<img src="graphics/white.gif" alt="">&nbsp;
<!--
          <a href="http://www.oracle.com/"><img src="graphics/footer/oracle.gif" alt="ORACLE" border=0 align=center></a>
-->
          <a href="http://www.mysql.org/"><img src="graphics/footer/mysql.gif" alt="MYSQL" border=0 align=center></a>
	  </div>
        </td>
      </tr>
    </table>
    </td>
    </tr>
    </table>
  <?
  // end page footer
  echo("</BODY>");
  echo("</HTML>");
}

function bosSidebarFooter() {
}

function headerLinks() {
  global $pageTitles;
  global $pageFiles;
  global $PHP_SELF;   
  global $BOS_URL_ROOT;

  echo( "<span class=\"areas\">" );
  for ($i = 0; $i < count($pageTitles); $i++) {
    if (!strcmp($pageFiles[$i], BOS_basename($PHP_SELF)) ||
	(!strcmp($pageFiles[$i],"") &&
	 !strcmp(BOS_basename($PHP_SELF),"index.php"))) {
      echo("<span class=\"currentArea\">".$pageTitles[$i]."</span>");
    } else {
      echo("<A HREF=\"".$pageFiles[$i]."\">".$pageTitles[$i]."</a>");
    }
    if ($i < (count($pageTitles) - 1)) {
      echo(" | ");
    }
  }
  echo( "</span>" );
}

function spacedString($text) {
  $rVal = "";
  for ($i = 0; $i < strlen($text); $i++) {
    $cVal = substr($text, $i, 1);
    if ($cVal == " ") {
      $cVal = "&nbsp;";
    }
    if ($i != (strlen($text) - 1)) {
      $rVal .= $cVal."&nbsp;";
    } else {
      $rVal .= $cVal;
    }
  }
  return $rVal;
}

@define( LOG, "log" );
@define( ERROR, "error" );

function fixFileName( &$file )
{
  $file = substr( strrchr( $file, "/" ), 1 );
}

function bosPausedP() {
  global $lockFile;

  if (file_exists($lockFile)) {
    return 1;
  } else {
    return 0;
  }
}

function bosLog( $level, $file, $msg, $extraInfo = null )
{
  global $REMOTE_ADDR;
  if ( $level <= BOS_LOG_LEVEL ) {
    // log the msg.
    fixFileName( $file );
    $msgToLog = "BOS[". $file . "," . $REMOTE_ADDR . "] " . $msg; 
    if ( $extraInfo != null ) {
      $msgToLog .= " [" . $extraInfo . "]";
    }
    error_log( $msgToLog, 0 );
  }
}

function bosError( $level, $file, $msg, $extraInfo = null ) {
  if ( $level <= BOS_ERROR_LEVEL ) {
    // log the error, plus the extra info.
    bosLog( $level, $file, $msg, $extraInfo );
  }
  echo "\n\n<h3 class=\"error\">Error...</h3>\n<p class=\"error\">$msg</p>\n\n";
}

function bosDieError( $level, $file, $msg, $extraInfo = null ) {
  global $db;
  bosError( $level, $file, $msg, $extraInfo );
  bosFooter();
  $db->unlock();
  die();
}

function bosMail( $to, $from, $subject, $message, $extraHeaders=null ) {
  global $bosVersion;
  $headers = "From: \"BOS ".$bosVersion." $from\" <bos@bos.berkeley.edu>\nReply-To: bos@bos.berkeley.edu\nX-Mailer: PHP/" . phpversion();
  if ( $extraHeaders != null ) {
    $headers .= "\n" . $extraHeaders;
  }

  return Mail( $to, $subject, $message, $headers );
}

?>
