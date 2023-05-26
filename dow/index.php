<?php
include("conn.php");
$sql = "SELECT * FROM IT.dbo.stock WHERE id = 1";
$result = sqlsrv_query($conn, $sql);

if ($result === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Repair Sak</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../zum/img/sak.png">
    <script src="../PJservice/js-1/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="img/sak.png" alt="" width="32%">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="from_repair.html">
                    <i class="fas fa-fw fa-clipboard""></i>
                    <span>Repair Service</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="404.html" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Equipment type </span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Type :</h6>
                        <a class="collapse-item" href="404.html">PC</a>
                        <a class="collapse-item" href="404.html">Printer</a>
                        <a class="collapse-item" href="404.html">Monitor</a>
                        <a class="collapse-item" href="404.html">UPS</a>
                        <a class="collapse-item" href="404.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- test-->
                        
                        <!-- test-->
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Status
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-stopwatch text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">รอการอนุมัติ</span>
                                        <span class="badge badge-danger badge-counter">3+</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        <span class="font-weight-bold">กำลังดำเนินการซ่อม</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        <span class="font-weight-bold">อยู่ในระหว่างการส่งคืน</span>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        
                        <div class="topbar-divider d-none d-sm-block"></div>
            
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Status User</span>
                                <img class="img-profile rounded-circle"
                                    src="img/sak.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                                    <!-- from repair-->
                                    <div class="container-fluid py-5 h-160">
                                        <div class="row d-flex justify-content-center align-items-center h-150">
                                            <div class="col">
                                                <div class="card card-registration">
                                                    <div class="row g-0">
                                                            <d iv class="card-body p-md-5 text-black">
                                                                <h3 class="mb-5 text-uppercase">รายละเอียดอุปกรณ์</h3>
                                                                <div class="row">
                                                                    <div class="col-md-3 mb-4">
                                                                        <select class="form-select" required>
                                                                            <option value="0">ประเภทอุปกรณ์</option>
                                                                            <option value="1">PC</option>
                                                                            <option value="2">Monitor</option>
                                                                            <option value="3">Printer</option>
                                                                            <option value="4">UPS</option>
        
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label" for="form3Example1m">เลขที่สินทรัพย์</label>
                                                                                <input type="text" id="form3Example1m" class="form-control form-control-lg" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label" for="form3Example1n">รหัสสาขา</label>
                                                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label" for="form3Example1n">หมายเลขซีเรียล</label>
                                                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
        
                                                                    <div class="row">
                                                                        <div class="col-md-3 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label" for="form3Example1n">ยี่ห้ออุปกรณ์</label>
                                                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" value="<?php echo $sql['brand'];?>" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label" for="form3Example1n">รุ่น</label>
                                                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
        
                                                                    <div class="col-md-5 mb-4">
                                                                        <div class="form-outline">
                                                                            <label class="form-label" for="form3Example8">สเปคของอุปกรณ์ <small style="color: red;">(*กรุณาเเจ้งให้ระเอียด*)</small></label>
                                                                            <textarea name="Address" id="" cols="100" rows="5" class="form-control form-control-lg"></textarea>
                                                                        </div>
                                                                    </div>
        
                                                                    <div class="row">
                                                                        <div class="col-sm-2 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label" for="form3Example1n">การรับประกัน</label>
                                                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label" for="form3Example1n">ปีที่สิ้นสุดประกัน</label>
                                                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2 mb-4">
                                                                            <div class="form-outline">
                                                                                <label class="form-label" for="form3Example1n">ราคา</label>
                                                                                <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                                                        <label class="form-check-label" for="inlineRadio1">อุปกรณ์เก่า</label>
                                                                      </div>
                                                                      <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                                                                        <label class="form-check-label" for="inlineRadio2">อุปกรณ์ใหม่</label>
                                                                    </div>
                                                                    <p>&nbsp;</p>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-5">
                                                                            <label for="Image" class="form-label">เเนบรูปภาพ</label>
                                                                            <input class="form-control" type="file" id="formFile" onchange="preview()">
                                                                        </div>
                                                                    <img id="frame" src="" class="img-fluid" width="50%" />
                                                                    </div>
                                                            
                                                                    <script>
                                                                        function preview() {
                                                                            frame.src = URL.createObjectURL(event.target.files[0]);
                                                                        }
                                                                        function clearImage() {
                                                                            document.getElementById('formFile').value = null;
                                                                            frame.src = "";
                                                                        }
                                                                    </script>
                                                                    
                                                                    <!-- NO JS ADDED YET -->
                                                                      
                                            
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>