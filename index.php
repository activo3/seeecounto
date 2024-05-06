<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            margin-top: 25px;
            padding: 0;
            background: none;
            background-color: #54ad4d;
            text-align: center
        }

        .logo img {
            width: 270px;
            height: 80px;
            margin: 15px auto
        }

        .logoSB {
            display: none
        }

        .header-content {
            
            margin-left: 38%;
            width: 273px;
            padding: 15px 0;
            float: left;
            position: relative;
            height: 600px;
            background: #fff;
            border-radius: 4px;
            color: #7e7975;
            box-shadow: 0 2px 2px rgba(0, 0, 0, .2), 0 1px 5px rgba(0, 0, 0, .2), 0 0 0 12px hsla(0, 0%, 100%, .4)
        }

        iframe.loginPortlet {
            width: 273px;
            overflow: hidden;
            height: 500px;
            border: none
        }

        #footer,
        .bhd-login-btn,
        .bhd-login-btn-selected,
        .global-menu-open {
            display: none
        }

        @media only screen and (max-width: 600px) {
            .header-content {
               margin-left: 18%;
            }
        }
    </style>
</head>

<body style="text-align: center;">
    <section class="header-content">
        <a href="#" class="logo">
            <img src="logo-1.png" alt="" class="img-responsive" width="325" height="100">
        </a>

        <span class="global-menu-open">Abrir</span>
        <section class="content-menu-login">

            <article class="bhd-login"> <span class="bhd-login-btn">BHD OnLine</span> <span class="bhd-login-btn-selected">BHD OnLine</span>
                <div class="bhd-form" style="height: 450px;">
                    <iframe class="loginPortlet" src="login.php"></iframe>
                    <div class="loadingoverlay" style="display: none;"> <em class="loading"></em> </div>
                </div>
            </article>
        </section>
    </section>


</body>

</html>