    const Signupbtn = document.querySelector("#signup-btn");
    Signupbtn.addEventListener('click', signin);

    function signin() {
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let data = new FormData();
        data.append('email', email);
        data.append('password', password);

        axios.post('http://localhost/PHP-Weekend-Trip-APIs/index.php', data, {
            responseType: 'json'
        })
        .then(function (response) {
        if (response.data === true) {
           console.log(response.data);
                  
        } else {

            console.log(response.data);
        }
        })
        .catch(function (err) {
            console.log(err);
            
        });
    }
