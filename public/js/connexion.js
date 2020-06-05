    //connection de l'utilisateur
    $(document).ready(function () {
        $("#connexion").on('click', function () {
            const login = $("#login").val();
            const password = $("#password").val();
            console.log(password);
            if (login == "" || password == "") {
                alert("veuillez remplir les champs!!");
            } else {
                $.ajax(
                    {
                        url: 'index.php',
                        method: 'POST',
                        data: {
                            connexion: 1,
                            loginPHP: login,
                            passwordPHP: password
                        },
                        success: function (response) {
                            console.log(response);
                            if (response.indexOf('success') >=0) {
                                window.location = 'index.php?page=./src/pages/admin/admin'
                            }
                            
                        },
                        dataType: 'text'
                    }
                );
            }
            
        });
    });