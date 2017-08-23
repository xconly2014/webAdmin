<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?></title>
    <base href="<?php echo base_url(); ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/select.css">
</head>

<body class="iframe-body">
    <div class="bootstrap-table">
        <form id="form" class="form-horizontal" action="/User/" method="post">
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <td colspan='2'>
                            <!-- <div class="form-group"> -->
                                <label for="inputEmail3" class="col-sm-2 col-sm-offset-2 control-label">组名：</label>
                                <div class="col-sm-4">
                                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            <!-- </div> -->
                        </td>
                    </tr>
                    <?php foreach ($top_menu as $top): ?>
                    <tr>                        
                        <th width="10%">
                            <?php echo $top['title'];?>
                        </th>

                        <td>
                            <?php foreach ($menu as $sub): ?>
                                <?php if ($top['id'] == $sub['parent_id']): ?>
                                    <div>
                                        <div class="checkbox" style="float:left;height:30px;">
                                            <label>
                                              <input type="checkbox"> <b><?php echo $sub['title'];?></b>
                                            </label>
                                        </div>
                                        <?php foreach ($rules as $rule): ?>
                                            <?php if($sub['id'] == $rule['m_id']): ?>
                                                <div class="checkbox" style="float:left;">
                                                    <label>
                                                      <input type="checkbox"> <span><?php echo $rule['title'];?></span>
                                                    </label>
                                                </div>
                                            <?php endif;?>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </td>              
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </form>
    </div>

    <script src="js/plugins/jquery.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/select2.min.js"></script>
    <script src="js/plugins/layer/layer.js"></script>
    <script src="js/common.js"></script>
    <script>
        $(function () {
            
        });
    </script>
</body>
</html>
