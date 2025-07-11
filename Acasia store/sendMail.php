<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  $to = "eslamdbs18@email.com"; // عدل الإيميل هنا
  $subject = "رسالة جديدة من موقع Acasia";
  $headers = "From: $email\r\n" .
             "Reply-To: $email\r\n" .
             "Content-Type: text/plain; charset=UTF-8\r\n";

  $body = "الاسم: $name\nالبريد: $email\nالرسالة:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "تم إرسال رسالتك بنجاح. سنقوم بالرد عليك قريباً.";
  } else {
    echo "حدث خطأ أثناء إرسال الرسالة. حاول مرة أخرى لاحقاً.";
  }
} else {
  echo "طريقة غير مسموحة للوصول.";
}
?>

