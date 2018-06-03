<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <?php if ($this->muniversal->get_account_by_login($this->session->userdata('ID'))->photo == NULL): ?>
        <img src="<?php echo base_url('assets/public/image/avatar.jpg') ?>" class="img-circle" alt="<?php echo strtoupper($this->muniversal->get_account_by_login($this->session->userdata('ID'))->nama) ?>">
        <?php else: ?>
        <img src="<?php echo base_url('assets/public/image/'.$this->muniversal->get_account_by_login($this->session->userdata('ID'))->photo) ?>" class="img-circle" alt="<?php echo strtoupper($this->muniversal->get_account_by_login($this->session->userdata('ID'))->nama) ?>">
        <?php endif ?>
        
      </div>
      <div class="pull-left info">
        <p><?php echo strtoupper($this->muniversal->get_account_by_login($this->session->userdata('ID'))->nama) ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->muniversal->get_account_by_login($this->session->userdata('ID'))->level; ?> </a>
      </div>
      <div style="margin-bottom: 40px;"></div>
    </div>

    <?php if ($this->muniversal->get_account_by_login($this->session->userdata('ID'))->level == 'Admin') : ?>
    <ul class="sidebar-menu">
      <li class="<?php echo active_link_method('index','home'); ?>">
        <a href="<?php  echo site_url('home') ?>">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
      </li>

      <li class="<?php echo active_link_method('index','pegawai').active_link_method('create','pegawai').active_link_method('update','pegawai'); ?>">
        <a href="<?php  echo site_url('pegawai') ?>">
          <i class="fa fa-home"></i> <span>Pegawai</span>
        </a>
      </li>
      <li class="<?php echo active_link_method('index','pekerjaan').active_link_method('create','pekerjaan').active_link_method('update','pekerjaan'); ?>">
        <a href="<?php  echo site_url('pekerjaan') ?>">
          <i class="fa fa-home"></i> <span>Pekerjaan</span>
        </a>
      </li>
      <li class="<?php echo active_link_method('index','Konteraktor').active_link_method('create','konteraktor').active_link_method('update','Konteraktor'); ?>">
        <a href="<?php  echo site_url('Konteraktor') ?>">
          <i class="fa fa-home"></i> <span>Kontraktor</span>
        </a>
      </li>
      <li class="treeview <?php echo active_link_multiple(array('pekerjaan_final')); ?>">
        <a href="#">
          <i class="fa fa-wrench"></i> <span> Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo active_link_controller('index','pekerjaan_final').active_link_controller('pekerjaan_final','create').active_link_controller('pekerjaan_final','update') ?>">
            <a href="<?php echo site_url('pekerjaan_final') ?>"><i class="fa fa-angle-double-right"></i>Pekerjaan Final</a>
          </li>
         
        </ul>
      </li>

      <li class="treeview <?php echo active_link_multiple(array('account','pengguna')); ?>">
        <a href="#">
          <i class="fa fa-wrench"></i> <span> Pengaturan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php echo active_link_controller('pengguna') ?>">
            <a href="<?php echo site_url('pengguna') ?>"><i class="fa fa-angle-double-right"></i> Pengguna Sistem</a>
          </li>
          <li class="<?php echo active_link_controller('account') ?>">
            <a href="<?php echo site_url('account') ?>"><i class="fa fa-angle-double-right"></i> Akun</a>
          </li>
        </ul>
      </li>
    </ul>
    <?php endif; ?>


  </section>
</aside>
<div class="content-wrapper">
  <section class="content-header">
    <?php
    /**
    * Generated Page Title
    *
    * @return stringsas
    **/
    echo $page_title;
    /**
    * Generate Breadcrumbs from library
    *
    * @var string
    **/
    ?>
  </section>
  <section class="content">
    <?php

    ?>