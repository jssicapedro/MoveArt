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

        img[alt="Pedido recusado"] {
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
    <img src="{{ asset('img/logo/logoBallet_p.png')}}" alt="logo MoveArt">
    <img src="{{ asset('img/email/banner_recusado.png')}}" alt="Pedido recusado">
    <p>Olá {{ $details->primeiro }} {{ $details->apelido }}, </p>
    <p>o teu pedido para seres professor da nossa escola foi {{ $details->estado_do_pedido }}!</p>
    <p>{{ $details->resposta }}</p>
    <p>De momento achamos que não te enquadras para as nossa escola para mais esclarecimentos contacta o 917524872.</p>
    <hr>
    <img src="{{ asset('img/logo/logoBallet_p.png')}}" alt="logo_footer MoveArt">
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


<!-- 
    as imagens não funcionam pq o URL refere-se a um arquivo q se encontra no computador pessoal. No entanto a imagem passa por um proxy (aplicação de servidor que atua como intermediário entre um cliente que solicita um recurso e o servidor que fornece esse recurso). O browser não consegue aceder ao URL do meu proxy, por isso a imagem não vai aparecer. 

    Uma solução seria garantir que o caminho que estou a usar seja acessível fora da rede local; por exemplo, hospedando as imagens em um servidor externo. 

fonte: https://stackoverflow.com/questions/20836911/images-not-displayed-for-gmail
-->