
<section class="sub-header">
    <h5 class="page-title">ARTIKEL</h5>
    <ul class="breadcrumb">
      <li><a href="index.html">Beranda</a></li>
      <li><span class="active">Artikel</span></li>
    </ul>
  </section>
  <!-- end sub-header -->
  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h4 class="section-title"><span>01</span>ARTIKEL</h4>
        </div>
        <!-- end col-12 -->
        <div class="col-md-9">
          <div class="blog-post">

          <?php
        echo "
        <figure class='post-image'> <span class='post-date'>".$artikel['date']."</span> 
        <img src=".base_url('images/') . 'news-image3.jpg'." alt='Image'>
        </figure>
        <h3 class='post-title'>".$artikel['judul']."</h3>
        <p class='post-text'>".$artikel['isi_artikel']."</p>
        <span class='post-link'>".anchor('news','BACK')."</span><br>
        ";
          ?>
        
            </div>
          <!-- end blog-post -->
          <h4 class="section-title"><span>02</span>WRITE A COMMENT</h4>
          <form>
          	<div class="form-group">
            	<label>Name</label>
                <input type="text">
            </div>
            <!-- end form-group -->
          	<div class="form-group">
            	<label>E-mail</label>
                <input type="text">
            </div>
            <!-- end form-group -->
          	<div class="form-group">
            	<label>Comment</label>
                <textarea rows="4" cols="50"></textarea>
            </div>
            <!-- end form-group -->
            <div class="form-group">
            	<button type="submit">SUBMIT</button>
            </div>
            <!-- end form-group -->
          </form>
        </div>
        <!-- end col-9 -->
        <?php $this->load->view('section/news-sidebar'); ?>
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end news -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=6281389369998&text=Halo%21%20saya%20ingin%20bertanya." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
