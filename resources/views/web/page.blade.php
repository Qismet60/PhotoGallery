<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td style="padding-top:20px;"><input type="text" name="name" placeholder="name"></td>
    </tr>
    <tr>
        <td style="padding-top:20px;"><input type="text" name="surname" placeholder="surname"></td>
    </tr>
    <tr >
        <td style="padding-top:20px;"><input type="text" name="email" placeholder="email"></td>
    </tr>
    <tr>
        <td>
            <button style="margin-top:10px;" class="btn btn-success">gonder</button></td>
    </tr>
</table>

<script>
    $('.btn-success').click(function () {
        var name=$('input[name=name]').val().trim();
        var surname=$('input[name=surname]').val().trim();
        var email=$('input[name=email]').val().trim();
        $ajax({
            url:'insert',
            type:'POST',
            data:{'name':name,'surname':surname,"_token": "{{ csrf_token() }}",'email':email},
            success:function(response){
                alert(response.message);
            },
            error:function(error)
            {
                alert(error.responseJSON.errors[Object.keys(error.responseJSON.errors)[0]])
            }
        })
    })
</script>
</body>
</html>
