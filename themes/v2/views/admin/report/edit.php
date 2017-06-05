<?php
$this->pageTitle = $this->controllerName.'新建/编辑';
$this->breadcrumbs = array($this->controllerName.'管理', $this->pageTitle);
?>
<?php $this->widget('ext.ueditor.UeditorWidget',array('id'=>'ArticleExt_content','options'=>"toolbars:[['fullscreen','source','undo','redo','|','customstyle','paragraph','fontfamily','fontsize'],
        ['bold','italic','underline','fontborder','strikethrough','superscript','subscript','removeformat',
        'formatmatch', 'autotypeset', 'blockquote', 'pasteplain','|',
        'forecolor','backcolor','insertorderedlist','insertunorderedlist','|',
        'rowspacingtop','rowspacingbottom', 'lineheight','|',
        'directionalityltr','directionalityrtl','indent','|'],
        ['justifyleft','justifycenter','justifyright','justifyjustify','|','link','unlink','|',
        'insertimage','emotion','scrawl','insertvideo','music','attachment','map',
        'insertcode','|',
        'horizontal','inserttable','|',
        'print','preview','searchreplace']]")); ?>
<?php $form = $this->beginWidget('HouseForm', array('htmlOptions' => array('class' => 'form-horizontal'))) ?>
<div class="form-group">
    <label class="col-md-2 control-label">联赛</label>
    <div class="col-md-4">
        <?php echo $form->dropDownList($article, 'lid', $cates, array('class' => 'form-control', 'encode' => false)); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'lid') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">球队</label>
    <div class="col-md-4">
        <?php echo $form->dropDownList($article, 'tid', $cates1, array('class' => 'form-control', 'encode' => false)); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'tid') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">场次<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'round', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'round') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">胜场<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'win', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'win') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">平场<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'same', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'same') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">负场<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'lose', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'lose') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">进球数<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'score_ball', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'score_ball') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">失球数<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'lose_ball', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'lose_ball') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">积分<span class="required" aria-required="true">*</span></label>
    <div class="col-md-4">
        <?php echo $form->textField($article, 'points', array('class' => 'form-control')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'points') ?></div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">状态</label>
    <div class="col-md-4">
        <?php echo $form->radioButtonList($article, 'status', ArticleExt::$status, array('separator' => '')); ?>
    </div>
    <div class="col-md-2"><?php echo $form->error($article, 'status') ?></div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <button type="submit" class="btn green">保存</button>
            <?php echo CHtml::link('返回',$this->createUrl('list'), array('class' => 'btn default')) ?>
        </div>
    </div>
</div>

<?php $this->endWidget() ?>

<?php
$js = "

    var getHousesAjax =
     {
        url: '".$this->createUrl('/admin/plot/AjaxGetHouse')."',"."
        dataType: 'json',
        delay: 250,
        data: function (params) {
            return {
                kw:params
            };
        },
        results:function(data){
            var items = [];

             $.each(data.results,function(){
                var tmp = {
                    id : this.id,
                    text : this.name
                }
                items.push(tmp);
            });

            return {
                results: items
            };
        },
        processResults: function (data, page) {
            var items = [];
             $.each(data.msg,function(){
                var tmp = {
                    id : this.id,
                    text : this.title
                }
                items.push(tmp);
            });
            return {
                results: items
            };
        }
    }
        $(function(){

           $('.select2').select2({
              placeholder: '请选择',
              allowClear: true
           });

        var houses_edit = $('#plot');
        var data = {};
        if( houses_edit.length && houses_edit.data('houses') ){
          data = eval(houses_edit.data('houses'));
        }

        $('#plot').select2({
          multiple:true,
          ajax: getHousesAjax,
          language: 'zh-CN',
          initSelection: function(element, callback){
            callback(data);
          }
        });

             $('.form_datetime').datetimepicker({
                 autoclose: true,
                 isRTL: Metronic.isRTL(),
                 format: 'yyyy-mm-dd hh:ii',
                 // minView: 'm',
                 language: 'zh-CN',
                 pickerPosition: (Metronic.isRTL() ? 'bottom-right' : 'bottom-left'),
             });

             $('.form_datetime1').datetimepicker({
                 autoclose: true,
                 isRTL: Metronic.isRTL(),
                 format: 'yyyy-mm-dd',
                 minView: 'month',
                 language: 'zh-CN',
                 pickerPosition: (Metronic.isRTL() ? 'bottom-right' : 'bottom-left'),
             });
        });
        ";


Yii::app()->clientScript->registerScript('add',$js,CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/select2/select2.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/select2/select2_locale_zh-CN.js', CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile('/static/global/plugins/select2/select2.css');
Yii::app()->clientScript->registerCssFile('/static/admin/pages/css/select2_custom.css');

Yii::app()->clientScript->registerScriptFile('/static/admin/pages/scripts/addCustomizeDialog.js', CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile('/static/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css');
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js', CClientScript::POS_END, array('charset'=> 'utf-8'));
Yii::app()->clientScript->registerScriptFile('/static/global/plugins/bootbox/bootbox.min.js', CClientScript::POS_END);
?>