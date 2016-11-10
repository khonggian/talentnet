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
				<td style="margin:0;padding:0;font-size:0;padding:13px 68px 34px 50px;" valign="top">
					<p style="font-size:18px;padding:0 0 10px 0;">Chào bạn <?=(!empty($fullname))?$fullname:''?>,</p>
					<p style="font-size:18px;padding:0 0 10px 0;">Talentnet xin gửi mật khẩu mới cho bạn <strong style="color:#EE1C25"><?=(!empty($password))?$password:''?></strong></p>
				</td>
			</tr>
			<tr>
				<td colspan='3' height='16'>&nbsp;</td>
			</tr>
		</table>
	</center>
	</body>
</html>