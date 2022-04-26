<?php $this->extend('/components/portal-frame'); ?>
<?php $this->section('content'); ?>
<div class="content-wrapper">
<div class="card bg-primary-light">
   <div class="card-header">
      <h4 class="card-title">create  Post</h4>
   </div>
</div>
<div class="row">
 <div class="col-12">
    <div class="box">
      <div class="box-header with-border">
         <h4 class="box-title">Post wizard</h4>
         <!--  alert box -->
         <div id="alert"></div>
      </div>
      
      <div class="box-body">
         <div class="row">
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">Post Title</label>
                  <input type="text" id="title" class="form-control">
               </div>
            </div>
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">Post Image</label>
                  <input type="file" name="cover" class="form-control">
               </div>
            </div>
            <div class="col-lg-4 col-12">
               <div class="form-group">
                  <label class="form-label">Post Category</label>
                  <select id="cartegory" class="form-control">
                     <option>Select Category</option>
                     <option>Category 1</option>
                     <option>Category 2</option>
                     <option>Category 3</option>
                     <option>Category 4</option>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="text-success form-label">content</label>
               <div class="form-group-feedback form-group-feedback-right">
                  <textarea id="content" name="content" ></textarea>
                  <div class="form-control-feedback text-success">
                     <i class="fa fa-check"></i>
                  </div>
               </div>
            </div>
            <button id="publish" class="btn btn-primary">Publish</button>
         </div>
      </div>
   </div>
</div>
</div>

<?php $this->endSection(); ?>
<?php $this->section('scripts'); ?>
<script>
    $("#publish").click(function (e) { 
        e.preventDefault();
        var title = $("#title").val();
        var content = CKEDITOR.instances.content.getData();
        var cartegory = $("#cartegory").val();
        var formData = new FormData();
        formData.append('title', title);
        formData.append('content', content);
        formData.append('cartegory', cartegory);
        formData.append('cover', $("input[name='cover']")[0].files[0]);
        if(content!='' && title !=''){
        $.ajax({
            url: '<?=base_url()?>/dashboard/blogCreate',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                $('#alert').html('<div class="alert text-center alert-success">Post published</div>');
                console.log(data);
            }
        });
    }else{
        $('#alert').html('<div class="alert text-center alert-danger">Please fill all fields</div>');
    }
        
        
    });
</script>
<script src="/src/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
<?php $this->endSection(); ?>
