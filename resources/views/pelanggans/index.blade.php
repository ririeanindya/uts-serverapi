<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pelanggans List</title>
    <style>
       .pelanggans-card {
    border: 1px solid #aaa;
    padding: 15px;
    margin: 10px;
    display: inline-block;
    width: 250px;
    background-color: #f9f9f9; /* Warna latar belakang dasar */
    border-radius: 8px; /* Membuat sudut sedikit melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan bayangan */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pelanggans-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.pelanggans-card h4 {
    color: #333; /* Warna teks untuk judul */
    font-size: 18px;
    margin: 5px 0;
}

.pelanggans-card p {
    font-size: 14px;
    color: #666; /* Warna teks deskripsi */
    margin: 5px 0;
}

/* Warna latar belakang untuk status "Completed" */
.pelanggans-card p.completed-1 {
    background-color: #dff0d8; /* Hijau lembut untuk yang sudah selesai */
    color: #3c763d;
    font-weight: bold;
    padding: 5px;
    border-radius: 4px;
    display: inline-block;
}

.pelanggans-card p.completed-0 {
    background-color: #f2dede; /* Merah lembut untuk yang belum selesai */
    color: #a94442;
    font-weight: bold;
    padding: 5px;
    border-radius: 4px;
    display: inline-block;
}

/* Warna latar belakang berbeda untuk setiap kartu (opsional) */
.pelanggans-card:nth-child(odd) {
    background-color: #e8f0fe; /* Biru lembut */
}

.pelanggans-card:nth-child(even) {
    background-color: #fff3cd; /* Kuning lembut */
}

    </style>
</head>
<body>
    <h1>Pelanggan List</h1>

    <div class="pelanggans-list">
        @foreach ($pelanggans as $pelanggans)
            <div class="pelanggans-card">
                <h4>{{ $pelanggans['id'] }} </h4>
                <p><strong>Nama Pelanggan:</strong> {{ $todos['name'] }}</p>
                <p><strong>Completed:</strong> {{ $todos['completed'] }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>