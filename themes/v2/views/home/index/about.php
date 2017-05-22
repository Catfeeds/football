<?php
  $this->pageTitle = '弘钢机械设备-公司介绍';
?>
<div class="npagePage pageEditor" id="page_about">
            <div id="banner">
                <div style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcGsjs'))?>);"></div>
            </div>
            <div class="content">
                <div class="mpageEditor module">
                    <div class="module_container">
                        <div class="container_header wow">
                            <p class="title"><?=$info->title?></p>
                            <p class="subtitle"><?=$info->sub_title?></p>
                        </div>
                        <div class="container_content">
                            <div class="content_wrapper">
                                <div class="postbody">
                                    <table>
                                        <tbody>
                                            <tr class="firstRow">
                                                <td valign="top" colspan="1" rowspan="1" width="450"><img src="<?=ImageTools::fixImage($info->image)?>" width="500" height="267" border="0" vspace="0" title="undefined" alt="undefined" />
                                                    <br/>
                                                </td>
                                                <td width="40" valign="top" style="word-break: break-all;">
                                                    <br/>
                                                </td>
                                                <td style="word-break: break-all;" width="" valign="top"><?=$info->content?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>
                                        <br/>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>