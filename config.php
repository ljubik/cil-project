<?php

/* Main Options */

/* Do you want to send a thank you email */
$sendThankYou = TRUE;

/* Require mental question challenge */
$mentalQuestion = TRUE;

/* Mental question list - the more, the
better secured you are from auto bots */

$mentalQuestionList[] = array("Який квадратний корінь з 169, 13 вірно ?","13");
$mentalQuestionList[] = array("2 помножити на 2 = ","4");
$mentalQuestionList[] = array("Напишіть зелений англійською ","green");
$mentalQuestionList[] = array("Ви інопланетянин ? 1-так, 0-ні ","0");
$mentalQuestionList[] = array("2532 + 5328","7860");
$mentalQuestionList[] = array("25 + 52","77");
$mentalQuestionList[] = array("100 - 1","99");
$mentalQuestionList[] = array("10101 + 1010","11111");

/* Email Options */
//-----------------
/* Admin emails */
$adminEmails = array('ljubik@ukr.net');

/* Site Title */
$siteTitle = 'cil.org.ua - переклади';

/* Email From */
$emailFrom = 'info@cil.org.ua';

/* Email Charset */
$emailCharset = 'utf-8';

/* Email Title */
$emailTitle = 'Дякуємо за Ваше звернення';

/* Admin Email Title */
$emailAdminTitle = 'Ми отримали нове звернення';


/*
For Templates you can use the following variables:
	$+name+$ -> User Name Sending Contact
	$+email+$ -> User Email Sending Contact
	$+message_text+$ -> Contact Message
	$+reason+$ -> Reason For Contact
*/

/* Email Subject */
$emailSubject = '<b>Привіт $+name+$,</b></span><br /><br />
	<span align="justify"><b>Ми отримали ваше звернення з сайту '.$siteTitle.'.</b></span><br /><br />
	<span align="justify"><b>Ви вказали такий контактний телефон: <font color="blue">$+message_text+$</font></b></span><br /><br />
	<span align="justify"><b>Ваше повідомлення: <font color="blue">$+reason+$</font></b></span><br /><br />
	<span align="justify"><b>Відповідь буде надана на вказаний вами  емейл <font color="blue">$+email+$</font></b></span><br /><br />
	<span align="justify"><b>Дякуємо за звернення, контактний телефон +38 097 33 42 577 </b></span><br /><br /><br />
	<span align="justify"><b>'.$siteTitle.'</b></span><br />';

/* Admin Email Subject */
$emailSubjectAdmin = '<b>Привіт адміністрація,</b></span><br /><br />
	<span align="justify"><b>У вас є нове звернення @ '.$siteTitle.'.</b></span><br /><br />
	<span align="justify"><b>Імя яке вказав користувач: <font color="blue">$+name+$</font></b></span><br /><br />
	<span align="justify"><b>Телефон користувача: <font color="blue">$+message_text+$</font></b></span><br /><br />
	<span align="justify"><b>Повідомлення: <font color="blue">$+reason+$</font></b></span><br /><br />
	<span align="justify"><b>Користувач вказав такий емейл для відповіді <font color="blue">$+email+$</font></b></span><br /><br />
	<span align="justify"><b>'.$siteTitle.'</b></span><br />';

/* End Configurations */

//Function to check for valid email
function is_valid_email($string) {
	return preg_match('/^[.\w-]+@([\w-]+\.)+[a-zA-Z]{2,6}$/', $string);
}


/** SEC 334 **/
?>
