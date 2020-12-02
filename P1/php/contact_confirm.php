<table>
    <tr>
        <td>入力した内容があっていましたら送信ボタンを押してください。<br>
        </td>
    </tr>
    <tr>
        <td></td>
    </tr>
</table>
<form action="contact_comp.php">
    <table>

        <tr>
            <td>
                お名前
            </td>
            <td>
                <input type="text" [(ngModel)]="nametext">
            </td>
        </tr>
        <tr>
            <td>
                メールアドレス
            </td>
            <td>
                <?php echo ?>
            </td>
        </tr>
        <tr>
            <td>
                電話番号
            </td>
            <td>
                <input type="text" [(ngModel)]="nametext">
            </td>
        </tr>
        <tr>
            <td>
                貴社のホームページ
            </td>
            <td>
                <input type="text" [(ngModel)]="nametext">
            </td>
        </tr>
        <tr>
            <td>
                ご希望納期
            </td>
            <td>
                <input type="text" [(ngModel)]="nametext">
            </td>
        </tr>
        <tr>
            <td>
                ご予算
            </td>
            <td>
                <input type="text" [(ngModel)]="nametext">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button class="sousin">送信</button>
            </td>
        </tr>
    </table>
</form>

<?php include('./php/copywrite.php'); ?>