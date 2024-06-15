<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f6f6f6;
        }
        .container {
            width: 100%;
            padding: 20px;
        }
        .card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 250px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .color-text {
            color: grey;
            font-size: 18px;
        }
        .footer {
            border: none;
            outline: 0;
            padding: 8px;
            color: white;
            background-color: purple;
            text-align: center;
            width: 100%;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align:center">Mensaje enviado desde <br> {{ env('APP_URL') }} <br>Tienes un nuevo cliente</h2>
        <div class="card">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/007/058/647/small_2x/icon-of-customer-care-suitable-for-design-element-of-customer-service-app-and-user-satisfaction-symbol-free-vector.jpg" alt="marmoles atenea" style="width:100%; height: auto;">
            <p class="color-text" style="color: grey; font-size: 18px; text-align: left; margin: 20px 0;">
                Nombre: {{ $datosForm['nombre'] }}<br>
                Email: {{ $datosForm['email'] }}<br>
                Teléfono: {{ $datosForm['phone'] }}<br>
                Mensaje: {{ $datosForm['mensaje'] }}
            </p>
            <p class="footer" style="color: white; background-color: #5a4091; text-align: center; padding: 3px; font-size: 14px;">noreply@marmolesatenea.com.co</p>
        </div>
    </div>
</body>
</html>

