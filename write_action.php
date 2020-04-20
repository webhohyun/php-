<!DOCTYPE html>
<html lang="ko" dir="ltr">

<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="layout.css">
        <title>게시판</title>
</head>

<body>
<?php
                $connect = mysqli_connect('localhost', 'hohyun', 'cdr!56rkdcdr', 'hohyun') or die ("connect fail");

                $id = $_GET[name];                      //Writer
                $pw = $_GET[pw];                        //Password
                $title = $_GET[title];                  //Title
                $content = $_GET[content];              //Content
                $date = date('Y-m-d H:i:s');            //Date

                $URL = './index.html';                   //return URL


                $query = "insert into board (number,title, content, date, hit, id, password)
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
</body>

</html>
