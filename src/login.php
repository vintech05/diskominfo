<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Diskominfo</title>
    <script src="login.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <form action="validate.php" method="post">
            <div class="inner-form">
                <div class="form-logo">
                    <img src="/image/logo-diskominfostandi.png" alt="logo">
                </div>
                <div class="form-item">
                    <div class="label-control">
                        <i class="fa-solid fa-user" style="color: #c3c6d1;"></i>
                        <label for="username">Nama</label>
                    </div>
                    <input type="text" id="username" name="username">
                </div>
                <div class="form-item">
                    <div class="label-control">
                        <i class="fa-solid fa-key" style="color: #c3c6d1;"></i>
                        <label for="password">Password</label>
                    </div>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-cta">
                    <button type="submit">Sign in</button>
                </div>
            </div>
            <div class="info-cta">
                <i class="fa-solid fa-circle-info" style="color: #646466;"></i>
            </div>
            <span class="copyright">Copyright Diskominfostandi &copy; 2024</span>
        </form>
        <dialog class="modal-box">
            <i class="fa-solid fa-xmark close-btn" style="color: #58595b;"></i>
            <div class="modal-content">
                <h1>Info</h1>
                <ul role="list">
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime!</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maxime!</li>
                </ul>
                <div class="button-wrapper">
                    <button class="modal-button">Oke</button>
                </div>
            </div>
        </dialog>
    </main>
</body>

</html>