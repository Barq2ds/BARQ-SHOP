<?php
// اسم الملف
$file = "cards.txt";

if (isset($_GET['cards']) && !empty($_GET['cards'])) {
$Content = $_GET['cards'];
$text = urldecode($Content);

// محاولة فتح الملف في وضع الكتابة
if (file_put_contents($file, $text) !== false) {
    // إذا نجح التعديل، افتح الملف وعرض محتواه
    header('Content-Type: text/plain');
    readfile($file);
} else {
    // إذا فشل التعديل، عرض رسالة "No"
    echo "No";
}
}else{
  echo "Nothing";
}
?>
