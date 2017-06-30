<?php require_once 'header.php'; //подключаем header?> 

     <!--body wrapper start-->
    <section class="panel">
        <header class="panel-heading">
            Редактирование услуги
        </header>
        <div class="panel-body">
        <div class="wrapper">
        <div class="row">
            <div class="col-sm-8">
            <form class="form-horizontal adminex-form" method="get">
                
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Заголовок страницы</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="title" value="<?php echo $service['title']?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Опубликован</label>
                            <div class="col-sm-10">
                                <select class="form-control m-bot15" name="is_publication">
                                    <option value="0" <?php if($service['is_publication'] == 0):?> selected <?php endif; ?>>Опубликован</option>
                                    <option value="1" <?php if($service['is_publication'] == 0):?> selected <?php endif; ?>>Снят с публикации</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Дата</label>
                        <div class="col-sm-10 col-xs-11">
                            <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="<?php echo $service['date']?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Название услуги</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="name" value="<?php echo $service['name']?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Автор</label>
                        <div class="col-sm-10"><input type="text" class="form-control" name="autor" value="<?php echo $service['autor']?>"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Анонс</label>
                        <div class="col-sm-10">
                             <textarea name="text_mini" class="form-control" rows="6"><?php echo $service['text_mini']?></textarea>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <hr>
                        <label class="control-label">Текст</label>
                        <div>
                            <textarea id="editor1" name="text" class="form-control" rows="20"><?php echo $service['text']?></textarea>
                        </div>
                        <script type="text/javascript">
                            CKEDITOR.replace( 'editor1',{'filebrowserBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=files',
  'filebrowserImageBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=images',
  'filebrowserFlashBrowseUrl':'<?php echo LIB ?>kcfinder/browse.php?type=flash',
  'filebrowserUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=files',
  'filebrowserImageUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=images',
  'filebrowserFlashUploadUrl':'<?php echo LIB ?>kcfinder/upload.php?type=flash'} );
                        </script>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="control-label">Meta-kw</label>
                        <div>
                            <textarea name="meta_kw" class="form-control " rows="6"><?php echo $service['meta_kw']?></textarea>
                            </div>
                    </div>
                    <div class="form-group col-sm-1">
                    </div>
                    
                    
                    <div class="form-group col-sm-6">
                        <label class="control-label">Meta-d</label>
                        <div>
                            <textarea name="meta_d" class="form-control" rows="6"><?php echo $service['meta_d']?></textarea>
                            </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit" name="save">Сохранить</button>
                </form>
        </div>
        <div  class="col-sm-4">
            <form action="" method="post">
                <div class="form-group" >
                    <img src="/img/pic1.png"/>
                </div>
            
                <div class="form-group" >
                    <input type="file" class="default" />
                </div>
            <button class="btn btn-primary" type="submit" name="save_img">Сохранить</button>
            </form>
        </div>
        </div>
        </div>
        </div>
    </section>

<?php require_once 'footer.php'; //подключаем header?> 
        