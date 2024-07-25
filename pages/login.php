<?php

header('Content-Type: application/json');

$html = "
<div class='container mt-5'>
    <div class='row'>
        <div class='col-lg-5 m-auto'>
            <div class='card rounded border-0 shadow-sm p-3'>
                <div class='card-body'>
                    <h2>Login form</h2>
                    <form id='formLogin'>
                        <div class='mb-3'>
                            <label class='form-label'>Username</label>
                            <input type='text' class='form-control' id='username'>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Password</label>
                            <input type='password' class='form-control' id='password'>
                        </div>
                        <div class='mb-3'>
                            <button type='submit' class='btn btn-primary'>Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";

$response = [
    'template' => 'auth',
    'title'    => 'Login',
    'html'     => $html
];

echo json_encode($response);

?>