<?php
    ob_start();
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Thông tin thanh toán</title>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('assets/bootstrap.min.css')}}" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="{{asset('assets/jumbotron-narrow.css')}}" rel="stylesheet">
        <script src="{{asset('assets/jquery-1.11.3.min.js')}}"></script>
    </head>
    <body>
{{--/*--}}
{{-- * IPN URL: Ghi nhận kết quả thanh toán từ VNPAY--}}
{{-- * Các bước thực hiện:--}}
{{-- * Kiểm tra checksum--}}
{{-- * Tìm giao dịch trong database--}}
{{-- * Kiểm tra tình trạng của giao dịch trước khi cập nhật--}}
{{-- * Cập nhật kết quả vào Database--}}
{{-- * Trả kết quả ghi nhận lại cho VNPAY--}}
{{-- */--}}
<?php
 $vnp_TmnCode = "Y4U88XFK"; //Mã website tại VNPAY
        $vnp_HashSecret = "DTHXNFNBUMNKFKQOZVHTXUXNUQUUXMTV"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/return";
        $inputData = array();
        $returnData = array();
        $data = $_REQUEST;
        foreach ($data as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i = 1;
            }
        }
        $vnpTranId = $inputData['vnp_TransactionNo']; //Mã giao dịch tại VNPAY
        $vnp_BankCode = $inputData['vnp_BankCode']; //Ngân hàng thanh toán
        //$secureHash = md5($vnp_HashSecret . $hashData);
        $secureHash = hash('sha256',$vnp_HashSecret . $hashData);
        $Status = 0;
        $orderId = $inputData['vnp_TxnRef'];

        try {
            //Check Orderid
            //Kiểm tra checksum của dữ liệu
            if ($secureHash == $vnp_SecureHash) {
                //Lấy thông tin đơn hàng lưu trong Database và kiểm tra trạng thái của đơn hàng, mã đơn hàng là: $orderId
                //Việc kiểm tra trạng thái của đơn hàng giúp hệ thống không xử lý trùng lặp, xử lý nhiều lần một giao dịch
                //Giả sử: $order = mysqli_fetch_assoc($result);
                $order = NULL;
                if ($order != NULL) {
                    if ($order["Status"] != NULL && $order["Status"] == 0) {
                        if ($inputData['vnp_ResponseCode'] == '00') {
                            $Status = 1;
                        } else {
                            $Status = 2;
                        }
                        //Cài đặt Code cập nhật kết quả thanh toán, tình trạng đơn hàng vào DB
                        //
                        //
                        //
                        //Trả kết quả về cho VNPAY: Website TMĐT ghi nhận yêu cầu thành công
                        $returnData['RspCode'] = '00';
                        $returnData['Message'] = 'Confirm Success';
                    } else {
                        $returnData['RspCode'] = '02';
                        $returnData['Message'] = 'Order already confirmed';
                    }
                } else {
                    $returnData['RspCode'] = '01';
                    $returnData['Message'] = 'Order not found';
                }
            } else {
                $returnData['RspCode'] = '97';
                $returnData['Message'] = 'Chu ky khong hop le';
            }
        } catch (Exception $e) {
            $returnData['RspCode'] = '99';
            $returnData['Message'] = 'Unknow error';
        }
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        unset($inputData['vnp_SecureHashType']);
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . $key . "=" . $value;
            } else {
                $hashData = $hashData . $key . "=" . $value;
                $i = 1;
            }
        }

        //$secureHash = md5($vnp_HashSecret . $hashData);
		$secureHash = hash('sha256',$vnp_HashSecret . $hashData);
        ?>
        <!--ket noi db -->
        <?php
        $hn ="localhost";
        $db = "ocean_hotel";
        $username = "root";
        $password = "";
        $conn = new mysqli($hn, $username, $password,$db);
        ?>

        <!--Begin display -->

{{--        <div class="container">--}}
{{--            <div class="header clearfix">--}}
{{--                <h3 class="text-muted">Thông tin đơn hàng</h3>--}}
{{--            </div>--}}
<div class="container">
    <header>
        <h1>Information of Guest</h1>
        <address>
            <p>OCEAN HOTEL,</p>
            <p>Pham Van Dong Road,<br>Cau Giay,<br>Ha Noi</p>
            <p>(+94) 961 503 893</p>
        </address>
        <span style="font-size: 50px;color: black;font-weight:bold;margin-top:30px">HOTEL</span>
        <span style="font-size: 50px;color: #eeee0d;font-weight:bold;margin-top: 30px">OCEAN</span>
    </header>
            <div class="table-responsive ">
                <form action="{{route('return')}}" id="#" method="get">
                    @csrf
                    <div class="form-group">
                        <label >Mã đơn hàng:</label>

                        <label><?php echo $_GET['vnp_TxnRef'] ?></label>
                    </div>
                    <div class="form-group">

                        <label >Số tiền:</label>
                        <label><?=number_format($_GET['vnp_Amount']/100) ?> VNĐ</label>
                    </div>
                    <div class="form-group">
                        <label >Nội dung thanh toán:</label>
                        <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
                    </div>
                    <div class="form-group">
                        <label >Mã phản hồi (vnp_ResponseCode):</label>
                        <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
                    </div>
                    <div class="form-group">
                        <label >Mã GD Tại VNPAY:</label>
                        <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
                    </div>
                    <div class="form-group">
                        <label >Mã Ngân hàng:</label>
                        <label><?php echo $_GET['vnp_BankCode'] ?></label>
                    </div>
                    <div class="form-group">
                        <label >Thời gian thanh toán:</label>
                        <label><?php echo $_GET['vnp_PayDate'] ?></label>
                    </div>

                    <div class="form-group">
                        <label >Kết quả:</label>
                        <label>


                        <?php
                        if ($secureHash == $vnp_SecureHash) {
                            if ($_GET['vnp_ResponseCode'] == '00') {
                                $order_id = $_GET['vnp_TxnRef'];
                                $money = $_GET['vnp_Amount']/100;
                                $note = $_GET['vnp_OrderInfo'];
                                $vnp_response_code = $_GET['vnp_ResponseCode'];
                                $code_vnpay = $_GET['vnp_TransactionNo'];
                                $code_bank = $_GET['vnp_BankCode'];
                                $time = $_GET['vnp_PayDate'];
                                $date_time = substr($time, 0, 4) . '-' . substr($time, 4, 2) . '-' . substr($time, 6, 2) . ' ' . substr($time, 8, 2) . ' ' . substr($time, 10, 2) . ' ' . substr($time, 12, 2);
                                //include("../code/modules/kndatabase.php");
                               // $taikhoan = $_SESSION['tk'];
                                $sql = "SELECT * FROM payments WHERE order_id = '$order_id'";
                                $query = mysqli_query($conn, $sql);
                                $row = mysqli_num_rows($query);

                                if ($row > 0) {
                                    $sql = "UPDATE payments SET order_id = '$order_id', money = '$money', note = '$note', vnp_response_code = '$vnp_response_code', code_vnpay = '$code_vnpay', code_bank = '$code_bank' WHERE order_id = '$order_id'";

                                    mysqli_query($conn, $sql);
                                } else {
                                    $sql = "INSERT INTO payments(order_id, money, note, vnp_response_code, code_vnpay, code_bank, time) VALUES ('$order_id', '$money', '$note', '$vnp_response_code', '$code_vnpay', '$code_bank','$date_time')";
                                    mysqli_query($conn, $sql);
                                }

                                echo "GD Thanh cong";
                            } else {
                                echo "GD Khong thanh cong";
                            }
                        } else {
                            echo "Chu ky khong hop le";
                        }
                        ?>

                    </label>
                        <br>
                        <br>
                        <a href="http://127.0.0.1:8000/">Quay Lại</a>
                    </div>

                </form>
            </div>

</div>


    </body>
</html>
