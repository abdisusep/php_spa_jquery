loadCSS([
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
    'login.css'
]);

$('#formLogin').on('submit', (e) => {
    e.preventDefault();

    let username = $('#username').val();
    let password = $('#password').val();

    if(username!='' && password!=''){
        $.ajax({
            url: `${baseUrl}/api/login.php`,
            type: 'POST',
            data: {username, password },
            success: function(response){
                if (response.success) {
                    window.location.hash = 'home';
                }else{
                    alertMessage(response.message, 'error'); 
                }
            }
        });
    }else{
        alertMessage('Username and password required!', 'warning');
    }
});


