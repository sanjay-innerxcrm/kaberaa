<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Real-time Chat App</title>
    <script src="https://js.pusher.com/8.0/pusher.min.js"></script>
</head>
<body>
    <h1>Real-time Chat</h1>
    <div id="chat"></div>
    <form id="message-form">
        <input type="text" id="message-input" placeholder="Type your message...">
        <button type="submit">Send</button>
    </form>
    <script src="js/app.js"></script>
</body>
</html>
