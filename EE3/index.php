<?php
session_start();
if (!isset($_SESSION['user'])) {
    if (!isset($_POST['username'])) {
        echo makeUsernameForm();
    } else {
        $_SESSION['user'] = $_POST['username'];
        echo makeChatForm();
    }
} else {
    if (isset($_POST['message'])) {
        if (($_POST['message'] == 'logout')) {
            unset($_SESSION['user']);
            header("Location:" . $_SERVER['REQUEST_URI']);
        }
        $content = $_SESSION['user'] . ": " . $_POST['message'] . "<br>\n";
        file_put_contents("chat.txt", $content, FILE_APPEND | LOCK_EX);
    }
    echo makeChatForm();
}

function makeUsernameForm()
{
    $html = "<h2> Please select a username to use in chat</h2>";
    $html .= "<form method='post'>";
    $html .= "Username: <input name='username'><br>";
    $html .= " <input type='submit'></form>";
    return $html;
}

function makeChatForm()
{
    $previousContent = file_get_contents("chat.txt");
    $html = "<div>$previousContent</div>";
    $html .= "<form method='post'>";
    $html .= "Message: <input name='message'><br>";
    $html .= "<input type='submit'></form>";
    return $html;
}
