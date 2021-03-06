
<!-- Main Content -->
<div class="main-content">
   <section class="section">
     <div class="section-header">
       <h1><?=$title?></h1>
       <div class="section-header-breadcrumb">
         <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
         <div class="breadcrumb-item"><a href="#">Forms</a></div>
         <div class="breadcrumb-item">Editor</div>
       </div>
     </div
       <div class="section-body">
        <h2 class="section-title">Editor</h2>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Update Materi</h4>
              </div>
              <?php echo form_open_multipart(base_url('Administrator/editMateri/').$materi['id'], 'class="form-horizontal"');  ?>
              <div class="card-body ">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                  <div class="col-sm-12 col-md-6">
                    <input type="text" name="title" class="form-control" value="<?=$materi['title']?>">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                  <div class="col-sm-12 col-md-6">
                    <select name="category" class="form-control selectric" >
                      <?php if($materi['category'] == 'Trading'){?>
                      <option selected >Trading</option>
                      <option >Cryptocurrency</option>
                      <?php }else if($materi['category'] == 'Cryptocurrency'){ ?>
                        <option >Trading</option>
                        <option selected >Cryptocurrency</option>
                      <?php }; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                  <div class="col-sm-12 col-md-6">
                    <select name="status" class="form-control selectric" >
                    <?php if($materi['status'] == '1'){?>
                      <option selected value="1">Publish</option>
                      <option value="0">Draft</option>
                    <?php }else if($materi['status'] == '0'){ ?>
                      <option value="1">Publish</option>
                      <option selected value="0">Draft</option>
                    <?php }; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                  <div class="col-sm-12 col-md-6">
                    <input type="file" name="content" class="form-control" accept=".pdf">
                    <small class="text-danger">*kosongkan jika tidak diubah</small>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-6">
                    <button type="submit" name="submit" class="btn btn-primary">Done</button>
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
