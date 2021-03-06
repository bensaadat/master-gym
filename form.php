<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Recaptcha Demo</title>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
        document.getElementById("i-recaptcha").submit();
    }
</script>
</head>
<body> 

<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LemC9IUAAAAAMyzz2N6Jwe86fYKvAlmJQPW3Ifc',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);
    var_dump($res);

    if (!$res['success']) {
        // What happens when the reCAPTCHA is not properly set up
        echo 'reCAPTCHA error: Check to make sure your keys match the registered domain and are in the correct locations. You may also want to doublecheck your code for typos or syntax errors.';
    } else {
        // If CAPTCHA is successful...

        // Paste mail function or whatever else you want to happen here!
        echo '<br><p>CAPTCHA was completed successfully!</p><br>';
    }
} else { ?>
    
    <!-- FORM GOES HERE -->
    <form id='i-recaptcha' action="#" method="post">
        <label for="fname">First Name*</label><br>
        <input type="text" name="fname" id="fname" required autofocus><br><br>

        <label for="lname">Last Name*</label><br>
        <input type="text" name="lname" id="lname" required><br><br>

        <label for="email">Email Address*</label><br>
        <input type="email" name="email" id="email" required><br><br>
        
        <button class="g-recaptcha" data-sitekey="6LemC9IUAAAAAJiyxFeIaQm3pugm1TUzhi5kJk24" data-callback="onSubmit">
            Submit
        </button>
    </form>

<?php } ?>

</body>
</html>