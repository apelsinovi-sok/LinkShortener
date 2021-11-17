<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сокращатель</title>
</head>
<body>
<form action="" method="post">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <p><input type="text" id="link" name="link"></p>
    <p><input type="submit" id="ajaxSubmit"></p>
</form>
<div id="new_link"></div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function (){
       $('#ajaxSubmit').click(function (e) {
           e.preventDefault()
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          })
        $.ajax({
            url: "/",
            method: "POST",
            data: {text: $("#link").val()},
            success: function (result) {
                $("#new_link").text(result.text)
                console.log(result.text)
            }
        })
       })
    })
</script>
