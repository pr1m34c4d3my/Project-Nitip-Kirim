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
          <h4 class="section-title"><span>01</span>ARTIKEL TERBARU</h4>
        </div>
        <!-- end col-12 -->
        
        <div class="col-md-9">
          <div class="blog-post">
          <?php
          foreach ($list_artikel->result() as $la) {
            echo "  
            <figure class='post-image'> <span class='post-date'>".$la->date."</span> <img src='images/news-image1.jpg' alt='Image'></figure>
            <h3 class='post-title'>".$la->judul."</h3>
            <p class='post-text'>".$la->deskripsi_artikel."</p>
            <span class='post-link'>".anchor('news/detail/'.$la->artikel_id,'READ ALL')."</span><br> ";
          }
          ?>
          </div>
          <!-- end blog-post -->
          <ul class="pagination">
            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="ion-arrow-left-b"></i></span> </a> </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li ><a href="#">3 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li> <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="ion-arrow-right-b"></i></span> </a> </li>
          </ul>
        </div>
        <!-- end col-9 -->
        
        <?php $this->load->view('section/news-sidebar'); ?>
         
        <!-- end col-3 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=6281389369998&text=Halo%21%20saya%20ingin%20bertanya." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>