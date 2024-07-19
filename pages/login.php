<?php

header('Content-Type: application/json');

$html = "
<h1>Login</h1>

<form id='formLogin'>
    <input type='text' id='username'> <br>
    <input type='password' id='password'> <br>
    <button type='submit'>Login</button>
</form>

<script>
    $('#formLogin').on('submit', (e) => {
        e.preventDefault();

        let username = $('#username').val();
        let password = $('#password').val();

        if(username!='' && password!=''){
            if(username=='admin' && password=='admin'){
                window.location.hash = 'home';
            }else{
                alertMessage('Login failed!');
            }
        }else{
            alertMessage('Required!');
        }
    });
</script>
";

$response = [
    'template' => 'auth',
    'title'    => 'Login',
    'html'     => $html,
];

echo json_encode($response);

?>