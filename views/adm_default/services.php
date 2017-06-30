<?php require_once 'header.php'; //подключаем header?> 

     <!--body wrapper start-->
    <div class="wrapper">

        <div class="row">
        <div class="col-sm-12">



        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>Заголовок страницы</th>
            <th>Заголовок статьи</th>
            <th>Автор</th>
            <th>Дата</th>
            <th>Опубликовано</th>
            <th>Редактировать</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($servicesList as $service): ?>
        <tr class="gradeA">
            <td><?php echo $service['title']; ?></td>
            <td><?php echo $service['name']; ?></td>
            <td><?php echo $service['autor']; ?></td>
            <td><?php echo $service['date']; ?></td>
            <td><?php echo $service['id']; ?></td>
            <td><a href="<?php DOMAIN; ?>/adminpanel/updateservices/<?php echo $service['id']; ?> " ><i class="fa fa-edit"></i></a></td>
            <td><?php echo $service['id']; ?></td>
        </tr>
            <?php endforeach; ?>
  
        </tbody>
        </table>
        </div>
        </div>

        </div>
        </div>


        <?php require_once 'footer.php'; //подключаем header?> 
        