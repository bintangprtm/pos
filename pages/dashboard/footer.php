  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 <a href="#">BKSTECHPOS</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
  var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    $.widget.bridge('uibutton', $.ui.button);
  var modal = document.getElementById('modal-authority');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="dist/js/jquery.js"></script>
<script type="text/javascript">
  $(function(){
            $(document).on('click','#action_lihat_auth',function(e){
                e.preventDefault();
                $("#modal_lihat_auth").modal('show');
                $.post('authority.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $("#modal_lihat_detail_body").html(html);
                    }   
                );
            });
        });

$(function(){

   $('.push').click(function(){
      var essay_id = $(this).attr('id');

       $.ajax({
          type : 'post',
           url : 'authority.php', // in here you should put your query 
          data :  'post_id='+ essay_id, // here you pass your id via ajax .
                     // in php you should use $_POST['post_id'] to get this value 
       success : function(r)
           {
              // now you can show output in your modal 
              $('#modal-auth').show();  // put your modal id 
             $('.popupauth').show().html(r);
           }
    });


});

   });
   $(function(){

   $('.psh').click(function(){
      var essay_id = $(this).attr('id');

       $.ajax({
          type : 'post',
           url : 'terminaledit.php', // in here you should put your query 
          data :  'post_id='+ essay_id, // here you pass your id via ajax .
                     // in php you should use $_POST['post_id'] to get this value 
       success : function(r)
           {
              // now you can show output in your modal 
              $('#modal-terminal').show();  // put your modal id 
             $('.popupauth').show().html(r);
           }
    });


});

   });     


   $(function(){

   $('.sss').click(function(){
      var essay_id = $(this).attr('id');

       $.ajax({
          type : 'post',
           url : 'cart.php', // in here you should put your query 
          data :  'post_id='+ essay_id, // here you pass your id via ajax .
                     // in php you should use $_POST['post_id'] to get this value 
       success : function(r)
           {
              // now you can show output in your modal 
              $('#cart').show();  // put your modal id 
             $('.cartss').show().html(r);
           }
    });


});

   }); </script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="../frontend-new/assets/js/jquery.min.js"></script>
    <script src="../frontend-new/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
