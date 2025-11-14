// 1.set username cookie
<?php
$cookieName = "username";
$cookieValue = "Gulnara Serik";
$expirationTime = time() + 3600; // current time + 1 hour

setcookie($cookieName, $cookieValue, $expirationTime);

echo "Cookie named 'username' has been set with the value 'Gulnara Serik'.";
?>

// 2.retrieve "username" cookie
<?php
$cookieName = "username";

if (isset($_COOKIE[$cookieName])) {
    $cookieValue = $_COOKIE[$cookieName];
    echo "Value of cookie 'username': " . $cookieValue;
} else {
    echo "Cookie 'username' not found.";
}
?>

// 3.delete "username" cookie
<?php
$cookieName = "username";

// Set the cookie expiration time to the past to delete the cookie
setcookie($cookieName, "", time() - 3600);

echo "Cookie named 'username' has been deleted.";
?>

// 4.set "userid" session variable
<?php
session_save_path('D:\laragon\www\ins3064\test');
session_start();

$_SESSION["userid"] = 10020;

echo "Session variable 'userid' has been set with the value 10020.";
?>

// 5.retrieve "userid" session variable
<?php
session_save_path('D:\laragon\www\ins3064\test');
session_start();
if (isset($_SESSION["userid"])) {
    $userid = $_SESSION["userid"];
    echo "Value of session variable 'userid': " . $userid;
} else {
    echo "Session variable 'userid' not found.";
}
?>

// 6.destroy session and unset variables
<?php
session_save_path('D:\laragon\www\ins3064\test');
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

echo "Session destroyed. All session variables have been unset.";
?>

// 7. set secure cookie over HTTPS
<?php
$cookieName = "my_Cookie";
$cookieValue = "Example_cookie_value";
$expirationTime = time() + 3600; // current time + 1 hour
$secureOnly = true; // Set the cookie to be transmitted only over HTTPS

setcookie($cookieName, $cookieValue, $expirationTime, "/", "", $secureOnly, true);

echo "Secure cookie named 'my_Cookie' has been set.";
?>

// 8. check for "visited" cookie
<?php
$cookieName = "visited";

if (isset($_COOKIE[$cookieName])) {
    echo "Welcome back! You have visited before.";
} else {
    echo "Welcome! This is your first visit.";
}

?>

// 9. store array in session variable
<?php
session_save_path('D:\laragon\www\ins3064\test');
session_start();

// Array of user preferences
$userPreferences = array(
    "theme" => "light",
    "language" => "Spanish",
    "notifications" => true
);

$_SESSION["preferences"] = $userPreferences;

echo "User preferences have been stored in the session variable 'preferences'.";

?>

// 10. retrieve session user preferences
<?php
session_save_path('D:\laragon\www\ins3064\test');
session_start();

if (isset($_SESSION["preferences"]))
{
    $userPreferences = $_SESSION["preferences"];

    echo "User Preferences:</br>";
    foreach ($userPreferences as $key => $value) {
        echo $key . ": " . $value . "</br>";
    }
 }
else
{
    echo "No user preferences found.";
}

?>

// 11. session timeout after 30 minutes
<?php
session_save_path('D:\laragon\www\ins3064\test');
session_start();

// Set the session timeout duration in seconds
$sessionTimeout = 1800; // 30 minutes

// Check if the session has already been started and calculate the time since the last activity
if (isset($_SESSION['LAST_ACTIVITY'])) {
    $lastActivity = $_SESSION['LAST_ACTIVITY'];
    $currentTime = time();
    $timeSinceLastActivity = $currentTime - $lastActivity;

    // Check if the session has exceeded the timeout duration
    if ($timeSinceLastActivity > $sessionTimeout) {
        // Session expired, destroy the session
        session_unset();
        session_destroy();
        echo "Session expired. Please log in again.";
    } else {
        // Update the last activity time
        $_SESSION['LAST_ACTIVITY'] = $currentTime;
        echo "Session active.";
    }
} else {
    // Set the last activity time for the session
    $_SESSION['LAST_ACTIVITY'] = time();
    echo "Session started.";
}
?>

// 12. display number of active sessions
<?php
// Set the session save path
session_save_path('D:\laragon\www\ins3064\test');

// Get the session save path directory
$sessionSavePath = session_save_path();

// Get all session files in the save path directory
$sessionFiles = glob($sessionSavePath . '/*');

// Initialize the session counter
$activeSessions = 0;

// Iterate through the session files
foreach ($sessionFiles as $sessionFile) {
    // Check if the session file is valid
    if (is_file($sessionFile) && filectime($sessionFile) + ini_get('session.gc_maxlifetime') > time()) {
        $activeSessions++;
    }
}                        
echo "Number of active sessions: " . $activeSessions;
?>

// 13. limit maximum concurrent sessions

<?php
// Set the session save path
session_save_path('D:\laragon\www\ins3064\test');
session_start();

$maxSessions = 3; // Maximum number of concurrent sessions allowed for a user

if (!isset($_SESSION['session_count'])) {
    $_SESSION['session_count'] = 1;
} else {
    $_SESSION['session_count']++;

    if ($_SESSION['session_count'] > $maxSessions) {
        session_unset();
        session_destroy();
        echo "Maximum session limit exceeded. Please log in again.";
        exit;
    }
}
echo "Session active. Session count: " . $_SESSION['session_count'];

?>

// 14. regenerate session ID to prevent fixation
<?php
// Set the session save path
session_save_path('D:\laragon\www\ins3064\test');

session_start();

// Regenerate the session ID
session_regenerate_id(true);

echo "Session ID has been regenerated.";

?>

// 15. display last session access time
<?php
// Set the session save path
session_save_path('D:\laragon\www\ins3064\test');
session_start();

if (isset($_SESSION['last_access_time'])) {
    $lastAccessTime = $_SESSION['last_access_time'];
    echo "Last access time: " . date('Y-m-d H:i:s', $lastAccessTime);
    $_SESSION['last_access_time'] = time(); // Update the last access time
} else {
    $_SESSION['last_access_time'] = time();
    echo "Session started. First access.";
}

?>

// 16. set cookie and session variable with same name
<?php
session_start();

setcookie("data", "Cookie Value", time() + 3600);
$_SESSION['data'] = "Session Value";

echo "Cookie: " . $_COOKIE['data'] . "<br>";
echo "Session: " . $_SESSION['data'];
?>
