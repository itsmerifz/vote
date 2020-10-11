<html>

<head>
    <title>E-Voting | MAN MODEL 1 MANADO</title>
    <link rel="shortcut icon" href="images/iconweb.png">
</head>
<body>
<?php
$name = $_POST['nama'];
$email = $_POST['email'];
$message = $_POST['pesan'];
$judul = "Pesan Web E-Voting";

$to = $email;

$message = "From:$name <br />" . $message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: Muhammad Arief <m_arzpan@outlook.com>' . "\r\n" . 'Reply-To: ' . $name . ' <' . $email . '>' . "\r\n";
$headers .= 'Cc: muhamad.arief.ft19@mail.umy.ac.id' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to, $judul, $message, $headers);
if (@mail) {
    //echo "Email Sukses Terkirim !!";
    include "index.php";
    echo '<script language="JavaScript">';
    echo 'alert("Email Berhasil Dikirim")';
    echo '</script>';
}
?>

</body>
</html>
