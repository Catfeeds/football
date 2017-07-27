<div class="widget d_postlist">
                <div class="title">
                    <h2><sapn class="title_span">热门文章</span></h2></div>
                <ul>
                <?php if($news) foreach ($news as $key => $value) {?>
                    <li><a style="    height: 90px;
    padding-bottom: 0;" href="<?=$this->owner->createUrl('/home/news/info',['id'=>$value->id])?>" title="<?=$value->title?>"><span class="thumbnail"  style="border: none"><img src="<?=ImageTools::fixImage($value->image)?>" style="width: 93px;height: 64px" /></span><span class="text"><?=Tools::u8_title_substr($value->title,40)?></span><span class="muted"><?=date('Y-m-d',$value->updated)?></span></a></li>
                <?php } ?>
                   
                </ul>
            </div>
            <div class="widget d_tag">
                <div class="title">
                    <h2><sapn class="title_span">热门图库</span></h2></div>
                <div class="d_tags">
                <?php if($albums) foreach ($albums as $key => $value) { ?>
                    <a title="<?=$value->title?>" href="<?=$this->owner->createUrl('/home/album/info',['id'=>$value->id])?>" style="padding: 0;height: 80px;width: 48%;opacity: 1">
                        <img src="<?=ImageTools::fixImage($value->album[0]['url'])?>"  style="width: 127px;height: 80px" >
                    </a>
               <?php  } ?>
                
                </div>
            </div>
            <div class="widget d_tag">
                <div class="title">
                    <h2><sapn class="title_span">热门搜索</span></h2></div>
                <div class="d_tags"m  style="width: 86%">
                <?php if($tags) foreach ($tags as $key => $value) {?>
                    <a title="<?=$value['ct']?>个话题" href="<?=$this->owner->createUrl('/home/news/list',['tag'=>Pinyin::get($value['name'])])?>"><?=$value['name']?> (<?=$value['ct']?>)</a>
                <?php } ?> 
                </div>
            </div>