<html>
<head>
    <meta charset="UTF-8">
    <title>barbellfans.ru</title>
</head>
<body>

<table style="background-color: #2f303b" width="100%" border="none" align="center" cellspacing="0" cellpadding="0">
    <tr>
        <td style = "border:none;">
            <table cellpadding="0" cellspacing="0" width="100%" style = "border:none;margin-top:10px;" >
                <tbody>
                <tr >
                    <td style="text-align: center;border:none;" valign="top">
                        <a href="http://barbellfans.ru">
                            <img alt="barbellfans logo" src="http://barbellfans.ru/images/logo.png" style="width: 237px; height: 91px;" />
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>

    <tr>
        <td style="border:none;">
            <table style="width:600px;background-color:rgba(255, 255, 255, 0.8);margin-top:10px;" align="center" cellspacing="0" cellpadding="0">

                <tr>
                    <td>
                        <h2 style="color:#2f303b;text-align: center;font-family: Ubuntu,sans-serif">На barbellfans.ru вышла новыя статья!</h2>
                    </td>
                </tr>

                <tr>
                    <td style="border:none;">
                        <p style = "color:#2f303b;font-size:18px;font-family: Ubuntu,sans-serif;text-indent:15px;padding-left:10px;">Привет читатель сайта <?=SITE_NAME;?>!
                             На нашем сайте вышла новыя статья - <?=$headline;?>.Для того чтобы ее прочесть перейди по
                            <a href="/article/id/<?=$article_id;?>" style = "color:#d1bf3c;text-decoration:none;">ссылке</a>. </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style = "border:none;padding-top:20px;">

            <table style="width:600px" align="center" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <p style="font-family:Ubuntu,sans-serif;font-size:14px;color:#e2e2e3;text-indent:15px;padding-left:10px;">Если вы больше не хотите получать письма от нашего сайта просто -
                            <a href="/unsubscribe/email/<?=$subscriber_email;?>" style = "color:#d2801f;text-decoration:none;"> отпишитесь </a> от рассылки.<p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

</table>

</body>
</html>