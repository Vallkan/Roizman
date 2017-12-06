<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<div class="wrapper announce">


    <?$unix_date_now = intval(date("U")); ?>

    <div class="<? print ($key != 0 ? 'pigrow' : 'bigpig');?>">

        <?


        if($arItem["DATE_ACTIVE_TO"]){
            $proj_end_date = DateTime::createFromFormat('d.m.Y H:i:s', $arItem["DATE_ACTIVE_TO"]);
            $proj_end_date = $proj_end_date->getTimestamp();
            $proj_active = ($proj_end_date > $unix_date_now);
        }
        else{
            $proj_active = true;
        }?>

        <div class="bigpig__text">
            <h5 class="rosinka"><?=$arItem["NAME"];?></h5>
            <h6 class="rosinka"><?=$arItem["PREVIEW_TEXT"];?></h6>
        </div>
        <div class="pigitself mainpig">
            <svg class="announcement__big__icon rosinka" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><use xlink:href="#icon__money"></use>
                <path id="icon__money" d="M19.5 12.4c-.6 0-1 .5-1 1 0 .7.4 1.2 1 1.2s1-.5 1-1c0-.7-.4-1.2-1-1.2zm0 1.5c-.2 0-.4-.3-.4-.5s.3-.4.5-.4.4.3.4.5-.3.4-.5.4zm3.4-.5h-.7C22 12 21 11 20 10V7l-.5-.2c-1 0-2 .6-2.4 1.6-1.4-.6-3-1-4.6-1-2.7 0-5.2 1-7 2.3-1.7 1-2.7 2.6-3 4.2-1-.2-1.8-1.2-1.7-2.2 0-.6.4-1.2 1-1.4 0 0 .2-.4 0-.5 0-.3-.2-.4-.4-.3-1.2.8-1.7 2.4-1 3.6.5.7 1.2 1.2 2 1.3V19c0 1 .6 1.8 1.5 2v2c0 .5.5 1 1 1h1.6c.6 0 1-.5 1-1v-2H16v2c0 .5.5 1 1 1h1.6c.6 0 1-.5 1-1v-2h1.2c1 0 2-.8 2-2v-.6h.3c.5 0 1-.5 1-1v-2.8c0-.6-.5-1-1-1zm-3.8-6v2l-.3-.2-1.2-.6c.2-.6.7-1 1.4-1.2zM6.4 23.3H5c-.4 0-.5-.2-.5-.4v-.5h2.3v.4s-.2.3-.4.3zm12 0H17c-.3 0-.5-.2-.5-.4v-.5h2.3v.4s-.2.3-.4.3zm5-6c0 .2-.3.4-.5.4h-.5v-2.3c0-.2-.2-.4-.4-.4l-.2.4V19c0 .8-.5 1.3-1.2 1.3H19s-.2 0-.2.3v1.2h-2.3v-1.2c0-.2-.2-.3-.4-.3H7s-.2 0-.2.3v1.2H4.5v-1.2c0-.2-.2-.3-.4-.3-.5 0-1-.5-1-1.2v-4c0-3.7 4.2-6.8 9.4-6.8 2.2 0 4.3.6 6.2 1.7 1.6 1 2.7 2.4 3 4l.4.2h1s.3.2.3.4v2.7zM13.8 9c-1.2 0-2.4 0-3.6.2 0 0-.3.2-.3.4.2 0 .3.3.5.3 1-.3 2.2-.3 3.3-.2.2 0 .4 0 .4-.3 0-.2 0-.4-.3-.4zm-1.6-2.3c1.8 0 3.3-1.5 3.3-3.3 0-2-1.5-3.4-3.3-3.4C10.4 0 9 1.5 9 3.4c0 1.8 1.5 3.3 3.4 3.3zm0-6C13.8.7 15 2 15 3.4S13.8 6 12.4 6 9.7 4.8 9.7 3.4C9.7 2 11 .7 12.4.7zm0 1.5c.6 0 1 .5 1 1.2 0 .2.3.3.5.3 0 0 .2 0 .2-.3 0-1-.8-2-1.8-2 0 0 1.7.5 0 .8z"></path>
            </svg>
            <p class="underpig">Нужны деньги</p>
        </div>
        <div class="bigpig__help">
            <button>Помочь</button>
        </div>
    </div>


    <div class="needmoney">
        <div class="container">
            <div class="row">
               <? foreach($arResult["ITEMS"] as $key => $arItem): ?>
                <div class="col-lg-3 col-md-6 donate <? print ($key != 0 ? 'pigrow' : 'bigpig');?>">
                    <a href="*" class="pigrow">
                        <div class="pigitself">
                            <svg class="announcement__big__icon rosinka" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><use xlink:href="#icon__money"></use>
                                <path id="icon__money" d="M19.5 12.4c-.6 0-1 .5-1 1 0 .7.4 1.2 1 1.2s1-.5 1-1c0-.7-.4-1.2-1-1.2zm0 1.5c-.2 0-.4-.3-.4-.5s.3-.4.5-.4.4.3.4.5-.3.4-.5.4zm3.4-.5h-.7C22 12 21 11 20 10V7l-.5-.2c-1 0-2 .6-2.4 1.6-1.4-.6-3-1-4.6-1-2.7 0-5.2 1-7 2.3-1.7 1-2.7 2.6-3 4.2-1-.2-1.8-1.2-1.7-2.2 0-.6.4-1.2 1-1.4 0 0 .2-.4 0-.5 0-.3-.2-.4-.4-.3-1.2.8-1.7 2.4-1 3.6.5.7 1.2 1.2 2 1.3V19c0 1 .6 1.8 1.5 2v2c0 .5.5 1 1 1h1.6c.6 0 1-.5 1-1v-2H16v2c0 .5.5 1 1 1h1.6c.6 0 1-.5 1-1v-2h1.2c1 0 2-.8 2-2v-.6h.3c.5 0 1-.5 1-1v-2.8c0-.6-.5-1-1-1zm-3.8-6v2l-.3-.2-1.2-.6c.2-.6.7-1 1.4-1.2zM6.4 23.3H5c-.4 0-.5-.2-.5-.4v-.5h2.3v.4s-.2.3-.4.3zm12 0H17c-.3 0-.5-.2-.5-.4v-.5h2.3v.4s-.2.3-.4.3zm5-6c0 .2-.3.4-.5.4h-.5v-2.3c0-.2-.2-.4-.4-.4l-.2.4V19c0 .8-.5 1.3-1.2 1.3H19s-.2 0-.2.3v1.2h-2.3v-1.2c0-.2-.2-.3-.4-.3H7s-.2 0-.2.3v1.2H4.5v-1.2c0-.2-.2-.3-.4-.3-.5 0-1-.5-1-1.2v-4c0-3.7 4.2-6.8 9.4-6.8 2.2 0 4.3.6 6.2 1.7 1.6 1 2.7 2.4 3 4l.4.2h1s.3.2.3.4v2.7zM13.8 9c-1.2 0-2.4 0-3.6.2 0 0-.3.2-.3.4.2 0 .3.3.5.3 1-.3 2.2-.3 3.3-.2.2 0 .4 0 .4-.3 0-.2 0-.4-.3-.4zm-1.6-2.3c1.8 0 3.3-1.5 3.3-3.3 0-2-1.5-3.4-3.3-3.4C10.4 0 9 1.5 9 3.4c0 1.8 1.5 3.3 3.4 3.3zm0-6C13.8.7 15 2 15 3.4S13.8 6 12.4 6 9.7 4.8 9.7 3.4C9.7 2 11 .7 12.4.7zm0 1.5c.6 0 1 .5 1 1.2 0 .2.3.3.5.3 0 0 .2 0 .2-.3 0-1-.8-2-1.8-2 0 0 1.7.5 0 .8z"></path>
                            </svg>
                            <? if($proj_active):?>
                                <p class="underpig">Нужны деньги</p>
                            <? endif;?>
                        </div>
                        <div class="description d1">
                            <p class="desctext"><?=$arItem["NAME"];?></p>
                        </div>
                        <div class="smallpig__help">
                            <button><?= $proj_active ? "ПОМОЧЬ" : "ОТЧЕТ";?></button>
                        </div>
                    </a>
                </div>
               <? endforeach;?>
            </div>
        </div>
    </div>
</div>