<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/css/style.css" />
    <link rel="stylesheet" href="<?= ROOT ?>/css/signup.css" />
</head>

<body>

    <section class="w-full h-page flex flex-center">
        <div class="flex flex-col  p-20 g-10 b-r-10 bg-shadow login-container">
            <div class="w-full flex flex-center">
                <h2>Create New Account</h2>
            </div>
            <form action="" method="POST" class="flex flex-col w-full g-5">
                <div class="flex flex-col g-5 w-full">
                    <label for="username">User Name</label>
                    <input
                        type="text"
                        placeholder="Enter User name"
                        class="p-10 w-full"
                        name="username" />
                    <P class="text-danger"><?php echo (isset($data['errUserName'])) ? $data['errUserName'] : '' ?></P>
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="username">Email</label>
                    <input
                        type="text"
                        placeholder="Enter User name"
                        class="p-10 w-full"
                        name="email" />
                    <P class="text-danger"><?php echo (isset($data['errEmail'])) ? $data['errEmail'] : '' ?></P>
                </div>
                <div class="flex flex-col g-5 w-full">
                    <label for="username">Password</label>
                    <input
                        type="password"
                        placeholder="Enter Password"
                        class="p-10 w-full"
                        name="password" />
                    <P class="text-danger"><?php echo (isset($data['errPassword'])) ? $data['errPassword'] : '' ?></P>
                </div>
                <div class="flex w-full flex flex-center">
                    <button class="p-10 w-full b-1 bg-primary text-white" type="submit" name="signup">Register</button>
                </div>
            </form>
            <div class="w-full new-account">
                <p>I have an account <a href="signin">Click Here!</a></p>
            </div>
        </div>
    </section>
</body>

</html>