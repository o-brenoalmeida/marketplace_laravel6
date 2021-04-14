<h1>Olá, {{ $user->name }}. Obrigado por sua inscrição.</h1>

<p>
    Faça bom proveito e excelentes compras em nosso marketplace!
    <br>
    Seu email de cadastro é: <strong>{{$user->email}}</strong>
    <br>
    Sua senha: <strong>Por questões de segurança não enviamos sua senha por email.</strong>
</p>

<hr>

<p>
    Email enviado em {{date('d/m/Y H:i:s')}}.
</p>