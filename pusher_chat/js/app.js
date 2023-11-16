var pusher = new Pusher("d260c6271947d9942b36", {
  cluster: "ap2",
  encrypted: true,
});

var channel = pusher.subscribe("chat");
channel.bind("message", function (data) {
  var chat = document.getElementById("chat");
  chat.innerHTML += "<p>" + data.name + ": " + data.message + "</p>";
});

document.getElementById("message-form").addEventListener("submit", function (e) {
    e.preventDefault();
    var messageInput = document.getElementById("message-input");
    var message = messageInput.value;
    messageInput.value = "";
    var name = "User"; // You can replace this with user authentication
    // Send the message to the server
    fetch("send.php", {
      method: "POST",
      body: JSON.stringify({ name: name, message: message }),
      headers: {
        "Content-Type": "application/json",
      },
    });
  });
