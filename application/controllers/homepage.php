<?php
class homepage extends CI_Controller {
    public function index(){
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delia Okti Ardiani Personal Website</title>
</head>

<body>
    <nav>
        <a href="datadiri.html">DATA DIRI</a> |
        <a href="dataakademik.html">DATA AKADEMIK</a> |
        <a href="contact.html">KOMENTAR</a> 
    </nav>

    <hr />

    <header style="text-align: center;">
        <img src="image/Delia.jpg" width="200" height="200" style="border-radius: 50%;"/>
        <h1>Delia Okti Ardiani</h1>
    </header>

    <hr />

    <article style="text-align: center;">
        <h2>ABOUT ME</h2>
        <p>
            Hi, saya Delia Okti Ardiani, Saya sedang belajar di Universitas Bina Sarana Informatika
            saya memiliki hobby memasak dan make up!
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Motivasi Untuk Kuliah</th>
                    <th>Keinginan setelah lulus kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>mendapatkan gelar sarjana</li>
                            <li>bertemu banyak teman</li>
                            <li>Jajannnn</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Ofc kerja di tempat yang aku mau</li>
                            <li>Bisa beli mobil sendiri hahaha</li>
                            <li>Soon deh yang lain</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2023 Delia Okti.</p>
    </footer>
</body>
</html>
<?php
    }
}