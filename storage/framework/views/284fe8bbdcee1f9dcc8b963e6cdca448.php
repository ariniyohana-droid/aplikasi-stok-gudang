<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Stock Gudang</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;

            background:linear-gradient(135deg,#021024,#052659,#5483B3);
        }

        .login-box{
            width:400px;
            padding:40px;

            border-radius:25px;

            background:rgba(255,255,255,0.08);

            backdrop-filter:blur(10px);

            border:1px solid rgba(255,255,255,0.1);

            box-shadow:0 0 25px rgba(0,255,255,0.2);

            color:white;
        }

        .title{
            text-align:center;
            font-size:34px;
            font-weight:700;

            margin-bottom:10px;
        }

        .subtitle{
            text-align:center;
            color:#cbd5e1;

            margin-bottom:30px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-size:14px;
        }

        input{
            width:100%;
            padding:14px;

            border:none;
            border-radius:12px;

            margin-bottom:20px;

            background:rgba(255,255,255,0.1);

            color:white;
            font-size:15px;
        }

        input:focus{
            outline:none;
            border:1px solid #38bdf8;
            box-shadow:0 0 10px #38bdf8;
        }

        button{
            width:100%;
            padding:14px;

            border:none;
            border-radius:12px;

            background:linear-gradient(to right,#0ea5e9,#2563eb);

            color:white;

            font-size:16px;
            font-weight:600;

            cursor:pointer;

            transition:0.3s;
        }

        button:hover{
            transform:translateY(-2px);
            box-shadow:0 0 15px #38bdf8;
        }

    </style>

</head>
<body>

    <div class="login-box">

        <div class="title">
            STOCK GUDANG
        </div>

        <div class="subtitle">
            Pabrik Aluminium
        </div>

        <form action="/login" method="POST">

            <?php echo csrf_field(); ?>

            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email">

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password">

            <button type="submit">
                Login
            </button>

        </form>

    </div>

</body>
</html><?php /**PATH C:\laragon\www\stok_gudang\resources\views/login.blade.php ENDPATH**/ ?>