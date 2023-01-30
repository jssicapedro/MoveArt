<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: antiquewhite;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        img[alt="logo MoveArt"] {
            width: 15%;
            margin: 10px 0;
        }

        img[alt="Pedido aceite"] {
            width: 100%;
        }

        img[alt="logo_footer MoveArt"] {
            width: 10%;
            margin: 50px 0;
        }

        .redes {
            display: flex;
            gap: 25px;
        }
    </style>
</head>

<body>
    <img src="{{ asset('img/logo/logoBallet_p.png') }}" alt="logo MoveArt">
    <img src="{{ asset('img/email/banner.png') }}" alt="Obrigado por ajudares!">
    <p>Olá {{ $details->nome }}, </p>
    <p>A MoveArt agradece o teu patrocínio.</p>
    <p>{{ $details->resposta }}</p>
    <p>Obrigado pela sua escolha!</p>
    <hr>
    <img src="{{ asset('img/logo/logoBallet_p.png') }}" alt="logo_footer MoveArt">
    <div class="redes">
        <a href="https://www.facebook.com" target="_blank">
            <img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-gray/facebook@2x.png" width="32" height="32" alt="Facebook" title="Facebook" style="display:block;height:auto;border:0; background: transparent;">
        </a>
        <a href="https://www.instagram.com" target="_blank">
            <img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-gray/instagram@2x.png" width="32" height="32" alt="instagram" title="instagram" style="display:block;height:auto;border:0; background: transparent;">
        </a>
        <a href="https://www.twitter.com" target="_blank">
            <img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-gray/twitter@2x.png" width="32" height="32" alt="twitter" title="twitter" style="display:block;height:auto;border:0; background: transparent;">
        </a>
    </div>
    <hr>
</body>

</html>