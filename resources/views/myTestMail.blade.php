<!DOCTYPE html>

<html>

<head>

    <title>Remedies & Care Agro</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&family=Bebas+Neue&family=Playfair+Display:wght@400;600&display=swap');

        .mail {
            width: 100%;
            height: 100%;
            padding: 10px;
            margin: 0;
            display: block;
        }

        .mail h1 {
            font-size: 1.6rem;
            font-weight: 600;
            font-family: 'Playfair Display', serif;
            text-align: left;
            padding: 5px;
            margin: 0;
        }
        .mail address{
            font-size: 1.2rem;
            font-weight: 500;
            font-family: 'Playfair Display', serif;
            text-align: justify;
            padding: 5px;
            margin: 0;
        }
        .mail h3,h4{
            font-size: 1.4rem;
            font-weight: 600;
            font-family: 'Playfair Display', serif;
            text-align: left;
            padding: 5px;
            margin: 0;
        }
        .mail p{
            font-size: 1.4rem;
            font-weight: 600;
            font-family: 'Playfair Display', serif;
            text-align: left;
            padding: 0;
            margin: 0;
        }
        .mail h3::first-letter,h4::first-letter,h1::first-letter{
            text-transform: uppercase;
        }
    </style>

</head>

<body>
    <div class="mail">
        <h1>{{ $details['csubject'] }}</h1>
        <p>Dear Remedies,</p>
        <address>{{ $details['cmessage'] }}</address>
        <h3>{{ $details['cname']}}</h3>
        <h4>{{ $details['cemail']}}</h4>
        <p>{{$details['cphone']}}</p>
        <p>Thank you</p>
    </div>

</body>

</html>