<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Notification</title>
</head>
<body>
    <h1>Congratulations! </h1>
    <p>You have successfully registered in our software {{ config('app.name', 'Laravel') }}</p>

    <p>Your username is: {{$data['name']}}</p>
    <p>Your email with which you will log in is: {{$data['email']}}</p>
    <p>the password is secret, but you can recover it if you need it</p>

    <p>Regards.</p>

</body>
</html>
