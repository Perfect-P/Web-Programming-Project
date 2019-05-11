<html>
    <head>
        <meta charset='UTF-8'>
        <title>Register</title>
    </head>
    <body>
        <div>
            <section>
                <form action="index.php?controller=account&action=registerAccount" method ="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                        <br>
                        <label for="passwd">PassWord</label>
                        <input type="text" name="passwd">
                        <br>
                        <input type="submit" value="Register">
                        <br>
                        <input type="reset" value="Clear">
                    </div>
                </form>
            </section>
        </div>
    </body>
</html>