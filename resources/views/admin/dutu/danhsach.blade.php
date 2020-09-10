 <!-- Content Wrapper. Contains page content -->

	@extends('admin.layout.index')
	@section('content')
   <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <!-- thu nhe -->

        <div class="container">
 
 
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Nội dung form đăng nhập -->
        <div class="modal-content" style="width: 40%">
            <form action="#">
                <span class="close">&times;</span>
                <h2 id="tieude_add">Thêm nhóm mới</h2>
                <div class="fomrgroup">
                    <span>Mã nhóm:</span>
                    <input class="form-control" placeholder="Mã nhóm ..." disabled="" name="manhom">
                </div>
                <div class="fomrgroup">
                    <span>Tên nhóm:</span>
                    <input type="text" class="form-control" placeholder="Nhập tên nhóm ..." name="tennhom">
                </div>
                 </form>
                 <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Thêm nhóm</button>
                
                 </div>
           
        </div>
    </div>
</div>


        <!-- het thu --> 
        <div class="col-md-12" id="danhsach_nhom">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title" id="addnhom_title">Danh sách thành viên dự tu</h3>
              </div>
            
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5" >
                    <button type="button" class="btn btn-outline-primary fa fa-plus-square" id="myBtn">  Thêm thành viên</button>
                    <button type="button" class="btn btn-outline-warning fas fa-file-word" id="xxx">  Xuất file</button>
                  </div>
                  <div class="col-md-7" >
                    <div class="row">
                    <div class="form-group col-md-3">
                       <select  id="sl_xu" class="select2bs4" data-placeholder="  Giáo xứ" 
                          style="width: 100%;">
                         <option value="">Giáo xứ</option>
                         <option>Khe Gát</option>
                         <option>Đồng Trooc</option>
                         <option>Văn Hạnh</option>
                         <option>Trại Lê</option>
                         <option>Chân Thành</option>
                         <option>Kinh Nhuận</option>
                         <option>Sen Bàng</option>
                       </select>
                    </div>
                    <div class="form-group col-md-3">
                       <select id="sl_nhom" class="select2bs4" data-placeholder="  Nhóm sinh hoạt"
                          style="width: 100%;">
                         <option value="">Nhóm sinh hoạt</option>
                         <option>Vinh</option>
                         <option>Huế</option>
                         <option>Sài Gòn</option>
                         <option>Đà Nẵng</option>
                         <option>Hà Nội</option>
                       </select>
                    </div>
                    <div class="form-group col-md-3">
                       <select id="sl_nam" class="select2bs4" data-placeholder="  Năm sinh hoạt"
                          style="width: 100%;">
                         <option value="">Năm sinh hoạt</option>
                         <option>Năm 1</option>
                         <option>Năm 2</option>
                         <option>Năm 3</option>
                         <option>Đã hoàn thành</option>
                       </select>
                    </div>
                    <div class="form-group col-md-3">
                       <button type="button" id="loc" class="btn btn-primary"><i class='fas fa-filter'></i>   Lọc</button>
                    </div>
                    
                    </div>
                    
                  </div>
                </div>
               
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Mã</th>
                    <th>Tên thành viên(s)</th>
                    <th>Ngày sinh</th>
                    <th>Trường học</th>
                    <th>Ngành học</th>
                    <th>Giáo xứ</th>
                    <th>Năm dự tu</th>
                    <th>Nhóm</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td id="stt">1</td>
                    <td id="ma">1</td>
                    <td id="ten">Giuse Nguyễn Anh Tuấn</td>
                    <td id=ns>9/9/1996</td>
                    <td id="truong">Đại học Bôn Ba</td>
                    <td id="nganh">Công nghệ thông tin</td>
                    <td id="xu">Khe Gát</td>
                    <td id="nam">Năm 2</td>
                    <td id="nhom">Đà Nẵng</td>
                    <td id="trangthai"><small class="badge badge-primary">Đang sinh hoạt</small></td>
                    <td>
                      <i class="fa fa-eye" style="color:green; padding-right: 10%""></i>
                      <i class="fa fa-edit" style="color:blue; padding-right: 10%"></i>
                      <i class="fas fa-trash-alt" style="color:red"></i>
                    </td>
                  
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
        </div>
       </div>
      </div>
   </section>
  </div>
  <!-- /.content-wrapper -->
  <!-- /.content-wrapper -->
  @endsection