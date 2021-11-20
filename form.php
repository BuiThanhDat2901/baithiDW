<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/w3.css">
</head>
<body>
<div class="body-form">
    <h2 class="w3-center">FeedBack</h2>
    <form name="form-create" action="api/processForm.php" class="w3-container w3-card-4 w3-light-grey" method="post">
        <div class="message">
        </div>
        <p>
            <label for="">Name:</label>
            <input class="w3-input w3-border" type="text" name="name" placeholder="Name student..">
        </p>
        <p>
            <label for="">Email:</label>
            <input class="w3-input w3-border" type="text" name="email" placeholder="Name student..">
        </p>
        <p>
            <label for="">Phone:</label>
            <input class="w3-input w3-border" type="text" name="phone" placeholder="Phone..">
        </p>
        <p>
            <label for="">Feedback:</label>
            <textarea class="w3-input w3-border" name="feedback" placeholder="Feedback content..."></textarea>
        </p>
        <p>
            <input type="submit" class="w3-btn w3-green btn" value="Submit">
            <input type="reset" class="w3-btn w3-grey w3-text-white btn" value="Reset">
        </p>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/form.js"></script>
</body>
</html>