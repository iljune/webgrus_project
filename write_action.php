<?php
                $connect = mysqli_connect("localhost", "root", "111111", "login_signin");

                $id = $_GET['name'];                      //Writer
                $pw = $_GET['pw'];                        //Password
                $title = $_GET['title'];
                $content = $_GET['content'];
                $date = date('Y-m-d H:i:s');

                $URL = './index3.php';

                $query = "insert into board2 (number,title, content, date, hit, id, password)
                        values(null,'$title', '$content', '$date',0, '$id', '$pw')";


                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }

                mysqli_close($connect);
?>
