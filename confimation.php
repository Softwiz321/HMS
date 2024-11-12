<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 500px;
    margin: auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

label {
    display: block;
    margin: 10px 0 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}

.hidden {
    display: none;
}

#confirmation {
    margin-top: 20px;
    text-align: center;
    color: green;
}
button{
    background-color: #0cb8b6;
    color: #fff;
    font-size: 20px;
}
</style>
</head>
<body>
    <div class="container">
        <h1>Appointment Confirmed!</h1>
        <p>Your appointment has been successfully booked.</p>
        <p>We look forward to seeing you!</p>
        <button><a href="index.html">Return to Booking</a></button>
    </div>
</body>
</html>