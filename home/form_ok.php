<?php
$facility = $_POST['facility'];
$date = $_POST['date'];
$start_time = $_POST['start-time'];
$end_time = $_POST['end-time'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$group_type = $_POST['group-type'];
$purpose = $_POST['purpose'];
$other_inquiries = $_POST['other-inquiries'];
$confirm = $_POST['confirm'];
?>

<html lang="ko">
<head>
	<title>Form OK</title>
    <style>
	    p {
        margin-left: 5px;
      }
    </style>
</head>
<body>
  <h1>교내 체육시설 예약</h1>

  <h2>예약한 시설:</h2>
    <p>
      <?php
        switch ($facility) {
          case 1:
            echo "평봉필드";
            break;
          case 2:
            echo "히딩크드림필드";
            break;
          case 3:
            echo "테니스장";
            break;
          case 4:
            echo "농구장1";
            break;
          case 5:
            echo "농구장2";
            break;
          case 6:
            echo "농구장3";
            break;
          case 7:
            echo "농구장4";
            break;
          case 8:
            echo "탁구장";
            break;
        }
      ?>
    </p>

  <h2>날짜:</h2>
  <p><?php echo $date; ?></p>

  <h2>시작 시간:</h2>
  <p><?php echo $start_time; ?></p>

  <h2>종료 시간:</h2>
  <p><?php echo $end_time; ?></p>

  <h2>대표자 이름:</h2>
  <p><?php echo $name; ?></p>

	<h2>연락처:</h2>
	<p><?php echo $phone; ?></p>

  <h2>단체 종류:</h2>
  <p>
    <?php
      switch ($group_type) {
        case 1:
	        echo "개인";
	        break;
        case 2:
          echo "팀";
          break;
        case 3:
          echo "동아리";
          break;
        case 4:
          echo "학부";
          break;
        case 5:
          echo "기타";
          break;
      }
    ?>
  </p>

  <h2>이용 목적:</h2>
  <p><?php echo $purpose; ?></p>

  <h2>기타 문의사항:</h2>
  <p><?php echo $other_inquiries; ?></p>
</body>
</html>
