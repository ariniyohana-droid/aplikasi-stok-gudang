<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Stok Gudang</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            background:#f3f4f8;
            font-family:'Segoe UI',sans-serif;
            min-height:100vh;
        }

        /* HEADER */
        .header{
            height:88px;
            background:#1653d6;
            display:flex;
            align-items:center;
            padding:0 25px;
            color:white;
        }

        .header-icon{
            font-size:40px;
            margin-right:15px;
        }

        .header-text h4{
            margin:0;
            font-size:18px;
            font-weight:700;
        }

        .header-text p{
            margin:0;
            font-size:16px;
        }

        /* CONTENT */
        .wrapper{
            min-height:calc(100vh - 88px);
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-card{
            width:570px;
            background:white;
            border-radius:16px;
            box-shadow:0 4px 15px rgba(0,0,0,.08);
            padding:45px;
        }

        .logo{
            text-align:center;
            margin-bottom:20px;
        }

        .logo i{
            color:#1653d6;
            font-size:90px;
            margin-bottom:15px;
        }

        .title-small{
            font-size:20px;
            font-weight:600;
            color:#1f2937;
        }

        .title-big{
            font-size:32px;
            font-weight:800;
            color:#1f2937;
            line-height:1;
        }

        .subtitle{
            text-align:center;
            color:#666;
            margin:20px 0;
        }

        hr{
            color:#ddd;
        }

        .form-label{
            font-weight:600;
            margin-bottom:8px;
        }

        .input-group-text{
            background:white;
            border-right:none;
        }

        .form-control{
            border-left:none;
            height:50px;
        }

        .form-control:focus{
            box-shadow:none;
        }

        .eye-btn{
            background:white;
            border-left:none;
        }

        .login-btn{
            width:100%;
            height:55px;
            border:none;
            border-radius:8px;
            color:white;
            font-size:22px;
            font-weight:600;
            background:linear-gradient(90deg,#1e4fe6,#2d67ff);
        }

        .login-btn:hover{
            opacity:.9;
        }

        .footer{
            text-align:center;
            color:#666;
            margin-top:40px;
            font-size:14px;
        }

    </style>
</head>
<body>

<!-- HEADER -->
<div class="header">

    <div class="header-icon">
        <i class="fa-solid fa-warehouse"></i>
    </div>

    <div class="header-text">
        <h4>SISTEM INFORMASI STOK & GUDANG</h4>
        <p>PABRIK ALUMINIUM</p>
    </div>

</div>

<!-- LOGIN -->
<div class="wrapper">

    <div class="login-card">

        <div class="logo">
            <i class="fa-solid fa-warehouse"></i>

            <div class="title-small">
                SISTEM INFORMASI
            </div>

            <div class="title-big">
                STOK & GUDANG
            </div>

            <div class="title-small">
                PABRIK ALUMINIUM
            </div>
        </div>

        <hr>

        <div class="subtitle">
            Silakan login untuk masuk ke sistem
        </div>

        <form action="/dashboard">

            <!-- USERNAME -->
            <div class="mb-3">

                <label class="form-label">
                    Username
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="fa-solid fa-user"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan username">

                </div>

            </div>

            <!-- PASSWORD -->
            <div class="mb-4">

                <label class="form-label">
                    Password
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="fa-solid fa-lock"></i>
                    </span>

                    <input
                        id="password"
                        type="password"
                        class="form-control"
                        placeholder="Masukkan password">

                    <button
                        type="button"
                        class="btn eye-btn"
                        onclick="showPassword()">

                        <i class="fa-solid fa-eye"></i>

                    </button>

                </div>

            </div>

            <div class="form-check mb-4">

                <input
                    class="form-check-input"
                    type="checkbox">

                <label class="form-check-label">
                    Ingat saya
                </label>

            </div>

            <button type="submit" class="login-btn">

                <i class="fa-solid fa-right-to-bracket"></i>

                LOGIN

            </button>

        </form>

        <div class="footer">
            © 2024 Pabrik Aluminium. All rights reserved.
        </div>

    </div>

</div>

<script>

function showPassword(){

    let password =
        document.getElementById('password');

    if(password.type === 'password'){
        password.type = 'text';
    }else{
        password.type = 'password';
    }

}

</script>

</body>
</html>