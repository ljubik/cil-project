<?php
/* Config File */
include_once('config.php');


/* Are we submitting form */
if($_POST['submitID'] == 1){

	/* Check user entered variables */
	if($_POST['name'] == NULL){ $message = 'Введіть своє імя.';}
	if($message == NULL && is_valid_email($_POST['email']) == false ){ $message = 'Введіть коректний email.';}
	if($_POST['messageText'] == NULL && $message == NULL){ $message = 'Введіть що саме вас цікавить.';}	
	
	/* Check Mental Question */
	if($mentalQuestion == TRUE)
	{
		foreach($mentalQuestionList as $question) {if($question[0] == $_POST['question']){$answer = $question[1];}}
		if($answer != $_POST['finalAnswer'] || $answer == NULL)
		{
			$message = 'Ваша відповідь на запитання "'.$_POST['question'].'" є невірною.';
		}
	}
	/* Actual sending */
	if($message == NULL){

		/* Compose messages */
		$doSearch = array('$+name+$','$+email+$','$+message_text+$','$+reason+$');
		$doReplace = array($_POST['name'],$_POST['email'],$_POST['telefon'],$_POST['messageText'],$_POST['reason']);
		
		/* Compose headers */
		$headers = "Return-Path: ".$siteTitle." <".$emailFrom.">\r\n"; 
		$headers .= "From: ".$siteTitle." <".$emailFrom.">\r\n";
		$headers .= "Content-Type: text/html; charset=".$emailCharset.";\n\n\r\n"; 

		/* Send Thank you Email */
		if($sendThankYou == TRUE){
			$userMessage = str_replace($doSearch,$doReplace,$emailSubject);
			//Send Thank you
			mail ($_POST['email'],$emailTitle,$userMessage,$headers);	
		}
		
		$adminMessage = str_replace($doSearch,$doReplace,$emailSubjectAdmin);
		
		/* Send Admin Emails */
		if(count($adminEmails) > 0){			
			foreach($adminEmails as $thisEmail){
				mail($thisEmail,$emailAdminTitle,$adminMessage,$headers);	
			}
		}

		$message = 'Ваш контакт було надіслано.';
		$_POST = NULL;
	}
}
if($message != NULL){
?>

<table width="100%"  border="0" cellpadding="5" cellspacing="0" bgcolor="#FF8080">
  <tr>
    <td bgcolor="#FFD5D5"><font color="#FF0000"><?=$message;?></font></td>
  </tr>
</table>
<br/>
<?php } ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="contact" id="contact" style="display:inline;">
<table width="100%"  border="0" align="left" cellpadding="5" cellspacing="0">
	<tr>
	  <td>Ім'я:</td>
		<td><input name="name" type="text" id="name" value="<?php echo $_POST['name'];?>"></td>
	</tr>
	<tr>
	  <td>Email:</td>
		<td><input name="email" type="text" id="email" value="<?php echo $_POST['email'];?>"></td>
	</tr>
<tr>
	  <td>Телефон:</td>
		<td><input name="telefon" type="text" id="telefon" value="<?php echo $_POST['telefon'];?>"></td>
	</tr>
	<tr>
	  <td>Виберіть тему звернення: </td>
		<td><select name="reason" id="reason" style="width:154px;">
		<?php if($_POST['reason'] == 'Support' || $_POST['reason'] == NULL){ $sel = ' selected';} else { $sel = NULL;} ?>
		<option value="Billing"<?=$sel;?>>Переклади</option>
		<?php if($_POST['reason'] == 'Complaints'){ $sel = ' selected';} else { $sel = NULL;} ?>
		<option value="Complaints"<?=$sel;?>>Вакансії</option>
		<?php if($_POST['reason'] == 'Other'){ $sel = ' selected';} else { $sel = NULL;} ?>
		<option value="Other<?=$sel;?>">Інше</option>
	  </select></td>
	</tr>
	<tr>	
	  <td>Ваш за коментар за необхідності:</td>
		<td><textarea name="messageText" cols="40" rows="4" id="messageText"><?php echo $_POST['messageText'];?></textarea></td>
	</tr>
	<?php
	if($mentalQuestion == TRUE)
	{
		$random = rand(0,count($mentalQuestionList)-1);
		$question = $mentalQuestionList[$random][0];
	?>
	<tr>
	  <td><?php echo $question;?></td>
		<td>		
		  <input name="finalAnswer" type="text" id="finalAnswer" value="<?php echo $_POST['finalAnswer'];?>" /></td>
	</tr>
	<?php
	}
	?>
	<tr>
		<td colspan="2"><div align="center">
		<input type="submit" name="Submit" value="Send Contact">
		<input type="hidden" id="question" name="question" value="<?php echo $question;?>">
		<input name="submitID" type="hidden" id="submitID" value="1">
		</div></td>
	</tr>
	
</table>     
</form>

