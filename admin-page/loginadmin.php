                                <!-- Validasi Login -->
                                <?php
								if(isset($_POST['AdminLogin'])) {
									include "koneksi.php";

									$adminid = mysqli_real_escape_string($conn, $_POST['adminid']);
									$password = mysqli_real_escape_string($conn, $_POST['password']);

									$login_query = "SELECT * FROM admin WHERE AdminId ='$adminid' AND AdminPassword='$password' LIMIT 1";
									$login_query_run = mysqli_query($conn, $login_query);

									// Seleksi Password
									if(mysqli_num_rows($login_query_run) > 0) {
										foreach($login_query_run as $data) {
                                            $admin_id = $data['AdminId'];
                                            $admin_name = $data['AdminName'];
                                            $admin_role = $data['AdminRole'];
                                            }
                                            $_SESSION['auth'] = true;
                                            $_SESSION['auth_role'] = "$admin_role";
                                            $_SESSION['auth_admin'] = [
                                                'admin_id' => $admin_id,
                                                'admin_name' => $admin_name,
                                                'admin_role' => $admin_role,
                                            ];

                                            if($_SESSION['auth_role'] == 'Super Admin') {
                                                $_SESSION['message'] = "Welcome to Super Admin Dashboard";
                                                header("Location: super-admin/index.php");
                                                exit(0);
                                            } else if($_SESSION['auth_role'] == 'Admin') {
                                                $_SESSION['message'] = "Welcome to Admin Dashboard";
                                                header("Location: admin/index.php");
                                                exit(0);
                                            }
                                        } else {
                                            echo "<script>alert('Username salah atau belum terdaftar');</script>";
                                        }

                                    }
                                ?>