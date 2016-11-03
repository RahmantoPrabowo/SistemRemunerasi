<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url('assets');?>/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administrator</strong>
                             </span> <span class="text-muted text-xs block">Operator<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+t
                        </div>
                    </li>
                    <li id="home" class="active">
                        <a href="http://localhost/sistemremunerasi"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>                        
                    </li>
                    <li id="riwayat">
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Riwayat</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo site_url('maincontroler/riwayatgolongan');?>">Riwayat Golongan</a></li>
                            <li><a href="<?php echo site_url('maincontroler/riwayatpendidikan');?>">Riwayat Pendidikan</a></li>
                            <li><a href="<?php echo site_url('maincontroler/riwayatfungsional');?>">Riwayat Jabatan Fungsional</a></li>
                            <li><a href="<?php echo site_url('maincontroler/riwayatstruktural');?>">Riwayat Jabatan Struktural</a></li>
                        </ul>
                    </li>
                    <li id="kegiatan">
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Kegiatan Dosen</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo site_url('maincontroler/riwayatkegiatan');?>">Riwayat Kegiatan</a></li>
                            <li><a href="<?php echo site_url('maincontroler/rekapitulasikegiatan');?>">Rekapulasi Kegiatan</a></li>
                            
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>