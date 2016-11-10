<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Mật khẩu mới</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
	<body style="margin:0;padding:0;">
	<center>
	  <table width="600" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;font-size:14px; color: #666666;font-family: arial;text-align: justify;line-height: 18px;">
			<tr>
				<td width="600" height="140" style="font-size: 0;" colspan='3'></td>
			</tr>
			<tr>
				<td width="50"></td>
				<td width="500">
					<p style="padding: 0;margin: 0;font-size: 14px; color: #666666; font-family: arial;">Chào bạn,</p>
					<p style="padding: 0;margin: 0;font-size: 14px; color: #666666; margin-top: 3px; font-family: arial;">Bạn đã gửi yêu cầu nhận lại mật khẩu với Email là :</p>
					<p style="padding: 0;margin: 0;font-size: 14px; color: #1c912f !important; margin-top: 13px; font-family: arial; text-align: center;"><?=(!empty($email))?$email:''?></p>
					<p style="padding: 0;margin: 0;font-size: 14px; margin-top: 22px; color: #666666; font-family: arial;">Hãy copy link dưới đây</p>
					<p style="padding: 0;margin: 0;font-size: 14px; color: #1c912f; margin-top: 24px; font-family: arial; text-align: justify;"><a href="<?=(!empty($link_active))?$link_active:''?>" target="_blank" style="color: #1c912f!important;">
					<?=(!empty($link_active))?$link_active:''?>
					</a></p>
					<p style="padding: 0;margin: 0;font-size: 14px; color: #666666; font-family: arial; margin-top: 24px;">và dán nó vào thanh điạ chỉ trong browser của bạn.</p>
					<p style="padding: 0;margin: 0;font-size: 14px; color: #666666; font-family: arial; margin-top: 24px;">Cám ơn bạn.</p>
				</td>
				<td width="50"></td>
			</tr>
			<tr>
				<td colspan='3' height='16'>&nbsp;</td>
			</tr>
		</table>
	</center>
	</body>
</html>