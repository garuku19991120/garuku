<?php
// フォームのボタンが押されたら
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを各変数に格納
    $user_name = $_POST["user_name"];
    $mail = $_POST["mail"];
    $denwa = $_POST["denwa"];
    $kisya = $_POST["kisya"];
    $yosan = $_POST["yosan"];
    $jisseki = $_POST["jisseki"];
    $nouki = $_POST["nouki"];
    $otoiawase = $_POST["otoiawase"];
}

// 送信ボタンが押されたら

// 送信ボタンが押された時に動作する処理をここに記述する

// 日本語をメールで送る場合のおまじない
mb_language("ja");
mb_internal_encoding("UTF-8");


// 件名を変数subjectに格納
$subject = "［自動送信］お問い合わせ内容の確認";

// メール本文を変数bodyに格納
$body = <<< EOM
{$user_name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】 
{$user_name}

【 メール 】 
{$mail}

【 電話番号 】 
{$denwa}

【 貴社のホームページ 】 
{$kisya}
【 予算 】 
{$yosan}

【 実績公開について 】 
{$jisseki}

【 希望納期 】 
{$nouki}

【 お問い合わせ内容 】 
{$otoiawase}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;

// 送信元のメールアドレスを変数fromEmailに格納
$fromEmail = "garuku@gaisen.main.jp";

// 送信元の名前を変数fromNameに格納
$fromName = "お問い合わせ";

// ヘッダ情報を変数headerに格納する      
$header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";

// メール送信を行う
mb_send_mail("garuku@ours-llc.com", $subject, $body, $header);
mb_send_mail($mail, $subject, $body, $header);
// サンクスページに画面遷移させる
exit;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2; URL="> -->
    <link rel="stylesheet" href="./css/master.min.css">
    <link rel="stylesheet" href="./css/contact.min.css">
    <link rel="stylesheet" href="./css/menu.min.css">
    <script src="./js/none.js"></script>
    <title>CONTACT/お問い合わせ</title>
</head>

<body>
    <?php include('./php/menu.php'); ?>

    <div class="main_space">
        <table class="main_table">
            <tr class="main_tr">
                <td class="main_td_space"></td>
                <td class="main_td">
                    <?php include('./php/contact_comp.php'); ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>