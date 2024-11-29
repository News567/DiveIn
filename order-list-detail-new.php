<?php
require_once("../db_project_connect.php");
// var_dump($row);
// echo $conn->error;

$id = $_GET["id"];

$sql = "SELECT order_list.*, product_order.*, product_order_detail.*, product.name as product_name
FROM order_list 
LEFT JOIN product_order ON order_list.product_order_id = product_order.id 
LEFT JOIN product_order_detail ON product_order.id = product_order_detail.order_id
LEFT JOIN product ON product_order_detail.product_id = product.id
WHERE order_list.id = 1;";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>訂單詳情</title>

    <?php include("./css.php") ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include("./sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

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
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
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
                                        $290.29 has been deposited into your account!
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
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="order.php" class="btn btn-outline-secondary me-3">
                            <i class="bi bi-arrow-left"></i> 返回
                        </a>
                        <h2 class="mb-0">訂單詳情 #<?= $row["id"] ?></h2>
                        <div class="d-flex gap-2 align-items-center">
                            <!-- 批次操作按鈕 -->

                        </div>
                    </div>
                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">商品管理系統</h1>
                    <a class="" href="create_product.php"><button class="btn btn-primary mb-2">新增商品</button></a> -->

                    <!-- DataTales Example -->
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">共計<?= $orderCount ?>樣商品</h6>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <small class="text-muted">訂單類型</small>
                                        <div class="mt-1">
                                            <?php if ($row["product_order_id"]): ?>
                                                <span class="badge bg-primary me-1">商品</span>
                                            <?php endif; ?>
                                            <?php if ($row["rent_order_id"]): ?>
                                                <span class="badge bg-info me-1">租借</span>
                                            <?php endif; ?>
                                            <?php if ($row["activity_order_id"]): ?>
                                                <span class="badge bg-success">課程</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <small class="text-muted">訂單日期</small>
                                        <p class="mt-1 mb-0"><?= $row["orderDate"] ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <small class="text-muted">總金額</small>
                                        <p class="mt-1 mb-0">NT$ <?= number_format($row["totalAmount"]) ?></p>
                                    </div>
                                    <div class="col-md-3">
                                        <small class="text-muted">訂單狀態</small>
                                        <div class="mt-1">
                                            <span class="badge bg-warning"><?= $row["status"] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 訂單詳情標籤 -->
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <?php if ($row["product_order_id"]): ?>
                                <li class="nav-item">
                                    <a class="nav-link active" id="product-tab" data-bs-toggle="tab" href="#product">
                                        商品訂單明細
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($row["rent_order_id"]): ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="rental-tab" data-bs-toggle="tab" href="#rental">
                                        租借訂單明細
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($row["activity_order_id"]): ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="activity-tab" data-bs-toggle="tab" href="#activity">
                                        課程訂單明細
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>

                        <!-- 標籤內容 -->
                        <div class="tab-content" id="myTabContent">
                            <?php if ($row["product_order_id"]): ?>
                                <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="product-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>商品名稱</th>
                                                        <th>單價</th>
                                                        <th>數量</th>
                                                        <th>小計</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $row["product_name"] ?></td>
                                                        <td>NT$ <?= number_format($row["price"]) ?></td>
                                                        <td><?= $row["quantity"] ?></td>
                                                        <td>NT$ <?= number_format($row["price"] * $row["quantity"]) ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($row["rent_order_id"]): ?>
                                <div class="tab-pane fade" id="rental" role="tabpanel" aria-labelledby="rental-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>租借品項</th>
                                                        <th>租借日期</th>
                                                        <th>歸還日期</th>
                                                        <th>租金</th>
                                                        <th>狀態</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $row["rent_item_name"] ?></td>
                                                        <td><?= $row["rent_start_date"] ?></td>
                                                        <td><?= $row["rent_end_date"] ?></td>
                                                        <td>NT$ <?= number_format($row["rent_price"]) ?></td>
                                                        <td><?= $row["rent_status"] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($row["activity_order_id"]): ?>
                                <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>課程名稱</th>
                                                        <th>上課日期</th>
                                                        <th>狀態</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $row["activity_name"] ?></td>
                                                        <td><?= $row["activity_date"] ?></td>
                                                        <td>
                                                            <span class="badge bg-info"><?= $row["status"] ?></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>
        <script>
            $(document).ready(function() {
                // 使用更精確的選擇器，確保能捕捉到事件
                $('body').on('change', '#dataTable tbody input[type="checkbox"]', function() {
                    console.log('Checkbox changed'); // 用於除錯
                    updateBatchActionVisibility();
                });
            });

            function updateBatchActionVisibility() {
                let checkedCount = $('#dataTable tbody input[type="checkbox"]:checked').length;
                console.log('Checked count:', checkedCount); // 用於除錯

                if (checkedCount > 0) {
                    $('.batch-actions').removeClass('d-none');
                } else {
                    $('.batch-actions').addClass('d-none');
                }
            }

            function batchDelete() {
                var selectedIds = [];

                $('#dataTable tbody input[type="checkbox"]:checked').each(function() {
                    var row = $(this).closest('tr');
                    var id = row.find('td:eq(1)').text(); // 假設 ID 在第二列
                    selectedIds.push(id);
                });

                if (selectedIds.length === 0) {
                    alert('請選擇要刪除的項目');
                    return;
                }

                if (confirm('確定要刪除選中的 ' + selectedIds.length + ' 個項目嗎？')) {
                    $.ajax({
                        url: 'batch_delete.php',
                        method: 'POST',
                        data: {
                            ids: selectedIds
                        },
                        success: function(response) {
                            if (response.success) {
                                location.reload();
                            } else {
                                alert('刪除失敗：' + response.message);
                            }
                        },
                        error: function() {
                            alert('刪除請求失敗，請稍後再試');
                        }
                    });
                }
            }
            //

            // 等待頁面完全載入後再初始化 tooltips
            document.addEventListener('DOMContentLoaded', function() {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })
            });

            document.getElementById('big_category').addEventListener('change', function() {
                const bigCategoryId = this.value;
                const smallCategorySelect = document.getElementById('small_category');
                const options = smallCategorySelect.getElementsByTagName('option');

                for (let option of options) {
                    if (option.value === '') continue; // 跳過"全部"選項

                    const bigCatId = option.getAttribute('data-big-category');
                    if (!bigCategoryId || bigCatId === bigCategoryId) {
                        option.style.display = '';
                    } else {
                        option.style.display = 'none';
                    }
                }

                // 重置小類別選擇
                smallCategorySelect.value = '';
            });

            function confirmDelete(id) {
                if (confirm('確定要刪除此商品嗎？')) {
                    // 使用 AJAX 發送刪除請求
                    fetch('delete_product.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                id: id
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'success') {
                                alert('商品已成功刪除！');
                                // 重新載入頁面或從 DOM 中移除該行
                                location.reload();
                            } else {
                                alert('刪除失敗：' + data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('刪除過程發生錯誤，請稍後再試。');
                        });
                }
            }
            // 新增 toggleStatus 函數
            function toggleStatus(id, currentStatus) {
                // 依照當前狀態決定下一個狀態
                let newStatus;
                switch (currentStatus) {
                    case '上架中':
                        newStatus = '下架中';
                        break;
                    case '下架中':
                        newStatus = '待上架';
                        break;
                    case '待上架':
                        newStatus = '上架中';
                        break;
                    default:
                        newStatus = '待上架';
                }

                fetch('update_product_status.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            id: id,
                            status: newStatus
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            location.reload();
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('更新狀態失敗');
                    });
            }
        </script>
</body>

</html>