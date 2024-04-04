<!DOCTYPE html>
<html>
<head>
    <title>Cheque book Status Mail</title>
</head>
<body>
    
    <h3>Hello {{ $mailData['name'] }},</h3>
    {{--<h6>{{ $mailData['title'] }}</h5>
    <br> --}}
    <p>{{ $mailData['body'] }}</p>
    
    
    <p style="margin-bottom:5px;">Thank you</p>
    <p style="margin-top:2px;">Solapur Janta Sahakari Bank LTD</p>
</body>
</html>