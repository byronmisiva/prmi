<%
If Request.Form("submit") <> "" Then
Set myMail=CreateObject("CDO.Message")
myMail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2 
myMail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserver") = "172.18.120.12"
myMail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
myMail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/smtpauthenticate") = cdoBasic
myMail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendusername") = "mail@primax.com.ec"
myMail.Configuration.Fields.Item("http://schemas.microsoft.com/cdo/configuration/sendpassword") = "pa$$w0rd"
myMail.Configuration.Fields.Update
myMail.Subject= Request.Form("esubject") & " " & Now() 'This is the subject of the e-mail
myMail.To= Request.Form("emaddress")'This is the e-mail address the e-mail will be delivered to
myMail.From="mail@primax.com.ec"
myMail.TextBody="Name: " & Request.Form("name") & vbnewline & "E-Mail Address: " & Request.Form("emaddress") & vbnewline & "Message: " & Request.Form("message") & vbnewline & "Enviado el: " & Now()
myMail.Send
set myMail=nothing
Response.Redirect("thankyou.asp")
End If
%>
<html>
<head>
<title>Contact Us</title>
</head>
<body>
Ojo: Esta Pagina solo puede enviar correos a usuarios de PRIMAX
<form method="POST" action="">
<p>
Name: <input type="text" name="name" size="20"><br>
E-mail Address: <input type="text" name="emaddress" size="20"><br>
Subject: <input type="text" name="esubject" size="20"><br>
Message: <input type="text" name="message" size="80">
</p>
<p>
<input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset" name="reset">
</p>
</form>
</body>
</html>