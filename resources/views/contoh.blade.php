<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mingirim Data dengan Semua Method</title>
</head>
<body>
    <h1>Kirim Data</h1>
    <h2>GET</h2>
    <a href="/send-get?message=Saya+Ngoding" target="_blank">Kirim dengan GET</a>

    <h2>POST</h2>
    <form action="/send-post" method="POST">
        @csrf
        <label form="message">Pesan:</label>
        <input type="text" name="message" id="message" placeholder="Tulis pesan disini">
        <button type="submit">Kirim dengan POST</button>
    </form>

    <h2>PUT</h2>
    <form action="/send-put" method="POST">
        @csrf   
        @method('PUT')
        <label form="message">Pesan:</label>
        <input type="text" name="message" id="message" placeholder="Tulis pesan disini">
        <button type="submit">Kirim dengan PUT</button>
    </form>


    <h2>DELETE</h2>
    <form action="/send-delete" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Kirim dengan DELETE</button>
    </form>
</body>
</html>