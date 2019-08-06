<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>


<li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/Dashboard">
    <i class="fa fa-folder-open"></i> <span>Home</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/user">
    <i class="fa fa-folder-open"></i> <span>Manajemen 1</span>
    </a>
  </li>

  <li class="<?php if($this->uri->segment(2) == ""){echo "active";} ?> treeview">
    <a href="<?php echo base_url(); ?>admin/siswa">
    <i class="fa fa-book"></i> <span>Manajemen 2</span>
    </a>
  </li>

  <br>
</ul>

