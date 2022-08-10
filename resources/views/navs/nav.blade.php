<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homestyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="bg">
    <nav class="nav">
        <div class="container-mui nav-container">
            <div class="nav-kiri">
                <img src="img/logo.png" alt="" class="nav-log" style="width: 100px;">
            </div>
            <div class="nav-kanan">
                <div class="main-nav">
                    <div style="display: inline-block; padding: 25px 40px 19px;"><a href="/" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Home</a></div>
                    <div style="display: inline-block; padding: 25px 40px 19px;"><a href="/aboutus" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">About Us</a></div>
                    <div style="display: inline-block; padding: 25px 40px 19px;"><a href="" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Project</a></div>
                </div>
            </div>

            <div class="nav-kanan-second">
                <div style="display: inline-block; padding: 60px 40px 10px;"><a href="" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Home</a></div>
                <div style="display: inline-block; padding: 25px 40px 10px;"><a href="" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">About Us</a></div>
                <div style="display: inline-block; padding: 25px 40px 10px;"><a href="" style="display: inline-block; font-size: 15px; letter-spacing: 0.14px; width: auto; text-decoration: none; color: #fff;">Project</a></div>
            </div>
            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <script lang="javascript" type="text/javascript">
        const menuToggle = document.querySelector('.menu-toggle input');
        const section = document.querySelector('.nav-kanan-second');

        menuToggle.addEventListener('click', function() {
            section.classList.toggle('slide');
        });
    </script>
    <script>
        window.addEventListener('scroll', (e) => {
            const nav = document.querySelector('.nav');
            if (window.pageYOffset > 0) {
                nav.classList.add("add-shadow");
            } else {
                nav.classList.remove("add-shadow");
            }
        });
    </script>
</body>

</html>