<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>三河八橋駅前校</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="header">
    <div class="header-left">三河八橋駅前校</div>
    <div class="header-right">
      <ul>
        <li></li>
        <li></li>
        <li class="selected"></li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">レポートの送信ありがとうございました。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 先生名</div>
      <?php echo $_POST['teacher']; ?>

      <div class="form-item">■ 生徒名</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ レポートの種類</div>
      <!-- この下でcategoryを受け取りechoしましょう -->
      <?php echo $_POST['category']; ?>
      
      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>

  
</body>
</html>
