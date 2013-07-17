<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>simpleMailExample</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="simple PHP Mail Example">
    <meta name="author" content="github.com/code-for-coffee">
  </head>
  <body>
    <header>
        <hgroup>
            <h1>Welcome!</h1>
            <h2>This simple example will show you how to send emails with an HTML form and PHP!</h2>
        </hgroup>
    </header>

    <section id="description">
        I've included some comments in <em>sendMail.php</em> to explain how to add variables. If confused, just make a new <strong>label</strong> tag with a <strong>name</strong> that is read by PHP in $_POST['variablename'];. This'll take the posted data and allow it to be usable by PHP. Confused? Just check the source; comments are available to guide you. If you encounter errors with this, Google will be your friend <em>or</em> you can submit an <a href="https://github.com/code-for-coffee/simpleMailExample/issues" target="_blank">issue here</a>!<br><br>
    </section>

    <section id="sendMail">
    	<h3>simple Mail Example</h3>
    	<form action="sendMail.php" method="post">
        <label>Your Name: </label><br>
        <input name="mail_name" type="text" value="" required>
        <label>Email: </label><br>
        <input name="mail_email" type="email" value="" required>
        <label>Phone Number: </label><br>
        <input name="mail_tel" type="tel" value="">
        <label>Tell us what is on your mind!: </label><br>
        <textarea name="mail_comments" type="text" value="" required></textarea>

        <!-- Example of adding custom variables; see sendMail.php for the 2nd part!
        <label>Variable Name</label>
        <input name="mail_var" type="text" value="">
        -->
        
        <br>
        <br>
        <input type="submit" value="Send Email!">
        </form>
    </section>

    <footer>
    If this code helped you, please <a href="https://github.com/code-for-coffee">let me know</a>!
    </footer>
  </body>
</html>