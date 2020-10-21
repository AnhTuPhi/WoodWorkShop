<?php
    session_start();
    $errors = array();
    $conn = new mysqli("localhost", "root","", "reg") or die($conn);
    
    if(isset($_POST['register'])){
        //lấy thông tin từ các form bằng phương thức POST
        $username = $_POST["username"];
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = $_POST["pass"];
        $permision = $_POST["permision"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == ""|| $permision == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO users(username, password, fullname, email, createdate, permision) VALUES ( '$username', '$password', '$name', '$email', now(), '$permision')";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
            echo "chúc mừng bạn đã đăng ký thành công";
            header('Location: login.php');
		}
    
    }
    if(isset($_POST['login'])){
        // lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: user.php');
		}
	}
    }
    if (isset($_POST["save"])) {
            //lấy thông tin từ các form bằng phương thức POST
            $fulname = $_POST["fullname"];
            $email = $_POST["email"];
            $number = $_POST["number"];
            $address = $_POST["address"];
            $userId = $_SESSION["user_id"];
            // Viết câu lệnh cập nhật thông tin người dùng
            $sql = "UPDATE users SET fullname = '$fulname', email = '$email', number = '$number',address = '$address' WHERE id=$userId";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            mysqli_query($conn,$sql);
            echo "Changing infomation success !";
            header('Location: user.php');
    }
    if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$title = $_POST["title"];
        $content = $_POST["post_content"];
        $image_post = $_POST["image"];
		$is_public = 0;
		if (isset($_POST["is_public"])) {
			$is_public = $_POST["is_public"];
		}
		
		$user_id = $_SESSION["user_id"];

		$sql = "INSERT INTO posts(title, content, image, id, is_public, createdate, updatedate ) VALUES ( '$title', '$content', '$image_post','$user_id', '$is_public', now(), now())";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		echo "Bài viết đã thêm thành công";
	}
	
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
    $conn->close();
?>