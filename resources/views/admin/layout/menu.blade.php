 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">

                    <ul class="nav l-inline ov" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <a href="admin/theloai/danhsach"><img width="20px" height="20px" src="upload/tintuc/theloai.jpg"> Loại tour<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/theloai/danhsach">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/theloai/them">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/loaitin/danhsach"><img width="20px" height="20px" src="upload/tintuc/loaitin.jpg"> Tour<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/loaitin/danhsach">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/loaitin/them">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/tintuc/danhsach"><img width="20px" height="20px" src="upload/tintuc/tintuc5.jpg"> Địa Điểm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/tintuc/danhsach">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/tintuc/them">Thêm</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/slide/danhsach"><img width="20px" height="20px" src="upload/tintuc/slide.jpg"> Tỉnh<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/slide/danhsach">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/slide/them">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="admin/user/danhsach"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('users.index') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin/register">Thêm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
