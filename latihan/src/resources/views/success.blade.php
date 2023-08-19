

<!DOCTYPE html>
<html>
<head>
    <title>Informasi Pembayaran Sukses</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Informasi Pembayaran Sukses</div>
                    <div class="card-body">
                        <p>Pembayaran berhasil dilakukan dengan informasi sebagai berikut:</p>
                        <ul>
                        
                            
                            <li>Username: {{ $data->username}}</li>
                            <li>Nominal Pembayaran: {{ $data->amount }}</li>
                            

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
