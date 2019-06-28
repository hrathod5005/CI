<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4">Articles List
        <small></small>
      </h1>

      <!-- Blog Post -->
      <? if(count($articles)){ ?>
      <?php $count= $this->uri->segment(3,0); ?>
      <?php foreach($articles as $article){ ?>
      <div class="card mb-4">
        <img class="card-img-top" src="<?=$article->image_path?>"  height="auto" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title"><?= anchor("user/article/{$article->id}",$article->title) ?></h2>
          <p class="card-text"><?=$article->body?></p>
          <a href="<?=PATH?>article/<?=$article->id?>" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Posted on <?= date('d M Y', strtotime($article->created_at)) ?> by
          <a href="#">Admin</a>
        </div>
      </div>
      <?php } ?>
      <? } ?>
        <!-- <tr>
          <td colspan="3"> No Records Found.</td>
        </tr> -->     

      <!-- Blog Post -->
      

      <!-- Blog Post -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <?= form_open('user/search',['class'=>'navbar-form navbar-left','role'=>'search']); ?>
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">Go!</button>
            </span>
            <?= form_close(); ?>
          </div>
          <?= form_error('query',"<br><p class='navbar-text text-danger'>",'</p>') ?>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Use full Links</h5>
        <div class="card-body">
          <div class="row">
            <!-- <div class="col-lg-6"> -->
              <ul class="list-unstyled mb-0">
               <marquee class="maq" behavior="scroll" direction="up" scrollamount="3" onmouseover="this.stop();" "="" onmouseout="this.start();">
        <a href="">Stack Over Flow</a>
        <br>
        <a href="">Code Project</a>
        <br>
        <a href="">C# code</a>
        <br>
        
      </marquee>

              </ul>
            <!-- </div> -->
            <!-- <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">JavaScript</a>
                </li>
                <li>
                  <a href="#">CSS</a>
                </li>
                <li>
                  <a href="#">Tutorials</a>
                </li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>