<pre>
    <?php print_r($_POST) ?>
</pre>

<h1>Contact</h1>

<form action="" method="post">
    <div>
        <label for="firstname">Firstname</label>
        <input type="text" name="contact[firstname]" id="firstname">
    </div>
    <div>
        <label for="lastname">Lastname</label>
        <input type="text" name="contact[lastname]" id="lastname">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="contact[email]" id="email">
    </div>
    <div>
        <label for="message">message</label>
        <textarea name="contact[message]" id="message"></textarea>
    </div>
    <div>
        <input type="submit" value="senden" name="contact[submit]">
    </div>

</form>