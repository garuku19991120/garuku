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
if (isset($_POST["submit"])) {
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
    // サンクスページに画面遷移させる
    include './php/contact_comp.php';
    exit;
}
?>

<form action="" method="post">
    <table border="0" width="700">
        <tr>
            <td colspan="2" class="otoiawasetop">
                <p>お問い合わせ内容</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p>
                    <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
                    <input type="hidden" name="denwa" value="<?php echo $denwa; ?>">
                    <input type="hidden" name="mail" value="<?php echo $mail; ?>">
                    <input type="hidden" name="kisya" value="<?php echo $kisya; ?>">
                    <input type="hidden" name="yosan" value="<?php echo $yosan; ?>">
                    <input type="hidden" name="jisseki" value="<?php echo $jisseki; ?>">
                    <input type="hidden" name="nouki" value="<?php echo $nouki; ?>">
                    <input type="hidden" name="otoiawase" value="<?php echo $otoiawase; ?>">
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>
                    よろしければ「送信する」ボタンを押して下さい。</p>
            </td>
        </tr>
        <tr>
            <td class="monmon2"><label for="name">お名前</label></td>
            <td><?php echo $user_name; ?></td>
        </tr>
        <tr>
            <td class="monmon2"><label for="mail">メールアドレス</label></td>
            <td><?php echo $mail; ?></td>
        </tr>
        <tr>
            <td class="monmon2"><label for="denwa">電話番号</label></td>
            <td><?php echo $denwa; ?></td>
        </tr>
        <tr>
            <td class="monmon2"><label for="kisya">貴社のホームページ</label></td>
            <td><?php echo $kisya; ?></td>
        </tr>
        <tr>
            <td class="monmon2"><label for="yosan">ご予算</label></td>
            <td><?php echo $yosan; ?></td>
        </tr>
        <tr>
            <td class="monmon2"><label for="jisseki">実績公開について</label></td>
            <td><?php echo $jisseki ?></td>
        </tr>
        <tr>
            <td class="monmon2">
                <label for="nouki">希望納期</label>
            </td>
            <td><?php echo $nouki; ?></td>
        </tr>
        <tr>
            <td class="monmon2"><label for="otoiawase">お問い合わせ内容</label></td>
            <td><?php echo nl2br($otoiawase); ?></td>
        </tr>
        <tr>
            <td height="30">
                <p></p>
            </td>
        </tr>
        <tr>
            <td height="40" colspan="2">
                <center>
                    <p>
                        <input type="button" value="内容を修正する" onClick="history.back(-1)" class="button2">
                    </p>
                </center>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <center>
                    <button type="submit" name="submit" class="button">送信する</button>
                </center>
            </td>
        </tr>
    </table>
    </td>
    </tr>


    </table>

</form>