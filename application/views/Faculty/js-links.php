<!--/#app -->
<script src="<?php echo base_url();?>assets/admin/js/app.js"></script>




<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
        	height: 200,
        });
    });
  </script>
<script>
	$("#department").on("change",function () {
		var did = $("#department").val();
		$.ajax({
			url:"<?php echo base_url('Institute/Classes/all_class_by_department'); ?>",
			type:"post",
			data : {
					did : did
			},
			success:function (response) {
					$("#class option").each(function () {
						if( $(this).val() != 0 ){
							$(this).remove();
						}
					});
				$("#class").append(response)
			}

		})
	})
</script>

</body>
</html>
