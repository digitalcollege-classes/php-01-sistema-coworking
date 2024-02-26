<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Seu Site</title>
    <style>
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
        }

        .contact-info,
        .social-links {
            display: flex;
            align-items: center;
            flex-direction: row;
        }

        .contact-info p,
        .social-links a {
            margin-right: 50px;
        }

        .logophp img {
            width: 100px;
            height: auto;
            margin-right: 50px; 
        }
        .social-links img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="logophp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="Logo PHP">
        </div>

        <div class="contact-info">
            <p>Telefone: <?php echo "(11) 1234-5678"; ?></p>
            <p>Email: <?php echo "contato@seusite.com"; ?></p>
        </div>

        <div class="social-links">
            <a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Logo_of_Twitter.svg" alt="Twitter"></a>
            <a href="#" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"></a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-GLhlTQ8iKDEr+XZ+Tva7WdI2aYEXgUCnU3luEz1Ck6Y7/eP1g1/8U6PPT1iS9EpT" crossorigin="anonymous"></script>
</body>

</html>
