<DOCTYPE html>
    <html lang="en-US">
      <head>
      <meta charset="utf-8">
      </head>
      <body>
      <h2>مرحبا  {{$data['full_name']}}
تم اعادة ارسال هذا البريد بناء على طلبك بإعادة ارسال كود التفعيل في الموقع 
يرجى الضغط على الرابط في الاسفل لتفعيل حسابك لدى الموقع <br>
 </h3>
 <h3>اسمك الظاهر امام الاخرين </h3><p>{{$data['full_name']}}</p>

<h3>بريدك الالكتروني </h3><p>{{$data['email']}}</p>
<h3>يرجى الضغط على الرابط التالي لتفعيل حسابك</h3><p>{{$data['activation_link']}}</p>
</body>
 </html>