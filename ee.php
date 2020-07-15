<?php


$nama = $_POST['nama'];
$email = $_POST['email'];
$pertanyaan = $_POST['pertanyaan'];
$header = "Dari: $nama" . "\r\n" . " Email : $email";

if (mail("budiprastyo34@gmail.com","Pertanyaan Seputar SMA Muhammadiyah 4 Kendal",$pertanyaan,$header )) {
	echo "<script>alert('Pesan Terkirim')</script>";
	echo "<script>window.location.assign('index.php')</script>";
} else {
	echo "<script>alert('Pesan Gagal Terkirim')</script>";
	echo "<script>window.location.assign('index.php')</script>";

}

// require 'asset/phpmailer/PHPMailerAutoload.php';

// $mail = new PHPMailer;

// //$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'budiprastyo34@gmail.com';                 // SMTP username
// $mail->Password = 'budi12345';                           // SMTP password
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;                                    // TCP port to connect to

// $mail->setFrom('smamupatkdl@gmail.com', 'SMA Muhammadiyah 4 Kendal');
// $mail->addAddress($_POST['email'], 'user'); 
//     // Add a recipient

// $mail->addReplyTo($_POST['email'], 'Information');
// $mail->addCC('smamupatkdl@gmail.com');

// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Pertanyaan Seputar SMA MUHPAT KENDAL';
// $mail->Body    = $_POST['pertanyaan'];

// if(!$mail->send()) {
//     echo "<script>
//     		 alert('Sukses. Pertanyaan Anda Telah Terkirim');
//     		 </script>;
//     echo "<script>window.location.assign='index.php'</script>";
// } else {
//     echo "<script> alert('Gagal. Pertanyaan Anda Tidak Terkirim')</script>";
//     echo "<script>window.location.assign='index.php'</script>";
// }