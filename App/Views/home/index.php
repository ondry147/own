
<div id="content">
    <div id="content_top">
        <div id="content_rep" class="view">
            <div id="content_top" class="view">
                <div id="main_content">
                    <div id="main_content_eventcountdown_description">
                        <div id="main_content_eventcountdown_description_title"></div>
                        <div id="main_content_eventcountdown_description_content" class="textstyle_eventcountdown_description">
                        </div>
                    </div>

                    <div id="main_content_extrabuttons">
                        <a href="http://" target="_blank" id=""></a>
                        <a href="http://" target="_blank" id=""></a>
                        <a href="index.php?s=itemshop" id=""></a>
                    </div>
                    <div id="main_content_items">



                        <!--<div id="main_content_item">
                            <div id="main_content_item_title">
                                <p class="textstyle_main_content_item_title">FULLMMO - Metin2 - Doguya Has Macera MMORPG</p>
                            </div>
                            <div id="main_content_item_content">
                                <p class="textstyle_main_content_item_content">
                                <center><img src="images/m2-logo.png"></center>
                                <br>
                                <p>Ejderha Tanrisi, uzun zamandir Shinsoo, Chunjo ve Jinno kralliklarini nefesiyle koruma altina almisti. <strong>Fakat artik b?y?k bir tehditle karsi karsiya olan bu muhtesem b?y?ler d?nyasini, Metin Taslari</strong> sadece b?y?k hasara ugratmakla kalmadi, kitayi ve sakinlerini kaos ve yikima s?r?kledi.
                                    <strong>Kralliklar arasinda savas cikti.</strong> Yirtici hayvanlar vahsi canavarlara, ?l?ler kana susamis mahl?katlara d?n?st?.
                                    Metin Taslari'nin karanlik etkilerine karsi Ejderha Tanrisi'nin m?ttefigi olarak
                                    savas. Kralliginin gelecegini korku, aci ve yikimdan kurtarmak icin g?c?n? topla ve kilicini cek!
                                </p>
                            </div>
                            <div id="main_content_item_footer">
                                <p class="textstyle_main_content_item_footer">DUYURU => FULLMMO</p>
                                <a href="#" class="button_small">KAYIT OL</a>
                            </div>
                        </div>

                        <div id="main_content_item">
                            <div id="main_content_item_title">
                                <p class="textstyle_main_content_item_title">Metin2 - 3D Online MMORPG</p>
                            </div>
                            <div id="main_content_item_content">
                                <p class="textstyle_main_content_item_content">
                                    <img src="images/exampleimg_1.jpg" class="main_content_item_content_image_small"/>
                                <p>Uzakdogu d?v?s <strong>sanatlarinin fantastik kralliginda doguya has karakterler ve mimari.</strong> Uzak dogunun gercekci k?ylerinden
                                    gecerek Asyali savascilarin <strong>atmosferinin aklinizi basinizdan</strong> almasina izin verin.
                                    Yakin zamanda sadece kilic ve yayinla savasmayacaksin, <strong>ayni zamanda</strong>, canlarin ve Yelpazelerin g?c?n? kullanmayida ?greneceksin.
                                </p>
                            </div>
                            <div id="main_content_item_footer">
                                <p class="textstyle_main_content_item_footer">DUYURU => FULLMMO</p>
                                <a href="#" class="button_small">OYUN INDIR</a>
                            </div>
                        </div>

                        <div id="main_content_item">
                            <div id="main_content_item_title">
                                <p class="textstyle_main_content_item_title">Shinsoo Kralligi</p>
                            </div>
                            <div id="main_content_item_content">
                                <p class="textstyle_main_content_item_content">
                                    <img src="images/exampleimg_2.jpg" class="main_content_item_content_image_big"/>
                                <p>Shinsoo Kralligi kitanin <strong>g?ney kisminda yer alir.</strong> En ?nemli aktiviteleri ticarettir.
                                    Yoon-Yoing tarafindan eski kralligin dagilmasindan sonra doguyla <strong>yapilan ticari bir anlasma sonucu kurulmustur.</strong>.
                                    Shinsoo bati kralligiyla anlasmazliklar yasamaktadir  <strong>ve ticaret yolu tehlikelerle dolu olabilir. </strong> Metin Taslarinin tehlikesini farkettiklerinde,t?ccarlarda silahlandilar.</p>
                                <br>
                                <p>Amaclari:<strong></strong> Kendilerini batidan gelecek saldirilara
                                    karsi korumak, ticaret yolunu tekrar acmak ve <strong>eski kralligi kendi</strong> iradelerinde
                                    yeniden bir  <strong>araya</strong> getirmektir.
                                </p>
                            </div>
                            <div id="main_content_item_footer">
                                <p class="textstyle_main_content_item_footer">DUYURU => FULLMMO</p>
                                <a href="#" class="button_small">SIRALAMA</a>
                            </div>
                        </div>-->

                        <?php foreach($news as $new): ?>
                        <div id="main_content_item">
                            <div id="main_content_item_title">
                                <p class="textstyle_main_content_item_title"><?= $new['title'] ?></p>
                            </div>
                            <div id="main_content_item_content">
                                <p class="textstyle_main_content_item_content">
                                    <img src="/images/exampleimg_2.jpg" class="main_content_item_content_image_big"/>
                                    <?= $new['content'] ?>
                                </p>
                            </div>
                            <div id="main_content_item_footer">
                                <p class="textstyle_main_content_item_footer">Autor: <?= $new['author'] ?> |  <?= $new['added'] ?></p>
                                <a href="#" class="button_small">Číst více</a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
