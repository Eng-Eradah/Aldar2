
<!--Footer-->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                {{ __('system.law') }}© 2022  <a href="#" class="fs-14 text-black">{{ __('system.logo') }}</a>
            </div>
        </div>
    </div>
</footer>
<!--/Footer-->
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fa fa-long-arrow-up"></i></a>

<!-- JQuery js-->
<script src="{{asset('admin/js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('admin/plugins/bootstrap-4.3.1/js/popper.min.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{asset('admin/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- Data tables -->
<script src="{{asset('admin/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/datatable.js')}}"></script>

<!-- Custom scroll bar Js-->
<script src="{{asset('admin/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!--Select2 js -->
<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>


<!-- Inline js -->
<script src="{{asset('admin/js/select2.js')}}"></script>
<script src="{{asset('admin/js/formelements.js')}}"></script>

<!-- file uploads js -->
<script src="{{asset('admin/plugins/fileuploads/js/fileupload.js')}}"></script>


<!-- Custom scroll bar Js-->
<script src="{{asset('admin/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- Custom Js-->
<script src="{{asset('admin/js/admin-custom.js')}}"></script>


<script src="{{asset('admin/js/jquery.form.js')}}"></script>

<!-- WYSIWYG Editor js -->
<script src="{{asset('admin/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{asset('admin/js/formeditor.js')}}"></script>
<script src="{{asset('admin/js/gallery.js')}}"></script>
<script src="{{asset('admin/js/gallery-1.js')}}"></script>

<script>


    $(document).ready(function(){
        $('.select').select2();
    });
 

</script>
 
<script>
  function changevid(){
      $type=	$('#vidType').val();
      console.log($type);
      if($type==0){
          $('#link').css('display','none');
          $('#linkSpan').css('color','#2e384d');
          $('#source').css('display','block');
          $('#sourcSpan').css('color','#8bc7c7');
      }
      else{
          $('#source').css('display','none');
          $('#link').css('display','block');
          $('#linkSpan').css('color','#8bc7c7');
          $('#sourcSpan').css('color','#2e384d');
          
      }

  }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('/admin/dist/aksFileUpload.min.js')}}"></script>
<script>
$(function () {
  $("aks-file-upload").aksFileUpload({
   
    dragDrop: true,
    maxSize: "90 GB",
    multiple: true,
    maxFile: 50
  });
});
</script>
</body>
</html>
