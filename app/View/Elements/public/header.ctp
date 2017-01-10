<html class="no-js" lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>php_internship</title>
        <meta name="description" content="VinaEnter Edu">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<?php
 echo $this->Html->css(array(
"jquery.dataTables.min",
"agency.min",
"style",
"customer_style"
)
);
 echo $this->Html->script(array(
"jquerys",
"jquery-1.11.2.min",
"bootstrap.min",
"jquery.dataTables.min",
"vendor/modernizr-2.8.3.min"
)
);
?>
</head>
<body>
 <div class="nav_area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-4">
                    <div class="logo"><a href="/">
                    <?php echo $this->Html->image('logo_edu.png'); ?>
                    </a></div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-8">
                   		<nav class="menu">
                   						<ul class="navid">
                   							<li>
                                <?php
                                echo $this->Html->link( 'Trang Chủ', array('action' => '#home') );
                                ?>
                                </li>
                   									<li>
                               <?php
                                echo $this->Html->link( 'Gợi ý cho bạn', array('action' => '#recomend') );
                                ?>        
                                    </li>
                   							<li>
                                  <?php
                                echo $this->Html->link( 'Nhà Hàng', array('action' => '#restaurants') );
                                ?>
                                </li>
                   							<li>
                                   <?php
                                echo $this->Html->link( 'Đăng nhập', array('action' => 'login') );
                                ?>
                                </li>
          		</ul>
                   					</nav>
                </div>
            </div>
        </div>
    </div>