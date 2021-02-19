<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
    <link rel="icon" href="/images/favicon.ico">

    <!--CSS Link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <!--Font Link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sacramento&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">  
    
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body style="border:1px solid #eee; font-size:0.9rem; font-family: 'Montserrat', sans-serif; padding: 1% 3%;">
    <h3>Course Enquiry</h3>
    <img src="https://www.ameccad.com/images/logo.png" alt="Logo" class="img-fluid w-50">
    <hr>
    <p>
        <b>Dear Sir,</b>

        <div>I am writing to apply for <b>{{$course}}</b> course offered by Ameccad Training Center Kano.</div>
        <div>I was born on <b>{{$dob}}</b> and I am currently living in <b>{{$address}}</b>.</div>
        <div>I hope that you will consider me for admission to the course.</div>
        <div>I look forward to hearing from you soon.</div>
        <div>Yours faithfully,</div>

        <div><b>{{$name}}</b></div>
        <div><b>{{$phone}}</b></div>
        <div><b>{{$email}}</b></div>
    </p>
</body>
</html>
