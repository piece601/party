<link rel="stylesheet" href="<?=base_url('assets/css/circles.css')?>">
<div class="well text-center">
  <label for="">立即上傳</label>
  <div class="circles hidden">Loading...</div>
  <input id="immFile" class="form-control" type="file" name="userfile" />
  <p id="immText" class="hidden" style="margin: 30px 0 0">上傳中...</p>
</div>
<script type="text/javascript" src="<?=base_url('assets/js/ajaxfileupload.js')?>"></script>
<script type="text/javascript">
$(function(){
  $('#immFile').on('change', ajaxFileUpload);
  function ajaxFileUpload() {
      $("#immFile").toggleClass('hidden');
      $("#immText").toggleClass('hidden');
      $(".circles").toggleClass('hidden');
      $.ajaxFileUpload({
        url: '<?=base_url('welcome/immupload/')?>',
        secureuri: false,
        fileElementId: 'immFile', //這個是對應到 input file 的 ID
        dataType: 'text',
        success: function(data, status){
          if (data == '') {
            $("#immFile").toggleClass('hidden');
            $("#immText").toggleClass('hidden');
            $(".circles").toggleClass('hidden');
            alert('上傳失敗');
          } else {
            $("#immFile").toggleClass('hidden');
            $("#immText").toggleClass('hidden');
            $(".circles").toggleClass('hidden');
            var topString =  tinyMCE.activeEditor.getContent().substring(0, tinyMCE.activeEditor.getContent().search("</body>"));
            var bottomString = tinyMCE.activeEditor.getContent().substring(tinyMCE.activeEditor.getContent().search("</body>"), tinyMCE.activeEditor.getContent().length);
            var imgString = '<img src="'+ data +'" class="img-responsive">';
            tinyMCE.activeEditor.setContent( topString + imgString + bottomString);
            // console.log(tinyMCE.activeEditor.getContent()+data);
            // $('#immTarget').val(data);
          };
          $('#immFile').on('change', ajaxFileUpload);
        },
        error: function(data, status, e){
          alert('上傳失敗');
          $('#immFile').on('change', ajaxFileUpload);
        }
      });
  }
});
</script>