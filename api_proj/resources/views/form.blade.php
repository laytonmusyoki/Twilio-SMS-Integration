<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        padding: 20px;
        width: 300px;
        height: 200px;
        margin: 5% auto;
        box-shadow: 2px 2px 10px black;
    }
    input{
        width: 100%;
        height: 40px;
        margin: 5px auto;
    }
    button{
        width: 100%;
        height: 40px;
        margin: 5px auto;
        background-color: blue;
        color: white;
        border: none;
        outline: none;
        border-radius: 5px;
    
    }
</style>
<body>
    <form action="{{url('/sendSms')}}">
        <label for="">Receiver Phone</label>
        <input type="phone" name="phone" placeholder="To">
        <label for="">Receiver Message</label>
        <input type="text" name="message" placeholder="Message">
        <button type="submit">Send Message</button>
    </form>
</body>
</html>