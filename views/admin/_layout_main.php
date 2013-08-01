<?php  $this->load->view('admin/components/page_head');     ?>
  <body>
      <div class="navbar navbar-static-top navbar-inverse">
          <div class="navbar-inner">
              <a class="brand" href="<?php echo base_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
              <ul class="nav">
                  <li class="active"><a href="<?php echo base_url('admin/dashboard'); ?>">Dashboard</a></li>
                  <li><?php anchor('admin/pages'); ?></li>
                  <li><?php anchor('admin/users'); ?></li>
                  
              </ul>
          </div>
      </div>
      
<div class="container">
    <!-- Main content -->
    <div class="row">
    <div class="span9">
        <section>
            <h2>Page Name</h2>
        
        </section>
        
    </div>
    <!-- Sidebar -->
    <div class="span3">
        <section>
            <?php echo mailto('supercres@gmail.com', '<i class="icon-user"></i>supercres@gmail.com'); ?></br>
            <?php echo anchor('admin/user/logout', '<i class="icon-off"></i>Logout'); ?>
        </section>
        
    </div>
    </div>
</div>

<?php  $this->load->view('admin/components/page_tail'); ?>