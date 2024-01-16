<html>
    <body>

    <form action= "welcome.php" method ="get">
        <label for="fname">First name :</label>
        <br>
        <input type="text" id="fname" name = "name"><br>
        <label for="email">E mail :</label>
        <br>
        <input type="email" id="email" name = "email"><br>
        <input type="submit">
    </form>
</body>
</html>

<!-- 
GET:
    Information sent from a form with the GET method is visible to everyone 
    (all variable names and values are displayed in the URL). GET also has 
    limits on the amount of information to send. The limitation is about 2000
    characters. However, because the variables are displayed in the URL, it is 
    possible to bookmark the page. This can be useful in some cases.

    GET may be used for sending non-sensitive data.

POST: 
    Information sent from a form with the POST method is invisible to others 
    (all names/values are embedded within the body of the HTTP request) and has no 
    limits on the amount of information to send.

    Developers prefer POST for sending form data.
-->