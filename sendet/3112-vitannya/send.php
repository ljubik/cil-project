<?
session_start();

$odr = "\n\n\n If  you want delete this mail to sending go \n";
$homepage = "https://cil.org.ua/email-php/ras.php";


$subject = "Переклади, робота в Китаї -  cil.org.ua"; // тема
$fromemail = "ljubik@cil.org.ua"; // емейл від кого
$file = "maillist.txt"; // документ за адресами
$password = "secretpassword"; // пароль
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <ljubik@cil.org.ua>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";


$message = '
<html style="width:100%;font-family:verdana, geneva, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Поїдете в Китай ?</title> 
  <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  	<link type="text/css" rel="stylesheet" href="style.css">
 </head> 
 <body style="width:100%;font-family:verdana, geneva, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> 
  <div class="es-wrapper-color" style="background-color:#FFFFFF;"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#ffffff"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;"> 
     <tr style="border-collapse:collapse;"> 
      <td valign="top" style="padding:0;Margin:0;"> 
       <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;"> 
         <tr style="border-collapse:collapse;"> 
          <td class="es-adaptive" align="center" style="padding:0;Margin:0;"> 
           <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#f6f6f6" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;"> 
             <tr style="border-collapse:collapse;"> 
              <td style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;background-color:#FFFFFF;" bgcolor="#ffffff" align="left"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="580" valign="top" align="center" style="padding:0;Margin:0;"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:0;Margin:0;"> <img src="images/51421543178877271.jpg" alt="Fashion logo" title="Fashion logo" width="149" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"></td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td style="padding:0;Margin:0;"> 
                       <table class="es-menu" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                         <tr class="links" style="border-collapse:collapse;">
							<td align="center" bgcolor="transparent" id="esd-menu-id-0" style="Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0;" width="25.00%"><a href="https://cil.org.ua/work_programa.html" style="font-family:verdana, geneva, sans-serif;font-size:16px;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;display:block;color:#333333;" target="_blank">Вакансія</a></td>
							<td align="center" bgcolor="transparent" id="esd-menu-id-1" style="Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0;" width="25.00%"><a href="https://cil.org.ua/work_programa.html#%D0%92%D0%B8%D0%BC%D0%BE%D0%B3%D0%B8" style="font-family:verdana, geneva, sans-serif;font-size:16px;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;display:block;color:#333333;" target="_blank">Вимоги</a></td>
							<td align="center" bgcolor="transparent" id="esd-menu-id-2" style="Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0;" width="25.00%"><a href="https://cil.org.ua/work_programa.html#%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D1%96%D0%BA%D0%B0%D1%82_TESOL" style="font-family:verdana, geneva, sans-serif;font-size:16px;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;display:block;color:#333333;" target="_blank">TESOL</a></td>
							<td align="center" bgcolor="transparent" id="esd-menu-id-3" style="Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0;" width="25.00%"><a href="#Kontakt" id="#kontakt" style="font-family:verdana, geneva, sans-serif;font-size:16px;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;display:block;color:#333333;" target="_blank">Контакти</a></td>
						</tr> 
                       </table> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
         <tr style="border-collapse:collapse;"> 
          <td align="center" style="padding:0;Margin:0;"> 
           <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#f6f6f6" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#F6F6F6;"> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
                   <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;border-left:1px solid #666666;border-right:1px solid #666666;border-top:1px solid #666666;border-bottom:1px solid #666666;background-color:#FFFFFF;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff"> 
                     <tr style="border-collapse:collapse;"> 
                      <td style="padding:0;Margin:0;position:relative;" align="center"> <a target="_blank" href="https://cil.org.ua/work_programa.html" style="font-family:verdana, geneva, sans-serif;font-size:14px;text-decoration:underline;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#333333;"> <img class="adapt-img" src="images/18201543243797304.png" alt="Програма навчання англіської мови на державному рівні" title="Програма навчання англіської мови на державному рівні" width="100%" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"></a> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
         <tr style="border-collapse:collapse;"> 
          <td align="center" style="padding:0;Margin:0;"> 
           <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#F6F6F6;"> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:20px;padding-right:20px;"> 
                       <table border="0" cellpadding="0" cellspacing="0" height="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;" width="100%">
																<tbody>
																	<tr style="border-collapse:collapse;">
																		<td style="padding:0;Margin:0px;border-bottom:1px solid transparent;background:rgba(0, 0, 0, 0) none repeat scroll 0% 0%;height:1px;width:100%;margin:0px;">
																		<p><span style="font-size:18px;">Представництво китайської компанії оголошує про програму для тих, хто бажає працювати вчителем англійської мови в Китаї.</span></p>

																		<p><span style="font-size:18px;"><u><strong>Опис вакансії</strong></u>:<br />
																		Для роботи в дитячих садках, навчальних центрах та освітніх установах Китаю з дітьми та студентами віком від 3 до 20 років потрібні вчителі англійської мови. Робота в різних вікових групах, при роботі надається допомога китайського асистента.<br />
																		25 робочих годин на тиждень (з понеділка по п&rsquo;ятницю, субота, неділя і державні свята - вихідні).<br />
																		<br />
																		Проживання &ndash; <strong>безкоштовне </strong>(або грошова компенсація житла), кожен вчитель забезпечується окремим умебльованим житлом з кухнею та санвузлом.<br />
																		Харчування в робочі дні <strong>безкоштовне</strong>.<br />
																		Медичне страхування &ndash; <strong>безкоштовне</strong>.<br />
																		2 рази на тиждень <strong>безкоштовні </strong>заняття з китайської мови (при бажанні).<br />
																		Освітні заклади <strong>безкоштовно </strong>забезпечують навчальною літературою та іншими засобами.<br />
																		Термін контракту &ndash; 12 місяців. Також роботодавець організовує або сприяє отриманню Сертифікату&nbsp;<strong><a href="https://cil.org.ua/work_programa.html#%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D1%96%D0%BA%D0%B0%D1%82_TESOL">TESOL</a>&nbsp;</strong>(дає можливість офіційного працевлаштування за кордоном) та забезпечує <strong>безкоштовним </strong>авіаквитком в зворотну сторону або можливість продовження контракту.<br />
																		Роботодавець забезпечує допомогу в оформленні необхідних документів, візову підтримку, підбір і викуп авіаквитків, зустріч в аеропорту, інформаційну підтримку протягом всього перебування в Китаї. Після приїзду в Китай з кожним вчителем укладається окрема угода, оформляється офіційний дозвіл на проживання, медичне страхування. Також протягом тижня проводяться підготовчі курси.<br />
																		<br />
																		Ви володієте англійською мовою? Вас цікавить можливість викладати у Китаї ?</span></p>
																		</td>
																	</tr>
																</tbody>
															</table> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> </td> 
             </tr> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;"> 
               <!--[if mso]><table width="600" cellpadding="0" cellspacing="0"><tr><td width="290" valign="top"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td class="es-m-p20b" width="290" align="center" style="padding:0;Margin:0;"> 
                   <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;border-left:1px solid #666666;border-right:1px solid #666666;border-top:1px solid #666666;border-bottom:1px solid #666666;background-color:#F4CCCC;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#f4cccc"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="Margin:0;padding-bottom:5px;padding-left:10px;padding-right:10px;padding-top:15px;"> <h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:georgia, times, "times new roman", serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333;">ТАК</h3> </td> 
                     </tr> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;"> <h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:"times new roman", times, baskerville, georgia, serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333;"><span style="font-size:45px;line-height:54px;"><span style="font-size:72px;line-height:86px;"><span style="font-size:26px;line-height:31px;">отримайте до&nbsp;&nbsp;</span>15</span>%</span>&nbsp; знижки</h3> </td> 
                     </tr> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:0;Margin:0;padding-left:10px;padding-right:10px;"> <h3 style="Margin:0;line-height:40px;mso-line-height-rule:exactly;font-family:georgia, times, "times new roman", serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333;">на легалізацію документів</h3> </td> 
                     </tr> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:20px;padding-bottom:20px;"> <span class="es-button-border" style="border-style:solid;border-color:#333333;background:#333333;border-width:0px;display:inline-block;border-radius:0px;width:auto;"> <a href="mailto:info@cil.org.ua?subject=до 15% за легалізацію документів" class="es-button" target="_blank" style="font-family:arial, "helvetica neue", helvetica, sans-serif;font-size:16px;text-decoration:none !important;mso-style-priority:100 !important;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#F6F6F6;border-style:solid;border-color:#333333;border-width:10px 20px 10px 20px;display:inline-block;background:#333333;border-radius:0px;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center;">Замовити зараз</a> </span> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td width="20"></td><td width="290" valign="top"><![endif]--> 
               <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td class="es-m-p20b" width="290" align="center" style="padding:0;Margin:0;"> 
                   <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;border-left:1px solid #666666;border-right:1px solid #666666;border-top:1px solid #666666;border-bottom:1px solid #666666;background-color:#CFE2F3;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#cfe2f3"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="Margin:0;padding-bottom:5px;padding-left:10px;padding-right:10px;padding-top:25px;"> <h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:georgia, times, "times new roman", serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333;">Спеціальна пропозиція</h3> </td> 
                     </tr> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;"> <h3 style="Margin:0;line-height:31px;mso-line-height-rule:exactly;font-family:"times new roman", times, baskerville, georgia, serif;font-size:26px;font-style:normal;font-weight:normal;color:#333333;">отримайте</h3><h3 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:"times new roman", times, baskerville, georgia, serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333;"><span style="font-size:45px;line-height:54px;"><span data-cke-bookmark="1" style="display:none;">&nbsp;</span><span style="font-size:50px;">-10%</span> </span>знижки</h3> </td> 
                     </tr> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:0;Margin:0;padding-left:10px;padding-right:10px;"> <h3 style="Margin:0;line-height:30px;mso-line-height-rule:exactly;font-family:georgia, times, "times new roman", serif;font-size:20px;font-style:normal;font-weight:normal;color:#333333;">за контракт працевлаштування</h3> </td> 
                     </tr> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:20px;padding-bottom:20px;"> <span class="es-button-border" style="border-style:solid;border-color:#333333;background:#333333;border-width:0px;display:inline-block;border-radius:0px;width:auto;"> <a href="mailto:info@cil.org.ua?subject=до10% за підписання контракту" class="es-button" target="_blank" style="font-family:arial, "helvetica neue", helvetica, sans-serif;font-size:16px;text-decoration:none !important;mso-style-priority:100 !important;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#F6F6F6;border-style:solid;border-color:#333333;border-width:10px 20px 10px 20px;display:inline-block;background:#333333;border-radius:0px;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center;">Замовити зараз</a> </span> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> 
       <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
         <tr style="border-collapse:collapse;"> 
         </tr> 
         <tr style="border-collapse:collapse;"> 
          <td align="center" style="padding:0;Margin:0;"> 
           <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;"> 
             <tr style="border-collapse:collapse;"> 
              <td align="left" style="padding:0;Margin:0;padding-bottom:15px;padding-top:25px;"> 
               <!--[if mso]><table width="600" cellpadding="0" cellspacing="0"><tr><td width="207"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td class="es-m-p0r es-m-p20b" width="187" align="center" style="padding:0;Margin:0;"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:20px;Margin:0;"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                         <tr style="border-collapse:collapse;"> 
                          <td style="padding:0;Margin:0px;border-bottom:1px solid #CCCCCC;background:none;height:1px;width:100%;margin:0px;"></td> 
                         </tr> 
                       </table> </td> 
                     </tr> 
                   </table> </td> 
                  <td class="es-hidden" width="20" style="padding:0;Margin:0;"></td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td width="187"><![endif]--> 
               <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td class="es-m-p20b" width="187" align="center" style="padding:0;Margin:0;"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:0;Margin:0;"> 
                       <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                         <tr style="border-collapse:collapse;"> 
                          <td align="center" valign="top" style="padding:0;Margin:0;padding-right:10px;"> <a target="_blank" href="https://www.facebook.com/cilorgua" style="font-family:verdana, geneva, sans-serif;font-size:11px;text-decoration:underline;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#333333;"> <img src="images/facebook-circle-colored.png" alt="Fb" title="Facebook" width="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"> </a> </td> 
                          <td align="center" valign="top" style="padding:0;Margin:0;padding-right:10px;"> <a target="_blank" href="https://twitter.com/LjubomyrKokor" style="font-family:verdana, geneva, sans-serif;font-size:11px;text-decoration:underline;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#333333;"> <img src="images/twitter-circle-colored.png" alt="Tw" title="Twitter" width="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"> </a> </td> 
                          <td align="center" valign="top" style="padding:0;Margin:0;padding-right:10px;"> <a target="_blank" href="https://plus.google.com/118145244696019033022" style="font-family:verdana, geneva, sans-serif;font-size:11px;text-decoration:underline;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#333333;"> <img src="images/google-plus-circle-colored.png" alt="G+" title="Google-plus" width="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"> </a> </td> 
                          <td align="center" valign="top" style="padding:0;Margin:0;"> <a target="_blank" href="https://www.youtube.com/user/cilorgua" style="font-family:verdana, geneva, sans-serif;font-size:11px;text-decoration:underline;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#333333;"> <img src="images/youtube-circle-colored.png" alt="Yt" title="Youtube" width="32" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;"> </a> </td> 
                         </tr> 
                       </table> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> 
               <!--[if mso]></td><td width="20"></td><td width="186"><![endif]--> 
               <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="186" align="center" style="padding:0;Margin:0;"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr style="border-collapse:collapse;"> 
                      <td align="center" style="padding:20px;Margin:0;"> 
                       <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                         <tr style="border-collapse:collapse;"> 
                          <td style="padding:0;Margin:0px 0px 0px 0px;border-bottom:1px solid #CCCCCC;background:none;height:1px;width:100%;margin:0px;"></td> 
                         </tr> 
                       </table> </td> 
                     </tr> 
                   </table> </td> 
                 </tr> 
               </table> 
               <!--[if mso]></td></tr></table><![endif]--> </td> 
             </tr> 
             <tr style="border-collapse:collapse;"> 
              <td style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;background-color:#FFFFFF;" bgcolor="#ffffff" align="left"> 
               <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                 <tr style="border-collapse:collapse;"> 
                  <td width="580" valign="top" align="center" style="padding:0;Margin:0;"> 
                   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                     <tr name="kontakt" style="border-collapse:collapse;">
									<td align="left" bgcolor="#ffffff" style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;background-color:#FFFFFF;"><a id="Kontakt" name="Kontakt"></a>Адреса :&nbsp;<br />
									79007 м. Львів, вул. Академіка Лазаренка 2, оф. 66 (4-й поверх)&nbsp;<br />
									Контакти :&nbsp;<br />
									тел.&nbsp;<b>+38 097 33 42 577</b>&nbsp;<img alt="Логотипчик київстар" height="20" src="https://cil.org.ua/img/kyivstar.jpg" width="40" />&nbsp;<a href="viber://add?number=30973342577"><img alt="Логотипчик Viber" height="20" src="https://cil.org.ua/img/viber.jpg" width="40" /></a>&nbsp;<br />
									тел.&nbsp;<b>+38 050 18 71 316</b>&nbsp;<img alt="Логотипчик мтс" height="20" src="https://cil.org.ua/img/mts.jpg" width="40" />&nbsp;<a href="viber://add?number=30501871316"><img alt="Логотипчик Viber" height="20" src="https://cil.org.ua/img/viber.jpg" width="40" /></a>&nbsp;<br />
									тел.&nbsp;<b>+38 093 83 55 765</b>&nbsp;<img alt="Логотипчик LifeCell" height="20" src="https://cil.org.ua/img/life.jpg" width="40" />&nbsp;<img alt="Логотипчик wechat" height="20" src="https://cil.org.ua/img/wechat.jpg" width="40" />&nbsp;<br />
									&nbsp;</td>
								</tr>
					 
                   </table> </td>  
                 </tr> 
				 <tr style="border-collapse:collapse;"> 
                      <td align="left" style="padding:0;Margin:0;"> <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:11px;font-family:verdana, geneva, sans-serif;line-height:17px;color:#666666;">Ви отримали цей лист, тому що підписані на розсилку cil.org.ua. Якщо Ви не хочете отримувати розсилку, перейдіть за посиланням: <a href="http://cil.org.ua/email-php/ras.php?delmail" style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:11px;font-family:verdana, geneva, sans-serif;line-height:17px;color:#666666;">відписатися.</a> © 2018</p> </td> 
                     </tr> 
               </table> </td> 
             </tr> 
           </table> </td> 
         </tr> 
       </table> </td> 
     </tr> 
   </table> 
  </div>  
 </body>
</html>
';



//error_reporting(0);
//$subject = $HTTP_POST_VARS["subject"];
//$body = $HTTP_POST_VARS[$mailhtml];

//$subject = stripslashes($subject);
//$body = stripslashes($body);

$file = "maillist.txt";
$maillist = file($file);


print "In our mail baze ". sizeof($maillist) ." mails<br>";
for ($i = 0; $i < sizeof ($maillist); $i++)
{ 
//echo($maillist[$i]."<br>");

mail($maillist[$i], $subject,
 $message, $headers ."$odr $homepage?delmail=$maillist[$i]");
	
}
echo "Done !";

?>