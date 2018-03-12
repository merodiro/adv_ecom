<?php
require_once "conn.php";
session_start();

if(isset($_COOKIE['user']) && !isset($_SESSION['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];

}

function limit($str) {
    if (strlen($str) > 75){
        return substr($str, 0, 72) . '...';
    } else {
        return $str;
    }
}

function user() {
    $stmt = $GLOBALS['pdo']->prepare('SELECT * FROM users WHERE id = :id');
    $stmt->execute(['id' => $_SESSION['user']]);
    $user = $stmt->fetch();
    if (!$user){
        logout();
    }
    return $user;
}

function flash($msg, $type, $input = NULL) {
    $_SESSION['errors']['type'] = $type;
    $_SESSION['errors']['messages'][] = $msg;
    $_SESSION['errors']['inputs'][$input] = $msg;
}

function has_error ($input) {
    return isset($_SESSION['errors']['inputs'][$input]);
}

function dd($text) {
    echo "<pre>";
    print_r($text);
    echo "</pre>";
}

function redirect($url)
{
   header('Location: ' . $url);
   die();
}

function user_exists($email) {
    $stmt = $GLOBALS['pdo']->prepare('SELECT count(*) FROM users WHERE email= :email');
    $stmt->execute(['email' => $email]);
    return $stmt->fetchcolumn();
}

function login($email, $password) {
    if(user_exists($email)) {
        $stmt= $GLOBALS['pdo']->prepare('SELECT * FROM users WHERE email= :email');
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();
        if(password_verify($password, $user->password)) {
            $_SESSION['user'] = $user->id;
            setcookie('user', $user->id, time() + (86400 * 30), "/");
            redirect('/');
        }
    }
    
    flash('Wrong credientials', 'danger');
}

function logout() {
    session_unset();
    session_destroy();
    setcookie("user", "", time() - 3600);
    redirect('/');
}

function old($key) {
    if($_SERVER['REQUEST_METHOD'] =='POST') {
        return $_POST[$key];
    }
}