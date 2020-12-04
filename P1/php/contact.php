<!-- <table border="0">
    <tr>
        <td colspan="2" class="info_title">お問い合わせ</td>
    </tr>
    <tr>
        <td>{{nametext}}</td>
        <td></td>
    <tr>
        <td>

            現在ご依頼を募集しております。<br>
            何かご用がございましたらこちらかTwitterのDMまでお願い致します。<br>
            <br>

            金額の目安<br>
            ご依頼のイラストのサイズ、書き込み量などによる金額<br>
            のおおよその目安になれば良いと思います。<br>
            ＳＤキャラ（ちびきゃら）3000円～<br>
            アイコン（キャラのみ）5000円～<br>
            ヘッダー画像6000円～<br>
            一枚絵8000円～<br>
            <br>
            オプション<br>
            複雑な背景：+1000円～<br>
            キャラクターの複雑な装飾品:＋1000円～<br>
            <br>
            <br>
            細かい金額などは打合せの際に決める形となります。ご了承ください。<br>
            <br>
            ご依頼からの流れ<br>

            ご依頼<br>
            ↓<br>
            打合せ<br>
            ↓<br>
            打合せ内容に沿ったラフ政策<br>
            ↓<br>
            ラフ確認（ここで修正がありましたら入れていただきます。）<br>
            ↓<br>
            確認↓内容でよろしければ料金の半分を入金していただきます。<br>
            ↓<br>
            入金確認後、線画、着彩に入ります。<br>
            ↓<br>
            着彩後確認（ここで修正がなどがありましたらしていきます。）<br>
            ↓<br>
            完成品納品<br>
            ↓<br>
            納品後残りの料金を入金していただきます。<br>
            <br>
            あくまで目安なので細かい内容は打合せの再に決める形となりあます。<br>

            ここには多分内容が入るわよ

        </td>
        <td></td>
    </tr>
</table> -->
<form action="contact_confirm.php" method="post">
    <table>
        <tr>
            <td colspan="2" class="otoiawasetop">
                <p>お問い合わせ</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p></p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p>現在お仕事を募集しております。</p>
                <p>ご用がありましたらお手数をお掛け致しますが
                    こちらのページのご記入をお願いいたします。</p>ご質問の場合は必須以外の項目を空欄で、ご依頼の場合は全ての項目を記入お願いいたします。
            </td>
        </tr>
        <tr>
            <td class="monmon2"><label for="name">お名前</label></td>
            <td>
                <input type="text" id="name" name="user_name" class="monmon" placeholder="お名前を入力してください" required="required">
            </td>
        </tr>
        <tr>
            <td class="monmon2"><label for="mail">メールアドレス</label></td>
            <td>
                <input type="email" id="mail" name="mail" class="monmon" placeholder="メールアドレスを入力してください" required="required">
            </td>
        </tr>
        <tr>
            <td class="monmon2"><label for="denwa">電話番号</label></td>
            <td>
                <input type="tel" id="denwa" name="denwa" class="monmon" placeholder="電話番号を入力してください" required="required">
            </td>
        </tr>
        <tr>
            <td class="monmon2"><label for="kisya">貴社のホームページ</label></td>
            <td>
                <input type="url" id="kisya" name="kisya" class="monmon" placeholder="ＵＲＬを入力してください">
            </td>
        </tr>
        <tr>
            <td class="monmon2"><label for="yosan">ご予算</label></td>
            <td>
                <input type="text" id="yosan" name="yosan" class="monmon" placeholder="ご予算を入力してください">
            </td>
        </tr>
        <tr>
            <td class="monmon2"><label for="jisseki">実績公開について</label></td>
            <td>
                <input type="text" id="jisseki" name="jisseki" class="monmon" placeholder="ホームページ、同人誌などの掲載可否">
            </td>
        </tr>
        <tr>
            <td class="monmon2">
                <label for="nouki">希望納期</label>
            </td>
            <td>
                <input name="nouki" type="text" id="nouki" class="monmon" placeholder="希望の納期を入力してください">
            </td>
        </tr>
        <tr>
            <td class="monmon2"><label for="otoiawase">お問い合わせ内容</label></td>
            <td>
                <textarea name="otoiawase" id="otoiawase" class="monmon" required="required"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p></p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <center>
                    <input type="submit" value="送信する" class="button">
                </center>
            </td>
        </tr>
    </table>
</form>
<?php include('./php/copywrite.php'); ?>