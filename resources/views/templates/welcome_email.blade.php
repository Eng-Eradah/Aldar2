<DOCTYPE html>
    <html lang="en-US">
      <head>
      <meta charset="utf-8">
      </head>
      <body>
      <h2>مرحبا  {{$data['name']}}, لقد سعدنا جدا بانضمامك لعائلتنا في الدار  العربية  تجد في هذا الايميل بيانات دخولك على الموقع نأمل بأن تجد معنا ما تحبث عنه <br>
 </h3>
 <h3>اسمك الظاهر امام الاخرين </h3><p>{{$data['name']}}</p>

 <h3>بريدك الالكتروني </h3><p>{{$data['email']}}</p>
 <h3>كلمة المرور الخاصة بك : </h3><p>{{$data['password']}}</p>
@if(isset($data['activation_link']))<h3>يرجى الضغط على الرابط التالي لتفعيل حسابك</h3><p>{{$data['activation_link']}}</p>@endif
@if(isset($data['admin_link']))<h3>يرجى الضغط على الرابط التالي لدخول لوحة التحكم</h3><p>{{$data['admin_link']}}</p>
@endif 
</body>
 </html>