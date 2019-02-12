<?php
$db = mysqli_connect('localhost','root','','accounts');
$time       = date( "Y-m-d H:i:s" );
$ip         = getenv( 'REMOTE_ADDR' );
$userAgent  = getenv( 'HTTP_USER_AGENT' );
$referrer   = getenv( 'HTTP_REFERER' );
$currentPage = getenv( 'REQUEST_URI' );
$query      = getenv( 'QUERY_STRING' );



if( isset( $time, $ip, $userAgent, $referrer, $currentPage ) ) {
/* Log all the required information into the database */
    $prep = $db->prepare(
        "INSERT INTO error_log(
            ip_address,
            time,
            path,
            referrer,
            request_data,
            user_agent
        ) VALUES ( ?, ?, ?, ?, ?, ?)
        ");
    $prep->bind_param(
            'ssssss',
            $ip,
            $time,
            $currentPage,
            $referrer,
            $query,
            $userAgent
        );
}
$prep->execute();
$prep->close();

$db->close();
?>