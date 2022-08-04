<!DOCTYPE html>

<html lang="cs">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bot.css">
    <title> Welcome | D'UH bot </title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>   
<section>
    <div class="chat-popup">
            <div class="form">
                <div class="income-msg">
                    <div class="msg"> <p>Hello there, need help?</p></div>
                </div>
            </div>
            <div class="input-area">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button class="submit" id="send-btn">SEND</button>
            </div>
    </div>
</section>
  
<script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="msg"><p>' + '<img src="img/profile.png" id="avatarBot" class="avatar"/>' + $value +
                    '</p></div>';
                $(".form").append($msg);
                $("#data").val('');
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay =
                            '<div class="income-msg">' + result + ' ' + '<img src="img/chatbot.png" id="avatarBot" class="avatar"/>' + '</div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
    <script src="pop-up.js"></script>
</body>
</html>