<section id="profile" style="min-height: 560px">
      <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="profile-content">
              
                  
                
                <div class="img-avatar-content">
                  <!-- get id user -->
                  <input id="id-user" value=""  type="hidden">
                  <div class="frame-avatar" id="frame-avatar">
                    <img class="img-avatar" id="img-avatar" src="<?= base_url() ?>images/user-default-icon.png" style="height: 100%; width: auto;">
                    <span class="glyphicon glyphicon-cloud"></span>
                  </div>
                  <p style="text-align: center;"></p>
                  <ul class="profile-menu" style="text-decoration: none; list-style: none; margin: 0;padding: 0;">
                    <li  class="profile-menu-item active"><a href="#" style="text-decoration: none; ">Thông tin cá nhân</a></li>
                    <li class="profile-menu-item "><a href="#">Tiến trình học tập</a></li>
                    <li class="profile-menu-item "><a href="#">Bài kiểm tra</a></li>
                    <li class="profile-menu-item  "><a href="#">Lịch sử giao dịch</a></li>

                    <li class="profile-menu-item"><a href="<?php echo base_url('Home/logout'); ?>">Đăng xuất</a></li>
                  </ul>

                </div>
               
              </div>
            </div>
            <div class="col-md-9">
              <div class="profile-main">
                <div class="profile-main-header row">
                    <div class="col-md-4 ">
                      <span style="font-size: larger;
                      font-family: 'Roboto';"> Thông tin tài khoản</span>
                    </div>
                    <div class="col-md-8 float-right text-primary text-right">
                      <span class="main-header-item active" id="profile-info">Chi tiết</span> &nbsp;
                      <span class="main-header-item" id="profile-pass">Đổi mật khẩu</span>
                    </div>
                </div>
                <hr style="margin: 0;">
                    <div class="profile-main-content">
                      <form id="change-info-form" action="#" method="post" style="display: block;">
                     
                          
                      
                        <input name="id" value="" type="hidden">
                        <div class="form-group row">
                          <div class="col-md-6">
                            <label> Username </label>
                            <input class="form-control" disabled="" name="email" type="text" value="<?= $this->session->userdata('user'); ?>">
                          </div>
                        </div>
                       
                        <div class="form-group row">
                          <div class="col-md-6">
                            <label> Phone Number </label>
                            <input class="form-control" maxlength="100" name="phone" type="number" value="0906567269" required="">
                          </div>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary solid btn-update">Cập nhật</button>
                        </div>
                      </form>


                      <form action="#" id="change-password-form" method="post" style="display: none;">
                        <input name="id" value="290880" type="hidden">
                        <div class="form-group row">
                          <div class="col-md-6">
                            <label> Mật khẩu hiện tại </label>
                            <input class="form-control" maxlength="100" name="password" type="password" required="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-6">
                            <label class="control-label">Mật khẩu mới</label>
                            <input class="form-control" maxlength="30" name="new_password" type="password" autocomplete="off">
                          </div>
                          <div class="col-md-6">
                            <label>Nhập lại mật khẩu mới</label>
                            <input class="form-control" maxlength="30" name="re_password" type="password" autocomplete="off">
                          </div>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary solid btn-update">Cập nhật</button>
                        </div>
                      </form>
                    </div>
                  

              </div>

            </div>
          </div>
      </div>    
    </section>
 