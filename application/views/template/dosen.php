
        <!--Start Page Content-->
        <div id="page-content">
            <div class="row wrapper border-bottom white-bg dashboard-header">
                <div class="col-lg-10">
                    <h2>List Dosen</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url();?>">Home</a>
                        </li>
                        <li class="active">
                            <strong>List Dosen</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">    
                <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Tabel Dosen Teknik Informatika</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#">Config option 1</a>
                                            </li>
                                            <li><a href="#">Config option 2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                        <div class="hr-line-dashed"></div>
                                        <div class="form-group" id="data_4">
                                            <div class="row">
                                            <div class="col-md-3">
                                                
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox-content">

                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th class="col-lg-1">NIP</th>
                                    <th>Nama Dosen</th>
                                    <th>Aktivitas</th>
                                    <th>Jumlah SKS</th>
                                    <th>Update Aktivitas</th>                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>123</td>
                                    <td>Muhammad Syahroyni
                                    </td>
                                    <td>Mengajar<br>Penelitian</td>
                                    <td>23 SKS<br>5 SKS</td>
                                    <td class="center"><button class="btn btn-info " type="button" data-toggle="modal" data-target="#myModal4"><i class="fa fa-paste"></i> Update</button></td>
                                    
                                </tr>
                                <tr class="gradeX">
                                    <td>133</td>
                                    <td>Prabowo Rahmanto
                                    </td>
                                    <td>Penelitian</td>
                                    <td>10 SKS</td>
                                    <td class="center"><button class="btn btn-info " type="button" data-toggle="modal" data-target="#myModal4"><i class="fa fa-paste" ></i> Update</button></td>
                                    
                                </tr>
                                <tr class="gradeX">
                                    <td>143</td>
                                    <td>Nizar 
                                    </td>
                                    <td>Mengajar</td>
                                    <td>21 SKS</td>
                                    <td class="center"><button class="btn btn-info " type="button" data-toggle="modal" data-target="#myModal4"><i class="fa fa-paste" ></i> Update</button></td>
                                    
                                </tr>
                                
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>NIP Dosen</th>
                                    <th>Nama Dosen</th>
                                    <th>Aktivitas</th>
									<th>Jumlah SKS</th>
                                    <th>Update Aktivitas</th>
                                    
                                </tr>
                                </tfoot>
                                </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        </div>
                        
                


            </div>
            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content animated fadeIn">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-tasks modal-icon"></i>
                                            <h4 class="modal-title">Update Aktivitas Dosen</h4>
                                            <small>Update Aktivitas Dosen per Bulan</small>
                                            
                                            
                                        </div>
                                        <div class="modal-body">                                             
                                                        <div class="input-group m-b"><span class="input-group-addon">Mengajar</span><input type="text" class="form-control"></div>
                                                        <div class="input-group m-b"><span class="input-group-addon">Penelitian</span><input type="text"  class="form-control"></div>
                                                        <div class="input-group m-b"><span class="input-group-addon">Pengabdian</span><input type="text" class="form-control"></div>                                      
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

        </div>
        <!--End of Page Content-->
               