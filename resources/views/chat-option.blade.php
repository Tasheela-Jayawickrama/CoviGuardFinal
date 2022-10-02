<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Option</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>
<body>
<div class="container">
    <div class="app">
        <header>
            <h1>Let's Talk</h1>
            <input type="text" name="username" id="username" placeholder="Enter The User Name">
        </header>
        <div id="messages">
            <form id="message_form">
                <input type="text" name="message" id="message_input" placeholder="Write A message">
                <button type="submit" id="message_send">Send Message</button>
            </form>
        </div>
    </div>
</div>

<script>
const messages_el = document.getElementById('messages');
const username_input = document.getElementById('username');
const message_input = document.getElementById('message_input');
const message_form = document.getElementById('message_form');

message_form.addEventListener('submit',function (e) {
    e.preventDefault();
    let has_errors = false;

    if (username_input.value = ''){
        alert('Please enter A User Name');
        has_errors = true;
    }
    if (message_input.value = ''){
        alert('Please enter A Message');
        has_errors = true;
    }
    if (has_errors){
        return;
    }

    const options = {
        method:'post',
        url:'/chat',
        data:{
            username:username_input.value,
            message:message_input.value
        },

    }

    axios(options);

});

window.Echo.channel('chat')
    .listen('.message',(e) => {
    console.log(e);
});
</script>

</body>
</html>
