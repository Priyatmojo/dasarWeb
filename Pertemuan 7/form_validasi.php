<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form method="post" action="proses_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <div id="nama-error"></div>
            <br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <div id="email-error"></div>
            <br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <div id="password-error"></div>
            <br>

            <input type="submit" value="Submit">
        </form>

        <script>
            $(document).ready(function() {
                $("#myform").submit(function() {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    $.ajax ({
            type: "POST",
            url: "proses_validasi.php",
            data: {
                nama: nama,
                email: email,
                password: password
            },
            success: function(response) {
                var data = JSON.parse(response);
                if (data.status == "error") {
                    $("#nama-error").text(data.message.nama);
                    $("#email-error").text(data.message.email);
                    $("#password-error").text(data.message.password);
                } else {
                    alert("Form submitted succsessfully!");
                    $("#myform")[0].reset();
                }
            }
        });
        event.preventDefault();
    });
});
        </script>
    </body>
</html>
