<!-- BOCNI PANEL START -->
<div id="userpanel">
    <div id="userpanel_social">
        <a href="http://www.epvp.com" id="userpanel_social_epvp" class="socialicon"></a>
        <a href="http://www.youtube.com" id="userpanel_social_youtube" class="socialicon"></a>
        <a href="http://www.facebook.com/tasgarahmetzeki" id="userpanel_social_facebook" class="socialicon"></a>
        <a href="http://www.twitter.com/tasgarzekiahmet" id="userpanel_social_twitter" class="socialicon"></a>
    </div>

    <div id="userpanel_login">
        <?php if($logged) { ?>
        <div id="userpanel_login_inputs">
            <div align="center">
                <a>Welcome back, <?= $_SESSION['login'] ?> !</a><br />
                <a href="/login/logout">Logout</a>
            </div>
        </div>
    </div>
        <?php } else { ?>
        <div id="userpanel_login_inputs">
            <div align="center">
                <?php if(isset($result['login'])) { echo $result['login']; } ?>
                <form id="userInfo" style="margin:0;padding:0; float:right;" action="/login/index" method="POST">
                    <div class="form_input_bg"><input type="text" maxlength="16" size="10" name="username">&nbsp;</div>
                    <div class="form_input_bg"><input type="password" maxlength="16" size="10" name="password">&nbsp;</div>
                    <div align="left"><input type="submit" value="Přihlásit se" name="login"></div>
                </form>
            </div>
            <a href="/register" class="textstyle_sidebarlink" style="margin-left: 2px;">Registrace</a><br>
            <a href="/forgotten-password" class="textstyle_sidebarlink" style="margin-left: 2px;">Obnovení hesla</a>
        </div>
    </div>
    <?php } ?>
</div>


<div id="sidebar">
    <div id="sidebar_begin"></div>
    <div id="sidebar_rep_bg">
        <div id="sidebar_top_bg">
            <div id="sidebar_bottom_bg">
                <div id="sidebar_content">
                    <div id="sidebar_content_item">
                        <div id="sidebar_content_item_title">
                            <p class="textstyle_sidebar_content_item_title">TOP 10 hráčů</p>
                        </div>
                        <div id="sidebar_content_item_content" class="textstyle_sidebar_content_item_content">
                            <div id="sidebar_content_item_content_ranking_player">
                                <div id="sidebar_content_item_content_ranking_header" class="textstyle_ranking_header">
                                </div>
                                <br>
                                <table>
                                    <tbody>
                                    <div class="ranking_player_place">#</div>
                                    <div class="ranking_player_username">Jméno</div>
                                    <div class="ranking_player_empire">Říše</div>
                                    <div class="ranking_player_rating">Lvl</div>

                                    <?php $i = 0; foreach($playersRanking as $player): $i++; ?>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="textstyle_ranking_place1">
                                                    <div class="ranking_player_place1"><?= $i ?>.</div>
                                                </td>
                                                <td class="textstyle_ranking_place1">
                                                    <div class="ranking_player_username1"><?= $player['name'] ?></div>
                                                </td>
                                                <td class="textstyle_ranking_place1" width="110px">
                                                    <div class="ranking_player_empire1">
                                                        <img src="/images/reiche/1_kl.jpg"/>
                                                    </div>
                                                </td>
                                                <td class="textstyle_ranking_place1" width="110px"><?= $player['level'] ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <a href="index.php?s=rankings" style="clear:both; margin: 7px auto;" class="button_medium">Celý žebříček</a>
                        </div>
                    </div>
                    <div id="sidebar_content_item">
                        <div id="sidebar_content_item_title">
                            <p class="textstyle_sidebar_content_item_title">TOP 5 cechů</p>
                        </div>
                        <div id="sidebar_content_item_content" class="textstyle_sidebar_content_item_content">
                            <div id="sidebar_content_item_content_ranking_guilds">
                                <div id="sidebar_content_item_content_ranking_header" class="textstyle_ranking_header">
                                </div>
                                <br>
                                <table>
                                    <tbody>
                                    <div class="ranking_guilds_place">#</div>
                                    <div class="ranking_guilds_guildname">Název</div>
                                    <div class="ranking_guilds_rating">Lvl</div>

                                    <?php $i2 = 0; foreach($guildsRanking as $guild): $i2++; ?>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="textstyle_ranking_place1">
                                                <div class="ranking_player_place1"><?= $i2 ?>.</div>
                                            </td>
                                            <td class="textstyle_ranking_place1">
                                                <div class="ranking_player_username1"><?= $guild['name'] ?></div>
                                            </td>
                                            <td class="textstyle_ranking_place1" width="110px">
                                                <?= $guild['level'] ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <a href="?s=rankings" style="clear:both; margin: 7px auto;" class="button_medium">Celý žebříček</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
</div>
</div>
<!-- BOCNI PANEL KONEC -->