<div class="panel pro-filter pro-filter-settings-view" id="filterSettingsContainer">
    <div class="panel-body">
        <div class="pro-filter-footer">
            <div class="pro-filter_row">
                <div class="pro-filter_item pro-filter_sort-view">
                    <div class="form-group">
                        <label for="sortParam">Řazení:</label>
                        <div class="ux-combo">
                            <select id="sortParam" class="form-control ux-combo_field" data-label="Řadit dle"
                                onchange="GAAction(9,0,$(this));">
                                <option value="8_desc">výhodná nabídka</option>
                                <option value="13_asc">od nejlevnějších</option>
                                <option value="13_desc">od nejdražších</option>
                                <option value="11_asc">nejprodávanější</option>
                                <option value="12_asc">ceníkové řazení</option>
                                <option value="14_asc">název A-Z</option>
                                <option value="14_desc">název Z-A</option>
                                <option value="16_asc">skladem vzestupně</option>
                                <option value="16_desc">skladem sestupně</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="pro-filter_item pro-filter_number-records">
                    <span class="pro-filter_number-records_label">Počet záznamů:</span>
                    <strong class="pro-filter_number-records_value" id="totalRecordCount"
                        data-defaultvalue="1117">773</strong>
                </div>
                <div class="pro-filter_item pro-filter_choose-view">
                    <a href="#" onclick="GAAction(9,0,$(this));" id="btnView_img"
                        class="pro-filter_choose-view_btn pro-filter_choose-view_btn--catalog js-tooltip selected"
                        aria-label="Zobrazit katalog" data-title="tip_show_catalogue">
                        <i class="icon-grid btn_icon"></i>
                        <span class="btn_label">Zobrazit katalog</span>
                    </a>
                    <a href="#" onclick="GAAction(9,0,$(this));" id="btnView_table"
                        class="pro-filter_choose-view_btn pro-filter_choose-view_btn--list js-tooltip"
                        aria-label="Zobrazit seznam s obrázky" data-title="tip_show_tile">
                        <i class="icon-list btn_icon"></i>
                        <span class="btn_label">Zobrazit seznam s obrázky</span>
                    </a>
                    <a href="#" onclick="GAAction(9,0,$(this));" id="btnView_table_img"
                        class="pro-filter_choose-view_btn pro-filter_choose-view_btn--table js-tooltip"
                        aria-label="Zobrazit vlastní seznam" data-title="tip_show_tableimg">
                        <i class="icon-select btn_icon"></i>
                        <span class="btn_label">Zobrazit vlastní seznam</span>
                    </a>
                    <a id="tableViewConfig" href="/pages/administration/productlistadmin.aspx"
                        class="btn btn-table-view-config js-tooltip hide-i" data-title="tip_product_list_config"
                        data-tltp-pos=".products-list-head">
                        <i class="icon-settings btn_icon"></i>

                    </a>
                </div>


                <div id="pagingTop" class="pager pro-pager pro-pager--top">
                    <div class="pager_in">



                        <span class="pager_item pager_item--current first">
                            1
                        </span>





                        <a id="pag_top_2" data-page="2" href="#" class="pager_item">
                            2
                        </a>




                        <a id="pag_top_3" data-page="3" href="#" class="pager_item">
                            3
                        </a>




                        <a id="pag_top_4" data-page="4" href="#" class="pager_item">
                            4
                        </a>




                        <a id="pag_top_5" data-page="5" href="#" class="pager_item last">
                            5
                        </a>



                        <span class="pager_item pager_split">...</span>
                        <a id="pag_top_59" data-page="59" href="#" class="pager_item last">59</a>


                        <span class="pager_item pager_separate"></span>
                        <a id="pag_top_next" data-page="2" class="pager_item pager_next" href="#">
                            <span class="pager_item_label">Další</span>
                            <span class="pager_item_icon"><i class="icon-arrow-right"></i></span>
                        </a>

                    </div>
                </div>

            </div>


            <div class="o-base-tiles c-products-sup-cat">


            </div>
        </div>

    </div>


</div>
