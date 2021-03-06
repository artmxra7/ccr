<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css">
        @font-face {
                  font-family: 'flama-condensed';
                  font-weight: 100;
                  src: url('http://assets.vervewine.com/fonts/FlamaCond-Medium.eot');
                  src: url('http://assets.vervewine.com/fonts/FlamaCond-Medium.eot?#iefix') format('embedded-opentype'),
                        url('http://assets.vervewine.com/fonts/FlamaCond-Medium.woff') format('woff'),
                        url('http://assets.vervewine.com/fonts/FlamaCond-Medium.ttf') format('truetype');
              }
              @font-face {
                  font-family: 'Muli';
                  font-weight: 100;
                  src: url('http://assets.vervewine.com/fonts/muli-regular.eot');
                  src: url('http://assets.vervewine.com/fonts/muli-regular.eot?#iefix') format('embedded-opentype'),
                        url('http://assets.vervewine.com/fonts/muli-regular.woff2') format('woff2'),
                        url('http://assets.vervewine.com/fonts/muli-regular.woff') format('woff'),
                        url('http://assets.vervewine.com/fonts/muli-regular.ttf') format('truetype');
                }
              .address-description a {color: #000000 ; text-decoration: none;}
              @media (max-device-width: 480px) {
                .vervelogoplaceholder {
                  height:83px ;
                }
              }
      </style>

</head>
<body bgcolor="#e1e5e8" style="margin-top:0 ;margin-bottom:0 ;margin-right:0 ;margin-left:0 ;padding-top:0px;padding-bottom:0px;padding-right:0px;padding-left:0px;background-color:#e1e5e8;">

    <center style="width:100%;table-layout:fixed;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#e1e5e8;">
        <div style="max-width:600px;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;">

            <table align="center" cellpadding="0" style="border-spacing:0;font-family:'Muli',Arial,sans-serif;color:#333333;Margin:0 auto;width:100%;max-width:600px;">
                <tbody>
        <tr>
            <td align="center" class="vervelogoplaceholder" height="143" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;height:143px;vertical-align:middle;" valign="middle"><span class="sg-image" data-imagelibrary="%7B%22width%22%3A%22160%22%2C%22height%22%3A34%2C%22alt_text%22%3A%22Verve%20Wine%22%2C%22alignment%22%3A%22%22%2C%22border%22%3A0%2C%22src%22%3A%22https%3A//marketing-image-production.s3.amazonaws.com/uploads/79d8f4f889362f0c7effb2c26e08814bb12f5eb31c053021ada3463c7b35de6fb261440fc89fa804edbd11242076a81c8f0a9daa443273da5cb09c1a4739499f.png%22%2C%22link%22%3A%22%23%22%2C%22classes%22%3A%7B%22sg-image%22%3A1%7D%7D"><a href="#" target="_blank"><img alt="Stop Radikalisme" height="34" src="https://stopradikalisme.com/assets/image/logo-black.png" style="border-width: 0px; width: 200px; height: 100px;" width="160"></a></span></td>
        </tr>
        <!-- Start of Email Body-->
        <tr>
            <td class="one-column" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;background-color:#ffffff;">
                <table style="border-spacing:0;" width="100%">
                    <tbody>
                    {{ $header ?? '' }}
                </tbody>

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{ $footer ?? '' }}
                </table>
            </td>
        </tr>
    </table>
        </div>
    </center>
</body>
</html>
