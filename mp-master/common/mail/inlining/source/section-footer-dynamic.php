<?php
use yii\helpers\Html;
use yii\helpers\Url;
use common\components\MiscHelpers;
?>
<style type="text/css">
/* Take care of image borders and formatting, client hacks */
img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
a img { border: none; }
table { border-collapse: collapse !important;}
#outlook a { padding:0; }
.ReadMsgBody { width: 100%; }
.ExternalClass { width: 100%; }
.backgroundTable { margin: 0 auto; padding: 0; width: 100% !important; }
table td { border-collapse: collapse; }
.ExternalClass * { line-height: 115%; }
.container-for-gmail-android { min-width: 600px; }
/* General styling */
* {
  font-family: Helvetica, Arial, sans-serif;
}
body {
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none;
  width: 100% !important;
  margin: 0 !important;
  height: 100%;
  color: #676767;
}
td {
  font-family: Helvetica, Arial, sans-serif;
  font-size: 14px;
  color: #777777;
  text-align: center;
  line-height: 21px;
}
a {
  color: #676767;
  text-decoration: none !important;
}
.pull-left {
  text-align: left;
}
.pull-right {
  text-align: right;
}
.header-lg,
.header-md,
.header-sm {
  font-size: 32px;
  font-weight: 700;
  line-height: normal;
  padding: 35px 0 0;
  color: #4d4d4d;
}
.header-md {
  font-size: 24px;
}
.header-sm {
  padding: 5px 0;
  font-size: 18px;
  line-height: 1.3;
}
.content-padding {
  padding: 20px 0 30px;
}
.mobile-header-padding-right {
  width: 290px;
  text-align: right;
  padding-left: 10px;
}
.mobile-header-padding-left {
  width: 290px;
  text-align: left;
  padding-left: 10px;
}
.free-text {
  width: 100% !important;
  padding: 10px 60px 0px;
}
.block-rounded {
  border-radius: 5px;
  border: 1px solid #e5e5e5;
  vertical-align: top;
}
.button {
  padding: 30px 0 30px 0;
}
.info-block {
  padding: 0 20px;
  width: 260px;
}
.block-rounded {
  width: 260px;
}
.info-img {
  width: 258px;
  border-radius: 5px 5px 0 0;
}
.force-width-gmail {
  min-width:600px;
  height: 0px !important;
  line-height: 1px !important;
  font-size: 1px !important;
}
.button-width {
  width: 228px;
}
.mini-block {
  border: 1px solid #e5e5e5;
  border-radius: 5px;
  background-color: #ffffff;
  padding: 12px 15px 15px;
  text-align: left;
  vertical-align:top;
  width: 253px;
}

.mini-large-block {
  background-color: #ffffff;
  width: 498px;
  border: 1px solid #cccccc;
  border-radius: 5px;
  padding: 60px 75px;
}

.mini-container-left {
  width: 278px;
  padding: 10px 0 10px 15px;
  vertical-align: top;
}

.mini-container-right {
  width: 278px;
  padding: 10px 14px 10px 15px;
  vertical-align: top;
}

.mini-large-block-container {
  padding: 30px 50px;
  width: 500px;
}

td[class="mini-large-block-container"] {
  padding: 8px 20px !important;
  width: 280px !important;

td[class="mini-block-container"] {
  padding: 8px 20px !important;
  width: 280px !important;
}

.product {
  text-align: left;
  vertical-align: top;
  width: 175px;
}

.total-space {
  padding-bottom: 8px;
  display: inline-block;
}

.item-table {
  padding: 50px 20px;
  width: 560px;
}

.item {
  width: 300px;
}

.mobile-hide-img {
  text-align: left;
  width: 125px;
}

.mobile-hide-img img {
  border: 1px solid #e6e6e6;
  border-radius: 4px;
}

.title-dark {
  text-align: left;
  border-bottom: 1px solid #cccccc;
  color: #4d4d4d;
  font-weight: 700;
  padding-bottom: 5px;
}

.item-col {
  padding-top: 20px;
  text-align: left;
  vertical-align: top;
}

.force-width-gmail {
  min-width:600px;
  height: 0px !important;
  line-height: 1px !important;
  font-size: 1px !important;
}

</style>
<link rel="stylesheet" media="screen" type="text/css" href="http://fonts.googleapis.com/css?family=Oxygen:400,700">
<style type="text/css" media="screen">
@media screen {
  /* Thanks Outlook 2013! */
  * {
    font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
  }
}
</style>
<style type="text/css" media="only screen and (max-width: 480px)">
/* Mobile styles */
@media only screen and (max-width: 480px) {
  table[class*="container-for-gmail-android"] {
    min-width: 290px !important;
    width: 100% !important;
  }
  table[class="w320"] {
    width: 320px !important;
  }
  img[class="force-width-gmail"] {
    display: none !important;
    width: 0 !important;
    height: 0 !important;
  }
  a[class="button-width"],
  a[class="button-mobile"] {
    width: 248px !important;
  }
  td[class*="mobile-header-padding-left"] {
    width: 160px !important;
    padding-left: 0 !important;
  }
  td[class*="mobile-header-padding-right"] {
    width: 160px !important;
    padding-right: 0 !important;
  }
  td[class="header-lg"] {
    font-size: 24px !important;
    padding-bottom: 5px !important;
  }
  td[class="header-md"] {
    font-size: 18px !important;
    padding-bottom: 5px !important;
  }
  td[class="content-padding"] {
    padding: 5px 0 30px !important;
  }
   td[class="button"] {
    padding: 5px !important;
  }
  td[class*="free-text"] {
    padding: 10px 18px 30px !important;
  }
  td[class="info-block"] {
    display: block !important;
    width: 280px !important;
    padding-bottom: 40px !important;
  }
  td[class="info-img"],
  img[class="info-img"] {
    width: 278px !important;
  }
  td[class~="mobile-hide-img"] {
    display: none !important;
    height: 0 !important;
    width: 0 !important;
    line-height: 0 !important;
  }

  td[class~="item"] {
    width: 140px !important;
    vertical-align: top !important;
  }

  td[class~="quantity"] {
    width: 50px !important;
  }

  td[class~="price"] {
    width: 90px !important;
  }

  td[class="item-table"] {
    padding: 30px 20px !important;
  }

  td[class="mini-container-left"],
  td[class="mini-container-right"] {
    padding: 0 15px 15px !important;
    display: block !important;
    width: 290px !important;
  }
}
</style>

<tr>
  <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; height: 100px;">
    <center>
      <table cellspacing="0" cellpadding="0" width="600" class="w320">
        <tr>
          <td style="padding: 25px 0 15px">
            <strong><?php echo Html::a(Yii::t('frontend','Meeting Planner'), $links['home']); ?></strong><br />
            Seattle, Washington<br />
          </td>
        </tr>
        <tr><td style="font-size:75%;"><em>
          <?php echo HTML::a(Yii::t('frontend','Email settings'),$links['footer_email']); ?>
          | <?php echo HTML::a(Yii::t('frontend','Block sender'),$links['footer_block']); ?>
          <?php //echo HTML::a(Yii::t('frontend','Block all'),$links['footer_block_all']); ?>
        </em>
        </td></tr>
      </table>
    </center>
  </td>
</tr>
