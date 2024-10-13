<?php
//we get the request url and store it in a variable $request_site

$request_site = isset($_GET['request_site']) ? $_GET['request_site'] : 'home';



//displaying homepage
if (empty($request_site)) {
    $request_site = "home";
}


//login form and sign up form action attribute name

$login_register_action = "handle-form-submission";


//check if either login or signup form is submitted
if ($request_site === $login_register_action && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once "backend.php";
}

//set request url as file location so that we can serve it
$page_path = __DIR__ . "/frontend/pages/" . $request_site . ".php";

session_start();

//function to get logged in user
function user()
{

    if (isset($_SESSION['user'])) {
        return (object) $_SESSION['user'];
    }
    return null;
}
//you can access logged user info using $get_user object for name you would use $get_user->name
$get_user = user();
//you can also access user using this function for example to access user name you would use get_user('name')
function get_user($property)
{
    global $get_user;
    $request = $get_user->$property;
    echo "{$request}";
}

//function to check if user is logged in or not 
//you can call this function at the top of page you want user to be logged in inorder to access it
function require_login()
{
    if (!isset($_SESSION['user'])) {
        header("Location: login");
    }
}
//function to check if there is an error and display it

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
}


function display_error($error, $is_main = false)
{
    global $errors;
    if (isset($errors["{$error}"])) {

        echo '<div class="' . ($is_main ? 'error-main' : 'error') . '">
                    <p>' . $errors["$error"] . '</p>
                    </div>';
    }
}

//displaying requested page

if (file_exists($page_path)) {

    require $page_path;
} else {
    http_response_code(404);
    require __DIR__ . "/404.php";
}


//unsetting the errors after they have been displayed


if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}
