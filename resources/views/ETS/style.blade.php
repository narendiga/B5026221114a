<html>

    <head>
        <!-- div di seluruh halaman ini, diset seperti diblock -->
        <link rel = "stylesheet" href = "/css/mystyle.css">
        <style>
            div {
                color: goldenrod;
                font-weight: bold;
                text-align: right;
            }
            .judulhalaman {
                text-align: center;
                font-size: large;
            }
        </style>
    </head>

    <body>
        <div class = "judulhalaman"> Selamat Datang! </div>

        <!-- Inline CSS, digunakan ketika ada spesifik ke 1 bagian saja-->
        <p style = "text-decoration: line-through; color: blueviolet ;">
            Halo apa kabar?</p>

        <!-- Inpage CSS, digunakan ketika ada spesifik ke 1 halaman khusus -->
        <div> Halo apa kabar? </div>

        <!-- External CSS, digunakan untuk format umum 1 website -->
        <span> Halo apa kabar? </span>

        <p> Bagian terakhir </p>
    </body>

</html>
