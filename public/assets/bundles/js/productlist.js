/* Minification failed. Returning unminified contents.
(3388,11-12): run-time error JS1010: Expected identifier: .
(3388,11-12): run-time error JS1195: Expected expression: .
 */
function redirectWithoutHash() {
    /// <summary>
    /// Udela redirect sam na sebe bez HASHe.
    /// </summary>
    var urlParse = window.location.toString();
    if (urlParse.indexOf("#") > -1) {
        urlParse = urlParse.substr(0, urlParse.indexOf("#"));
    }
    window.location.href = urlParse;
}

function redirectWithParam(beforeHash, afterHash) {
    /// <summary>
    /// Udela redirect sam na sebe s querystringem a hashem pokud je zadano.
    /// </summary>
    var urlParse = window.location.toString();
    if (urlParse.indexOf("?") > -1) {
        urlParse = urlParse.substr(0, urlParse.indexOf("?"));
    }
    if (urlParse.indexOf("#") > -1) {
        urlParse = urlParse.substr(0, urlParse.indexOf("#"));
    }
    urlParse += "?" + beforeHash
    if (afterHash.length > 0) urlParse += "#" + afterHash;
    window.location.href = urlParse;
}

function createURLbyParams(parameters) {
    /// <summary>
    /// Posklada cast url z hashtable, kde jsou parametry a hodnoty pro vytvoreni url
    /// </summary>
    var s = "";
    var delimiter = "";
    for (var i in parameters.hashtable) {
        if (i == null) {
            continue;
        }
        var keyName = i;
        var keyValue = parameters.hashtable[i];
        if (keyValue == null) {
            continue;
        }
        s += delimiter + keyName + "=" + keyValue;
        delimiter = "&";
    }
    return s;
}

function combineParamsForURL(parametersBeforeHash, parametersHash) {
    /// <summary>
    /// sestraji se URL pro volani stranky. Kombinuje url pred HASHem s url za HASHem.
    /// Vysledne URL se pouzije pro volani AJAXove stranky
    /// </summary>
    var s = "";
    var delimiter = "";
    for (var i in parametersHash.hashtable) {
        if (i == null) {
            continue;
        }
        var keyName = i;
        var keyValue = parametersHash.hashtable[i];
        if (!parametersBeforeHash.containsKey(keyName) && IsNullOrEmpty(keyValue)) {
            continue;
        }
        s += delimiter + keyName + "=" + keyValue;
        delimiter = "&";
    }

    for (var j in parametersBeforeHash.hashtable) {
        if (j == null) {
            continue;
        }
        keyName = j;
        keyValue = parametersBeforeHash.hashtable[j];
        if (IsNotNullOrEmpty(keyValue) && !parametersHash.containsKey(keyName)) {
            s += delimiter + keyName + "=" + keyValue;
            delimiter = "&";
        }
    }
    return s;
}

function combineParamsForHashURL(parametersBeforeHash, parametersHash) {
    /// <summary>
    /// sestroji URL pro HASH, kde kombinuje soucasny HASH + prad HASHem.
    /// Pokud pred HASHem existuje a za HASHem neexistuje, tak ho pridava do vysledneho URL.
    /// Pokud neexistuje pres HASHem a ya HASHem je prazdne, tak se vynechava.
    /// </summary>
    var s = "";
    var delimiter = "";
    for (var i in parametersHash.hashtable) {
        if (i == null) {
            continue;
        }
        var keyName = i;
        var keyValue = parametersHash.hashtable[i];
        if (keyValue == null) continue;
        if (!parametersBeforeHash.containsKey(keyName) && IsNullOrEmpty(keyValue)) {
            continue;
        }
        s += delimiter + keyName + "=" + keyValue;
        delimiter = "&";
    }
    return s;
}

function defaultValueInParams(paramsAfterHash, paramsBeforeHash, keyName, keyValue) {
    /// <summary>
    /// nastaveni defaultni hodnotu vzdy do URL za HASHem pokud neexistuje nebo neexistuje pred HASHem a za HASHem nebo zadnou hodnotu nebo neexistuje pred ani za HASHem
    /// </summary>
    if (paramsAfterHash.containsKey(keyName)) {
        var value = paramsAfterHash.get(keyName);
        if (IsNullOrEmpty(value)) {
            paramsAfterHash.put(keyName, keyValue);
            return;
        }
    } else if (paramsBeforeHash.containsKey(keyName)) {
        value = paramsBeforeHash.get(keyName);
        if (IsNullOrEmpty(value)) {
            paramsAfterHash.put(keyName, keyValue);
            return;
        }
    } else {
        paramsAfterHash.put(keyName, keyValue);
        return;
    }
}

function sortInfo() {
    this.sortpar = undefined;
    this.sortval = undefined;
    this.sortdir = undefined;
}

function sortDirectionCorrect(origDirection) {
    /// <summary>
    /// nemeni zpusob razeni. pouze vraci legalni stav
    /// </summary>
    if (IsNullOrEmpty(origDirection))
        return "asc";
    return origDirection == "desc" ? "desc" : "asc";
}

function sortDirection(origDirection) {
    /// <summary>
    /// meni zpusob razeni
    /// </summary>
    if (IsNullOrEmpty(origDirection))
        return "asc";
    //return origDirection == "asc" ? "desc" : "asc";
    return origDirection;
}

function setSortValues(paramsAfterHash, paramsBeforeHash, sortInfo) {
    // pokud neni definovano, tak vse zustava pri starem
    if (sortInfo == null || sortInfo.sortpar == null)
        return;

    var sortParAfterHash = paramsAfterHash.get("sortpar");
    var sortValueAfterHash = paramsAfterHash.get("sortval");
    var sortParBeforeHash = paramsAfterHash.get("sortpar");
    //var sortValueBeforeHash = paramsAfterHash.get("sortval");
    var sortAfterHash = paramsAfterHash.get("sortdir");
    var sortBeforeHash = paramsAfterHash.get("sortdir");

    // pak se nuluje veskere sortovani. Zatin neni treba resit value a direction, protoze se nuluje hlavni parametr
    if (sortInfo.sortpar == "") {
        if (sortParBeforeHash != null) {
            paramsAfterHash.put("sortpar", "");
        } else if (sortParAfterHash != null) {
            paramsAfterHash.remove("sortpar");
        }
        if (sortValueAfterHash != null) {
            paramsAfterHash.remove("sortval");
        }
        if (sortAfterHash != null) {
            paramsAfterHash.remove("sortdir");
        }
        return;
    }

    if (sortParAfterHash != null) {
        if (sortParAfterHash == sortInfo.sortpar) {
            if (sortInfo.sortdir == null) {
                paramsAfterHash.put("sortdir", sortDirection(sortAfterHash));
            } else {
                paramsAfterHash.put("sortdir", sortDirection(sortInfo.sortdir));
            }
        } else {
            paramsAfterHash.put("sortpar", sortInfo.sortpar);
            paramsAfterHash.put("sortdir", strDefaultForNULL(sortInfo.sortdir, "asc"));
        }
    } else if (sortParBeforeHash != null) {
        if (sortParBeforeHash == sortInfo.sortpar) {
            if (sortBeforeHash != null) {
                if (sortInfo.sortdir == null) {
                    paramsAfterHash.put("sortdir", sortDirection(sortBeforeHash));
                } else {
                    paramsAfterHash.put("sortdir", sortDirection(sortInfo.sortdir));
                }
            }
        } else {
            paramsAfterHash.put("sortpar", sortInfo.sortpar);
            paramsAfterHash.put("sortdir", strDefaultForNULL(sortInfo.sortdir, "asc"));
        }
    } else {
        paramsAfterHash.put("sortpar", sortInfo.sortpar);
        //paramsAfterHash.put("sortdir", strDefaultForNULL(sortInfo.sortdir, "asc"));
        paramsAfterHash.put("sortdir", sortDirection(sortInfo.sortdir));
    }
}

// rozparsuje query z URL do Hashtable (od "?" po "#")
function parseURL() {
    var dictionary = new Hashtable();
    var urlParse = window.location.toString();
    var paramsFromURL;
    var indexQuery = -1;

    paramsFromURL = urlParse;

    var hashIndex = paramsFromURL.indexOf("#");
    if (hashIndex > -1) {
        paramsFromURL = paramsFromURL.substring(0, hashIndex); // Remove everything after #
    }

    indexQuery = paramsFromURL.indexOf("?");
    if (indexQuery > -1) {
        paramsFromURL = paramsFromURL.substring(indexQuery + 1);
    } else {
        paramsFromURL = "";
    }
    var params = paramsFromURL.split("&");
    for (var i = 0; i < params.length; i++) {
        var pair = params[i].split("=");
        if (pair[1] != null && pair[1] !== "") {
            dictionary.put(pair[0], pair[1]);
        }
    }
    return dictionary;
}

// přidá do outputDict parametr z URL, pokud tam je
function addFromURL(inputDict, outputDict, param) {
    if (inputDict.containsKey(param)) {
        outputDict.put(param, inputDict.get(param));
    }
};
function NavDataWrapper() {
	// ************************************************************************
	// PRIVATE VARIABLES AND FUNCTIONS
	// ONLY PRIVELEGED METHODS MAY VIEW/EDIT/INVOKE
	// ***********************************************************************
	var INIC_PARAM = 3;
	var COUNT_PARAMS_IN_PARSNAVDATA = 2;

	var _superCategory = 0;
	var _category = 0;
	var _producers = new Hashtable();
	var _navDataList = new Hashtable();

	var _url = "";

	// pouze pro info k ladeni
	this.urlInfo = "";


	// ************************************************************************
	// PRIVILEGED METHODS
	// MAY BE INVOKED PUBLICLY AND MAY ACCESS PRIVATE ITEMS
	// MAY NOT BE CHANGED; MAY BE REPLACED WITH PUBLIC FLAVORS
	// ************************************************************************
	this.getSuperCategory = function () {
		if (isNaN(_superCategory) || _superCategory < 0)
			return 0;
		return _superCategory;
	};

	// verejna globalni metoda
	this.getCategory = function () {
		if (isNaN(_category) || _category < 0)
			return 0;
		return _category;
	};

	this.getVyrobceIDList = function () {
		var s = "";
		var delimiter = "";
	    var i;
		for (i in _producers.hashtable) {
			if (i == null) {
				continue;
			}
			var keyName = i;
			if (IsNullOrEmpty(keyName)) {
				continue;
			}
			s += delimiter + keyName;
			delimiter = ":";
		}
		return s;
	};

	this.getNavDataList = function () {
		return _navDataList;
	};

	this.parseUrlByParams = function (pnsup_id, pnc_id, pnp_ids, parsNavData) {
		initData();
		this.urlInfo = "";
		var url = pnsup_id + "," + pnc_id + "," + pnp_ids;
		//if (parsNavData != null && typeof (parsNavData) == "ParsNavData") {
		//	// TODO
		//}
		_url = url;
		this.urlInfo = url;
		parseURLValue();
	};

	this.parseUrl = function (url) {
		initData();
		this.urlInfo = "";

		if (url == null || IsNullOrEmpty(url)) {
			return;
		}
		_url = url;
		this.urlInfo = url;
		parseURLValue();
	};

	function initData() {
		_url = "";
		_superCategory = 0;
		_category = 0;
		_producers = new Hashtable();
	}

	// privatni metoda
	function parseURLValue() {
		if (IsNullOrEmpty(_url)) {
			return;
		}
		var arrData = _url.split(',');
		if (arrData.length == 0)
			return;

		if (arrData.length > 0) {
			_superCategory = parseInt(arrData[0]);
		}
		if (arrData.length > 1) {
			_category = parseInt(arrData[1]);
		}
		if (arrData.length > 2) {
		    var vendors = arrData[2].toString().split(':');
		    var vendorLenght = vendors.length;
		    for (var i = 0; i < vendorLenght; i++) {
				if (IsNullOrEmpty(vendors[i])) {
					continue;
				}
				var idVendor = parseInt(vendors[i]);
				if (idVendor > 0) {
					if (!_producers.containsKey(idVendor)) {
						_producers.put(idVendor, idVendor);
					}
				}
			}
		}

		var maxLength = arrData.length - INIC_PARAM;
		if (maxLength >= COUNT_PARAMS_IN_PARSNAVDATA) {
			for (var j = INIC_PARAM; (j + COUNT_PARAMS_IN_PARSNAVDATA) <= maxLength + INIC_PARAM; j = j + COUNT_PARAMS_IN_PARSNAVDATA) {
				var pnd = new ParsNavData();
				var pna_id = parseInt(arrData[j]);
				if (isNaN(pna_id)) {
					continue;
				}
				pnd.pna_id = pna_id;
				var pnv_ids = arrData[j + 1].toString().split(':');
			    var pnv_ids_length = pnv_ids.length;
			    for (var k = 0; k < pnv_ids_length; k++) {
					var pnv_id = parseInt(pnv_ids[k]);
					if (isNaN(pnv_id)) {
						continue;
					}
					if (pnv_id > 0) {
						pnd.IsExistsPNV_ID_notZero = true;
						pnd.pnv_ids.put(pnv_id, pnv_id);
					} else {
						if (!pnd.pnv_ids.containsKey(pnv_id)) {
							pnd.pnv_ids.put(pnv_id, pnv_id);
						}
					}
				}
				if (pnd.pnv_ids.size() > 0) {
					if (!_navDataList.containsKey(pnd.pna_id)) {
						_navDataList.put(pnd.pna_id, pnd);
					}
				}
			}
		}
	};

	this.getURLstring = function () {
		var sText = this.getSuperCategory() + "," + this.getCategory() + ",";
		var sVyrobce = this.getVyrobceIDList();
		if (sVyrobce !== "") {
			sText += sVyrobce;
		} else {
			sText += "0";
		}
		if (!_navDataList.isEmpty()) {
		    var i;
			for (i in _navDataList.hashtable) {
				if (_navDataList.hashtable[i] == null) {
					continue;
				}
				var parsNavData = _navDataList.hashtable[i];
				sText += "," + parsNavData.getURLstring();
			}
		}
		return sText;
	};

	this.addNavDataItem = function (pnaId, pnv_id) {
		var pna_id = parseInt(pnaId);
		if (isNaN(pna_id) || pna_id <= 0)
			return;
		if (!_navDataList.containsKey(pna_id)) {
			var nd = new ParsNavData();
			nd.pna_id = pna_id;
			nd.addValue(pnv_id);
			_navDataList.put(pna_id, nd);
		} else {
			var parsNavData = _navDataList.get(pna_id);
			parsNavData.addValue(pnv_id);
		}
	};
}

function ParsNavData() {
	this.pna_id = 0;
	this.pnv_ids = new Hashtable();
	this.IsExistsPNV_ID_notZero = false;

	this.getURLstring = function () {
		var tmpValues = "";
		var delimiter = "";
		var tmpArrayPnvID = this.pnv_ids.values();
		var tmpArrayPnvIDLength = tmpArrayPnvID.length;
	    var k;
	    for (k = 0; k < tmpArrayPnvIDLength; k++) {
			var pnv_id = parseInt(tmpArrayPnvID[k]);
			if (isNaN(pnv_id)) {
				continue;
			}
			if (pnv_id >= 0) {
				tmpValues += delimiter + pnv_id;
				delimiter = ":";
			}
		}
		if (tmpValues === "") {
			tmpValues = "0";
		}
		return this.pna_id + "," + tmpValues;
	};

	this.getPnaId = function () {
		return this.pna_id;
	};
	this.getPnvIds = function () {
		return this.pnv_ids;
	};
	this.getIsExistsPnvId_notZero = function () {
		return this.IsExistsPNV_ID_notZero;
	};

	this.addValue = function (pnvId) {
		var pnv_id = parseInt(pnvId);
		if (isNaN(pnv_id) //|| pnv_id == 0
			)
			return;
		if (!this.pnv_ids.containsKey(pnv_id)) {
			this.pnv_ids.put(pnv_id, pnv_id);
			if (pnv_id != 0) {
				this.IsExistsPNV_ID_notZero = true;
			}
		}
	};
};
/*
Inicilizuje filtr podel URL. Pokud parametr v #, bere přednostně par. z #
- skladem
- fulltext

*/

var queryPage = undefined;
var sliderValues = undefined;

var jeDealerB2F = undefined;
var mustRedirect;

var $ajxReq;
var $ajxReqNav;


var isLoading = false;
var CONST_DOPRODEJ = "9"; // PLT_ID pro status
var CONST_VYPRODEJ = "2"; // PLT_ID pro status
var CONST_BAZAR = "18";
var CONST_SADY_HAKY = "2,3";
var CONST_CROSSELL = "2";
var CONST_USED = "8";
var CONST_REPAS = "43";

// zviditelnuje/schovava panel s atributem v záhlaví
function showHideHeaderAttributes(attributeId, hide) {
	var panel;
	if (attributeId > 0) {
		panel = $('#fltAtrTiles_' + attributeId);
	} else {
		panel = $('[id^=fltAtrTiles_]');
    }
	if (hide) {
		panel.addClass("hide-i");
	} else {
		panel.removeClass("hide-i");
    }
}

function createFilteredAttributeHtmlElement(attributeId) {

	var attributeName = $('#NavAtrFrm_' + attributeId).data('panel-title');

	var html = '<div class="filtered-params_items-groups" data-modulo="0" data-itemindex="0" data-pna="' +
        attributeId +
        '">' +
        '<div class="filtered-params_items-groups_in">' +
        '<strong class="filtered-params_items-groups_name">' + attributeName + ':</strong>' +
        '</div>' +
        '</div>';

	return $(html);
}

// TODO: hidden class když je to atribut typu 3
function createFilteredAttributeItemHtmlElement(attributeId, valueId, attributeItemElement, navdata) {

	var attributeItemName = $("label[for='" + attributeItemElement.attr("id") + "']")
        .find(".value_label")
        .clone()
        .children()
        .remove()
        .end()
        .text();

	var html = '<span class="filtered-params_item">'
                    + '<span class="filtered-params_item_label">' + attributeItemName + '</span>'
                    + (navdata.indexOf(valueId.toString()) > 0 ? "" : "<button type=\"button\" class=\"btn-remove filtered-params_item_btn-remove js-tooltip\" data-title=\"tip_delete_value\" onclick=\"$('#" + attributeItemElement.attr("id") + "').trigger('click');\"><i class=\"icon-close\"></i></button>")
                + '</span>';

	return $(html);
}

function createFilteredVendorHtmlElement(vendorId, vendorElement) {
	var vendorName = $("label[for='" + vendorElement.attr("id") + "']")
        .find(".value_label")
        .clone()
        .children()
        .remove()
        .end()
        .text();

	var html = '<span class="filtered-params_item">'
                    + '<span class="filtered-params_item_label">' + vendorName + '</span>'
                    + "<button type=\"button\" class=\"btn-remove filtered-params_item_btn-remove js-tooltip\" data-title=\"tip_delete_value\" onclick=\"$('#" + vendorElement.attr("id") + "').trigger('click');\">"
                        + '<i class="icon-close"></i>'
                    + '</button>'
                + '</span>';

	return $(html);
}

function createFilteredFlagHtmlElement(flagElement) {
	var flagName = $("label[for='" + flagElement.attr("id") + "']")
        .find(".value_label")
        .clone()
        .children()
        .remove()
        .end()
        .text();

	var html = '<span class="filtered-params_item">'
                    + '<span class="filtered-params_item_label">' + flagName + '</span>'
                    + "<button type=\"button\" class=\"btn-remove filtered-params_item_btn-remove js-tooltip\" data-title=\"tip_delete_value\" onclick=\"$('#" + flagElement.attr("id") + "').trigger('click');\">"
                        + '<i class="icon-close"></i>'
                    + '</button>'
                + '</span>';

	return $(html);
}

// vrátí, nebo vytvoří container pro zobrazení aplikovaného filtru (celkově)
function EnsureProductFilterFilteredParamsElement() {

	var ctl = $("#proFilter_filteredParams");

	if (ctl.length > 0) {
		return ctl;
	}

	var html = '<div id="proFilter_filteredParams" class="panel filtered-params"><div class="panel-body"></div></div>';

	$("#filterSettingsContainer").after(html);

	return $("#proFilter_filteredParams");
}

// kontroluje jestli existuji nejake vyfiltrovane parametry - pokud ne tak box s filtrovanymi parametry odstrani a vraci false - jinak true
function isExistFilteredParams() {
	var ctls = [$('#filteredAttributesRow'), $('#filterFlagsRow'), $('#filterExcludedFlagsRow'), $('#filterVendorsRow'), $('#filterSearchRow')],
		ctl,
		isExist = false;

	for (ctl in ctls) {
		if (ctls[ctl].children().length > 0) {
			isExist = true;
			break;
		}
	}

	if (!isExist) {
		$('#proFilter_filteredParams').remove();
	}

	return isExist;
}

// -------------------------- Rows START -----------------------------
// vrátí, nebo vytvoří radek pro zobrazení aplikovaných atributů
function EnsureFilteredAttributesRowElement() {

	var ctl = $("#filteredAttributesRow");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_row" id="filteredAttributesRow"></div>';

	var parentCtl = EnsureProductFilterFilteredParamsElement();

	parentCtl.find(".panel-body").append(html);

	return $("#filteredAttributesRow");
}

// vrátí, nebo vytvoří radek pro zobrazení aplikovaných flagů
function EnsureFilteredFlagsRowElement() {

	var ctl = $("#filterFlagsRow");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_row" id="filterFlagsRow"></div>';

	var parentCtl = EnsureProductFilterFilteredParamsElement();

	parentCtl.find(".panel-body").append(html);

	return $("#filterFlagsRow");
}

// vrátí, nebo vytvoří radek pro zobrazení aplikovaných excludovanych flagů
function EnsureFilteredExcludedFlagsRowElement() {

	var ctl = $("#filterExcludedFlagsRow");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_row" id="filterExcludedFlagsRow"></div>';

	var parentCtl = EnsureProductFilterFilteredParamsElement();

	parentCtl.find(".panel-body").append(html);

	return $("#filterExcludedFlagsRow");
}

// vrátí, nebo vytvoří radek pro zobrazení aplikovaných vyrobcu
function EnsureFilteredVendorsRowElement() {

	var ctl = $("#filterVendorsRow");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_row" id="filterVendorsRow"></div>';

	var parentCtl = EnsureProductFilterFilteredParamsElement();

	parentCtl.find(".panel-body").append(html);

	return $("#filterVendorsRow");
}

// vrátí, nebo vytvoří radek pro zobrazení vyhledávání
function EnsureFilteredSearchRowElement() {

	var ctl = $("#filterSearchRow");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_row" id="filterSearchRow"></div>';

	var parentCtl = EnsureProductFilterFilteredParamsElement();

	parentCtl.find(".panel-body").append(html);

	return $("#filterSearchRow");
}


// -------------------------- Containers START -----------------------------
// vrátí, nebo vytvoří container pro zobrazení aplikovaných výrobců
function EnsureFilteredVendorsElement() {

	var ctl = $("#filteredVendors");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_items-groups" id="filteredVendors"><div class="filtered-params_items-groups_in"><strong class="filtered-params_items-groups_name">Značka:</strong></div></div></div>';

	var parentCtl = EnsureFilteredVendorsRowElement();

	parentCtl.append(html);

	return $("#filteredVendors");
}

// vrátí, nebo vytvoří container pro zobrazení aplikovaných flagů (pouze flagy)
function EnsureFilteredFlagsContainerElement() {

	var ctl = $("#filteredFlags");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_items-groups" id="filteredFlags"><div class="filtered-params_items-groups_in"><strong class="filtered-params_items-groups_name">Příznaky:</strong></div></div></div>';

	var parentCtl = EnsureFilteredFlagsRowElement();

	parentCtl.append(html);

	return $("#filteredFlags");
}

// vrátí, nebo vytvoří container pro zobrazení excludované flagů (pouze excludované flagy)
function EnsureFilteredExcludedFlagsContainerElement() {

	var ctl = $("#filteredExcludedFlags");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_items-groups" id="filteredExcludedFlags"><div class="filtered-params_items-groups_in"><strong class="filtered-params_items-groups_name">Vyloučené položky ze seznamu:</strong></div></div></div>';

	var parentCtl = EnsureFilteredExcludedFlagsRowElement();

	parentCtl.append(html);

	return $("#filteredExcludedFlags");
}

// vrátí, nebo vytvoří container pro zobrazeni hledaneho slova v kategorii
function EnsureSearchContainerElement() {

	var ctl = $("#filteredSearch");

	if (ctl.length > 0)
		return ctl;

	var html = '<div class="filtered-params_items-groups" id="filteredSearch"><div class="filtered-params_items-groups_in"><strong class="filtered-params_items-groups_name search-term_label">Vyhledaný výraz:</strong></div></div></div>';

	var parentCtl = EnsureFilteredSearchRowElement();

	parentCtl.append(html);

	return $("#filteredSearch");
}

// reset hodnotových sliderů
function resetSlider(ctlSlider) {
	ctlSlider.val("");

	startLoading(event);

	var slider = $(ctlSlider).data("ionRangeSlider");
	slider.reset();

	slider.update({
		from: slider.options.min,
		to: slider.options.max
	});
}

// reset rozsahových sliderů
function resetSliderLimit(id) {
	var ctlSlider = $('#flt_rangeLimit_' + id);

	ctlSlider.val("");

	var slider = $(ctlSlider).data("ionRangeSlider");
	slider.reset();

	// reset sliderů
	slider.update({
		from: slider.options.min,
		to: slider.options.max
	});

	// vymazání txt polí
	$('#flt_rangeLimitFormMinVal_' + id).val('');
	$('#flt_rangeLimitFormMaxVal_' + id).val('');

	startLoading(event);
}

// zpracování JSONu z navigátoru
function processNavigatorResponse(data) {

	var paramsBeforeHash = listOfParamsBeforeHash(),
		paramsAfterHash = listOfParamsAfterHash(queryPage),
		filteredAttributesRowCtl = EnsureFilteredAttributesRowElement(),
		arrNavData = typeof paramsBeforeHash.hashtable.navdata !== 'undefined' ? paramsBeforeHash.hashtable.navdata.split(',') : [];

	// celkový počet záznamů, pokud je -1, pak proběhl reset filtru a JSON vrací -1, protože nedokáže detekovat počet záznamů
	if (data.productsList.totalRecordCount < 0) {
		var ctl = $("#totalRecordCount");
		ctl.text(ctl.data("defaultvalue"));
	} else {
		$("#totalRecordCount").text(data.productsList.totalRecordCount);
	}

	function navPanel(panelId) {
		this.panelId = panelId;
		this.selectedCount = 0;
	}

	var navigatorResponse = {
		navPanels: []
	};


	// hledani (fulltext)
	$("#filterSearchRow").remove();

	if (paramsAfterHash.containsKey('fulltext') || paramsAfterHash.containsKey('fulltextadd')) {

		if (paramsAfterHash.containsKey('fulltext')) {
			var fulltextEl = '<span class="filtered-params_item"><span class="filtered-params_item_label search-term search-term--primary">' + decodeURIComponent(paramsAfterHash.get("fulltext")) + '</span>';
			if (!paramsAfterHash.containsKey('fulltextadd')) {
				//fulltextEl = fulltextEl + '<button type="button" class="btn-remove filtered-params_item_btn-remove search-remove js-tooltip" data-title="tip_delete_value" data-search="1"><i class="icon-close"></i></button>';
			}
			fulltextEl = fulltextEl + '</span>';
			EnsureSearchContainerElement().find('> :first-child').append(fulltextEl);
		}

		if (paramsAfterHash.containsKey('fulltextadd')) {

			// vytvorime objekt ktery pak pridame do navigatorResponse.navPanels
			var fltFulltextAddPanel = new navPanel('fltFulltextAdd');
			fltFulltextAddPanel.selectedCount = 1;

			var fulltextaddEl = '<span class="filtered-params_item">'
				+ '<span class="filtered-params_item_label search-term">' + decodeURIComponent(paramsAfterHash.get("fulltextadd")) + '</span>'
				+ '<button type="button" class="btn-remove filtered-params_item_btn-remove search-remove js-tooltip" data-title="tip_delete_value" data-search="2">'
				+ '<i class="icon-close"></i>'
				+ '</button>'
				+ '</span>';

			EnsureSearchContainerElement().find('> :first-child').append(fulltextaddEl);

			navigatorResponse.navPanels.push(fltFulltextAddPanel);
		}
	}

	// zobrazím panel s atributem, např. pokud uživatel odebral filtr na tento atribut
	showHideHeaderAttributes(0, false);

	// zpracování atributů
	$(data.navigatorAttributes).each(function (i, attr) {

		var filteredAttributeItemsControls = [];

		$(filteredAttributesRowCtl).find(".filtered-params_items-groups[data-pna='" + attr.id + "']").remove();

		var isAttributeInFilter = false;

		// nove seznamy
		$("input[id^='flt_pnati_'][data-pna='" + attr.id + "']").prop("checked", false);
		$("input[id^='flt_pnati_'][data-pna='" + attr.id + "']").prop("disabled", true);

		var attrNavPanel = new navPanel('NavAtrFrm_' + attr.id);

		$.each(attr.items,
			function (j, item) {
				var ctl = $("input[id^='flt_pnati_'][data-pna='" + attr.id + "'][data-pnati='" + item.id + "']");

				if (ctl.length === 0) {
					return;
				}

				$(ctl).prop("checked", item.value === true);

				$(ctl).prop("disabled", item.enabled !== true);

				// vyrobit element do HTML s možností zrušení filtru
				if (item.value === true) {
					filteredAttributeItemsControls.push(createFilteredAttributeItemHtmlElement(attr.id, item.id, ctl, arrNavData));
					isAttributeInFilter = true;

					// navyseni celkoveho poctu oznacenych attributu
					attrNavPanel.selectedCount++;

					if (attr.showInHeader) {
						// pokud jsem vybral hodnotu z atributu s příznakem "V záhlaví", schovávám cely panel
						showHideHeaderAttributes(attr.id, true);
					}
				}

				$("label[for='" + ctl.attr("id") + "']").find(".value_counter").text("(" + item.productCount + ")");


			});

		// boolean hodnoty
		$("input[id^='flt_bool_'][data-pna='" + attr.id + "']").prop("checked", false);
		$("input[id^='flt_bool_'][data-pna='" + attr.id + "']").prop("disabled", true);
		$.each(attr.items,
			function (j, item) {
				var ctl = $("input[id^='flt_bool_'][data-pna='" + attr.id + "'][data-boolvalue='" + item.id + "']");

				if (ctl.length === 0) {
					return;
				}

				$(ctl).prop("checked", item.value === true);

				$(ctl).prop("disabled", item.enabled !== true);

				// vyrobit element do HTML s možností zrušení filtru
				if (item.value === true) {
					filteredAttributeItemsControls.push(createFilteredAttributeItemHtmlElement(attr.id, item.id, ctl, arrNavData));
					isAttributeInFilter = true;

					// navyseni celkoveho poctu oznacenych attributu
					attrNavPanel.selectedCount++;
				}

				$("label[for='" + ctl.attr("id") + "']").find(".value_counter").text("(" + item.productCount + ")");
			});

		// hodnotové slidery
		var ctlRange = $("input[id^='flt_range_'][data-pna='" + attr.id + "']");
		// rozsahové slidery
		var ctlRangeLimit = $("input[id^='flt_rangeLimit_'][data-pna='" + attr.id + "']");

		if ($(ctlRange).length === 1) {
			var minIndex = 999;
			var maxIndex = -1;

			var s = "";

			$.each(attr.items,
				function (j, item) {
					s = s + item.id + ": " + item.productCount + ": " + item.value + ", ";
					if (/*item.productCount > 0 &&*/ item.value === true) {
						if (minIndex > j) {
							minIndex = j;
						}

						if (j > maxIndex) {
							maxIndex = j;
						}
					}
				});

			if (minIndex === 999 || maxIndex < 0) {
				return;
			}

			var newArray = $.grep(attr.items, function (item, i) { return (/*item.productCount > 0 &&*/ item.value === true) | i < minIndex | i > maxIndex; });

			minIndex = 999;
			maxIndex = -1;

			$.each(newArray,
				function (j, item) {
					if (/*item.productCount > 0 &&*/ item.value === true) {
						if (minIndex > j) {
							minIndex = j;
						}

						if (j > maxIndex) {
							maxIndex = j;
						}
					}
				});

			newArray = $.map(newArray, function (item, i) { return item.id; });

			var slider = $(ctlRange).data("ionRangeSlider");

			// nikdo neví, na co to je ...
			slider.update({
				from: minIndex,
				to: maxIndex,
				values: newArray
			});

			if (filteredAttributesRowCtl.length === 0) {
				filteredAttributesRowCtl = EnsureFilteredAttributesRowElement();
			}

			var filteredSliderAttributeParentCtl = createFilteredAttributeHtmlElement(attr.id);

			var html = '<span class="filtered-params_item">'
				+ '<span class="filtered-params_item_label">' + slider.options.prettify(slider.result.from_value) + '-' + slider.options.prettify(slider.result.to_value) + '</span>'
				+ "<button type=\"button\" class=\"btn-remove filtered-params_item_btn-remove js-tooltip\" data-title=\"tip_delete_value\" onclick=\"resetSlider($('#" + ctlRange.attr("id") + "'));\">"
				+ '<i class="icon-close"></i>'
				+ '</button>'
				+ '</span>';
			filteredSliderAttributeParentCtl.find('> :first-child').append(html);

			filteredAttributesRowCtl.append(filteredSliderAttributeParentCtl);
		} else if ($(ctlRangeLimit).length === 1) {
			// pokud se pravítkem nastaví jedna hodnota tím, že se krajni body posunou k sobě, tak attr.selectedNavigatorAttribute.length == 1
			if (attr.selectedNavigatorAttribute == null || attr.selectedNavigatorAttribute.length == 0 || attr.selectedNavigatorAttribute.length > 2) {
				return;
			}

			var slider = $(ctlRangeLimit).data("ionRangeSlider");
			// možnná by to mělo být taky slider.update, ale nikdo nenví, proč to je výše, tak to sem dávat nebudu

			if (filteredAttributesRowCtl.length === 0) {
				filteredAttributesRowCtl = EnsureFilteredAttributesRowElement();
			}

			var filteredSliderAttributeParentCtl = createFilteredAttributeHtmlElement(attr.id);
			var html = '<span class="filtered-params_item">';
			if (attr.selectedNavigatorAttribute.length == 2) {
				//html += '<span class="filtered-params_item_label">' + attr.selectedNavigatorAttribute[0].numberFormat('# ### ###') + ' -' + attr.selectedNavigatorAttribute[1].numberFormat('# ### ###') + '</span>';
				//html += '<span class="filtered-params_item_label">' + (attr.selectedNavigatorAttribute[0] / attr.valueMultiplicator).numberFormat('0.##') + ' -' + (attr.selectedNavigatorAttribute[1] / attr.valueMultiplicator).numberFormat('0.##') + '</span>';
				//html += '<span class="filtered-params_item_label">' + (attr.selectedNavigatorAttribute[0] / attr.valueMultiplicator) + ' - ' + (attr.selectedNavigatorAttribute[1] / attr.valueMultiplicator) + '</span>';
				html += '<span class="filtered-params_item_label">' + formatNum(attr.selectedNavigatorAttribute[0] / attr.valueMultiplicator) + ' - ' + formatNum(attr.selectedNavigatorAttribute[1] / attr.valueMultiplicator) + '</span>';
			} else {
				//html += '<span class="filtered-params_item_label">' + attr.selectedNavigatorAttribute[0].numberFormat('# ### ###') + '</span>';
				//html += '<span class="filtered-params_item_label">' + (attr.selectedNavigatorAttribute[0] / attr.valueMultiplicator).numberFormat('0.##') + '</span>';
				//html += '<span class="filtered-params_item_label">' + (attr.selectedNavigatorAttribute[0] / attr.valueMultiplicator) + '</span>';
				html += '<span class="filtered-params_item_label">' + formatNum(attr.selectedNavigatorAttribute[0] / attr.valueMultiplicator) + '</span>';
            }
			html += "<button type=\"button\" class=\"btn-remove filtered-params_item_btn-remove js-tooltip\" data-title=\"tip_delete_value\" onclick=\"resetSliderLimit(" + attr.id + ");\">"
				+ '<i class="icon-close"></i>'
				+ '</button>'
				+ '</span>';
			filteredSliderAttributeParentCtl.find('> :first-child').append(html);

			filteredAttributesRowCtl.append(filteredSliderAttributeParentCtl);

		} else if (isAttributeInFilter === true) {

			if (filteredAttributesRowCtl.length === 0) {
				filteredAttributesRowCtl = EnsureFilteredAttributesRowElement();
			}

			var filteredAttributeParentCtl = createFilteredAttributeHtmlElement(attr.id);

			$.each(filteredAttributeItemsControls, function (i, el) {
				filteredAttributeParentCtl.find('> :first-child').append(el);
			});


			filteredAttributesRowCtl.append(filteredAttributeParentCtl);
		}

		// ulozeni vybraneho atributu a jeho dalsich informaci do globalniho pomocneho objektu
		if (attrNavPanel.selectedCount !== 0) {
			navigatorResponse.navPanels.push(attrNavPanel);
		}
	});

	// zpracování výrobců
	// 1. likvidace filtru
	$('#filterVendorsRow').remove();

	// 2. disable všech výrobců
	$("input[id^='chkVendor_'][data-pnp]").each(function (i, ctlVendor) {
		$(ctlVendor).prop("disabled", true);

		$(ctlVendor).prop("checked", false);

		$("label[for='" + $(ctlVendor).attr("id") + "']").find(".value_counter").text("(0)");
	});


	var vendorsNavPanel = new navPanel('fltVendorList');

	// 3. enable těch výrobců, kteří přišli v response
	$(data.vendors).each(function (i, vendor) {

		var $ctl = $("input[id^='chkVendor_'][data-pnp='" + vendor.id + "']");

		// v kolekci může být výrobce, co není ve stránce (např. s id <= 0)
		if ($ctl.length === 0) return;

		// pomocna promennta pro ulozeni stavu inputu zda-li byl zaskrtnut nebo ne
		const isChecked = vendor.value === true;

		// pokud nebyl predtim checkbox zaskrtnut jak lze vyhodnotit dle API jestli ma byt input disablovan nebo ne
		// je to z toho duvodu, ze pokud by byl input disablovan a naslednym sortovanim a serazenim by byl input schovan pro uzivatele tak by na nej jiz nebylo mozne provolavat triggery na click
		// neslo by tak napriklad odebrat filtr z chipu na produkty a take na panelu svitili ze existuje minimalne jedna zvolena polozka ale ta po rozbaleni panelu nebyla videt
		const isDisabled = !isChecked && !vendor.enabled;

		// nastaveni disabled stavu
		$ctl.prop("disabled", isDisabled);

		// nastaveni checked stavu
		$ctl.prop("checked", isChecked);

		if (isChecked) {

			var vendorElement = createFilteredVendorHtmlElement(vendor.id, $ctl);

			EnsureFilteredVendorsElement().find('> :first-child').append(vendorElement);

			// navyseni celkoveho poctu oznacenych vyrobcu
			vendorsNavPanel.selectedCount++;
		}

		$("label[for='" + $ctl.attr("id") + "']").find(".value_counter").text("(" + vendor.productCount + ")");
	});

	// ulozeni vybraneho vyrobce a jeho dalsich informaci do globalniho pomocneho objektu
	if (vendorsNavPanel.selectedCount !== 0) {
		navigatorResponse.navPanels.push(vendorsNavPanel);
	}


	var stocksNavPanel = new navPanel('fltStockList');

	// cbx pro vsechny sklady - skladem ve vsech skladech
	if ($('input[id="chb_Stock"]').prop('checked') === true) {
		stocksNavPanel.selectedCount++;
	}

	const onStockParam = paramsAfterHash.get("onstock");

	// INFO: Zakomentováno, protože pracujeme pouze s jedním skladem - OVA
	// $(data.stocks).each(function (i, stock) {

	// 	var ctl = $("input[id^='chb_Stock_'][data-stock='" + stock.id + "']");

	// 	const minStockValuePanel = $("[id^='minStockValuePanel_Stock_" + stock.id + "']")

	// 	if (stock.value === true) {
	// 		minStockValuePanel.removeClass("hide-i");
	// 		$(ctl).prop("checked", true);

	// 		// navyseni celkoveho poctu oznacenych skladu
	// 		stocksNavPanel.selectedCount++;
	// 		return;
	// 	}

	// 	minStockValuePanel.addClass("hide-i");
	// });


	if (onStockParam){
		const minStockValuePanel = $("[id^='minStockValuePanel_Stock']");

		if (onStockParam === "1") {
			minStockValuePanel.removeClass("hide-i");
			$(ctl).prop("checked", true);

			// navyseni celkoveho poctu oznacenych skladu
			stocksNavPanel.selectedCount++;
			return;
		}

		minStockValuePanel.addClass("hide-i");

	}



	// ulozeni vybraneho skladu a jeho dalsich informaci do globalniho pomocneho objektu
	if (stocksNavPanel.selectedCount !== 0) {
		navigatorResponse.navPanels.push(stocksNavPanel);
	}

	// nastavení flagů
	var flagsNavPanel = new navPanel('fltFlagList');

	$("#filterFlagsRow").remove();

	$("#filterIncludeFlags").find("input[type='checkbox']:checked").each(function (i, flagCtl) {
		var flagElement = createFilteredFlagHtmlElement($(flagCtl));

		EnsureFilteredFlagsContainerElement().find('> :first-child').append(flagElement);

		// navyseni celkoveho poctu oznacenych flagů
		flagsNavPanel.selectedCount++;
	});

	// ulozeni vybraneho flagu a jeho dalsich informaci do globalniho pomocneho objektu
	if (flagsNavPanel.selectedCount !== 0) {
		navigatorResponse.navPanels.push(flagsNavPanel);
	}

	// nastavení excludovaných flagů
	var excludeFlagsNavPanel = new navPanel('fltExcludeFlagsList');

	$("#filterExcludedFlagsRow").remove();

	$("#filterExcludeFlags").find("input[type='checkbox']:checked").each(function (i, flagCtl) {
		var flagElement = createFilteredFlagHtmlElement($(flagCtl));

		EnsureFilteredExcludedFlagsContainerElement().find('> :first-child').append(flagElement);

		// navyseni celkoveho poctu oznacenych excludovanych flagů
		excludeFlagsNavPanel.selectedCount++;
	});

	// ulozeni vybraneho excludovaneho flagu a jeho dalsich informaci do globalniho pomocneho objektu
	if (excludeFlagsNavPanel.selectedCount !== 0) {
		navigatorResponse.navPanels.push(excludeFlagsNavPanel);
	}

	// pokud je potreba tak uplne odstrani blok s vyfiltrovanymi parametry
	isExistFilteredParams();

	// pokud jsou rozdilne hodnoty v url a vyfiltrovane hodnoty tak pridej tlacitko pro zruseni vsech filtru
	if ((paramsBeforeHash.hashtable.navdata !== paramsAfterHash.hashtable.navdatafilter) || (typeof paramsAfterHash.hashtable.vendors !== 'undefined') || (typeof paramsAfterHash.hashtable.fulltextadd !== 'undefined') || (typeof paramsAfterHash.hashtable.plt_id !== 'undefined') || (typeof paramsAfterHash.hashtable.plt_id_or_ext !== 'undefined') || (typeof paramsAfterHash.hashtable.is_top !== 'undefined') || (typeof paramsAfterHash.hashtable.pse_ids !== 'undefined') || (typeof paramsAfterHash.hashtable.no_sale !== 'undefined') || (typeof paramsAfterHash.hashtable.vyhnab !== 'undefined') || (typeof paramsAfterHash.hashtable.crossell !== 'undefined')) {
		EnsureBtnRemoveAllFilters();
	}

	// doplneni ciselne hodnoty celkoveho poctu zvolenych hodnot v danem panelu
	infoCheckedCount(navigatorResponse.navPanels);

	// tlacitko pro reset filtru na responsivnim pohledu
	btnFilterAsideResetControl(navigatorResponse.navPanels);

	/**
	* Upravi poradi parametru tak aby v prvni rade byly dostupne pouze ty, ktere maji nejake viditelne produkty.
	* */
	sortingNavigatorParams();
}

function infoCheckedCount(selectedPanels) {

	$('#proFilter').find('.panel-heading_counter').remove();

	if (selectedPanels.count === 0) {
		return;
	}

	$(selectedPanels).each(function (i, panel) {
		var $panel = $('#' + panel.panelId),
			$panelHeadingCounter = $panel.find('.panel-heading_counter');

		if ($panel.find('.panel-heading_counter').length === 0) {
			$panelHeadingCounter = $('<span class="badge badge--secondary panel-heading_counter"></span>');

			$panel.find('.panel-title').append($panelHeadingCounter);
		}

		$panelHeadingCounter.text(panel.selectedCount);
	});
}

function EnsureBtnRemoveAllFilters() {
	var $btnRemoveAllFilters = $('#btnRemoveAllFilters');

	if ($btnRemoveAllFilters.length > 0) {
		return;
	}

	var btnRemoveAllFiltersHtml = '<div class="panel-footer"><button id="btnRemoveAllFilters" type="button" class="btn btn--link filtered-params_btn-remove-all" onclick="resetFilter();"><span class="btn_label">Zrušit všechny filtry</span></button></div>';

	$('#proFilter_filteredParams').append(btnRemoveAllFiltersHtml);
}

function btnFilterAsideResetControl(filteredItems) {

	var $btnFilterAsideReset = $('#btnFilterAsideReset');
	var showHideCssClass = 'btn--hide';

	if (filteredItems.length > 0) {
		$btnFilterAsideReset.removeClass(showHideCssClass);
	} else {
		$btnFilterAsideReset.addClass(showHideCssClass);
	}
}

/**
 * Upravi poradi parametru tak aby v prvni rade byly dostupne pouze ty, ktere maji nejake viditelne produkty.
 * Metoda resi i zobrazeni nebo skryti tlacitka pro zobrazeni vice nebo mene hodnot.
 * */
function sortingNavigatorParams() {
	const $valuesGroups = $("#proFilterContent").find(".pro-filter-aside_values-groups");

	const cssSelectors = {
		visible: "attr-value-visible",
		hide: "attr-value-hide",
		discard: "attr-value-discard"
	}

	const navigatorItemsControl = (valuesGroupItems, collapseState, parentPanelID) => {

		// nejprve se odeberou vsechny ridici css tridy a nastavi se css trida na prvky, ktere nemaji zadne dostupne produkty
		valuesGroupItems.each((index, item) => {
			const $item = $(item);
			const valueCounterValue = $item.find('.value_counter').text();

			// pokud neni hodnota s poctem dostupnych produktu k dispozici tak pokracuj na dalsi item
			if (!valueCounterValue) return true;

			const $cbx = $item.find('input[type="checkbox"]');
			const isChecked = $cbx && $cbx.prop('checked');

			const productsCount = parseInt(valueCounterValue.match(/\d+/)[0]);

			// odebrani vsech ridicich css trid
			$item.removeClass(`${cssSelectors.hide} ${cssSelectors.visible} ${cssSelectors.discard}`);

			// pokud polozka nema zadne produkty k zobrazeni tak nastavim element oznacim css tridou jako vyrazeny
			// POZOR - prvek nelze odebrat ze stranky prootoze by pak nefungovalo parsovani dat z API na element - proto jen oznaceni css tridou pro skryti
			if (!isChecked && productsCount === 0) {
				$item.addClass(cssSelectors.discard);
			}
		});

		if (parentPanelID == "fltVendorList") {
			// logika pro výrobce:
			//	1. seradit VSE pres pocet
			//	2. dat bokem prvnich 5
			//	3. zbyle seradit pres discard a abecedne
			//	4. spojit zpet
			valuesGroupItems.sort((a, b) => {
				const $a = $(a);
				const $b = $(b);

				const valueCounterValueA = $a.find('.value_counter').text();
				const valueCounterValueB = $b.find('.value_counter').text();
				if (!valueCounterValueA || !valueCounterValueB) return 0;
				const productsCountA = parseInt(valueCounterValueA.match(/\d+/)[0]);
				const productsCountB = parseInt(valueCounterValueB.match(/\d+/)[0]);
				return productsCountB - productsCountA;
			});

			var sliceTop = valuesGroupItems.slice(0, 5);
			var sliceBottom = valuesGroupItems.slice(5);
			sliceBottom.sort((a, b) => {
				const $a = $(a);
				const $b = $(b);

				if ($a.hasClass(cssSelectors.discard) && !($b.hasClass(cssSelectors.discard))) {
					return 1;
				} else if (!($a.hasClass(cssSelectors.discard)) && $b.hasClass(cssSelectors.discard)) {
					return -1;
				}
				else {
					const namea = $a.find('.value_label').text();
					const nameb = $b.find('.value_label').text();
					return namea.localeCompare(nameb);
				}
			});

			valuesGroupItems = $.merge(sliceTop, sliceBottom);
		} else {
			// půvopdní společná logika
			valuesGroupItems.sort((a, b) => {
				const $a = $(a);
				const $b = $(b);

				if ($a.hasClass(cssSelectors.discard)) return 1;
				if ($b.hasClass(cssSelectors.discard)) return -1;

				return 0
			});
        }

		// pokud hodnoty, ktere maji na sobe nejake produkty vice jak 5 tak dopln css tridy pro zobrazeni nebo skryti - dle state na tlacitku zobrazit nebo skryt
		if (valuesGroupItems.length > 5) {
			valuesGroupItems.each((index, item) => {
				if (index < 5) return true;

				const $item = $(item);

				if (collapseState) {
					$item.addClass(cssSelectors.hide);

					return true;
				}

				$item.addClass(cssSelectors.visible);
			});
		};

		return valuesGroupItems;
	}

	$valuesGroups.each((i, valuesGroup) => {
		const $valuesGroup = $(valuesGroup);

		// pokud se v boxu se skupinama hodnot nenachazi element pro zobrazeni poctu dostupnych produktu tak preskoc na dalsi
		if ($valuesGroup.find(".value_counter").length === 0) return true;

		// tlačítko "zobrazit/skrýt další"
		const $moreLessToggleBtn = $valuesGroup.next(".pro-filter-aside_values-btn-toggle");

		// state tlacitka zobrazit nebo schovat pro konkretni box
		const collapseState = $moreLessToggleBtn.hasClass("collapsed"); // true kdyz je seznam zabaleny

		// ulozeni jednotlivych itemu ve skupine hodnot do pameti at se nejprve provedou veskere potrebne upravy na itemech a az pak at se vlozi do stranky
		const $valuesGroupItems = $valuesGroup.find("li").clone();

		// kod nize zajistuje schovani celych panelu pokud jsou veskere hodnoty v nem s nulovym poctem
		const $valuesGroupPanel = $valuesGroup.parent().parent();

		$valuesGroup.html(navigatorItemsControl($valuesGroupItems, collapseState, $valuesGroupPanel.attr('id')));

		// polozky ktere maji nejake dostupne produkty
		const $availableItems = $valuesGroup.find(`li:not(.${cssSelectors.discard})`);

		// jen pro atributy (ne výrobce...)
		if ($valuesGroupPanel.data('pna')) {
			var attributeInHeader = $('#fltAtrTiles_' + $valuesGroupPanel.data('pna')).length > 0;
			// pokud tento atribut není v hlavičce, odeberu tridu z celého panelu pokud byla drive nastavena
			// pokudje v hlavičce, tak třídu "hide-i" musím necjat, protože zde musí zůstat schovaný
			if (!attributeInHeader) {
				$valuesGroupPanel.removeClass("hide-i");
			}

			// pokud nemám žádnou hodnotnu na výběr, schováme celý panel
			if ($availableItems.length == 0) {
				$valuesGroupPanel.addClass("hide-i");
				if (attributeInHeader) {
					// pokud není k dispozici žádná hodnota pro atribut s příznakem "V záhlaví", schovávám celý panel
					showHideHeaderAttributes($valuesGroupPanel.data('pna'), true);
				}
				return;
			}
		}

		// odeberu tridu na tlacitko pro zobrazit vice ci mene pokud byla drive nastavena
		$moreLessToggleBtn.removeClass("hide-i");

		// pokud je dostupnych polozek mene nez 5 tak tlacitko zobrazit nebo schovat skryju
		if ($availableItems.length < 5) {
			$moreLessToggleBtn.addClass("hide-i");
		}
	});
}



function startLoading(event, mustRedirect) {

	//$(document).ajaxStart(function () {
	//	hideLoading();
	//});

	//if (isLoading) {
	//	if (event != null) {
	//		event.preventDefault();
	//	}
	//	return;
	//}

	isLoading = true;
	// seznam vsech platnych parametru pred HASHem v URL
	var paramsBeforeHash = listOfParamsBeforeHash();
	// seznam vsech platnych parametru za HASHem v URL
	var paramsAfterHash = listOfParamsAfterHash(queryPage);
	// seznam vsech platnych parametru pred HASHem v URL slouzi pouze pro mustRedirect

	var stocks;
	if (mustRedirect) {
		var paramStock = 0;
		var paramStocks = paramsBeforeHash.containsKey("stocks");
		if (paramsBeforeHash.containsKey("onstock")) paramStock = paramsBeforeHash.get("onstock");

		var isCheck = $('input[id="chb_Stock"]').is(':checked');

		paramsAfterHash.remove("guid");
		paramsBeforeHash.remove("stocks");


		if (paramStocks) {
			paramsAfterHash.remove("stocks");
			stocks = "";
			$('input[id*="chb_Stock_"]:checked').each(function () {
				stocks = concateString(stocks, $(this).attr("id").replace("chb_Stock_", ""), ",");
			});
			if (stocks.length > 0) paramsBeforeHash.put("stocks", stocks);
		}

		if ((!isCheck && paramStock === 1) || paramStocks) {
			paramsAfterHash.remove("onstock");
			if (isCheck) {
				paramsBeforeHash.put("onstock", "1");
			} else {
				paramsBeforeHash.remove("onstock");
			}
		}

		var newUrlParam2 = createURLbyParams(paramsBeforeHash);
		var newHash2 = combineParamsForHashURL(paramsBeforeHash, paramsAfterHash);
		redirectWithParam(newUrlParam2, newHash2);
		return;
	}

	var navigatorChanged = false;

	var sortInfoNew = new sortInfo();
	if ($("#sortParam").val()) {
		var sort = $("#sortParam").val().split("_");
		if (sort[0] != null) {
			sortInfoNew.sortpar = sort[0];
			sortInfoNew.sortdir = sort[1];
		}
	}

	var actionShort = true;
	var actionShortAdd = false;

	//	sortInfoNew.sortdir = "asc";
	// zpracovani tlacitek, updatuje nebo nastavuje pouze pokud se vyvolava jeho udalost. Jinak se nemeni a zustava stejne jak bylo doposud
	if (event) {

		var eventTarged = event.currentTarget ? event.currentTarget : event.target,
			eventTargedId = event.currentTarget.id ? event.currentTarget.id : event.target.id;

		// kontrola opakovaneho ajax requestu na stejnou stranku v pripade ze scroluju nahoru a dolu - dochazelo obcas k duplicitam
		if (typeof $ajxReq !== 'undefined' && $ajxReq.readyState === 1 && eventTargedId === 'pag_next_add') {
			return false;
		}

		// strankovani
		if (eventTargedId.indexOf("srtAttr_") > -1) {
			var sort = eventTargedId.split("_");
			if (sort[0] != null) {
				sortInfoNew.sortpar = sort[1];
				sortInfoNew.sortdir = sort[2];
			}
		}

		if (eventTargedId === "fulltextadd") {

			var fulltextadd = encodeURIComponent($.trim($("#fulltextadd_inp").val()));
			//if (paramsBeforeHash.containsKey("fulltextadd") || paramsAfterHash.containsKey("fulltextadd")) {
			//	fulltextadd = paramsBeforeHash.get("fulltextadd") + "+" + fulltextadd;
			//}
			if ($.trim(fulltextadd) != "") {
				paramsAfterHash.put("fulltextadd", fulltextadd);
			} else {
				paramsAfterHash.put("fulltextadd", "");
			}

			//mustRedirect = true;

		}

		var chkCurrenTargetAttrChecked = null;
		if (event != null && eventTarged != null) {
			chkCurrenTargetAttrChecked = $(eventTarged).is(':checked');

			//if (isIE7()) {
			//    chkCurrenTargetAttrChecked = eventTarged.checked === true ? null : true;
			//} else if (eventTarged.attributes) {
			//    chkCurrenTargetAttrChecked = eventTarged.attributes["checked"];
			//}
		}

		// strankovani
		if (eventTargedId.indexOf("pag_") > -1) {
			paramsAfterHash.put("page", eventTarged.getAttribute("data-page"));
			if (eventTargedId === "pag_next_add") {
				actionShortAdd = true;
			} else {
				actionShort = true;
			}
		}
		// konec strankovani

		// pohledy
		if (eventTargedId != null && eventTargedId.indexOf("btnView_") > -1) {
			var view = eventTargedId.replace("btnView_", "").toLowerCase();
			paramsAfterHash.put("view", view);
			if (view === "table_img") {
				paramsAfterHash.put("rows", 24);
			} else if (view === "img") {
				paramsAfterHash.put("rows", 15);
			} else {
				paramsAfterHash.put("rows", 12);
			}
		}

		//vendors sbiram vzdy (je to nutne?)
		//pokud je -1 je z UI ale filtr je prazdny tzn ma se nasatvit (na rozdil od "")
		//pokud by byl jen "" problem v combineFilters [OSP]
		var vendors = "";
		$("#fltVendorList input[id*=chkVendor_]:checked").each(function () {
			vendors = concateString(vendors, $(this).attr("id").replace("chkVendor_", ""), ",");
		});
		paramsAfterHash.put("vendors", vendors);

		//vyhodna nabidka
		//pokud je -1 je z UI ale filtr je prazdny tzn ma se nasatvit (na rozdil od "")
		//pokud by byl jen "" problem v combineFilters [OSP]
		var spec_offer = "";
		$("#fltFlagList input[id*=chb_spec_offer_]:checked").each(function () {
			spec_offer = concateString(spec_offer, $(this).attr("id").replace("chb_spec_offer_", ""), ",");
		});
		paramsAfterHash.put("spec_offer", spec_offer);

		// INFO: Aktuálně nepoužíváme objekt stocks, protože pracujeme pouze s jedním skladem - OVA
		// stocks = "";

		// $('input[id*="chb_Stock_"]:checked').each(function () {
		// 	stocks = concateString(stocks, $(this).attr("id").replace("chb_Stock_", ""), ",");
		// });

		// paramsAfterHash.put("stocks", stocks);

		// pokud neni lazy load, tak  vynuluj strankovnik na prvni stranu
		if (eventTargedId !== 'pag_next_add' && eventTargedId.indexOf("pag_") === -1) {
			paramsAfterHash.put("page", 1);
		};

		// strankovani
		if (eventTargedId.indexOf("chb_page_") > -1) {
			paramsAfterHash.put("page", eventTarged.getAttribute("data-page"));
		}

		if (eventTargedId === "chb_PltID_1") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("plt_id", 1);
			} else {
				paramsAfterHash.put("plt_id", "");
			}
		}

		if (eventTargedId === "chb_vyprodej") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("plt_id", CONST_VYPRODEJ);
			} else {
				paramsAfterHash.put("plt_id", "");
			}
		}

		if (eventTargedId === "chb_Doprodej") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("plt_id", CONST_DOPRODEJ);
			} else {
				paramsAfterHash.put("plt_id", "");
			}
		}

		if (eventTargedId === "chb_bazar") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("plt_id_or_ext", CONST_BAZAR);
			} else {
				paramsAfterHash.put("plt_id_or_ext", "");
			}
		}

		if (eventTargedId === "chb_used") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("plt_id_or_ext", CONST_USED);
			} else {
				paramsAfterHash.put("plt_id_or_ext", "");
			}
		}

		if (eventTargedId === "chb_repas") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("plt_id_or_ext", CONST_REPAS);
			} else {
				paramsAfterHash.put("plt_id_or_ext", "");
			}
		}

		if (eventTargedId === "chb_sdhk") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("pse_ids", CONST_SADY_HAKY);
			} else {
				paramsAfterHash.put("pse_ids", "");
			}
		}

		if (eventTargedId === "chb_vyh_nab") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("vyhnab", "1");
			} else {
				paramsAfterHash.put("vyhnab", "");
			}
		}

		if (eventTargedId === "chb_without_sale") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("no_sale", CONST_DOPRODEJ);
			} else {
				paramsAfterHash.put("no_sale", "");
			}
		}

		if (eventTargedId === "chb_crossell") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("crossell", CONST_CROSSELL);
			} else {
				paramsAfterHash.put("crossell", "");
			}
		}

		if (eventTargedId === "chb_edProfi") {
			if (jeDealerB2F && chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("b2fstat", "1");
			} else {
				paramsAfterHash.put("b2fstat", "");
			}
		}

		if (eventTargedId === "chb_TOP") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("is_top", "1");
			} else {
				paramsAfterHash.put("is_top", "");
			}
		}

		if (eventTargedId === "chb_license") {
			if (chkCurrenTargetAttrChecked === true) {
				paramsAfterHash.put("license", "1");
			} else {
				paramsAfterHash.put("license", "");
			}
		}

		if (eventTargedId === "onstockqty") {
			const value = $(eventTarged).val();

			paramsAfterHash.put(eventTargedId, value);

		}

		if (eventTargedId === "maxP" || eventTargedId === "minP" || eventTargedId === 'rangePriceSlider') {
			var minPrice = strToInt($('#minP').val());
			var maxPrice = strToInt($('#maxP').val());

			var slider = $("#priceRange").data("ionRangeSlider");

			slider.update({
				from: minPrice,
				to: maxPrice
			});

			paramsAfterHash.put("minpf", minPrice);
			paramsAfterHash.put("maxpf", maxPrice);
		}

		// pro rozsahové slidery přenáším z textových polí hodnoty do slideru
		/*
		if (eventTargedId.indexOf("flt_rangeLimitFormMinVal_") > -1) {
			var minVal = strToInt($(eventTarged).val());
			var pnaId = $(eventTarged).data("pna");
			var slider = $("#flt_rangeLimit_" + pnaId).data("ionRangeSlider");
			slider.update({
				from: minVal
			});
		}
		if (eventTargedId.indexOf("flt_rangeLimitFormMaxVal_") > -1) {
			var maxVal = strToInt($(eventTarged).val());
			var pnaId = $(eventTarged).data("pna");
			var slider = $("#flt_rangeLimit_" + pnaId).data("ionRangeSlider");
			slider.update({
				to: maxVal
			});
		}
		*/
	} else {
		var priceSliderCtl = $("#priceRange");

		var sliderData = priceSliderCtl.data("ionRangeSlider");

		if (sliderData) {
			$('#minP').val(sliderData.result.from);
			$('#maxP').val(sliderData.result.to);


			paramsAfterHash.put("minpf", sliderData.result.from);
			paramsAfterHash.put("maxpf", sliderData.result.to);
		}
	}
	// konec zpracovani UDALOSTI

	//stock
	var onstock = $('#chb_Stock').is(':checked');

	if (onstock) {
		const onStockQtyValue = $("#onstockqty").val();

		paramsAfterHash.put("onstock", "1");
		paramsAfterHash.put("onstockqty", onStockQtyValue || 1);

	} else {
		paramsAfterHash.put("onstock", "0");
		paramsAfterHash.remove("onstockqty");
	}

	paramsAfterHash.put("tabselect", $('#tabSelect').val()); // slouzi pro identifikaci zvoleneho tabu

	collectNavigatorData(paramsAfterHash, paramsBeforeHash);

	// nastaveni sortovani do URL
	setSortValues(paramsAfterHash, paramsBeforeHash, sortInfoNew);
	// osetreni cookie pro sort
	if (!paramsAfterHash.containsKey("sortpar")) {
		var sortIdUrlCookie = getCookie("pgProdSort");
		if (IsNotNullOrEmpty(sortIdUrlCookie)) {
			sortIdUrlCookie = base64_decode(sortIdUrlCookie);
			var sortCookiesInfo;
			if (IsNotNullOrEmpty(sortIdUrlCookie)) {
				sortCookiesInfo = sortIdUrlCookie.split(';');
				if (sortCookiesInfo[0] != null) {
					paramsAfterHash.put("sortpar", sortCookiesInfo[0]);
					if (sortCookiesInfo[1] != null) {
						paramsAfterHash.put("sortdir", sortCookiesInfo[1].toLowerCase());
					} else {
						paramsAfterHash.remove("sortdir");
					}
				}
			}
		}
	}

	if (navigatorChanged) {
		paramsAfterHash.remove("navdata");
	}
	if (mustRedirect) {
		var newUrlParam1 = createURLbyParams(paramsBeforeHash);
		var newHash1 = combineParamsForHashURL(paramsBeforeHash, paramsAfterHash);
		redirectWithParam(newUrlParam1, newHash1);
		return;
	}


	var guid = $("#tmpGuid").val();
	if (IsNotNullOrEmpty(guid)) {
		paramsAfterHash.put("guid", guid);
	}


	paramsAfterHash.put("ajx", true);

	var newURLforAjax = combineParamsForURL(paramsBeforeHash, paramsAfterHash);
	var newHash = combineParamsForHashURL(paramsBeforeHash, paramsAfterHash);

	var url = g_root + '/ajaxpages/productlistshort_ajx.aspx';
	var containerID = (actionShortAdd === true) ? "#dataContainerShort" : "#dataContainer";
	url += "?" + newURLforAjax;

	var navigatorJsonUrl = g_root + "/navigator?" + newURLforAjax;

	//if (newHash != null) {
	//    parent.location.hash = newHash;
	//}

	if (newURLforAjax != null) {
		window.location.hash = newURLforAjax;
	}

	// volani ajaxove stranky
	////zakazu ovladaci prvky
	//disableAllChilds("#dataContainer", true);

	var ajxGlobal = false;

	if (event == null) {
		ajxGlobal = true;
	}

	var navData = new NavDataWrapper();
	navData.parseUrl(paramsAfterHash.get("navdatafilter"));
	var navDataList = navData.getNavDataList();

	if (actionShortAdd) {

		$ajxReq = $.ajax({
			async: true,
			global: ajxGlobal,
			url: url
		}).done(function (response, status, xhr) {
			if (status === "error") {
				$("#dataContainer").empty();
				isLoading = false;

				if (g_debug) {
					$('#dataContainer').append(response);
				}
				return;
			}
			var newContent = response;
			var newContentData = $(newContent).find("#dataContainerShort");

			// odstraneni zahlavi
			newContentData.find('.products-list-head').remove();
			newContentData.find('.page-current-info-bar').remove();

			var productItems = $(".data-product-items", newContentData);
			var productPager = $("#paging", newContentData);
			var newProductItemsData = $(productItems).contents();
			$("#dataContainerShort .product-item:last-child").after(newProductItemsData);
			$("#paging").replaceWith(productPager);

			isLoading = false;
			lateInit(url);
			//globalInitPlugins();
			ProductsList.ajax_init();

		}).fail(function () {
			//alert('fail');
		});

	} else {

		if (typeof $ajxReqNav !== 'undefined' && typeof $ajxReq !== 'undefined') {
			if ((typeof $ajxReqNav === 'object' && $ajxReqNav.readystate !== 4) || (typeof $ajxReq === 'object' && $ajxReq.readystate !== 4)) {
				$ajxReq.abort();
				$ajxReqNav.abort();
			}
		}

		ajxMousePreloader('show');

		$ajxReqNav = $.ajax({
			type: 'GET',
			async: true,
			global: ajxGlobal,
			url: navigatorJsonUrl
		})
	    .success(function (jsonData, status, xhr) {
	    	processNavigatorResponse(jsonData);
	    });

		$ajxReq = $.ajax({
			type: 'GET',
			async: true,
			global: ajxGlobal,
			url: url
		}).success(function (response, status, xhr) {
			if (status === "error") {
				$("#dataContainer").empty();
				isLoading = false;

				if (g_debug) {
					$('#dataContainer').append(response);
				}

				return;
			}

			var $newContent = $(response);

			var $container = $(containerID);

			//$(containerID).html($newContent);
			// container s produkty

			// ulozeni strankovniku
			var $pager = $newContent.find('#dataContainerShort').find('#pagingTop');

			// odebrani strankovniku z kontejneru
			$newContent.find('#dataContainerShort').find('#pagingTop').remove();

			// nahrazeni strankovniku aktualni verzi
			$container.find('#pagingTop').replaceWith($pager);

			$container.find('#dataContainerShort').html($newContent.find('#dataContainerShort').html());

			if (newHash != null && newHash.search("cache=false") !== -1) {
				newHash.replace("cache=false", "");
				window.location.hash = newHash;
			}

			isLoading = false;
			lateInit(url);
			//globalInitPlugins();
			ProductsList.ajax_init();
		}).done(function () {
			ajxMousePreloader('hide');
			isLoading = false;
		});
	}

	if (typeof ga !== 'undefined') ga('send', 'pageview', window.location.pathname + window.location.hash);
}

function sliderOnStart(data) {

}

// pro rozsahové slidery přenáším hodnoty ze slideru do textových polí
function sliderRangeOnChange(id, data) {
	var $minPf = $('#flt_rangeLimitFormMinVal_' + id);
	var $maxPf = $('#flt_rangeLimitFormMaxVal_' + id);

	//$minPf.val(new Number(data.from).numberFormat('# ### ###'));
	//$minPf.val(new Number(data.from).numberFormat('0.##'));
	//$minPf.val(new Number(data.from).numberFormat('0.##').replace('.', ','));
	//$minPf.val(data.from);
	//$minPf.val(data.from.toString().replace('.', ','));
	$minPf.val(formatNum(data.from));

	//$maxPf.val(new Number(data.to).numberFormat('# ### ###'));
	//$maxPf.val(new Number(data.to).numberFormat('0.##'));
	//$maxPf.val(new Number(data.to).numberFormat('0.##').replace('.', ','));
	//$maxPf.val(data.to);
	//$maxPf.val(data.to.toString().replace('.', ','));
	$maxPf.val(formatNum(data.to));
}

function sliderOnFinish(target, data) {

	var slider = $(target).data("ionRangeSlider");

	if (typeof slider === 'undefined') {
		return;
	}

	if (slider.is_start) {
		return;
	}

	var e = typeof event === 'undefined' ? null : event;
	if (e == null) {
		e = $.Event('mouseup', { which: 1 });
		slider.$cache.cont.find('.irs-slider.type_last').trigger(e);
	}

	e.currentTarget.id = 'rangePriceSlider';
	startLoading(e);
}

// posbira vsechny navigatorovy data z formulare
function collectNavigatorData(paramsAfterHash, paramsBeforeHash) {



	var navData = new NavDataWrapper();


	var pnsupId = strToInt($("#navsupercat_id").val(), 0);
	var pncId = strToInt($("#navcat_id").val(), 0);

	var pnpList = "";

	var navDataBefore = paramsBeforeHash.get("navdata");
	if (navDataBefore != null) {
		var navDataBeforeWrapper = new NavDataWrapper();
		if ($.trim(navDataBefore) != null) {
			navDataBeforeWrapper.parseUrl(navDataBefore);
			pnpList = navDataBeforeWrapper.getVyrobceIDList();
		}
	}

	if (pnsupId <= 0 && pncId <= 0 && $.trim(pnpList) === "")
		return;

	if (pnsupId > 0 || pncId > 0) {
		$("#fltAttr [id*=NavAtrFrm_]").each(function () {
			var pnaId = $(this).data("pna");

			if (pnaId === "") {
				return true;
			}

			$("[id*=flt_pnati_]:checked", this).each(function () {
				var pnati = $(this).data("pnati");

				if (pnati !== -1) {
					navData.addNavDataItem(pnaId, pnati);
				}

				return true;
			});

			$("[id*=flt_bool_]:checked", this).each(function () {
				var boolvalue = $(this).data("boolvalue");


				navData.addNavDataItem(pnaId, boolvalue);

				return true;
			});

			$("[id*=flt_range_]", this).each(function () {

				var selectedValues = $(this).val();

				if (selectedValues === '' || selectedValues === "null;null") {
					return true;
				}

				var slider = $(this).data("ionRangeSlider");

				if ((slider.options.min === slider.result.from && slider.options.max === slider.result.to)) {
					return true;
				}

				//var range = $(this).val().split(';');

				//if (range.length === 2) {
				// nejdrive pridavame do pole prvni hodnotu (kvuli sortovani)
				//navData.addNavDataItem(pnaId, range[1]);
				//}

				//if (range[0] !== 0)
				//navData.addNavDataItem(pnaId, range[0]);
				navData.addNavDataItem(pnaId, slider.result.from_value);
				navData.addNavDataItem(pnaId, slider.result.to_value);

				return true;
			});

			/*
			$("[id*=flt_rangeLimit_]", this).each(function () {

				var selectedValues = $(this).val();

				if (selectedValues === '' || selectedValues === "null;null") {
					return true;
				}

				var slider = $(this).data("ionRangeSlider");

				if ((slider.options.min === slider.result.from && slider.options.max === slider.result.to)) {
					return true;
				}

				// pro rozsahové slidery se do navData vkládají rovnou hodnoty
				navData.addNavDataItem(pnaId, slider.result.from);
				navData.addNavDataItem(pnaId, slider.result.to);

				return true;
			});
			*/

			// pro rozsahové slidery beru hodnoty z txt polí
			$("[id*=flt_rangeLimitFormMinVal_]", this).each(function () {
				var selectedMinElId = $(this)[0].id;
				var multiplicator = $(this).data("multiplicator");

				var selectedMinVal = $(this).val();
				var selectedMaxElId = selectedMinElId.replace('Min', 'Max');
				var selectedMaxVal = $('#' + selectedMaxElId).val();

				if (!selectedMinVal || !selectedMaxVal) {
					return true;
				}

				var selectedMinValue = strToDouble(selectedMinVal);
				var selectedMaxValue = strToDouble(selectedMaxVal);

				navData.addNavDataItem(pnaId, selectedMinValue * multiplicator);
				navData.addNavDataItem(pnaId, selectedMaxValue * multiplicator);

				return true;
			});

			return true;
		});
	}

	navData.parseUrlByParams(pnsupId, pncId, pnpList);

	paramsAfterHash.put("navdatafilter", navData.getURLstring());
}

function setAttrCheckStatus(navdata) {

	var fltAttrTemp = $("#fltAttr");
	// mazu vse
	$("[id*=NavAtrFrm_]", $(fltAttrTemp)).each(function () {
		$("INPUT[type='checkbox']", this).prop('checked', false);
		$("INPUT[type='radio']", this).prop('checked', false);
	});
	// nastavim vsem prvni defaultni hodnotu - Neurceno
	//$("[id*=-1]", $(fltAttrTemp)).each(function () {
	//    $(this).attr('checked', true);
	//});

	var navDataList = navdata.getNavDataList();

	if (navDataList == null || navDataList.length === 0) {
		return;
	}
	for (var i in navDataList.hashtable) {
		if (navDataList.hashtable.hasOwnProperty(i)) {
			var parsNavData = navDataList.hashtable[i];

			if (parsNavData == null)
				continue;

			var pnaId = parsNavData.getPnaId();

			if (pnaId <= 0)
				continue;

			var $pnaAttr = $("#NavAtrFrm_" + pnaId);
			if ($pnaAttr.length === 0) {
				continue;
			}

			var uiInputStyle = $pnaAttr.data("ui-input-style");

			switch (uiInputStyle) {
				// seznam položek ATR_TYPE_ITE
				case 1:
					// staré atributy PNV_ID
				case 4:
					{
						var hashtable1 = parsNavData.getPnvIds().hashtable;

						for (var j1 in hashtable1) {
							if (hashtable1.hasOwnProperty(j1)) {
								var itemPnvId1 = hashtable1[j1];
								if (itemPnvId1 != null) {

									$("#flt_pnati_" + pnaId + "_" + itemPnvId1 + "[type='checkbox']").prop('checked', true);
								}
							}
						}

						break;
					}
					// slider
				case 2:
					{

						var slider = $("#flt_range_" + pnaId).data("ionRangeSlider");

						if (slider) {

							var sliderValues = slider.options.values;
							var pnvIds = parsNavData.getPnvIds().values();

							if (pnvIds.length > 0 && pnvIds[0] > 0) {
								var maxSliderIndex = sliderValues.length;

								var minSliderIndex = sliderValues.indexOf(pnvIds[0]);

								if (minSliderIndex < 0)
									minSliderIndex = 0;

								if (pnvIds.length > 1) {
									maxSliderIndex = sliderValues.indexOf(pnvIds[1]);

									if (maxSliderIndex < 0)
										maxSliderIndex = sliderValues.length;
									else if (minSliderIndex > maxSliderIndex) {
										var tmp = maxSliderIndex;
										maxSliderIndex = minSliderIndex;
										minSliderIndex = tmp;
									}

								} else {
									if (pnvIds[0] > 0)
										maxSliderIndex = minSliderIndex;
								}

								slider.update({
									from: minSliderIndex, to: maxSliderIndex
								});
							}
						}
						break;
					}
					// boolean atributy
				case 3:
					{
						var hashtable2 = parsNavData.getPnvIds().hashtable;
						for (var j2 in hashtable2) {
							if (hashtable2.hasOwnProperty(j2)) {
								var boolValue = hashtable2[j2];
								if (boolValue != null) {

									$("#flt_bool_" + pnaId + "_" + boolValue + "[type='checkbox']").prop('checked', true);
								}
							}
						}
						break;
					}
					// rozsahový slider
				case 5:
					{
						var slider = $("#flt_rangeLimit_" + pnaId).data("ionRangeSlider");

						if (slider) {
							var pnvIds = parsNavData.getPnvIds().values();
							if (pnvIds.length == 1 || pnvIds.length == 2) {
								var minSliderVal;
								var maxSliderVal;
								if (pnvIds.length == 1) {
									minSliderVal = maxSliderVal = pnvIds[0];
								}
								else {
									minSliderVal = pnvIds[0];
									maxSliderVal = pnvIds[1];
									if (minSliderVal > maxSliderVal) {
										var tmp = maxSliderVal;
										maxSliderVal = minSliderVal;
										minSliderVal = tmp;
									}
								}

								var multiplicator = $("#flt_rangeLimit_" + pnaId).data("multiplicator");
								minSliderVal = minSliderVal / multiplicator;
								maxSliderVal = maxSliderVal / multiplicator;

								// pro rozsahový slider se nastavují přímo hodnoty z parsNavData
								slider.update({
									from: minSliderVal, to: maxSliderVal
								});

								// nastavení txt hodnot
								//$("#flt_rangeLimitFormMinVal_" + pnaId).val(minSliderVal.numberFormat('# ### ###'));
								//$("#flt_rangeLimitFormMinVal_" + pnaId).val(minSliderVal.numberFormat('0.##'));
								//$("#flt_rangeLimitFormMinVal_" + pnaId).val(minSliderVal);
								//$("#flt_rangeLimitFormMinVal_" + pnaId).val(minSliderVal.toString().replace('.', ','));
								$("#flt_rangeLimitFormMinVal_" + pnaId).val(formatNum(minSliderVal));

								//$("#flt_rangeLimitFormMaxVal_" + pnaId).val(maxSliderVal.numberFormat('# ### ###'));
								//$("#flt_rangeLimitFormMaxVal_" + pnaId).val(maxSliderVal.numberFormat('0.##'));
								//$("#flt_rangeLimitFormMaxVal_" + pnaId).val(maxSliderVal);
								//$("#flt_rangeLimitFormMaxVal_" + pnaId).val(maxSliderVal.toString().replace('.', ','));
								$("#flt_rangeLimitFormMaxVal_" + pnaId).val(formatNum(maxSliderVal));
							}
						}
						break;
					}
			}
		}
	}
}

function lateInit(url) {
	var paramsURL = listOfParamsURL(url);

	//lateInitProductListBindingEvent();

	var plt_id_or_ext = paramsURL.hashtable["plt_id_or_ext"];
	if (plt_id_or_ext !== null && plt_id_or_ext !== "") {
		if (plt_id_or_ext === CONST_BAZAR) {
			$("#chb_bazar").attr("checked", true);
		}
		if (plt_id_or_ext === CONST_USED) {
			$("#chb_used").attr("checked", true);
		}
		if (plt_id_or_ext === CONST_REPAS) {
			$("#chb_repas").attr("checked", true);
		}
	}

	var plt_id = paramsURL.hashtable["plt_id"];
	if (plt_id != null && plt_id !== "") {
		$("#chb_PltID_" + plt_id).attr("checked", true);
		if (plt_id === CONST_DOPRODEJ) {
			$("#chb_Doprodej").attr("checked", true);
		}
		if (plt_id === CONST_VYPRODEJ) {
			$("#chb_vyprodej").attr("checked", true);
		}
	}

	var is_top = paramsURL.hashtable["is_top"];
	if (is_top != null && is_top !== "") {
		$("#chb_TOP").attr("checked", true);
	}

	var pse_ids = paramsURL.hashtable["pse_ids"];
	if (pse_ids != null && pse_ids !== "") {
		if (pse_ids === CONST_SADY_HAKY) {
			$("#chb_sdhk").attr("checked", true);
		}
	}

	var crossell = paramsURL.hashtable["crossell"];
	if (crossell != null && crossell !== "") {
		if (crossell === CONST_CROSSELL) {
			$("#chb_crossell").attr("checked", true);
		}
	}


	var vyh_nab = paramsURL.hashtable["vyhnab"];
	if (vyh_nab != null && vyh_nab !== "") {
		$("#chb_vyh_nab").attr("checked", true);
	}


	var noSale = paramsURL.hashtable["no_sale"];
	if (noSale != null && noSale !== "") {
		if (noSale === CONST_DOPRODEJ) {
			$("#chb_without_sale").attr("checked", true);
		}
	}

	var is_b2f = paramsURL.hashtable["b2fstat"];
	if (jeDealerB2F && is_b2f != null && is_b2f !== "") {
		$("#chb_edProfi").attr("checked", true);
	}

	var fulltext = paramsURL.hashtable["fulltext"];
	if (fulltext != null) {
		$("#ctlFulltext").val(decodeURIComponent(fulltext));
	}

	var stock = paramsURL.hashtable["onstock"];
	if (stock == null || stock === "") {
		if (fulltext == null || fulltext === "") {
			$('#chb_Stock').attr('checked', false);
		}
	} else if (strToBool(stock)) {
		$('#chb_Stock').attr('checked', true);
	} else {
		if ($('#chb_Stock').is(":checked")) {
			$('#chb_Stock').attr('checked', false);
		}
	}

	var license = paramsURL.hashtable["license"];
	if (license != null && license !== "") {
		$("#chb_license").attr("checked", true);
	}

	var navDataUrl = paramsURL.hashtable["navdata"];
	var navDataUrlFilter = paramsURL.hashtable["navdatafilter"];
	var navDataVendors = "";
	var navData;
	if ($.trim(navDataUrlFilter) !== "") {
		navData = new NavDataWrapper();
		navData.parseUrl(navDataUrlFilter);
		navDataVendors = navData.getVyrobceIDList();
		if (navData.getSuperCategory() > 0 || navData.getCategory() > 0) {
			$("#navcat_id").val(navData.getCategory());
			// Nastaveni filtru atributu a hodnot
			setAttrCheckStatus(navData);
		}
	} else if ($.trim(navDataUrl) !== "") {
		navData = new NavDataWrapper();
		navData.parseUrl(navDataUrl);
		navDataVendors = navData.getVyrobceIDList();
		if (navData.getSuperCategory() > 0 || navData.getCategory() > 0) {
			$("#navcat_id").val(navData.getCategory());
		}
	}
	// nastaveni stocks
	var stocks = paramsURL.hashtable["stocks"];
	var cntStocks = 0;
	var aStocks = null;
	if ($.trim(stocks) !== "") {
		aStocks = stocks.split(",");
	}
	if (aStocks != null) {
		for (var n = 0; n < aStocks.length; n++) {
			if (aStocks == null || aStocks[n] === "-1" || aStocks[n] === "")
				continue;
			$("#chb_Stock_" + aStocks[n]).attr("checked", true);
		}
	}

	// nastaveni vendoru
	var vendors = paramsURL.hashtable["vendors"];
	var cntVendor = 0;
	var aVen = null;
	if ($.trim(vendors) !== "") {
		aVen = vendors.split(",");
	} else if ($.trim(navDataVendors) !== "") {
		aVen = navDataVendors.split(":");
	}

	if (aVen != null) {
		for (var n = 0; n < aVen.length; n++) {
			if (aVen == null || aVen[n] === "-1" || aVen[n] === "")
				continue;
			$("#chkVendor_" + aVen[n]).attr("checked", true);
			cntVendor++;
		}
	}

	// nastaveni specialni nabidky
	var spec_offer = paramsURL.hashtable["spec_offer"];
	var aSpOff = null;
	if ($.trim(spec_offer) !== "") {
		aSpOff = spec_offer.split(",");
	}

	if (aSpOff != null) {
		for (var n = 0; n < aSpOff.length; n++) {
			if (aSpOff == null || aSpOff[n] === "-1" || aSpOff[n] === "")
				continue;
			$("#chb_spec_offer_" + aSpOff[n]).attr("checked", true);
		}
	}


	if (cntVendor === 0) {
		$("#chkVendorAll").attr("checked", true);
	}
	if (cntVendor > 0) { //zobrazit
		$('#fltVendorList').show();
		$("#showVendors").addClass("active");
	} else {
		$("#showVendors").removeClass("active");
	}

	var rows = paramsURL.hashtable["rows"];
	if (rows != null && rows !== "") {
		$("#sRows").val(rows).attr('selected', true);
	}

	// GUID - nastavi se z URL aby spravne fungovalo tlacitko zpet pokud dochazi ke zmene GUID, kdy jsem na strance a vlozim primy link s jinym guidem
	var guidTmp = paramsURL.hashtable["guid"];
	if ('undefined' !== typeof guidTmp) {
		$("#tmpGuid").val(guidTmp);
	}

	var minpf = paramsURL.hashtable["minpf"];
	if ('undefined' !== typeof minpf) {
		$("#minP").val(new Number(minpf).numberFormat('# ### ###'));
	}

	var maxpf = paramsURL.hashtable["maxpf"];
	if ('undefined' !== typeof maxpf) {
		$("#maxP").val(new Number(maxpf).numberFormat('# ### ###'));
	}

	var sortParam = initSorting(paramsURL);
	if (sortParam != null && sortParam !== "_")
	{
		if ($("#sortParam option[value='" + sortParam + "']").length != 0) {
			$("#sortParam").val(sortParam);
		} else {
			$("#sortParam").val($("#sortParam option:first").val());
		}
	}

	// uprava class pro container pri jednotlivych pohledech START
	var viewType = paramsURL.hashtable["view"];
	var pgViewCookie = getCookie("pgView");
	if (IsNullOrEmpty(viewType) && IsNotNullOrEmpty(pgViewCookie))
	{
		viewType = pgViewCookie.toLowerCase();
	}
	if ('undefined' != viewType && 'table_img' === viewType)
	{
		// zobrazíme link na výběr sloupců v pohledu
		$("#tableViewConfig").removeClass("hide-i");
	}
	else
	{
		// skryjeme link na výběr sloupců v pohledu
		$("#tableViewConfig").addClass("hide-i");
	}

	if ('undefined' != typeof viewType) {
		$('[id*="btnView_"]').removeClass("selected");
		$("#btnView_" + viewType).addClass("selected");
	}
}

function initSorting(paramsURL) {
	var sortIdUrl = paramsURL.hashtable["sortpar"];
	var sortDir = paramsURL.hashtable["sortdir"];
	var sortIdUrlCookie = getCookie("pgProdSort");
	if (IsNotNullOrEmpty(sortIdUrlCookie) && IsNullOrEmpty(sortDir)) {
		sortIdUrlCookie = base64_decode(sortIdUrlCookie);
		var sortCookiesInfo;
		if (IsNotNullOrEmpty(sortIdUrlCookie)) {
			sortCookiesInfo = sortIdUrlCookie.split(';');
			if (sortCookiesInfo[0] != null) {
				sortIdUrl = sortCookiesInfo[0];
				if (sortCookiesInfo[1] != null) {
					sortDir = sortCookiesInfo[1].toLowerCase();
				} else {
					sortDir = null;
				}
			}
		}
	}
	if (IsNullOrEmpty(sortDir)) {
		return null;// ab by to nevracelo "undefined_undefined"
	}
	else {
		return sortIdUrl + "_" + sortDir;
	}
}

// nabindovani spravnych udalosti pouze pro objekty product listu (paging, sortování přes sloupce apod.)
function lateInitProductListBindingEvent() {

	// registrace metody pro paging

	$(document).on('click', '[id^="pag_"]', function (event) {
		event.preventDefault();
		startLoading(event);
	});


	$(document).on('click', 'a[id*=chb_page_]', function (event) {
		startLoading(event);
	});



	$(document).on('click', 'a[id*=srtAttr_]', function (event) {
		startLoading(event);
	});
}

// nabindovani spravnych udalosti na dane objekty (checkboxy, linky apod...)
function lateInitBindingEvent() {

	$("#fltVendorList a[id*=btnVendor_]").click(function (event) {
		event.preventDefault();
		var id = event.target.id.replace("btnVendor_", "");
		var chk = $("#chkVendor_" + id);
		chk.attr("checked", !chk.attr("checked"));
		onChangedVendor(id);
		startLoading(event);
	});


	$("#fltVendorList #btnVendorAll").click(function (event) {
		event.preventDefault();
		var chk = $("#chkVendorAll");
		chk.attr("checked", !chk.attr("checked"));
		onChangedVendor(-1);
		startLoading(event);
	});

	$("select[id*=nav_]").change(function (event) {
		startLoading(event);
	});

	$('input[id*="chb_Stock_"]').click(function (event) {
		if ($('input[id*="chb_Stock_"]:checked').length > 0) $("#chb_Stock").attr("checked", false);
		mustRedirect = false;
		var paramsBeforeHash = listOfParamsBeforeHash();
		var paramStocks = paramsBeforeHash.containsKey("stocks");
		if (paramStocks) {
			/*var paramsAfterHash = listOfParamsAfterHash(queryPage);
            paramsBeforeHash.delete("stocks")
            paramsAfterHash.delete("stocks")
            paramsAfterHash.delete("guid");
            var stocks = "";
            $('input[id*="chb_Stock_"]:checked').each(function () {
                stocks = concateString(stocks, $(this).attr("id").replace("chb_Stock_", ""), ",");
            });
            if (stocks.length > 0) paramsBeforeHash.put("stocks", stocks);
            var newUrlParam = createURLbyParams(paramsBeforeHash);
            var newHash = combineParamsForHashURL(paramsBeforeHash, paramsAfterHash);
            redirectWithParam(newUrlParam, newHash);
            return;*/
			mustRedirect = true;

		}
		startLoading(event, mustRedirect);
	});

	$("#fltFlagList input[id*=chb_spec_offer_]").click(function (event) {
		startLoading(event);
	});

	$("#chb_Stock").click(function (event) {
		$('input[id*="chb_Stock_"]').attr("checked", false);
		mustRedirect = false;
		var paramsBeforeHash = listOfParamsBeforeHash();
		var paramStock = 0;
		if (paramsBeforeHash.containsKey("onstock")) paramStock = paramsBeforeHash.get("onstock");
		var paramStocks = paramsBeforeHash.containsKey("stocks");
		var isCheck = $('input[id*="chb_Stock"]').is(':checked');
		if ((!isCheck && paramStock == 1) || paramStocks) {
			/*var paramsAfterHash = listOfParamsAfterHash(queryPage);
            paramsBeforeHash.delete("onstock");

            paramsAfterHash.delete("onstock");
            paramsBeforeHash.delete("stocks");
            paramsAfterHash.delete("guid");
            if (isCheck) paramsBeforeHash.put("onstock", "1");
            var newUrlParam = createURLbyParams(paramsBeforeHash);
            var newHash = combineParamsForHashURL(paramsBeforeHash, paramsAfterHash);
            redirectWithParam(newUrlParam, newHash);
            return;*/
			mustRedirect = true;

		}
		startLoading(event, mustRedirect);
	});

	$("#chb_PltID_1").click(function (event) {
		startLoading(event);
	});



	$("#chb_Doprodej").click(function (event) {
		startLoading(event);
	});
	$("#chb_bazar").click(function (event) {
		startLoading(event);
	});
	$("#chb_used").click(function (event) {
		startLoading(event);
	});
	$("#chb_repas").click(function (event) {
		startLoading(event);
	});
	$("#chb_vyprodej").click(function (event) {
		startLoading(event);
	});
	$("#chb_sdhk").click(function (event) {
		startLoading(event);
	});
	$("#chb_without_sale").click(function (event) {
		startLoading(event);
	});

	$("#chb_vyh_nab").click(function (event) {
		startLoading(event);
	});

	$("#chb_TOP").click(function (event) {
		startLoading(event);
	});
	$("#chb_crossell").click(function (event) {
		startLoading(event);
	});

	$("#chb_edProfi").click(function (event) {
		if (jeDealerB2F) {
			startLoading(event);
		} else {
			$("#chb_edProfi").attr('checked', false);
			// otevrit clanek
			// ajaxpages/marketinginfob2f_ajx.aspx
			openB2FInfoDialogID("#dialogContainerBody");
		}
	});

	$("#chb_license").click(function (event) {
		startLoading(event);
	});

	$(document).on('click', '[id*="btnView_"]', function (event) {
		event.preventDefault();
		startLoading(event);
	});

	$("#filter a").click(function (event) {
		if (event.target.id == "" || event.target.id == undefined || event.target.id == "minP" || event.target.id == "maxP")
			return;
		event.preventDefault();
		startLoading(event);
	});
	$(document).on('change', '#sortParam', function (event) {
		startLoading(event);
	});

	$("#fulltextadd").click(function (event) {
		event.preventDefault();

		var validator = $(this).closest('form').validate();

		if (!validator.element('#fulltextadd_inp')) {
			return false;
		}

		startLoading(event);
	});

	// pri stisknuti klavesy enter
	$("#fulltextadd_inp").on('keyup', function (event) {
		event.preventDefault();

		if (event.which != 13) {
			return;
		}

		$("#fulltextadd").trigger('click');
	});
}

function openB2FInfoDialogID(sourceContainer) {
	var url = g_root + '/ajaxpages/marketinginfob2f_ajx.aspx';

	$.ajax({
		url: url,
		success: function (data) {
			if ($.fancybox) {
				fancyPopup({ content: data, wrapCSS: 'popup-klikman-info' });
			}
		}
	});
}

function openSelectiveDistributionInfoDialog(message) {

	const content = `<p>${message}</p>`;

	if (!$.fancybox) return;

	fancyPopup({ content: content, title: '<h1 class="popup-box-title">Informace k nákupu</h1>' });

}

function onChangedVendor(pnp_id) {
	var chkAll = $("#chkVendorAll");
	if (pnp_id === -1) {
		if (!chkAll.is(":checked"))
			return;
		$("#fltVendorList [id*=chkVendor_]").each(function () {
			$(this).attr("checked", false);
		});
	} else {
		if ($("#fltVendorList [id*=chkVendor_]:checked").length > 0) {
			chkAll.attr("checked", false);
		} else {
			chkAll.attr("checked", true);
		}
	}
}

// nastavuje filtr na vychozi nastaveni
function resetFilter() {
	ajxMousePreloader('show');
	redirectWithoutHash();
}

// disabluje nebo povoluje elementy ve filtru, tak aby napr. se nedalo kliknout na nejaky prvek pokud se vykonava load stranky
function disableAllChilds(elementToDisable, Value) {
	if (Value) {
		if ($(elementToDisable).attr('disabled') == null) {
			$(elementToDisable).attr('disabled', 'disabled');
		}
		$(elementToDisable + " *").each(function () {
			if ($(this).attr('disabled') == null) {
				$(this).attr('disabled', 'disabled');
			}
		});
	}
	else {
		if ($(elementToDisable).attr('disabled') != null) {
			$(elementToDisable).removeAttr('disabled');
		}
		$(elementToDisable + " *").each(function () {
			if ($(this).attr('disabled') != null) {
				$(this).removeAttr('disabled');
			}
		});
	}
}

// ulozi seznam vsech parametru, ktere se vyskytuji v URL pred HASHem a maji najakou hodnotu
function listOfParamsBeforeHash() {
	var dictionary = new Hashtable();
	var urlParse = window.location.toString();
	var paramsFromURL;
	var indexHash = -1;
	if (queryPage != null) {
		paramsFromURL = "?" + queryPage;
		indexHash = urlParse.indexOf("?");
		if (indexHash > -1) {
			if (urlParse.indexOf("#") > -1) urlParse = urlParse.substr(0, urlParse.indexOf("#"));
			paramsFromURL += "&" + urlParse.substring(indexHash + 1);
		}
		indexHash = -1;
	} else if (urlParse.indexOf("#") > -1) {
		paramsFromURL = urlParse.substr(0, urlParse.indexOf("#"));
	} else {
		paramsFromURL = urlParse;
	}
	indexHash = paramsFromURL.indexOf("?");
	if (indexHash > -1) {
		paramsFromURL = paramsFromURL.substring(indexHash + 1);
	} else {
		paramsFromURL = "";
	}
	var params = paramsFromURL.split("&");
	for (var i = 0; i < params.length; i++) {
		var pair = params[i].split("=");
		if (pair[1] != null && pair[1] !== "") {
			dictionary.put(pair[0], pair[1]);
		}
	}
	return dictionary;
}



// kombinace kompletniho URL i s HASHEM
function listOfParamsURL(urlParse) {
	var dictionary = new Hashtable();
	var paramsFromURL;
	var indexQuestionMark = urlParse.indexOf("?");
	var indexHash = urlParse.indexOf("#");

	if (IsNotNullOrEmpty(queryPage)) {
		var paramsQuery = queryPage.split("&");
		for (var q = 0; q < paramsQuery.length; q++) {
			var pairQ = paramsQuery[q].split("=");
			if (pairQ[1] != null && pairQ[1] !== "") {
				dictionary.put(pairQ[0], pairQ[1]);
			}
		}
	}

	if (indexQuestionMark > -1) {
		if (indexHash > -1) {
			paramsFromURL = urlParse.substring(indexQuestionMark + 1, indexHash);
		} else {
			paramsFromURL = urlParse.substring(indexQuestionMark + 1);
		}
	} else {
		paramsFromURL = "";
	}
	var params = paramsFromURL.split("&");
	for (var i = 0; i < params.length; i++) {
		var pair = params[i].split("=");
		if (pair[0] != null && pair[0] !== "") {
			dictionary.put(pair[0], pair[1]);
		}
	}

	if (indexHash > -1) {
		var paramsHash = urlParse.substring(indexHash + 1).split("&");
		for (var j = 0; j < paramsHash.length; j++) {
			var pairHash = paramsHash[j].split("=");
			if (dictionary.containsKey(pairHash[0]) && pairHash[1] === "") {
				dictionary.remove(pairHash[0]);
			}
			if (pairHash[1] != null && pairHash[1] !== "") {
				dictionary.put(pairHash[0], pairHash[1]);
			}
		}
	}

	return dictionary;
}

function variableDefined(name) {
	return typeof this[name] !== 'undefined';
}

// rozbalí/sbalí vyhledané podkategorie při fulltextovém hledání
function collapseExpand(e) {
	e.preventDefault();
	const $clicker = $(this);
	const target = $clicker.data("target");
	const title = $clicker.hasClass("more-expanded") ? $clicker.attr("data-title-expand") : $clicker.attr("data-title-collapse");

	$(target).toggleClass("grid-wrapper--collapsed");
	$clicker.toggleClass("more-expanded").attr("title", title);
	return false;
}

// zjistí, jestli obsah uvnitř elementu "vytéká" mimo jeho hranice
$.fn.overflown = function () {
	var e = this[0];
	return e.scrollHeight > e.clientHeight || e.scrollWidth > e.clientWidth;
}

// zobrazí tlačítko pro rozbalení seznamu kategorií u fulltextu jen v případě, že se kategorie nevejdou do vyhrazené oblasti
function manageFulltextCategoriesOverflow() {
	const $allFoundCategoriesArea = $("#all-found-categories");
	if (!$allFoundCategoriesArea.length) return;

	if ($allFoundCategoriesArea.overflown()) {
		$allFoundCategoriesArea.addClass('overflown');
	}
	else {
		$allFoundCategoriesArea.removeClass('overflown');
		$allFoundCategoriesArea.removeClass('grid-wrapper--collapsed');
	}
}



$(document).ready(function () {

	lateInitProductListBindingEvent();

	// binding event k "fixním" checkboxům
	lateInitBindingEvent();


	$('body').on('click', '.search-remove', function (event) {

		event.preventDefault();

		var removeType = $(this).data('search');

		// klikam na odstraneni u fulltextu
		if (removeType == 1) {
			var paramsBeforeHash = listOfParamsBeforeHash(),
				paramsAfterHash = listOfParamsAfterHash(queryPage),
				url = location.pathname;

			paramsBeforeHash.remove('fulltext');
			paramsAfterHash.remove('fulltext');

			var parseParamsForUrl = combineParamsForURL(paramsBeforeHash, paramsAfterHash);

			ajxMousePreloader('show');

			if (parseParamsForUrl.length != 0) {
				url += '#' + parseParamsForUrl;
				window.location.href = url;
				location.reload();
			}

			window.location.href = url;

			return;
		}

		// klikam na odstraneni u fulltextadd
		if (removeType == 2) {
			$("#fulltextadd_inp").val('');

			event.currentTarget.id = "fulltextadd";

			startLoading(event, false);
			return;
		}
	});

	$('body').on('click', '.more', collapseExpand);

	manageFulltextCategoriesOverflow();

});;
/**
 * Owl Carousel v2.3.2
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
!function(a,b,c,d){function e(b,c){this.settings=null,this.options=a.extend({},e.Defaults,c),this.$element=a(b),this._handlers={},this._plugins={},this._supress={},this._current=null,this._speed=null,this._coordinates=[],this._breakpoint=null,this._width=null,this._items=[],this._clones=[],this._mergers=[],this._widths=[],this._invalidated={},this._pipe=[],this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null},this._states={current:{},tags:{initializing:["busy"],animating:["busy"],dragging:["interacting"]}},a.each(["onResize","onThrottledResize"],a.proxy(function(b,c){this._handlers[c]=a.proxy(this[c],this)},this)),a.each(e.Plugins,a.proxy(function(a,b){this._plugins[a.charAt(0).toLowerCase()+a.slice(1)]=new b(this)},this)),a.each(e.Workers,a.proxy(function(b,c){this._pipe.push({filter:c.filter,run:a.proxy(c.run,this)})},this)),this.setup(),this.initialize()}e.Defaults={items:3,loop:!1,center:!1,rewind:!1,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:b,fallbackEasing:"swing",info:!1,nestedItemSelector:!1,itemElement:"div",stageElement:"div",refreshClass:"owl-refresh",loadedClass:"owl-loaded",loadingClass:"owl-loading",rtlClass:"owl-rtl",responsiveClass:"owl-responsive",dragClass:"owl-drag",itemClass:"owl-item",stageClass:"owl-stage",stageOuterClass:"owl-stage-outer",grabClass:"owl-grab"},e.Width={Default:"default",Inner:"inner",Outer:"outer"},e.Type={Event:"event",State:"state"},e.Plugins={},e.Workers=[{filter:["width","settings"],run:function(){this._width=this.$element.width()}},{filter:["width","items","settings"],run:function(a){a.current=this._items&&this._items[this.relative(this._current)]}},{filter:["items","settings"],run:function(){this.$stage.children(".cloned").remove()}},{filter:["width","items","settings"],run:function(a){var b=this.settings.margin||"",c=!this.settings.autoWidth,d=this.settings.rtl,e={width:"auto","margin-left":d?b:"","margin-right":d?"":b};!c&&this.$stage.children().css(e),a.css=e}},{filter:["width","items","settings"],run:function(a){var b=(this.width()/this.settings.items).toFixed(3)-this.settings.margin,c=null,d=this._items.length,e=!this.settings.autoWidth,f=[];for(a.items={merge:!1,width:b};d--;)c=this._mergers[d],c=this.settings.mergeFit&&Math.min(c,this.settings.items)||c,a.items.merge=c>1||a.items.merge,f[d]=e?b*c:this._items[d].width();this._widths=f}},{filter:["items","settings"],run:function(){var b=[],c=this._items,d=this.settings,e=Math.max(2*d.items,4),f=2*Math.ceil(c.length/2),g=d.loop&&c.length?d.rewind?e:Math.max(e,f):0,h="",i="";for(g/=2;g>0;)b.push(this.normalize(b.length/2,!0)),h+=c[b[b.length-1]][0].outerHTML,b.push(this.normalize(c.length-1-(b.length-1)/2,!0)),i=c[b[b.length-1]][0].outerHTML+i,g-=1;this._clones=b,a(h).addClass("cloned").appendTo(this.$stage),a(i).addClass("cloned").prependTo(this.$stage)}},{filter:["width","items","settings"],run:function(){for(var a=this.settings.rtl?1:-1,b=this._clones.length+this._items.length,c=-1,d=0,e=0,f=[];++c<b;)d=f[c-1]||0,e=this._widths[this.relative(c)]+this.settings.margin,f.push(d+e*a);this._coordinates=f}},{filter:["width","items","settings"],run:function(){var a=this.settings.stagePadding,b=this._coordinates,c={width:Math.ceil(Math.abs(b[b.length-1]))+2*a,"padding-left":a||"","padding-right":a||""};this.$stage.css(c)}},{filter:["width","items","settings"],run:function(a){var b=this._coordinates.length,c=!this.settings.autoWidth,d=this.$stage.children();if(c&&a.items.merge)for(;b--;)a.css.width=this._widths[this.relative(b)],d.eq(b).css(a.css);else c&&(a.css.width=a.items.width,d.css(a.css))}},{filter:["items"],run:function(){this._coordinates.length<1&&this.$stage.removeAttr("style")}},{filter:["width","items","settings"],run:function(a){a.current=a.current?this.$stage.children().index(a.current):0,a.current=Math.max(this.minimum(),Math.min(this.maximum(),a.current)),this.reset(a.current)}},{filter:["position"],run:function(){this.animate(this.coordinates(this._current))}},{filter:["width","position","items","settings"],run:function(){var a,b,c,d,e=this.settings.rtl?1:-1,f=2*this.settings.stagePadding,g=this.coordinates(this.current())+f,h=g+this.width()*e,i=[];for(c=0,d=this._coordinates.length;c<d;c++)a=this._coordinates[c-1]||0,b=Math.abs(this._coordinates[c])+f*e,(this.op(a,"<=",g)&&this.op(a,">",h)||this.op(b,"<",g)&&this.op(b,">",h))&&i.push(c);this.$stage.children(".active").removeClass("active"),this.$stage.children(":eq("+i.join("), :eq(")+")").addClass("active"),this.$stage.children(".center").removeClass("center"),this.settings.center&&this.$stage.children().eq(this.current()).addClass("center")}}],e.prototype.initializeStage=function(){this.$stage=this.$element.find("."+this.settings.stageClass),this.$stage.length||(this.$element.addClass(this.options.loadingClass),this.$stage=a("<"+this.settings.stageElement+' class="'+this.settings.stageClass+'"/>').wrap('<div class="'+this.settings.stageOuterClass+'"/>'),this.$element.append(this.$stage.parent()))},e.prototype.initializeItems=function(){var b=this.$element.find(".owl-item");if(b.length)return this._items=b.get().map(function(b){return a(b)}),this._mergers=this._items.map(function(){return 1}),void this.refresh();this.replace(this.$element.children().not(this.$stage.parent())),this.isVisible()?this.refresh():this.invalidate("width"),this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)},e.prototype.initialize=function(){if(this.enter("initializing"),this.trigger("initialize"),this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl),this.settings.autoWidth&&!this.is("pre-loading")){var a,b,c;a=this.$element.find("img"),b=this.settings.nestedItemSelector?"."+this.settings.nestedItemSelector:d,c=this.$element.children(b).width(),a.length&&c<=0&&this.preloadAutoWidthImages(a)}this.initializeStage(),this.initializeItems(),this.registerEventHandlers(),this.leave("initializing"),this.trigger("initialized")},e.prototype.isVisible=function(){return!this.settings.checkVisibility||this.$element.is(":visible")},e.prototype.setup=function(){var b=this.viewport(),c=this.options.responsive,d=-1,e=null;c?(a.each(c,function(a){a<=b&&a>d&&(d=Number(a))}),e=a.extend({},this.options,c[d]),"function"==typeof e.stagePadding&&(e.stagePadding=e.stagePadding()),delete e.responsive,e.responsiveClass&&this.$element.attr("class",this.$element.attr("class").replace(new RegExp("("+this.options.responsiveClass+"-)\\S+\\s","g"),"$1"+d))):e=a.extend({},this.options),this.trigger("change",{property:{name:"settings",value:e}}),this._breakpoint=d,this.settings=e,this.invalidate("settings"),this.trigger("changed",{property:{name:"settings",value:this.settings}})},e.prototype.optionsLogic=function(){this.settings.autoWidth&&(this.settings.stagePadding=!1,this.settings.merge=!1)},e.prototype.prepare=function(b){var c=this.trigger("prepare",{content:b});return c.data||(c.data=a("<"+this.settings.itemElement+"/>").addClass(this.options.itemClass).append(b)),this.trigger("prepared",{content:c.data}),c.data},e.prototype.update=function(){for(var b=0,c=this._pipe.length,d=a.proxy(function(a){return this[a]},this._invalidated),e={};b<c;)(this._invalidated.all||a.grep(this._pipe[b].filter,d).length>0)&&this._pipe[b].run(e),b++;this._invalidated={},!this.is("valid")&&this.enter("valid")},e.prototype.width=function(a){switch(a=a||e.Width.Default){case e.Width.Inner:case e.Width.Outer:return this._width;default:return this._width-2*this.settings.stagePadding+this.settings.margin}},e.prototype.refresh=function(){this.enter("refreshing"),this.trigger("refresh"),this.setup(),this.optionsLogic(),this.$element.addClass(this.options.refreshClass),this.update(),this.$element.removeClass(this.options.refreshClass),this.leave("refreshing"),this.trigger("refreshed")},e.prototype.onThrottledResize=function(){b.clearTimeout(this.resizeTimer),this.resizeTimer=b.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate)},e.prototype.onResize=function(){return!!this._items.length&&(this._width!==this.$element.width()&&(!!this.isVisible()&&(this.enter("resizing"),this.trigger("resize").isDefaultPrevented()?(this.leave("resizing"),!1):(this.invalidate("width"),this.refresh(),this.leave("resizing"),void this.trigger("resized")))))},e.prototype.registerEventHandlers=function(){a.support.transition&&this.$stage.on(a.support.transition.end+".owl.core",a.proxy(this.onTransitionEnd,this)),!1!==this.settings.responsive&&this.on(b,"resize",this._handlers.onThrottledResize),this.settings.mouseDrag&&(this.$element.addClass(this.options.dragClass),this.$stage.on("mousedown.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("dragstart.owl.core selectstart.owl.core",function(){return!1})),this.settings.touchDrag&&(this.$stage.on("touchstart.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("touchcancel.owl.core",a.proxy(this.onDragEnd,this)))},e.prototype.onDragStart=function(b){var d=null;3!==b.which&&(a.support.transform?(d=this.$stage.css("transform").replace(/.*\(|\)| /g,"").split(","),d={x:d[16===d.length?12:4],y:d[16===d.length?13:5]}):(d=this.$stage.position(),d={x:this.settings.rtl?d.left+this.$stage.width()-this.width()+this.settings.margin:d.left,y:d.top}),this.is("animating")&&(a.support.transform?this.animate(d.x):this.$stage.stop(),this.invalidate("position")),this.$element.toggleClass(this.options.grabClass,"mousedown"===b.type),this.speed(0),this._drag.time=(new Date).getTime(),this._drag.target=a(b.target),this._drag.stage.start=d,this._drag.stage.current=d,this._drag.pointer=this.pointer(b),a(c).on("mouseup.owl.core touchend.owl.core",a.proxy(this.onDragEnd,this)),a(c).one("mousemove.owl.core touchmove.owl.core",a.proxy(function(b){var d=this.difference(this._drag.pointer,this.pointer(b));a(c).on("mousemove.owl.core touchmove.owl.core",a.proxy(this.onDragMove,this)),Math.abs(d.x)<Math.abs(d.y)&&this.is("valid")||(b.preventDefault(),this.enter("dragging"),this.trigger("drag"))},this)))},e.prototype.onDragMove=function(a){var b=null,c=null,d=null,e=this.difference(this._drag.pointer,this.pointer(a)),f=this.difference(this._drag.stage.start,e);this.is("dragging")&&(a.preventDefault(),this.settings.loop?(b=this.coordinates(this.minimum()),c=this.coordinates(this.maximum()+1)-b,f.x=((f.x-b)%c+c)%c+b):(b=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum()),c=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum()),d=this.settings.pullDrag?-1*e.x/5:0,f.x=Math.max(Math.min(f.x,b+d),c+d)),this._drag.stage.current=f,this.animate(f.x))},e.prototype.onDragEnd=function(b){var d=this.difference(this._drag.pointer,this.pointer(b)),e=this._drag.stage.current,f=d.x>0^this.settings.rtl?"left":"right";a(c).off(".owl.core"),this.$element.removeClass(this.options.grabClass),(0!==d.x&&this.is("dragging")||!this.is("valid"))&&(this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed),this.current(this.closest(e.x,0!==d.x?f:this._drag.direction)),this.invalidate("position"),this.update(),this._drag.direction=f,(Math.abs(d.x)>3||(new Date).getTime()-this._drag.time>300)&&this._drag.target.one("click.owl.core",function(){return!1})),this.is("dragging")&&(this.leave("dragging"),this.trigger("dragged"))},e.prototype.closest=function(b,c){var e=-1,f=30,g=this.width(),h=this.coordinates();return this.settings.freeDrag||a.each(h,a.proxy(function(a,i){return"left"===c&&b>i-f&&b<i+f?e=a:"right"===c&&b>i-g-f&&b<i-g+f?e=a+1:this.op(b,"<",i)&&this.op(b,">",h[a+1]!==d?h[a+1]:i-g)&&(e="left"===c?a+1:a),-1===e},this)),this.settings.loop||(this.op(b,">",h[this.minimum()])?e=b=this.minimum():this.op(b,"<",h[this.maximum()])&&(e=b=this.maximum())),e},e.prototype.animate=function(b){var c=this.speed()>0;this.is("animating")&&this.onTransitionEnd(),c&&(this.enter("animating"),this.trigger("translate")),a.support.transform3d&&a.support.transition?this.$stage.css({transform:"translate3d("+b+"px,0px,0px)",transition:this.speed()/1e3+"s"}):c?this.$stage.animate({left:b+"px"},this.speed(),this.settings.fallbackEasing,a.proxy(this.onTransitionEnd,this)):this.$stage.css({left:b+"px"})},e.prototype.is=function(a){return this._states.current[a]&&this._states.current[a]>0},e.prototype.current=function(a){if(a===d)return this._current;if(0===this._items.length)return d;if(a=this.normalize(a),this._current!==a){var b=this.trigger("change",{property:{name:"position",value:a}});b.data!==d&&(a=this.normalize(b.data)),this._current=a,this.invalidate("position"),this.trigger("changed",{property:{name:"position",value:this._current}})}return this._current},e.prototype.invalidate=function(b){return"string"===a.type(b)&&(this._invalidated[b]=!0,this.is("valid")&&this.leave("valid")),a.map(this._invalidated,function(a,b){return b})},e.prototype.reset=function(a){(a=this.normalize(a))!==d&&(this._speed=0,this._current=a,this.suppress(["translate","translated"]),this.animate(this.coordinates(a)),this.release(["translate","translated"]))},e.prototype.normalize=function(a,b){var c=this._items.length,e=b?0:this._clones.length;return!this.isNumeric(a)||c<1?a=d:(a<0||a>=c+e)&&(a=((a-e/2)%c+c)%c+e/2),a},e.prototype.relative=function(a){return a-=this._clones.length/2,this.normalize(a,!0)},e.prototype.maximum=function(a){var b,c,d,e=this.settings,f=this._coordinates.length;if(e.loop)f=this._clones.length/2+this._items.length-1;else if(e.autoWidth||e.merge){if(b=this._items.length)for(c=this._items[--b].width(),d=this.$element.width();b--&&!((c+=this._items[b].width()+this.settings.margin)>d););f=b+1}else f=e.center?this._items.length-1:this._items.length-e.items;return a&&(f-=this._clones.length/2),Math.max(f,0)},e.prototype.minimum=function(a){return a?0:this._clones.length/2},e.prototype.items=function(a){return a===d?this._items.slice():(a=this.normalize(a,!0),this._items[a])},e.prototype.mergers=function(a){return a===d?this._mergers.slice():(a=this.normalize(a,!0),this._mergers[a])},e.prototype.clones=function(b){var c=this._clones.length/2,e=c+this._items.length,f=function(a){return a%2==0?e+a/2:c-(a+1)/2};return b===d?a.map(this._clones,function(a,b){return f(b)}):a.map(this._clones,function(a,c){return a===b?f(c):null})},e.prototype.speed=function(a){return a!==d&&(this._speed=a),this._speed},e.prototype.coordinates=function(b){var c,e=1,f=b-1;return b===d?a.map(this._coordinates,a.proxy(function(a,b){return this.coordinates(b)},this)):(this.settings.center?(this.settings.rtl&&(e=-1,f=b+1),c=this._coordinates[b],c+=(this.width()-c+(this._coordinates[f]||0))/2*e):c=this._coordinates[f]||0,c=Math.ceil(c))},e.prototype.duration=function(a,b,c){return 0===c?0:Math.min(Math.max(Math.abs(b-a),1),6)*Math.abs(c||this.settings.smartSpeed)},e.prototype.to=function(a,b){var c=this.current(),d=null,e=a-this.relative(c),f=(e>0)-(e<0),g=this._items.length,h=this.minimum(),i=this.maximum();this.settings.loop?(!this.settings.rewind&&Math.abs(e)>g/2&&(e+=-1*f*g),a=c+e,(d=((a-h)%g+g)%g+h)!==a&&d-e<=i&&d-e>0&&(c=d-e,a=d,this.reset(c))):this.settings.rewind?(i+=1,a=(a%i+i)%i):a=Math.max(h,Math.min(i,a)),this.speed(this.duration(c,a,b)),this.current(a),this.isVisible()&&this.update()},e.prototype.next=function(a){a=a||!1,this.to(this.relative(this.current())+1,a)},e.prototype.prev=function(a){a=a||!1,this.to(this.relative(this.current())-1,a)},e.prototype.onTransitionEnd=function(a){if(a!==d&&(a.stopPropagation(),(a.target||a.srcElement||a.originalTarget)!==this.$stage.get(0)))return!1;this.leave("animating"),this.trigger("translated")},e.prototype.viewport=function(){var d;return this.options.responsiveBaseElement!==b?d=a(this.options.responsiveBaseElement).width():b.innerWidth?d=b.innerWidth:c.documentElement&&c.documentElement.clientWidth?d=c.documentElement.clientWidth:console.warn("Can not detect viewport width."),d},e.prototype.replace=function(b){this.$stage.empty(),this._items=[],b&&(b=b instanceof jQuery?b:a(b)),this.settings.nestedItemSelector&&(b=b.find("."+this.settings.nestedItemSelector)),b.filter(function(){return 1===this.nodeType}).each(a.proxy(function(a,b){b=this.prepare(b),this.$stage.append(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)},this)),this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0),this.invalidate("items")},e.prototype.add=function(b,c){var e=this.relative(this._current);c=c===d?this._items.length:this.normalize(c,!0),b=b instanceof jQuery?b:a(b),this.trigger("add",{content:b,position:c}),b=this.prepare(b),0===this._items.length||c===this._items.length?(0===this._items.length&&this.$stage.append(b),0!==this._items.length&&this._items[c-1].after(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)):(this._items[c].before(b),this._items.splice(c,0,b),this._mergers.splice(c,0,1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)),this._items[e]&&this.reset(this._items[e].index()),this.invalidate("items"),this.trigger("added",{content:b,position:c})},e.prototype.remove=function(a){(a=this.normalize(a,!0))!==d&&(this.trigger("remove",{content:this._items[a],position:a}),this._items[a].remove(),this._items.splice(a,1),this._mergers.splice(a,1),this.invalidate("items"),this.trigger("removed",{content:null,position:a}))},e.prototype.preloadAutoWidthImages=function(b){b.each(a.proxy(function(b,c){this.enter("pre-loading"),c=a(c),a(new Image).one("load",a.proxy(function(a){c.attr("src",a.target.src),c.css("opacity",1),this.leave("pre-loading"),!this.is("pre-loading")&&!this.is("initializing")&&this.refresh()},this)).attr("src",c.attr("src")||c.attr("data-src")||c.attr("data-src-retina"))},this))},e.prototype.destroy=function(){this.$element.off(".owl.core"),this.$stage.off(".owl.core"),a(c).off(".owl.core"),!1!==this.settings.responsive&&(b.clearTimeout(this.resizeTimer),this.off(b,"resize",this._handlers.onThrottledResize));for(var d in this._plugins)this._plugins[d].destroy();this.$stage.children(".cloned").remove(),this.$stage.unwrap(),this.$stage.children().contents().unwrap(),this.$stage.children().unwrap(),this.$stage.remove(),this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class",this.$element.attr("class").replace(new RegExp(this.options.responsiveClass+"-\\S+\\s","g"),"")).removeData("owl.carousel")},e.prototype.op=function(a,b,c){var d=this.settings.rtl;switch(b){case"<":return d?a>c:a<c;case">":return d?a<c:a>c;case">=":return d?a<=c:a>=c;case"<=":return d?a>=c:a<=c}},e.prototype.on=function(a,b,c,d){a.addEventListener?a.addEventListener(b,c,d):a.attachEvent&&a.attachEvent("on"+b,c)},e.prototype.off=function(a,b,c,d){a.removeEventListener?a.removeEventListener(b,c,d):a.detachEvent&&a.detachEvent("on"+b,c)},e.prototype.trigger=function(b,c,d,f,g){var h={item:{count:this._items.length,index:this.current()}},i=a.camelCase(a.grep(["on",b,d],function(a){return a}).join("-").toLowerCase()),j=a.Event([b,"owl",d||"carousel"].join(".").toLowerCase(),a.extend({relatedTarget:this},h,c));return this._supress[b]||(a.each(this._plugins,function(a,b){b.onTrigger&&b.onTrigger(j)}),this.register({type:e.Type.Event,name:b}),this.$element.trigger(j),this.settings&&"function"==typeof this.settings[i]&&this.settings[i].call(this,j)),j},e.prototype.enter=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]===d&&(this._states.current[b]=0),this._states.current[b]++},this))},e.prototype.leave=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]--},this))},e.prototype.register=function(b){if(b.type===e.Type.Event){if(a.event.special[b.name]||(a.event.special[b.name]={}),!a.event.special[b.name].owl){var c=a.event.special[b.name]._default;a.event.special[b.name]._default=function(a){return!c||!c.apply||a.namespace&&-1!==a.namespace.indexOf("owl")?a.namespace&&a.namespace.indexOf("owl")>-1:c.apply(this,arguments)},a.event.special[b.name].owl=!0}}else b.type===e.Type.State&&(this._states.tags[b.name]?this._states.tags[b.name]=this._states.tags[b.name].concat(b.tags):this._states.tags[b.name]=b.tags,this._states.tags[b.name]=a.grep(this._states.tags[b.name],a.proxy(function(c,d){return a.inArray(c,this._states.tags[b.name])===d},this)))},e.prototype.suppress=function(b){a.each(b,a.proxy(function(a,b){this._supress[b]=!0},this))},e.prototype.release=function(b){a.each(b,a.proxy(function(a,b){delete this._supress[b]},this))},e.prototype.pointer=function(a){var c={x:null,y:null};return a=a.originalEvent||a||b.event,a=a.touches&&a.touches.length?a.touches[0]:a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:a,a.pageX?(c.x=a.pageX,c.y=a.pageY):(c.x=a.clientX,c.y=a.clientY),c},e.prototype.isNumeric=function(a){return!isNaN(parseFloat(a))},e.prototype.difference=function(a,b){return{x:a.x-b.x,y:a.y-b.y}},a.fn.owlCarousel=function(b){var c=Array.prototype.slice.call(arguments,1);return this.each(function(){var d=a(this),f=d.data("owl.carousel");f||(f=new e(this,"object"==typeof b&&b),d.data("owl.carousel",f),a.each(["next","prev","to","destroy","refresh","replace","add","remove"],function(b,c){f.register({type:e.Type.Event,name:c}),f.$element.on(c+".owl.carousel.core",a.proxy(function(a){a.namespace&&a.relatedTarget!==this&&(this.suppress([c]),f[c].apply(this,[].slice.call(arguments,1)),this.release([c]))},f))})),"string"==typeof b&&"_"!==b.charAt(0)&&f[b].apply(f,c)})},a.fn.owlCarousel.Constructor=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._interval=null,this._visible=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoRefresh&&this.watch()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={autoRefresh:!0,autoRefreshInterval:500},e.prototype.watch=function(){this._interval||(this._visible=this._core.isVisible(),this._interval=b.setInterval(a.proxy(this.refresh,this),this._core.settings.autoRefreshInterval))},e.prototype.refresh=function(){this._core.isVisible()!==this._visible&&(this._visible=!this._visible,this._core.$element.toggleClass("owl-hidden",!this._visible),this._visible&&this._core.invalidate("width")&&this._core.refresh())},e.prototype.destroy=function(){var a,c;b.clearInterval(this._interval);for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoRefresh=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._loaded=[],this._handlers={"initialized.owl.carousel change.owl.carousel resized.owl.carousel":a.proxy(function(b){if(b.namespace&&this._core.settings&&this._core.settings.lazyLoad&&(b.property&&"position"==b.property.name||"initialized"==b.type))for(var c=this._core.settings,e=c.center&&Math.ceil(c.items/2)||c.items,f=c.center&&-1*e||0,g=(b.property&&b.property.value!==d?b.property.value:this._core.current())+f,h=this._core.clones().length,i=a.proxy(function(a,b){this.load(b)},this);f++<e;)this.load(h/2+this._core.relative(g)),h&&a.each(this._core.clones(this._core.relative(g)),i),g++},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={lazyLoad:!1},e.prototype.load=function(c){var d=this._core.$stage.children().eq(c),e=d&&d.find(".owl-lazy");!e||a.inArray(d.get(0),this._loaded)>-1||(e.each(a.proxy(function(c,d){var e,f=a(d),g=b.devicePixelRatio>1&&f.attr("data-src-retina")||f.attr("data-src")||f.attr("data-srcset");this._core.trigger("load",{element:f,url:g},"lazy"),f.is("img")?f.one("load.owl.lazy",a.proxy(function(){f.css("opacity",1),this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("src",g):f.is("source")?f.one("load.owl.lazy",a.proxy(function(){this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("srcset",g):(e=new Image,e.onload=a.proxy(function(){f.css({"background-image":'url("'+g+'")',opacity:"1"}),this._core.trigger("loaded",{element:f,url:g},"lazy")},this),e.src=g)},this)),this._loaded.push(d.get(0)))},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this._core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Lazy=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(c){this._core=c,this._handlers={"initialized.owl.carousel refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&this.update()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&"position"===a.property.name&&(console.log("update called"),this.update())},this),"loaded.owl.lazy":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&a.element.closest("."+this._core.settings.itemClass).index()===this._core.current()&&this.update()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._intervalId=null;var d=this;a(b).on("load",function(){d._core.settings.autoHeight&&d.update()}),a(b).resize(function(){d._core.settings.autoHeight&&(null!=d._intervalId&&clearTimeout(d._intervalId),d._intervalId=setTimeout(function(){d.update()},250))})};e.Defaults={autoHeight:!1,autoHeightClass:"owl-height"},e.prototype.update=function(){var b=this._core._current,c=b+this._core.settings.items,d=this._core.$stage.children().toArray().slice(b,c),e=[],f=0;a.each(d,function(b,c){e.push(a(c).height())}),f=Math.max.apply(null,e),this._core.$stage.parent().height(f).addClass(this._core.settings.autoHeightClass)},e.prototype.destroy=function(){var a,b;for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoHeight=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._videos={},this._playing=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.register({type:"state",name:"playing",tags:["interacting"]})},this),"resize.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.video&&this.isInFullScreen()&&a.preventDefault()},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.is("resizing")&&this._core.$stage.find(".cloned .owl-video-frame").remove()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"===a.property.name&&this._playing&&this.stop()},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find(".owl-video");c.length&&(c.css("display","none"),this.fetch(c,a(b.content)))}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._core.$element.on("click.owl.video",".owl-video-play-icon",a.proxy(function(a){this.play(a)},this))};e.Defaults={video:!1,videoHeight:!1,videoWidth:!1},e.prototype.fetch=function(a,b){var c=function(){return a.attr("data-vimeo-id")?"vimeo":a.attr("data-vzaar-id")?"vzaar":"youtube"}(),d=a.attr("data-vimeo-id")||a.attr("data-youtube-id")||a.attr("data-vzaar-id"),e=a.attr("data-width")||this._core.settings.videoWidth,f=a.attr("data-height")||this._core.settings.videoHeight,g=a.attr("href");if(!g)throw new Error("Missing video URL.");if(d=g.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/),d[3].indexOf("youtu")>-1)c="youtube";else if(d[3].indexOf("vimeo")>-1)c="vimeo";else{if(!(d[3].indexOf("vzaar")>-1))throw new Error("Video URL not supported.");c="vzaar"}d=d[6],this._videos[g]={type:c,id:d,width:e,height:f},b.attr("data-video",g),this.thumbnail(a,this._videos[g])},e.prototype.thumbnail=function(b,c){var d,e,f,g=c.width&&c.height?'style="width:'+c.width+"px;height:"+c.height+'px;"':"",h=b.find("img"),i="src",j="",k=this._core.settings,l=function(a){e='<div class="owl-video-play-icon"></div>',d=k.lazyLoad?'<div class="owl-video-tn '+j+'" '+i+'="'+a+'"></div>':'<div class="owl-video-tn" style="opacity:1;background-image:url('+a+')"></div>',b.after(d),b.after(e)};if(b.wrap('<div class="owl-video-wrapper"'+g+"></div>"),this._core.settings.lazyLoad&&(i="data-src",j="owl-lazy"),h.length)return l(h.attr(i)),h.remove(),!1;"youtube"===c.type?(f="//img.youtube.com/vi/"+c.id+"/hqdefault.jpg",l(f)):"vimeo"===c.type?a.ajax({type:"GET",url:"//vimeo.com/api/v2/video/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a[0].thumbnail_large,l(f)}}):"vzaar"===c.type&&a.ajax({type:"GET",url:"//vzaar.com/api/videos/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a.framegrab_url,l(f)}})},e.prototype.stop=function(){this._core.trigger("stop",null,"video"),this._playing.find(".owl-video-frame").remove(),this._playing.removeClass("owl-video-playing"),this._playing=null,this._core.leave("playing"),this._core.trigger("stopped",null,"video")},e.prototype.play=function(b){var c,d=a(b.target),e=d.closest("."+this._core.settings.itemClass),f=this._videos[e.attr("data-video")],g=f.width||"100%",h=f.height||this._core.$stage.height();this._playing||(this._core.enter("playing"),this._core.trigger("play",null,"video"),e=this._core.items(this._core.relative(e.index())),this._core.reset(e.index()),"youtube"===f.type?c='<iframe width="'+g+'" height="'+h+'" src="//www.youtube.com/embed/'+f.id+"?autoplay=1&rel=0&v="+f.id+'" frameborder="0" allowfullscreen></iframe>':"vimeo"===f.type?c='<iframe src="//player.vimeo.com/video/'+f.id+'?autoplay=1" width="'+g+'" height="'+h+'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>':"vzaar"===f.type&&(c='<iframe frameborder="0"height="'+h+'"width="'+g+'" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/'+f.id+'/player?autoplay=true"></iframe>'),a('<div class="owl-video-frame">'+c+"</div>").insertAfter(e.find(".owl-video")),this._playing=e.addClass("owl-video-playing"))},e.prototype.isInFullScreen=function(){var b=c.fullscreenElement||c.mozFullScreenElement||c.webkitFullscreenElement;return b&&a(b).parent().hasClass("owl-video-frame")},e.prototype.destroy=function(){var a,b;this._core.$element.off("click.owl.video");for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Video=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this.core=b,this.core.options=a.extend({},e.Defaults,this.core.options),this.swapping=!0,this.previous=d,this.next=d,this.handlers={"change.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&(this.previous=this.core.current(),this.next=a.property.value)},this),"drag.owl.carousel dragged.owl.carousel translated.owl.carousel":a.proxy(function(a){a.namespace&&(this.swapping="translated"==a.type)},this),"translate.owl.carousel":a.proxy(function(a){a.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)&&this.swap()},this)},this.core.$element.on(this.handlers)};e.Defaults={animateOut:!1,animateIn:!1},e.prototype.swap=function(){if(1===this.core.settings.items&&a.support.animation&&a.support.transition){this.core.speed(0)
;var b,c=a.proxy(this.clear,this),d=this.core.$stage.children().eq(this.previous),e=this.core.$stage.children().eq(this.next),f=this.core.settings.animateIn,g=this.core.settings.animateOut;this.core.current()!==this.previous&&(g&&(b=this.core.coordinates(this.previous)-this.core.coordinates(this.next),d.one(a.support.animation.end,c).css({left:b+"px"}).addClass("animated owl-animated-out").addClass(g)),f&&e.one(a.support.animation.end,c).addClass("animated owl-animated-in").addClass(f))}},e.prototype.clear=function(b){a(b.target).css({left:""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),this.core.onTransitionEnd()},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this.core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Animate=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._call=null,this._time=0,this._timeout=0,this._paused=!0,this._handlers={"changed.owl.carousel":a.proxy(function(a){a.namespace&&"settings"===a.property.name?this._core.settings.autoplay?this.play():this.stop():a.namespace&&"position"===a.property.name&&this._paused&&(this._time=0)},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoplay&&this.play()},this),"play.owl.autoplay":a.proxy(function(a,b,c){a.namespace&&this.play(b,c)},this),"stop.owl.autoplay":a.proxy(function(a){a.namespace&&this.stop()},this),"mouseover.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"mouseleave.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.play()},this),"touchstart.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"touchend.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this.play()},this)},this._core.$element.on(this._handlers),this._core.options=a.extend({},e.Defaults,this._core.options)};e.Defaults={autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,autoplaySpeed:!1},e.prototype._next=function(d){this._call=b.setTimeout(a.proxy(this._next,this,d),this._timeout*(Math.round(this.read()/this._timeout)+1)-this.read()),this._core.is("busy")||this._core.is("interacting")||c.hidden||this._core.next(d||this._core.settings.autoplaySpeed)},e.prototype.read=function(){return(new Date).getTime()-this._time},e.prototype.play=function(c,d){var e;this._core.is("rotating")||this._core.enter("rotating"),c=c||this._core.settings.autoplayTimeout,e=Math.min(this._time%(this._timeout||c),c),this._paused?(this._time=this.read(),this._paused=!1):b.clearTimeout(this._call),this._time+=this.read()%c-e,this._timeout=c,this._call=b.setTimeout(a.proxy(this._next,this,d),c-e)},e.prototype.stop=function(){this._core.is("rotating")&&(this._time=0,this._paused=!0,b.clearTimeout(this._call),this._core.leave("rotating"))},e.prototype.pause=function(){this._core.is("rotating")&&!this._paused&&(this._time=this.read(),this._paused=!0,b.clearTimeout(this._call))},e.prototype.destroy=function(){var a,b;this.stop();for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.autoplay=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(b){this._core=b,this._initialized=!1,this._pages=[],this._controls={},this._templates=[],this.$element=this._core.$element,this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to},this._handlers={"prepared.owl.carousel":a.proxy(function(b){b.namespace&&this._core.settings.dotsData&&this._templates.push('<div class="'+this._core.settings.dotClass+'">'+a(b.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot")+"</div>")},this),"added.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,0,this._templates.pop())},this),"remove.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,1)},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&this.draw()},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&!this._initialized&&(this._core.trigger("initialize",null,"navigation"),this.initialize(),this.update(),this.draw(),this._initialized=!0,this._core.trigger("initialized",null,"navigation"))},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._initialized&&(this._core.trigger("refresh",null,"navigation"),this.update(),this.draw(),this._core.trigger("refreshed",null,"navigation"))},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers)};e.Defaults={nav:!1,navText:['<span aria-label="Previous">&#x2039;</span>','<span aria-label="Next">&#x203a;</span>'],navSpeed:!1,navElement:'button type="button" role="presentation"',navContainer:!1,navContainerClass:"owl-nav",navClass:["owl-prev","owl-next"],slideBy:1,dotClass:"owl-dot",dotsClass:"owl-dots",dots:!0,dotsEach:!1,dotsData:!1,dotsSpeed:!1,dotsContainer:!1},e.prototype.initialize=function(){var b,c=this._core.settings;this._controls.$relative=(c.navContainer?a(c.navContainer):a("<div>").addClass(c.navContainerClass).appendTo(this.$element)).addClass("disabled"),this._controls.$previous=a("<"+c.navElement+">").addClass(c.navClass[0]).html(c.navText[0]).prependTo(this._controls.$relative).on("click",a.proxy(function(a){this.prev(c.navSpeed)},this)),this._controls.$next=a("<"+c.navElement+">").addClass(c.navClass[1]).html(c.navText[1]).appendTo(this._controls.$relative).on("click",a.proxy(function(a){this.next(c.navSpeed)},this)),c.dotsData||(this._templates=[a('<button role="button">').addClass(c.dotClass).append(a("<span>")).prop("outerHTML")]),this._controls.$absolute=(c.dotsContainer?a(c.dotsContainer):a("<div>").addClass(c.dotsClass).appendTo(this.$element)).addClass("disabled"),this._controls.$absolute.on("click","button",a.proxy(function(b){var d=a(b.target).parent().is(this._controls.$absolute)?a(b.target).index():a(b.target).parent().index();b.preventDefault(),this.to(d,c.dotsSpeed)},this));for(b in this._overrides)this._core[b]=a.proxy(this[b],this)},e.prototype.destroy=function(){var a,b,c,d,e;e=this._core.settings;for(a in this._handlers)this.$element.off(a,this._handlers[a]);for(b in this._controls)"$relative"===b&&e.navContainer?this._controls[b].html(""):this._controls[b].remove();for(d in this.overides)this._core[d]=this._overrides[d];for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},e.prototype.update=function(){var a,b,c,d=this._core.clones().length/2,e=d+this._core.items().length,f=this._core.maximum(!0),g=this._core.settings,h=g.center||g.autoWidth||g.dotsData?1:g.dotsEach||g.items;if("page"!==g.slideBy&&(g.slideBy=Math.min(g.slideBy,g.items)),g.dots||"page"==g.slideBy)for(this._pages=[],a=d,b=0,c=0;a<e;a++){if(b>=h||0===b){if(this._pages.push({start:Math.min(f,a-d),end:a-d+h-1}),Math.min(f,a-d)===f)break;b=0,++c}b+=this._core.mergers(this._core.relative(a))}},e.prototype.draw=function(){var b,c=this._core.settings,d=this._core.items().length<=c.items,e=this._core.relative(this._core.current()),f=c.loop||c.rewind;this._controls.$relative.toggleClass("disabled",!c.nav||d),c.nav&&(this._controls.$previous.toggleClass("disabled",!f&&e<=this._core.minimum(!0)),this._controls.$next.toggleClass("disabled",!f&&e>=this._core.maximum(!0))),this._controls.$absolute.toggleClass("disabled",!c.dots||d),c.dots&&(b=this._pages.length-this._controls.$absolute.children().length,c.dotsData&&0!==b?this._controls.$absolute.html(this._templates.join("")):b>0?this._controls.$absolute.append(new Array(b+1).join(this._templates[0])):b<0&&this._controls.$absolute.children().slice(b).remove(),this._controls.$absolute.find(".active").removeClass("active"),this._controls.$absolute.children().eq(a.inArray(this.current(),this._pages)).addClass("active"))},e.prototype.onTrigger=function(b){var c=this._core.settings;b.page={index:a.inArray(this.current(),this._pages),count:this._pages.length,size:c&&(c.center||c.autoWidth||c.dotsData?1:c.dotsEach||c.items)}},e.prototype.current=function(){var b=this._core.relative(this._core.current());return a.grep(this._pages,a.proxy(function(a,c){return a.start<=b&&a.end>=b},this)).pop()},e.prototype.getPosition=function(b){var c,d,e=this._core.settings;return"page"==e.slideBy?(c=a.inArray(this.current(),this._pages),d=this._pages.length,b?++c:--c,c=this._pages[(c%d+d)%d].start):(c=this._core.relative(this._core.current()),d=this._core.items().length,b?c+=e.slideBy:c-=e.slideBy),c},e.prototype.next=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!0),b)},e.prototype.prev=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!1),b)},e.prototype.to=function(b,c,d){var e;!d&&this._pages.length?(e=this._pages.length,a.proxy(this._overrides.to,this._core)(this._pages[(b%e+e)%e].start,c)):a.proxy(this._overrides.to,this._core)(b,c)},a.fn.owlCarousel.Constructor.Plugins.Navigation=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(c){this._core=c,this._hashes={},this.$element=this._core.$element,this._handlers={"initialized.owl.carousel":a.proxy(function(c){c.namespace&&"URLHash"===this._core.settings.startPosition&&a(b).trigger("hashchange.owl.navigation")},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");if(!c)return;this._hashes[c]=b.content}},this),"changed.owl.carousel":a.proxy(function(c){if(c.namespace&&"position"===c.property.name){var d=this._core.items(this._core.relative(this._core.current())),e=a.map(this._hashes,function(a,b){return a===d?b:null}).join();if(!e||b.location.hash.slice(1)===e)return;b.location.hash=e}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers),a(b).on("hashchange.owl.navigation",a.proxy(function(a){var c=b.location.hash.substring(1),e=this._core.$stage.children(),f=this._hashes[c]&&e.index(this._hashes[c]);f!==d&&f!==this._core.current()&&this._core.to(this._core.relative(f),!1,!0)},this))};e.Defaults={URLhashListener:!1},e.prototype.destroy=function(){var c,d;a(b).off("hashchange.owl.navigation");for(c in this._handlers)this._core.$element.off(c,this._handlers[c]);for(d in Object.getOwnPropertyNames(this))"function"!=typeof this[d]&&(this[d]=null)},a.fn.owlCarousel.Constructor.Plugins.Hash=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){function e(b,c){var e=!1,f=b.charAt(0).toUpperCase()+b.slice(1);return a.each((b+" "+h.join(f+" ")+f).split(" "),function(a,b){if(g[b]!==d)return e=!c||b,!1}),e}function f(a){return e(a,!0)}var g=a("<support>").get(0).style,h="Webkit Moz O ms".split(" "),i={transition:{end:{WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",transition:"transitionend"}},animation:{end:{WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd",animation:"animationend"}}},j={csstransforms:function(){return!!e("transform")},csstransforms3d:function(){return!!e("perspective")},csstransitions:function(){return!!e("transition")},cssanimations:function(){return!!e("animation")}};j.csstransitions()&&(a.support.transition=new String(f("transition")),a.support.transition.end=i.transition.end[a.support.transition]),j.cssanimations()&&(a.support.animation=new String(f("animation")),a.support.animation.end=i.animation.end[a.support.animation]),j.csstransforms()&&(a.support.transform=new String(f("transform")),a.support.transform3d=j.csstransforms3d())}(window.Zepto||window.jQuery,window,document);;
/*! jQuery UI - v1.10.4 - 2014-01-17
* http://jqueryui.com
* Copyright 2014 jQuery Foundation and other contributors; Licensed MIT */
(function(t,e){function i(){return++n}function s(t){return t=t.cloneNode(!1),t.hash.length>1&&decodeURIComponent(t.href.replace(a,""))===decodeURIComponent(location.href.replace(a,""))}var n=0,a=/#.*$/;t.widget("ui.tabs",{version:"1.10.4",delay:300,options:{active:null,collapsible:!1,event:"click",heightStyle:"content",hide:null,show:null,activate:null,beforeActivate:null,beforeLoad:null,load:null},_create:function(){var e=this,i=this.options;this.running=!1,this.element.addClass("ui-tabs ui-widget ui-widget-content ui-corner-all").toggleClass("ui-tabs-collapsible",i.collapsible).delegate(".ui-tabs-nav > li","mousedown"+this.eventNamespace,function(e){t(this).is(".ui-state-disabled")&&e.preventDefault()}).delegate(".ui-tabs-anchor","focus"+this.eventNamespace,function(){t(this).closest("li").is(".ui-state-disabled")&&this.blur()}),this._processTabs(),i.active=this._initialActive(),t.isArray(i.disabled)&&(i.disabled=t.unique(i.disabled.concat(t.map(this.tabs.filter(".ui-state-disabled"),function(t){return e.tabs.index(t)}))).sort()),this.active=this.options.active!==!1&&this.anchors.length?this._findActive(i.active):t(),this._refresh(),this.active.length&&this.load(i.active)},_initialActive:function(){var i=this.options.active,s=this.options.collapsible,n=location.hash.substring(1);return null===i&&(n&&this.tabs.each(function(s,a){return t(a).attr("aria-controls")===n?(i=s,!1):e}),null===i&&(i=this.tabs.index(this.tabs.filter(".ui-tabs-active"))),(null===i||-1===i)&&(i=this.tabs.length?0:!1)),i!==!1&&(i=this.tabs.index(this.tabs.eq(i)),-1===i&&(i=s?!1:0)),!s&&i===!1&&this.anchors.length&&(i=0),i},_getCreateEventData:function(){return{tab:this.active,panel:this.active.length?this._getPanelForTab(this.active):t()}},_tabKeydown:function(i){var s=t(this.document[0].activeElement).closest("li"),n=this.tabs.index(s),a=!0;if(!this._handlePageNav(i)){switch(i.keyCode){case t.ui.keyCode.RIGHT:case t.ui.keyCode.DOWN:n++;break;case t.ui.keyCode.UP:case t.ui.keyCode.LEFT:a=!1,n--;break;case t.ui.keyCode.END:n=this.anchors.length-1;break;case t.ui.keyCode.HOME:n=0;break;case t.ui.keyCode.SPACE:return i.preventDefault(),clearTimeout(this.activating),this._activate(n),e;case t.ui.keyCode.ENTER:return i.preventDefault(),clearTimeout(this.activating),this._activate(n===this.options.active?!1:n),e;default:return}i.preventDefault(),clearTimeout(this.activating),n=this._focusNextTab(n,a),i.ctrlKey||(s.attr("aria-selected","false"),this.tabs.eq(n).attr("aria-selected","true"),this.activating=this._delay(function(){this.option("active",n)},this.delay))}},_panelKeydown:function(e){this._handlePageNav(e)||e.ctrlKey&&e.keyCode===t.ui.keyCode.UP&&(e.preventDefault(),this.active.focus())},_handlePageNav:function(i){return i.altKey&&i.keyCode===t.ui.keyCode.PAGE_UP?(this._activate(this._focusNextTab(this.options.active-1,!1)),!0):i.altKey&&i.keyCode===t.ui.keyCode.PAGE_DOWN?(this._activate(this._focusNextTab(this.options.active+1,!0)),!0):e},_findNextTab:function(e,i){function s(){return e>n&&(e=0),0>e&&(e=n),e}for(var n=this.tabs.length-1;-1!==t.inArray(s(),this.options.disabled);)e=i?e+1:e-1;return e},_focusNextTab:function(t,e){return t=this._findNextTab(t,e),this.tabs.eq(t).focus(),t},_setOption:function(t,i){return"active"===t?(this._activate(i),e):"disabled"===t?(this._setupDisabled(i),e):(this._super(t,i),"collapsible"===t&&(this.element.toggleClass("ui-tabs-collapsible",i),i||this.options.active!==!1||this._activate(0)),"event"===t&&this._setupEvents(i),"heightStyle"===t&&this._setupHeightStyle(i),e)},_tabId:function(t){return t.attr("aria-controls")||"ui-tabs-"+i()},_sanitizeSelector:function(t){return t?t.replace(/[!"$%&'()*+,.\/:;<=>?@\[\]\^`{|}~]/g,"\\$&"):""},refresh:function(){var e=this.options,i=this.tablist.children(":has(a[href])");e.disabled=t.map(i.filter(".ui-state-disabled"),function(t){return i.index(t)}),this._processTabs(),e.active!==!1&&this.anchors.length?this.active.length&&!t.contains(this.tablist[0],this.active[0])?this.tabs.length===e.disabled.length?(e.active=!1,this.active=t()):this._activate(this._findNextTab(Math.max(0,e.active-1),!1)):e.active=this.tabs.index(this.active):(e.active=!1,this.active=t()),this._refresh()},_refresh:function(){this._setupDisabled(this.options.disabled),this._setupEvents(this.options.event),this._setupHeightStyle(this.options.heightStyle),this.tabs.not(this.active).attr({"aria-selected":"false",tabIndex:-1}),this.panels.not(this._getPanelForTab(this.active)).hide().attr({"aria-expanded":"false","aria-hidden":"true"}),this.active.length?(this.active.addClass("ui-tabs-active ui-state-active").attr({"aria-selected":"true",tabIndex:0}),this._getPanelForTab(this.active).show().attr({"aria-expanded":"true","aria-hidden":"false"})):this.tabs.eq(0).attr("tabIndex",0)},_processTabs:function(){var e=this;this.tablist=this._getList().addClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").attr("role","tablist"),this.tabs=this.tablist.find("> li:has(a[href])").addClass("ui-state-default ui-corner-top").attr({role:"tab",tabIndex:-1}),this.anchors=this.tabs.map(function(){return t("a",this)[0]}).addClass("ui-tabs-anchor").attr({role:"presentation",tabIndex:-1}),this.panels=t(),this.anchors.each(function(i,n){var a,o,r,h=t(n).uniqueId().attr("id"),l=t(n).closest("li"),u=l.attr("aria-controls");s(n)?(a=n.hash,o=e.element.find(e._sanitizeSelector(a))):(r=e._tabId(l),a="#"+r,o=e.element.find(a),o.length||(o=e._createPanel(r),o.insertAfter(e.panels[i-1]||e.tablist)),o.attr("aria-live","polite")),o.length&&(e.panels=e.panels.add(o)),u&&l.data("ui-tabs-aria-controls",u),l.attr({"aria-controls":a.substring(1),"aria-labelledby":h}),o.attr("aria-labelledby",h)}),this.panels.addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").attr("role","tabpanel")},_getList:function(){return this.tablist||this.element.find("ol,ul").eq(0)},_createPanel:function(e){return t("<div>").attr("id",e).addClass("ui-tabs-panel ui-widget-content ui-corner-bottom").data("ui-tabs-destroy",!0)},_setupDisabled:function(e){t.isArray(e)&&(e.length?e.length===this.anchors.length&&(e=!0):e=!1);for(var i,s=0;i=this.tabs[s];s++)e===!0||-1!==t.inArray(s,e)?t(i).addClass("ui-state-disabled").attr("aria-disabled","true"):t(i).removeClass("ui-state-disabled").removeAttr("aria-disabled");this.options.disabled=e},_setupEvents:function(e){var i={click:function(t){t.preventDefault()}};e&&t.each(e.split(" "),function(t,e){i[e]="_eventHandler"}),this._off(this.anchors.add(this.tabs).add(this.panels)),this._on(this.anchors,i),this._on(this.tabs,{keydown:"_tabKeydown"}),this._on(this.panels,{keydown:"_panelKeydown"}),this._focusable(this.tabs),this._hoverable(this.tabs)},_setupHeightStyle:function(e){var i,s=this.element.parent();"fill"===e?(i=s.height(),i-=this.element.outerHeight()-this.element.height(),this.element.siblings(":visible").each(function(){var e=t(this),s=e.css("position");"absolute"!==s&&"fixed"!==s&&(i-=e.outerHeight(!0))}),this.element.children().not(this.panels).each(function(){i-=t(this).outerHeight(!0)}),this.panels.each(function(){t(this).height(Math.max(0,i-t(this).innerHeight()+t(this).height()))}).css("overflow","auto")):"auto"===e&&(i=0,this.panels.each(function(){i=Math.max(i,t(this).height("").height())}).height(i))},_eventHandler:function(e){var i=this.options,s=this.active,n=t(e.currentTarget),a=n.closest("li"),o=a[0]===s[0],r=o&&i.collapsible,h=r?t():this._getPanelForTab(a),l=s.length?this._getPanelForTab(s):t(),u={oldTab:s,oldPanel:l,newTab:r?t():a,newPanel:h};e.preventDefault(),a.hasClass("ui-state-disabled")||a.hasClass("ui-tabs-loading")||this.running||o&&!i.collapsible||this._trigger("beforeActivate",e,u)===!1||(i.active=r?!1:this.tabs.index(a),this.active=o?t():a,this.xhr&&this.xhr.abort(),l.length||h.length||t.error("jQuery UI Tabs: Mismatching fragment identifier."),h.length&&this.load(this.tabs.index(a),e),this._toggle(e,u))},_toggle:function(e,i){function s(){a.running=!1,a._trigger("activate",e,i)}function n(){i.newTab.closest("li").addClass("ui-tabs-active ui-state-active"),o.length&&a.options.show?a._show(o,a.options.show,s):(o.show(),s())}var a=this,o=i.newPanel,r=i.oldPanel;this.running=!0,r.length&&this.options.hide?this._hide(r,this.options.hide,function(){i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"),n()}):(i.oldTab.closest("li").removeClass("ui-tabs-active ui-state-active"),r.hide(),n()),r.attr({"aria-expanded":"false","aria-hidden":"true"}),i.oldTab.attr("aria-selected","false"),o.length&&r.length?i.oldTab.attr("tabIndex",-1):o.length&&this.tabs.filter(function(){return 0===t(this).attr("tabIndex")}).attr("tabIndex",-1),o.attr({"aria-expanded":"true","aria-hidden":"false"}),i.newTab.attr({"aria-selected":"true",tabIndex:0})},_activate:function(e){var i,s=this._findActive(e);s[0]!==this.active[0]&&(s.length||(s=this.active),i=s.find(".ui-tabs-anchor")[0],this._eventHandler({target:i,currentTarget:i,preventDefault:t.noop}))},_findActive:function(e){return e===!1?t():this.tabs.eq(e)},_getIndex:function(t){return"string"==typeof t&&(t=this.anchors.index(this.anchors.filter("[href$='"+t+"']"))),t},_destroy:function(){this.xhr&&this.xhr.abort(),this.element.removeClass("ui-tabs ui-widget ui-widget-content ui-corner-all ui-tabs-collapsible"),this.tablist.removeClass("ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all").removeAttr("role"),this.anchors.removeClass("ui-tabs-anchor").removeAttr("role").removeAttr("tabIndex").removeUniqueId(),this.tabs.add(this.panels).each(function(){t.data(this,"ui-tabs-destroy")?t(this).remove():t(this).removeClass("ui-state-default ui-state-active ui-state-disabled ui-corner-top ui-corner-bottom ui-widget-content ui-tabs-active ui-tabs-panel").removeAttr("tabIndex").removeAttr("aria-live").removeAttr("aria-busy").removeAttr("aria-selected").removeAttr("aria-labelledby").removeAttr("aria-hidden").removeAttr("aria-expanded").removeAttr("role")}),this.tabs.each(function(){var e=t(this),i=e.data("ui-tabs-aria-controls");i?e.attr("aria-controls",i).removeData("ui-tabs-aria-controls"):e.removeAttr("aria-controls")}),this.panels.show(),"content"!==this.options.heightStyle&&this.panels.css("height","")},enable:function(i){var s=this.options.disabled;s!==!1&&(i===e?s=!1:(i=this._getIndex(i),s=t.isArray(s)?t.map(s,function(t){return t!==i?t:null}):t.map(this.tabs,function(t,e){return e!==i?e:null})),this._setupDisabled(s))},disable:function(i){var s=this.options.disabled;if(s!==!0){if(i===e)s=!0;else{if(i=this._getIndex(i),-1!==t.inArray(i,s))return;s=t.isArray(s)?t.merge([i],s).sort():[i]}this._setupDisabled(s)}},load:function(e,i){e=this._getIndex(e);var n=this,a=this.tabs.eq(e),o=a.find(".ui-tabs-anchor"),r=this._getPanelForTab(a),h={tab:a,panel:r};s(o[0])||(this.xhr=t.ajax(this._ajaxSettings(o,i,h)),this.xhr&&"canceled"!==this.xhr.statusText&&(a.addClass("ui-tabs-loading"),r.attr("aria-busy","true"),this.xhr.success(function(t){setTimeout(function(){r.html(t),n._trigger("load",i,h)},1)}).complete(function(t,e){setTimeout(function(){"abort"===e&&n.panels.stop(!1,!0),a.removeClass("ui-tabs-loading"),r.removeAttr("aria-busy"),t===n.xhr&&delete n.xhr},1)})))},_ajaxSettings:function(e,i,s){var n=this;return{url:e.attr("href"),beforeSend:function(e,a){return n._trigger("beforeLoad",i,t.extend({jqXHR:e,ajaxSettings:a},s))}}},_getPanelForTab:function(e){var i=t(e).attr("aria-controls");return this.element.find(this._sanitizeSelector("#"+i))}})})(jQuery);;
// Ion.RangeSlider | version 2.1.6 | https://github.com/IonDen/ion.rangeSlider
;(function(f){"function"===typeof define&&define.amd?define(["jquery"],function(p){return f(p,document,window,navigator)}):"object"===typeof exports?f(require("jquery"),document,window,navigator):f(jQuery,document,window,navigator)})(function(f,p,h,t,q){var u=0,m=function(){var a=t.userAgent,b=/msie\s\d+/i;return 0<a.search(b)&&(a=b.exec(a).toString(),a=a.split(" ")[1],9>a)?(f("html").addClass("lt-ie9"),!0):!1}();Function.prototype.bind||(Function.prototype.bind=function(a){var b=this,d=[].slice;if("function"!=
typeof b)throw new TypeError;var c=d.call(arguments,1),e=function(){if(this instanceof e){var g=function(){};g.prototype=b.prototype;var g=new g,l=b.apply(g,c.concat(d.call(arguments)));return Object(l)===l?l:g}return b.apply(a,c.concat(d.call(arguments)))};return e});Array.prototype.indexOf||(Array.prototype.indexOf=function(a,b){var d;if(null==this)throw new TypeError('"this" is null or not defined');var c=Object(this),e=c.length>>>0;if(0===e)return-1;d=+b||0;Infinity===Math.abs(d)&&(d=0);if(d>=
e)return-1;for(d=Math.max(0<=d?d:e-Math.abs(d),0);d<e;){if(d in c&&c[d]===a)return d;d++}return-1});var r=function(a,b,d){this.VERSION="2.1.6";this.input=a;this.plugin_count=d;this.old_to=this.old_from=this.update_tm=this.calc_count=this.current_plugin=0;this.raf_id=this.old_min_interval=null;this.is_update=this.is_key=this.no_diapason=this.force_redraw=this.dragging=!1;this.is_start=this.is_first_update=!0;this.is_click=this.is_resize=this.is_active=this.is_finish=!1;b=b||{};this.$cache={win:f(h),
body:f(p.body),input:f(a),cont:null,rs:null,min:null,max:null,from:null,to:null,single:null,bar:null,line:null,s_single:null,s_from:null,s_to:null,shad_single:null,shad_from:null,shad_to:null,edge:null,grid:null,grid_labels:[]};this.coords={x_gap:0,x_pointer:0,w_rs:0,w_rs_old:0,w_handle:0,p_gap:0,p_gap_left:0,p_gap_right:0,p_step:0,p_pointer:0,p_handle:0,p_single_fake:0,p_single_real:0,p_from_fake:0,p_from_real:0,p_to_fake:0,p_to_real:0,p_bar_x:0,p_bar_w:0,grid_gap:0,big_num:0,big:[],big_w:[],big_p:[],
big_x:[]};this.labels={w_min:0,w_max:0,w_from:0,w_to:0,w_single:0,p_min:0,p_max:0,p_from_fake:0,p_from_left:0,p_to_fake:0,p_to_left:0,p_single_fake:0,p_single_left:0};var c=this.$cache.input;a=c.prop("value");var e;d={type:"single",min:10,max:100,from:null,to:null,step:1,min_interval:0,max_interval:0,drag_interval:!1,values:[],p_values:[],from_fixed:!1,from_min:null,from_max:null,from_shadow:!1,to_fixed:!1,to_min:null,to_max:null,to_shadow:!1,prettify_enabled:!0,prettify_separator:" ",prettify:null,
force_edges:!1,keyboard:!1,keyboard_step:5,grid:!1,grid_margin:!0,grid_num:4,grid_snap:!1,hide_min_max:!1,hide_from_to:!1,prefix:"",postfix:"",max_postfix:"",decorate_both:!0,values_separator:" \u2014 ",input_values_separator:";",disable:!1,onStart:null,onChange:null,onFinish:null,onUpdate:null};"INPUT"!==c[0].nodeName&&console&&console.warn&&console.warn("Base element should be <input>!",c[0]);c={type:c.data("type"),min:c.data("min"),max:c.data("max"),from:c.data("from"),to:c.data("to"),step:c.data("step"),
min_interval:c.data("minInterval"),max_interval:c.data("maxInterval"),drag_interval:c.data("dragInterval"),values:c.data("values"),from_fixed:c.data("fromFixed"),from_min:c.data("fromMin"),from_max:c.data("fromMax"),from_shadow:c.data("fromShadow"),to_fixed:c.data("toFixed"),to_min:c.data("toMin"),to_max:c.data("toMax"),to_shadow:c.data("toShadow"),prettify_enabled:c.data("prettifyEnabled"),prettify_separator:c.data("prettifySeparator"),force_edges:c.data("forceEdges"),keyboard:c.data("keyboard"),
keyboard_step:c.data("keyboardStep"),grid:c.data("grid"),grid_margin:c.data("gridMargin"),grid_num:c.data("gridNum"),grid_snap:c.data("gridSnap"),hide_min_max:c.data("hideMinMax"),hide_from_to:c.data("hideFromTo"),prefix:c.data("prefix"),postfix:c.data("postfix"),max_postfix:c.data("maxPostfix"),decorate_both:c.data("decorateBoth"),values_separator:c.data("valuesSeparator"),input_values_separator:c.data("inputValuesSeparator"),disable:c.data("disable")};c.values=c.values&&c.values.split(",");for(e in c)c.hasOwnProperty(e)&&
(c[e]!==q&&""!==c[e]||delete c[e]);a!==q&&""!==a&&(a=a.split(c.input_values_separator||b.input_values_separator||";"),a[0]&&a[0]==+a[0]&&(a[0]=+a[0]),a[1]&&a[1]==+a[1]&&(a[1]=+a[1]),b&&b.values&&b.values.length?(d.from=a[0]&&b.values.indexOf(a[0]),d.to=a[1]&&b.values.indexOf(a[1])):(d.from=a[0]&&+a[0],d.to=a[1]&&+a[1]));f.extend(d,b);f.extend(d,c);this.options=d;this.update_check={};this.validate();this.result={input:this.$cache.input,slider:null,min:this.options.min,max:this.options.max,from:this.options.from,
from_percent:0,from_value:null,to:this.options.to,to_percent:0,to_value:null};this.init()};r.prototype={init:function(a){this.no_diapason=!1;this.coords.p_step=this.convertToPercent(this.options.step,!0);this.target="base";this.toggleInput();this.append();this.setMinMax();a?(this.force_redraw=!0,this.calc(!0),this.callOnUpdate()):(this.force_redraw=!0,this.calc(!0),this.callOnStart());this.updateScene()},append:function(){this.$cache.input.before('<span class="irs js-irs-'+this.plugin_count+'"></span>');
this.$cache.input.prop("readonly",!0);this.$cache.cont=this.$cache.input.prev();this.result.slider=this.$cache.cont;this.$cache.cont.html('<span class="irs"><span class="irs-line" tabindex="-1"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min">0</span><span class="irs-max">1</span><span class="irs-from">0</span><span class="irs-to">0</span><span class="irs-single">0</span></span><span class="irs-grid"></span><span class="irs-bar"></span>');
this.$cache.rs=this.$cache.cont.find(".irs");this.$cache.min=this.$cache.cont.find(".irs-min");this.$cache.max=this.$cache.cont.find(".irs-max");this.$cache.from=this.$cache.cont.find(".irs-from");this.$cache.to=this.$cache.cont.find(".irs-to");this.$cache.single=this.$cache.cont.find(".irs-single");this.$cache.bar=this.$cache.cont.find(".irs-bar");this.$cache.line=this.$cache.cont.find(".irs-line");this.$cache.grid=this.$cache.cont.find(".irs-grid");"single"===this.options.type?(this.$cache.cont.append('<span class="irs-bar-edge"></span><span class="irs-shadow shadow-single"></span><span class="irs-slider single"></span>'),
this.$cache.edge=this.$cache.cont.find(".irs-bar-edge"),this.$cache.s_single=this.$cache.cont.find(".single"),this.$cache.from[0].style.visibility="hidden",this.$cache.to[0].style.visibility="hidden",this.$cache.shad_single=this.$cache.cont.find(".shadow-single")):(this.$cache.cont.append('<span class="irs-shadow shadow-from"></span><span class="irs-shadow shadow-to"></span><span class="irs-slider from"></span><span class="irs-slider to"></span>'),this.$cache.s_from=this.$cache.cont.find(".from"),
this.$cache.s_to=this.$cache.cont.find(".to"),this.$cache.shad_from=this.$cache.cont.find(".shadow-from"),this.$cache.shad_to=this.$cache.cont.find(".shadow-to"),this.setTopHandler());this.options.hide_from_to&&(this.$cache.from[0].style.display="none",this.$cache.to[0].style.display="none",this.$cache.single[0].style.display="none");this.appendGrid();this.options.disable?(this.appendDisableMask(),this.$cache.input[0].disabled=!0):(this.$cache.cont.removeClass("irs-disabled"),this.$cache.input[0].disabled=
!1,this.bindEvents());this.options.drag_interval&&(this.$cache.bar[0].style.cursor="ew-resize")},setTopHandler:function(){var a=this.options.max,b=this.options.to;this.options.from>this.options.min&&b===a?this.$cache.s_from.addClass("type_last"):b<a&&this.$cache.s_to.addClass("type_last")},changeLevel:function(a){switch(a){case "single":this.coords.p_gap=this.toFixed(this.coords.p_pointer-this.coords.p_single_fake);break;case "from":this.coords.p_gap=this.toFixed(this.coords.p_pointer-this.coords.p_from_fake);
this.$cache.s_from.addClass("state_hover");this.$cache.s_from.addClass("type_last");this.$cache.s_to.removeClass("type_last");break;case "to":this.coords.p_gap=this.toFixed(this.coords.p_pointer-this.coords.p_to_fake);this.$cache.s_to.addClass("state_hover");this.$cache.s_to.addClass("type_last");this.$cache.s_from.removeClass("type_last");break;case "both":this.coords.p_gap_left=this.toFixed(this.coords.p_pointer-this.coords.p_from_fake),this.coords.p_gap_right=this.toFixed(this.coords.p_to_fake-
this.coords.p_pointer),this.$cache.s_to.removeClass("type_last"),this.$cache.s_from.removeClass("type_last")}},appendDisableMask:function(){this.$cache.cont.append('<span class="irs-disable-mask"></span>');this.$cache.cont.addClass("irs-disabled")},remove:function(){this.$cache.cont.remove();this.$cache.cont=null;this.$cache.line.off("keydown.irs_"+this.plugin_count);this.$cache.body.off("touchmove.irs_"+this.plugin_count);this.$cache.body.off("mousemove.irs_"+this.plugin_count);this.$cache.win.off("touchend.irs_"+
this.plugin_count);this.$cache.win.off("mouseup.irs_"+this.plugin_count);m&&(this.$cache.body.off("mouseup.irs_"+this.plugin_count),this.$cache.body.off("mouseleave.irs_"+this.plugin_count));this.$cache.grid_labels=[];this.coords.big=[];this.coords.big_w=[];this.coords.big_p=[];this.coords.big_x=[];cancelAnimationFrame(this.raf_id)},bindEvents:function(){if(!this.no_diapason){this.$cache.body.on("touchmove.irs_"+this.plugin_count,this.pointerMove.bind(this));this.$cache.body.on("mousemove.irs_"+this.plugin_count,
this.pointerMove.bind(this));this.$cache.win.on("touchend.irs_"+this.plugin_count,this.pointerUp.bind(this));this.$cache.win.on("mouseup.irs_"+this.plugin_count,this.pointerUp.bind(this));this.$cache.line.on("touchstart.irs_"+this.plugin_count,this.pointerClick.bind(this,"click"));this.$cache.line.on("mousedown.irs_"+this.plugin_count,this.pointerClick.bind(this,"click"));this.options.drag_interval&&"double"===this.options.type?(this.$cache.bar.on("touchstart.irs_"+this.plugin_count,this.pointerDown.bind(this,
"both")),this.$cache.bar.on("mousedown.irs_"+this.plugin_count,this.pointerDown.bind(this,"both"))):(this.$cache.bar.on("touchstart.irs_"+this.plugin_count,this.pointerClick.bind(this,"click")),this.$cache.bar.on("mousedown.irs_"+this.plugin_count,this.pointerClick.bind(this,"click")));"single"===this.options.type?(this.$cache.single.on("touchstart.irs_"+this.plugin_count,this.pointerDown.bind(this,"single")),this.$cache.s_single.on("touchstart.irs_"+this.plugin_count,this.pointerDown.bind(this,"single")),
this.$cache.shad_single.on("touchstart.irs_"+this.plugin_count,this.pointerClick.bind(this,"click")),this.$cache.single.on("mousedown.irs_"+this.plugin_count,this.pointerDown.bind(this,"single")),this.$cache.s_single.on("mousedown.irs_"+this.plugin_count,this.pointerDown.bind(this,"single")),this.$cache.edge.on("mousedown.irs_"+this.plugin_count,this.pointerClick.bind(this,"click")),this.$cache.shad_single.on("mousedown.irs_"+this.plugin_count,this.pointerClick.bind(this,"click"))):(this.$cache.single.on("touchstart.irs_"+
this.plugin_count,this.pointerDown.bind(this,null)),this.$cache.single.on("mousedown.irs_"+this.plugin_count,this.pointerDown.bind(this,null)),this.$cache.from.on("touchstart.irs_"+this.plugin_count,this.pointerDown.bind(this,"from")),this.$cache.s_from.on("touchstart.irs_"+this.plugin_count,this.pointerDown.bind(this,"from")),this.$cache.to.on("touchstart.irs_"+this.plugin_count,this.pointerDown.bind(this,"to")),this.$cache.s_to.on("touchstart.irs_"+this.plugin_count,this.pointerDown.bind(this,"to")),
this.$cache.shad_from.on("touchstart.irs_"+this.plugin_count,this.pointerClick.bind(this,"click")),this.$cache.shad_to.on("touchstart.irs_"+this.plugin_count,this.pointerClick.bind(this,"click")),this.$cache.from.on("mousedown.irs_"+this.plugin_count,this.pointerDown.bind(this,"from")),this.$cache.s_from.on("mousedown.irs_"+this.plugin_count,this.pointerDown.bind(this,"from")),this.$cache.to.on("mousedown.irs_"+this.plugin_count,this.pointerDown.bind(this,"to")),this.$cache.s_to.on("mousedown.irs_"+
this.plugin_count,this.pointerDown.bind(this,"to")),this.$cache.shad_from.on("mousedown.irs_"+this.plugin_count,this.pointerClick.bind(this,"click")),this.$cache.shad_to.on("mousedown.irs_"+this.plugin_count,this.pointerClick.bind(this,"click")));if(this.options.keyboard)this.$cache.line.on("keydown.irs_"+this.plugin_count,this.key.bind(this,"keyboard"));m&&(this.$cache.body.on("mouseup.irs_"+this.plugin_count,this.pointerUp.bind(this)),this.$cache.body.on("mouseleave.irs_"+this.plugin_count,this.pointerUp.bind(this)))}},
pointerMove:function(a){this.dragging&&(this.coords.x_pointer=(a.pageX||a.originalEvent.touches&&a.originalEvent.touches[0].pageX)-this.coords.x_gap,this.calc())},pointerUp:function(a){this.current_plugin===this.plugin_count&&this.is_active&&(this.is_active=!1,this.$cache.cont.find(".state_hover").removeClass("state_hover"),this.force_redraw=!0,m&&f("*").prop("unselectable",!1),this.updateScene(),this.restoreOriginalMinInterval(),(f.contains(this.$cache.cont[0],a.target)||this.dragging)&&this.callOnFinish(),
this.dragging=!1)},pointerDown:function(a,b){b.preventDefault();var d=b.pageX||b.originalEvent.touches&&b.originalEvent.touches[0].pageX;2!==b.button&&("both"===a&&this.setTempMinInterval(),a||(a=this.target||"from"),this.current_plugin=this.plugin_count,this.target=a,this.dragging=this.is_active=!0,this.coords.x_gap=this.$cache.rs.offset().left,this.coords.x_pointer=d-this.coords.x_gap,this.calcPointerPercent(),this.changeLevel(a),m&&f("*").prop("unselectable",!0),this.$cache.line.trigger("focus"),
this.updateScene())},pointerClick:function(a,b){b.preventDefault();var d=b.pageX||b.originalEvent.touches&&b.originalEvent.touches[0].pageX;2!==b.button&&(this.current_plugin=this.plugin_count,this.target=a,this.is_click=!0,this.coords.x_gap=this.$cache.rs.offset().left,this.coords.x_pointer=+(d-this.coords.x_gap).toFixed(),this.force_redraw=!0,this.calc(),this.$cache.line.trigger("focus"))},key:function(a,b){if(!(this.current_plugin!==this.plugin_count||b.altKey||b.ctrlKey||b.shiftKey||b.metaKey)){switch(b.which){case 83:case 65:case 40:case 37:b.preventDefault();
this.moveByKey(!1);break;case 87:case 68:case 38:case 39:b.preventDefault(),this.moveByKey(!0)}return!0}},moveByKey:function(a){var b=this.coords.p_pointer,b=a?b+this.options.keyboard_step:b-this.options.keyboard_step;this.coords.x_pointer=this.toFixed(this.coords.w_rs/100*b);this.is_key=!0;this.calc()},setMinMax:function(){this.options&&(this.options.hide_min_max?(this.$cache.min[0].style.display="none",this.$cache.max[0].style.display="none"):(this.options.values.length?(this.$cache.min.html(this.decorate(this.options.p_values[this.options.min])),
this.$cache.max.html(this.decorate(this.options.p_values[this.options.max]))):(this.$cache.min.html(this.decorate(this._prettify(this.options.min),this.options.min)),this.$cache.max.html(this.decorate(this._prettify(this.options.max),this.options.max))),this.labels.w_min=this.$cache.min.outerWidth(!1),this.labels.w_max=this.$cache.max.outerWidth(!1)))},setTempMinInterval:function(){var a=this.result.to-this.result.from;null===this.old_min_interval&&(this.old_min_interval=this.options.min_interval);
this.options.min_interval=a},restoreOriginalMinInterval:function(){null!==this.old_min_interval&&(this.options.min_interval=this.old_min_interval,this.old_min_interval=null)},calc:function(a){if(this.options){this.calc_count++;if(10===this.calc_count||a)this.calc_count=0,this.coords.w_rs=this.$cache.rs.outerWidth(!1),this.calcHandlePercent();if(this.coords.w_rs){this.calcPointerPercent();a=this.getHandleX();"both"===this.target&&(this.coords.p_gap=0,a=this.getHandleX());"click"===this.target&&(this.coords.p_gap=
this.coords.p_handle/2,a=this.getHandleX(),this.target=this.options.drag_interval?"both_one":this.chooseHandle(a));switch(this.target){case "base":var b=(this.options.max-this.options.min)/100;a=(this.result.from-this.options.min)/b;b=(this.result.to-this.options.min)/b;this.coords.p_single_real=this.toFixed(a);this.coords.p_from_real=this.toFixed(a);this.coords.p_to_real=this.toFixed(b);this.coords.p_single_real=this.checkDiapason(this.coords.p_single_real,this.options.from_min,this.options.from_max);
this.coords.p_from_real=this.checkDiapason(this.coords.p_from_real,this.options.from_min,this.options.from_max);this.coords.p_to_real=this.checkDiapason(this.coords.p_to_real,this.options.to_min,this.options.to_max);this.coords.p_single_fake=this.convertToFakePercent(this.coords.p_single_real);this.coords.p_from_fake=this.convertToFakePercent(this.coords.p_from_real);this.coords.p_to_fake=this.convertToFakePercent(this.coords.p_to_real);this.target=null;break;case "single":if(this.options.from_fixed)break;
this.coords.p_single_real=this.convertToRealPercent(a);this.coords.p_single_real=this.calcWithStep(this.coords.p_single_real);this.coords.p_single_real=this.checkDiapason(this.coords.p_single_real,this.options.from_min,this.options.from_max);this.coords.p_single_fake=this.convertToFakePercent(this.coords.p_single_real);break;case "from":if(this.options.from_fixed)break;this.coords.p_from_real=this.convertToRealPercent(a);this.coords.p_from_real=this.calcWithStep(this.coords.p_from_real);this.coords.p_from_real>
this.coords.p_to_real&&(this.coords.p_from_real=this.coords.p_to_real);this.coords.p_from_real=this.checkDiapason(this.coords.p_from_real,this.options.from_min,this.options.from_max);this.coords.p_from_real=this.checkMinInterval(this.coords.p_from_real,this.coords.p_to_real,"from");this.coords.p_from_real=this.checkMaxInterval(this.coords.p_from_real,this.coords.p_to_real,"from");this.coords.p_from_fake=this.convertToFakePercent(this.coords.p_from_real);break;case "to":if(this.options.to_fixed)break;
this.coords.p_to_real=this.convertToRealPercent(a);this.coords.p_to_real=this.calcWithStep(this.coords.p_to_real);this.coords.p_to_real<this.coords.p_from_real&&(this.coords.p_to_real=this.coords.p_from_real);this.coords.p_to_real=this.checkDiapason(this.coords.p_to_real,this.options.to_min,this.options.to_max);this.coords.p_to_real=this.checkMinInterval(this.coords.p_to_real,this.coords.p_from_real,"to");this.coords.p_to_real=this.checkMaxInterval(this.coords.p_to_real,this.coords.p_from_real,"to");
this.coords.p_to_fake=this.convertToFakePercent(this.coords.p_to_real);break;case "both":if(this.options.from_fixed||this.options.to_fixed)break;a=this.toFixed(a+.001*this.coords.p_handle);this.coords.p_from_real=this.convertToRealPercent(a)-this.coords.p_gap_left;this.coords.p_from_real=this.calcWithStep(this.coords.p_from_real);this.coords.p_from_real=this.checkDiapason(this.coords.p_from_real,this.options.from_min,this.options.from_max);this.coords.p_from_real=this.checkMinInterval(this.coords.p_from_real,
this.coords.p_to_real,"from");this.coords.p_from_fake=this.convertToFakePercent(this.coords.p_from_real);this.coords.p_to_real=this.convertToRealPercent(a)+this.coords.p_gap_right;this.coords.p_to_real=this.calcWithStep(this.coords.p_to_real);this.coords.p_to_real=this.checkDiapason(this.coords.p_to_real,this.options.to_min,this.options.to_max);this.coords.p_to_real=this.checkMinInterval(this.coords.p_to_real,this.coords.p_from_real,"to");this.coords.p_to_fake=this.convertToFakePercent(this.coords.p_to_real);
break;case "both_one":if(!this.options.from_fixed&&!this.options.to_fixed){var d=this.convertToRealPercent(a);a=this.result.to_percent-this.result.from_percent;var c=a/2,b=d-c,d=d+c;0>b&&(b=0,d=b+a);100<d&&(d=100,b=d-a);this.coords.p_from_real=this.calcWithStep(b);this.coords.p_from_real=this.checkDiapason(this.coords.p_from_real,this.options.from_min,this.options.from_max);this.coords.p_from_fake=this.convertToFakePercent(this.coords.p_from_real);this.coords.p_to_real=this.calcWithStep(d);this.coords.p_to_real=
this.checkDiapason(this.coords.p_to_real,this.options.to_min,this.options.to_max);this.coords.p_to_fake=this.convertToFakePercent(this.coords.p_to_real)}}"single"===this.options.type?(this.coords.p_bar_x=this.coords.p_handle/2,this.coords.p_bar_w=this.coords.p_single_fake,this.result.from_percent=this.coords.p_single_real,this.result.from=this.convertToValue(this.coords.p_single_real),this.options.values.length&&(this.result.from_value=this.options.values[this.result.from])):(this.coords.p_bar_x=
this.toFixed(this.coords.p_from_fake+this.coords.p_handle/2),this.coords.p_bar_w=this.toFixed(this.coords.p_to_fake-this.coords.p_from_fake),this.result.from_percent=this.coords.p_from_real,this.result.from=this.convertToValue(this.coords.p_from_real),this.result.to_percent=this.coords.p_to_real,this.result.to=this.convertToValue(this.coords.p_to_real),this.options.values.length&&(this.result.from_value=this.options.values[this.result.from],this.result.to_value=this.options.values[this.result.to]));
this.calcMinMax();this.calcLabels()}}},calcPointerPercent:function(){this.coords.w_rs?(0>this.coords.x_pointer||isNaN(this.coords.x_pointer)?this.coords.x_pointer=0:this.coords.x_pointer>this.coords.w_rs&&(this.coords.x_pointer=this.coords.w_rs),this.coords.p_pointer=this.toFixed(this.coords.x_pointer/this.coords.w_rs*100)):this.coords.p_pointer=0},convertToRealPercent:function(a){return a/(100-this.coords.p_handle)*100},convertToFakePercent:function(a){return a/100*(100-this.coords.p_handle)},getHandleX:function(){var a=
100-this.coords.p_handle,b=this.toFixed(this.coords.p_pointer-this.coords.p_gap);0>b?b=0:b>a&&(b=a);return b},calcHandlePercent:function(){this.coords.w_handle="single"===this.options.type?this.$cache.s_single.outerWidth(!1):this.$cache.s_from.outerWidth(!1);this.coords.p_handle=this.toFixed(this.coords.w_handle/this.coords.w_rs*100)},chooseHandle:function(a){return"single"===this.options.type?"single":a>=this.coords.p_from_real+(this.coords.p_to_real-this.coords.p_from_real)/2?this.options.to_fixed?
"from":"to":this.options.from_fixed?"to":"from"},calcMinMax:function(){this.coords.w_rs&&(this.labels.p_min=this.labels.w_min/this.coords.w_rs*100,this.labels.p_max=this.labels.w_max/this.coords.w_rs*100)},calcLabels:function(){this.coords.w_rs&&!this.options.hide_from_to&&("single"===this.options.type?(this.labels.w_single=this.$cache.single.outerWidth(!1),this.labels.p_single_fake=this.labels.w_single/this.coords.w_rs*100,this.labels.p_single_left=this.coords.p_single_fake+this.coords.p_handle/
2-this.labels.p_single_fake/2):(this.labels.w_from=this.$cache.from.outerWidth(!1),this.labels.p_from_fake=this.labels.w_from/this.coords.w_rs*100,this.labels.p_from_left=this.coords.p_from_fake+this.coords.p_handle/2-this.labels.p_from_fake/2,this.labels.p_from_left=this.toFixed(this.labels.p_from_left),this.labels.p_from_left=this.checkEdges(this.labels.p_from_left,this.labels.p_from_fake),this.labels.w_to=this.$cache.to.outerWidth(!1),this.labels.p_to_fake=this.labels.w_to/this.coords.w_rs*100,
this.labels.p_to_left=this.coords.p_to_fake+this.coords.p_handle/2-this.labels.p_to_fake/2,this.labels.p_to_left=this.toFixed(this.labels.p_to_left),this.labels.p_to_left=this.checkEdges(this.labels.p_to_left,this.labels.p_to_fake),this.labels.w_single=this.$cache.single.outerWidth(!1),this.labels.p_single_fake=this.labels.w_single/this.coords.w_rs*100,this.labels.p_single_left=(this.labels.p_from_left+this.labels.p_to_left+this.labels.p_to_fake)/2-this.labels.p_single_fake/2,this.labels.p_single_left=
this.toFixed(this.labels.p_single_left)),this.labels.p_single_left=this.checkEdges(this.labels.p_single_left,this.labels.p_single_fake))},updateScene:function(){this.raf_id&&(cancelAnimationFrame(this.raf_id),this.raf_id=null);clearTimeout(this.update_tm);this.update_tm=null;this.options&&(this.drawHandles(),this.is_active?this.raf_id=requestAnimationFrame(this.updateScene.bind(this)):this.update_tm=setTimeout(this.updateScene.bind(this),300))},drawHandles:function(){this.coords.w_rs=this.$cache.rs.outerWidth(!1);
if(this.coords.w_rs){this.coords.w_rs!==this.coords.w_rs_old&&(this.target="base",this.is_resize=!0);if(this.coords.w_rs!==this.coords.w_rs_old||this.force_redraw)this.setMinMax(),this.calc(!0),this.drawLabels(),this.options.grid&&(this.calcGridMargin(),this.calcGridLabels()),this.force_redraw=!0,this.coords.w_rs_old=this.coords.w_rs,this.drawShadow();if(this.coords.w_rs&&(this.dragging||this.force_redraw||this.is_key)){if(this.old_from!==this.result.from||this.old_to!==this.result.to||this.force_redraw||
this.is_key){this.drawLabels();this.$cache.bar[0].style.left=this.coords.p_bar_x+"%";this.$cache.bar[0].style.width=this.coords.p_bar_w+"%";if("single"===this.options.type)this.$cache.s_single[0].style.left=this.coords.p_single_fake+"%";else{this.$cache.s_from[0].style.left=this.coords.p_from_fake+"%";this.$cache.s_to[0].style.left=this.coords.p_to_fake+"%";if(this.old_from!==this.result.from||this.force_redraw)this.$cache.from[0].style.left=this.labels.p_from_left+"%";if(this.old_to!==this.result.to||
this.force_redraw)this.$cache.to[0].style.left=this.labels.p_to_left+"%"}this.$cache.single[0].style.left=this.labels.p_single_left+"%";this.writeToInput();this.old_from===this.result.from&&this.old_to===this.result.to||this.is_start||(this.$cache.input.trigger("change"),this.$cache.input.trigger("input"));this.old_from=this.result.from;this.old_to=this.result.to;this.is_resize||this.is_update||this.is_start||this.is_finish||this.callOnChange();if(this.is_key||this.is_click||this.is_first_update)this.is_first_update=
this.is_click=this.is_key=!1,this.callOnFinish();this.is_finish=this.is_resize=this.is_update=!1}this.force_redraw=this.is_click=this.is_key=this.is_start=!1}}},drawLabels:function(){if(this.options){var a=this.options.values.length,b=this.options.p_values,d;if(!this.options.hide_from_to)if("single"===this.options.type)a=a?this.decorate(b[this.result.from]):this.decorate(this._prettify(this.result.from),this.result.from),this.$cache.single.html(a),this.calcLabels(),this.$cache.min[0].style.visibility=
this.labels.p_single_left<this.labels.p_min+1?"hidden":"visible",this.$cache.max[0].style.visibility=this.labels.p_single_left+this.labels.p_single_fake>100-this.labels.p_max-1?"hidden":"visible";else{a?(this.options.decorate_both?(a=this.decorate(b[this.result.from]),a+=this.options.values_separator,a+=this.decorate(b[this.result.to])):a=this.decorate(b[this.result.from]+this.options.values_separator+b[this.result.to]),d=this.decorate(b[this.result.from]),b=this.decorate(b[this.result.to])):(this.options.decorate_both?
(a=this.decorate(this._prettify(this.result.from),this.result.from),a+=this.options.values_separator,a+=this.decorate(this._prettify(this.result.to),this.result.to)):a=this.decorate(this._prettify(this.result.from)+this.options.values_separator+this._prettify(this.result.to),this.result.to),d=this.decorate(this._prettify(this.result.from),this.result.from),b=this.decorate(this._prettify(this.result.to),this.result.to));this.$cache.single.html(a);this.$cache.from.html(d);this.$cache.to.html(b);this.calcLabels();
b=Math.min(this.labels.p_single_left,this.labels.p_from_left);a=this.labels.p_single_left+this.labels.p_single_fake;d=this.labels.p_to_left+this.labels.p_to_fake;var c=Math.max(a,d);this.labels.p_from_left+this.labels.p_from_fake>=this.labels.p_to_left?(this.$cache.from[0].style.visibility="hidden",this.$cache.to[0].style.visibility="hidden",this.$cache.single[0].style.visibility="visible",this.result.from===this.result.to?("from"===this.target?this.$cache.from[0].style.visibility="visible":"to"===
this.target?this.$cache.to[0].style.visibility="visible":this.target||(this.$cache.from[0].style.visibility="visible"),this.$cache.single[0].style.visibility="hidden",c=d):(this.$cache.from[0].style.visibility="hidden",this.$cache.to[0].style.visibility="hidden",this.$cache.single[0].style.visibility="visible",c=Math.max(a,d))):(this.$cache.from[0].style.visibility="visible",this.$cache.to[0].style.visibility="visible",this.$cache.single[0].style.visibility="hidden");this.$cache.min[0].style.visibility=
b<this.labels.p_min+1?"hidden":"visible";this.$cache.max[0].style.visibility=c>100-this.labels.p_max-1?"hidden":"visible"}}},drawShadow:function(){var a=this.options,b=this.$cache,d="number"===typeof a.from_min&&!isNaN(a.from_min),c="number"===typeof a.from_max&&!isNaN(a.from_max),e="number"===typeof a.to_min&&!isNaN(a.to_min),g="number"===typeof a.to_max&&!isNaN(a.to_max);"single"===a.type?a.from_shadow&&(d||c)?(d=this.convertToPercent(d?a.from_min:a.min),c=this.convertToPercent(c?a.from_max:a.max)-
d,d=this.toFixed(d-this.coords.p_handle/100*d),c=this.toFixed(c-this.coords.p_handle/100*c),d+=this.coords.p_handle/2,b.shad_single[0].style.display="block",b.shad_single[0].style.left=d+"%",b.shad_single[0].style.width=c+"%"):b.shad_single[0].style.display="none":(a.from_shadow&&(d||c)?(d=this.convertToPercent(d?a.from_min:a.min),c=this.convertToPercent(c?a.from_max:a.max)-d,d=this.toFixed(d-this.coords.p_handle/100*d),c=this.toFixed(c-this.coords.p_handle/100*c),d+=this.coords.p_handle/2,b.shad_from[0].style.display=
"block",b.shad_from[0].style.left=d+"%",b.shad_from[0].style.width=c+"%"):b.shad_from[0].style.display="none",a.to_shadow&&(e||g)?(e=this.convertToPercent(e?a.to_min:a.min),a=this.convertToPercent(g?a.to_max:a.max)-e,e=this.toFixed(e-this.coords.p_handle/100*e),a=this.toFixed(a-this.coords.p_handle/100*a),e+=this.coords.p_handle/2,b.shad_to[0].style.display="block",b.shad_to[0].style.left=e+"%",b.shad_to[0].style.width=a+"%"):b.shad_to[0].style.display="none")},writeToInput:function(){"single"===
this.options.type?(this.options.values.length?this.$cache.input.prop("value",this.result.from_value):this.$cache.input.prop("value",this.result.from),this.$cache.input.data("from",this.result.from)):(this.options.values.length?this.$cache.input.prop("value",this.result.from_value+this.options.input_values_separator+this.result.to_value):this.$cache.input.prop("value",this.result.from+this.options.input_values_separator+this.result.to),this.$cache.input.data("from",this.result.from),this.$cache.input.data("to",
this.result.to))},callOnStart:function(){this.writeToInput();if(this.options.onStart&&"function"===typeof this.options.onStart)this.options.onStart(this.result)},callOnChange:function(){this.writeToInput();if(this.options.onChange&&"function"===typeof this.options.onChange)this.options.onChange(this.result)},callOnFinish:function(){this.writeToInput();if(this.options.onFinish&&"function"===typeof this.options.onFinish)this.options.onFinish(this.result)},callOnUpdate:function(){this.writeToInput();
if(this.options.onUpdate&&"function"===typeof this.options.onUpdate)this.options.onUpdate(this.result)},toggleInput:function(){this.$cache.input.toggleClass("irs-hidden-input")},convertToPercent:function(a,b){var d=this.options.max-this.options.min;return d?this.toFixed((b?a:a-this.options.min)/(d/100)):(this.no_diapason=!0,0)},convertToValue:function(a){var b=this.options.min,d=this.options.max,c=b.toString().split(".")[1],e=d.toString().split(".")[1],g,l,f=0,k=0;if(0===a)return this.options.min;
if(100===a)return this.options.max;c&&(f=g=c.length);e&&(f=l=e.length);g&&l&&(f=g>=l?g:l);0>b&&(k=Math.abs(b),b=+(b+k).toFixed(f),d=+(d+k).toFixed(f));a=(d-b)/100*a+b;(b=this.options.step.toString().split(".")[1])?a=+a.toFixed(b.length):(a/=this.options.step,a*=this.options.step,a=+a.toFixed(0));k&&(a-=k);k=b?+a.toFixed(b.length):this.toFixed(a);k<this.options.min?k=this.options.min:k>this.options.max&&(k=this.options.max);return k},calcWithStep:function(a){var b=Math.round(a/this.coords.p_step)*
this.coords.p_step;100<b&&(b=100);100===a&&(b=100);return this.toFixed(b)},checkMinInterval:function(a,b,d){var c=this.options;if(!c.min_interval)return a;a=this.convertToValue(a);b=this.convertToValue(b);"from"===d?b-a<c.min_interval&&(a=b-c.min_interval):a-b<c.min_interval&&(a=b+c.min_interval);return this.convertToPercent(a)},checkMaxInterval:function(a,b,d){var c=this.options;if(!c.max_interval)return a;a=this.convertToValue(a);b=this.convertToValue(b);"from"===d?b-a>c.max_interval&&(a=b-c.max_interval):
a-b>c.max_interval&&(a=b+c.max_interval);return this.convertToPercent(a)},checkDiapason:function(a,b,d){a=this.convertToValue(a);var c=this.options;"number"!==typeof b&&(b=c.min);"number"!==typeof d&&(d=c.max);a<b&&(a=b);a>d&&(a=d);return this.convertToPercent(a)},toFixed:function(a){a=a.toFixed(20);return+a},_prettify:function(a){return this.options.prettify_enabled?this.options.prettify&&"function"===typeof this.options.prettify?this.options.prettify(a):this.prettify(a):a},prettify:function(a){return a.toString().replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g,
"$1"+this.options.prettify_separator)},checkEdges:function(a,b){if(!this.options.force_edges)return this.toFixed(a);0>a?a=0:a>100-b&&(a=100-b);return this.toFixed(a)},validate:function(){var a=this.options,b=this.result,d=a.values,c=d.length,e,g;"string"===typeof a.min&&(a.min=+a.min);"string"===typeof a.max&&(a.max=+a.max);"string"===typeof a.from&&(a.from=+a.from);"string"===typeof a.to&&(a.to=+a.to);"string"===typeof a.step&&(a.step=+a.step);"string"===typeof a.from_min&&(a.from_min=+a.from_min);
"string"===typeof a.from_max&&(a.from_max=+a.from_max);"string"===typeof a.to_min&&(a.to_min=+a.to_min);"string"===typeof a.to_max&&(a.to_max=+a.to_max);"string"===typeof a.keyboard_step&&(a.keyboard_step=+a.keyboard_step);"string"===typeof a.grid_num&&(a.grid_num=+a.grid_num);a.max<a.min&&(a.max=a.min);if(c)for(a.p_values=[],a.min=0,a.max=c-1,a.step=1,a.grid_num=a.max,a.grid_snap=!0,g=0;g<c;g++)e=+d[g],isNaN(e)?e=d[g]:(d[g]=e,e=this._prettify(e)),a.p_values.push(e);if("number"!==typeof a.from||isNaN(a.from))a.from=
a.min;if("number"!==typeof a.to||isNaN(a.to))a.to=a.max;"single"===a.type?(a.from<a.min&&(a.from=a.min),a.from>a.max&&(a.from=a.max)):(a.from<a.min&&(a.from=a.min),a.from>a.max&&(a.from=a.max),a.to<a.min&&(a.to=a.min),a.to>a.max&&(a.to=a.max),this.update_check.from&&(this.update_check.from!==a.from&&a.from>a.to&&(a.from=a.to),this.update_check.to!==a.to&&a.to<a.from&&(a.to=a.from)),a.from>a.to&&(a.from=a.to),a.to<a.from&&(a.to=a.from));if("number"!==typeof a.step||isNaN(a.step)||!a.step||0>a.step)a.step=
1;if("number"!==typeof a.keyboard_step||isNaN(a.keyboard_step)||!a.keyboard_step||0>a.keyboard_step)a.keyboard_step=5;"number"===typeof a.from_min&&a.from<a.from_min&&(a.from=a.from_min);"number"===typeof a.from_max&&a.from>a.from_max&&(a.from=a.from_max);"number"===typeof a.to_min&&a.to<a.to_min&&(a.to=a.to_min);"number"===typeof a.to_max&&a.from>a.to_max&&(a.to=a.to_max);if(b){b.min!==a.min&&(b.min=a.min);b.max!==a.max&&(b.max=a.max);if(b.from<b.min||b.from>b.max)b.from=a.from;if(b.to<b.min||b.to>
b.max)b.to=a.to}if("number"!==typeof a.min_interval||isNaN(a.min_interval)||!a.min_interval||0>a.min_interval)a.min_interval=0;if("number"!==typeof a.max_interval||isNaN(a.max_interval)||!a.max_interval||0>a.max_interval)a.max_interval=0;a.min_interval&&a.min_interval>a.max-a.min&&(a.min_interval=a.max-a.min);a.max_interval&&a.max_interval>a.max-a.min&&(a.max_interval=a.max-a.min)},decorate:function(a,b){var d="",c=this.options;c.prefix&&(d+=c.prefix);d+=a;c.max_postfix&&(c.values.length&&a===c.p_values[c.max]?
(d+=c.max_postfix,c.postfix&&(d+=" ")):b===c.max&&(d+=c.max_postfix,c.postfix&&(d+=" ")));c.postfix&&(d+=c.postfix);return d},updateFrom:function(){this.result.from=this.options.from;this.result.from_percent=this.convertToPercent(this.result.from);this.options.values&&(this.result.from_value=this.options.values[this.result.from])},updateTo:function(){this.result.to=this.options.to;this.result.to_percent=this.convertToPercent(this.result.to);this.options.values&&(this.result.to_value=this.options.values[this.result.to])},
updateResult:function(){this.result.min=this.options.min;this.result.max=this.options.max;this.updateFrom();this.updateTo()},appendGrid:function(){if(this.options.grid){var a=this.options,b,d;b=a.max-a.min;var c=a.grid_num,e,g,f=4,h,k,m,n="";this.calcGridMargin();a.grid_snap?(c=b/a.step,e=this.toFixed(a.step/(b/100))):e=this.toFixed(100/c);4<c&&(f=3);7<c&&(f=2);14<c&&(f=1);28<c&&(f=0);for(b=0;b<c+1;b++){h=f;g=this.toFixed(e*b);100<g&&(g=100,h-=2,0>h&&(h=0));this.coords.big[b]=g;k=(g-e*(b-1))/(h+1);
for(d=1;d<=h&&0!==g;d++)m=this.toFixed(g-k*d),n+='<span class="irs-grid-pol small" style="left: '+m+'%"></span>';n+='<span class="irs-grid-pol" style="left: '+g+'%"></span>';d=this.convertToValue(g);d=a.values.length?a.p_values[d]:this._prettify(d);n+='<span class="irs-grid-text js-grid-text-'+b+'" style="left: '+g+'%">'+d+"</span>"}this.coords.big_num=Math.ceil(c+1);this.$cache.cont.addClass("irs-with-grid");this.$cache.grid.html(n);this.cacheGridLabels()}},cacheGridLabels:function(){var a,b,d=this.coords.big_num;
for(b=0;b<d;b++)a=this.$cache.grid.find(".js-grid-text-"+b),this.$cache.grid_labels.push(a);this.calcGridLabels()},calcGridLabels:function(){var a,b;b=[];var d=[],c=this.coords.big_num;for(a=0;a<c;a++)this.coords.big_w[a]=this.$cache.grid_labels[a].outerWidth(!1),this.coords.big_p[a]=this.toFixed(this.coords.big_w[a]/this.coords.w_rs*100),this.coords.big_x[a]=this.toFixed(this.coords.big_p[a]/2),b[a]=this.toFixed(this.coords.big[a]-this.coords.big_x[a]),d[a]=this.toFixed(b[a]+this.coords.big_p[a]);
this.options.force_edges&&(b[0]<-this.coords.grid_gap&&(b[0]=-this.coords.grid_gap,d[0]=this.toFixed(b[0]+this.coords.big_p[0]),this.coords.big_x[0]=this.coords.grid_gap),d[c-1]>100+this.coords.grid_gap&&(d[c-1]=100+this.coords.grid_gap,b[c-1]=this.toFixed(d[c-1]-this.coords.big_p[c-1]),this.coords.big_x[c-1]=this.toFixed(this.coords.big_p[c-1]-this.coords.grid_gap)));this.calcGridCollision(2,b,d);this.calcGridCollision(4,b,d);for(a=0;a<c;a++)b=this.$cache.grid_labels[a][0],this.coords.big_x[a]!==
Number.POSITIVE_INFINITY&&(b.style.marginLeft=-this.coords.big_x[a]+"%")},calcGridCollision:function(a,b,d){var c,e,g,f=this.coords.big_num;for(c=0;c<f;c+=a){e=c+a/2;if(e>=f)break;g=this.$cache.grid_labels[e][0];g.style.visibility=d[c]<=b[e]?"visible":"hidden"}},calcGridMargin:function(){this.options.grid_margin&&(this.coords.w_rs=this.$cache.rs.outerWidth(!1),this.coords.w_rs&&(this.coords.w_handle="single"===this.options.type?this.$cache.s_single.outerWidth(!1):this.$cache.s_from.outerWidth(!1),
this.coords.p_handle=this.toFixed(this.coords.w_handle/this.coords.w_rs*100),this.coords.grid_gap=this.toFixed(this.coords.p_handle/2-.1),this.$cache.grid[0].style.width=this.toFixed(100-this.coords.p_handle)+"%",this.$cache.grid[0].style.left=this.coords.grid_gap+"%"))},update:function(a){this.input&&(this.is_update=!0,this.options.from=this.result.from,this.options.to=this.result.to,this.update_check.from=this.result.from,this.update_check.to=this.result.to,this.options=f.extend(this.options,a),
this.validate(),this.updateResult(a),this.toggleInput(),this.remove(),this.init(!0))},reset:function(){this.input&&(this.updateResult(),this.update())},destroy:function(){this.input&&(this.toggleInput(),this.$cache.input.prop("readonly",!1),f.data(this.input,"ionRangeSlider",null),this.remove(),this.options=this.input=null)}};f.fn.ionRangeSlider=function(a){return this.each(function(){f.data(this,"ionRangeSlider")||f.data(this,"ionRangeSlider",new r(this,a,u++))})};(function(){for(var a=0,b=["ms",
"moz","webkit","o"],d=0;d<b.length&&!h.requestAnimationFrame;++d)h.requestAnimationFrame=h[b[d]+"RequestAnimationFrame"],h.cancelAnimationFrame=h[b[d]+"CancelAnimationFrame"]||h[b[d]+"CancelRequestAnimationFrame"];h.requestAnimationFrame||(h.requestAnimationFrame=function(b,d){var c=(new Date).getTime(),e=Math.max(0,16-(c-a)),f=h.setTimeout(function(){b(c+e)},e);a=c+e;return f});h.cancelAnimationFrame||(h.cancelAnimationFrame=function(a){clearTimeout(a)})})()});;
/*
 * onScreen.js
 * Checks if matched elements are inside the viewport.
 *
 * Copyright onScreen Contributors, 2013 Licensed under the MIT license:
 * http://www.opensource.org/licenses/mit-license.php
 *
 * You can find a list of contributors at:
 * https://github.com/silvestreh/onScreen/graphs/contributors
 */

(function ($) {

	$.fn.onScreen = function (options) {

		var params = $.extend({
			container: window,
			direction: 'vertical',
			toggleClass: null,
			doIn: null,
			doOut: null,
			tolerance: 0,
			throttle: null,
			lazyAttr: null,
			lazyPlaceholder: 'data:image/gif;base64,R0lGODlhEAAFAIAAAP///////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJCQAAACwAAAAAEAAFAAACCIyPqcvtD00BACH5BAkJAAIALAAAAAAQAAUAgfT29Pz6/P///wAAAAIQTGCiywKPmjxUNhjtMlWrAgAh+QQJCQAFACwAAAAAEAAFAIK8urzc2tzEwsS8vrzc3tz///8AAAAAAAADFEiyUf6wCEBHvLPemIHdTzCMDegkACH5BAkJAAYALAAAAAAQAAUAgoSChLS2tIyKjLy+vIyOjMTCxP///wAAAAMUWCQ09jAaAiqQmFosdeXRUAkBCCUAIfkECQkACAAsAAAAABAABQCDvLq83N7c3Nrc9Pb0xMLE/P78vL68/Pr8////AAAAAAAAAAAAAAAAAAAAAAAAAAAABCEwkCnKGbegvQn4RjGMx8F1HxBi5Il4oEiap2DcVYlpZwQAIfkECQkACAAsAAAAABAABQCDvLq85OLkxMLE9Pb0vL685ObkxMbE/Pr8////AAAAAAAAAAAAAAAAAAAAAAAAAAAABCDwnCGHEcIMxPn4VAGMQNBx0zQEZHkiYNiap5RaBKG9EQAh+QQJCQAJACwAAAAAEAAFAIOEgoTMysyMjozs6uyUlpSMiozMzsyUkpTs7uz///8AAAAAAAAAAAAAAAAAAAAAAAAEGTBJiYgoBM09DfhAwHEeKI4dGKLTIHzCwEUAIfkECQkACAAsAAAAABAABQCDvLq85OLkxMLE9Pb0vL685ObkxMbE/Pr8////AAAAAAAAAAAAAAAAAAAAAAAAAAAABCAQSTmMEGaco8+UBSACwWBqHxKOJYd+q1iaXFoRRMbtEQAh+QQJCQAIACwAAAAAEAAFAIO8urzc3tzc2tz09vTEwsT8/vy8vrz8+vz///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAEIhBJWc6wJZAtJh3gcRBAaXiIZV2kiRbgNZbA6VXiUAhGL0QAIfkECQkABgAsAAAAABAABQCChIKEtLa0jIqMvL68jI6MxMLE////AAAAAxRoumxFgoxGCbiANos145e3DJcQJAAh+QQJCQAFACwAAAAAEAAFAIK8urzc2tzEwsS8vrzc3tz///8AAAAAAAADFFi6XCQwtCmAHbPVm9kGWKcEQxkkACH5BAkJAAIALAAAAAAQAAUAgfT29Pz6/P///wAAAAIRlI8SAZsPYnuJMUCRnNksWwAAOw==',
			debug: false
		}, options);

		return this.each(function () {

			var isOnScreen = false; // Initialize boolean
			var scrollTop; // Initialize Vertical Scroll Position
			var scrollLeft; // Initialize Horizontal Scroll Position
			var $el = $(this); // Matched element

			// Initialize Viewport dimensions
			var $container;
			var containerHeight;
			var containerWidth;
			var containerBottom;
			var containerRight;

			// Initialize element dimensions & position
			var elHeight;
			var elWidth;
			var elTop;
			var elLeft;

			// Checks if params.container is the Window Object
			var containerIsWindow = $.isWindow(params.container);

			function verticalIn() {
				if (containerIsWindow) {
					return elTop < containerBottom - params.tolerance &&
						   scrollTop < (elTop + elHeight) - params.tolerance;
				} else {
					return elTop < containerHeight - params.tolerance &&
						   elTop > (-elHeight) + params.tolerance;
				}
			}

			function verticalOut() {
				if (containerIsWindow) {
					return elTop + (elHeight - params.tolerance) < scrollTop ||
						   elTop > containerBottom - params.tolerance;
				} else {
					return elTop > containerHeight - params.tolerance ||
						   -elHeight + params.tolerance > elTop;
				}
			}

			function horizontalIn() {
				if (containerIsWindow) {
					return elLeft < containerRight - params.tolerance &&
						   scrollLeft < (elLeft + elWidth) - params.tolerance;
				} else {
					return elLeft < containerWidth - params.tolerance &&
						   elLeft > (-elWidth) + params.tolerance;
				}
			}

			function horizontalOut() {
				if (containerIsWindow) {
					return elLeft + (elWidth - params.tolerance) < scrollLeft ||
						   elLeft > containerRight - params.tolerance;
				} else {
					return elLeft > containerWidth - params.tolerance ||
						   -elWidth + params.tolerance > elLeft;
				}
			}

			function directionIn() {
				if (isOnScreen) {
					return false;
				}

				if (params.direction === 'horizontal') {
					return horizontalIn();
				} else {
					return verticalIn();
				}
			}

			function directionOut() {
				if (!isOnScreen) {
					return false;
				}

				if (params.direction === 'horizontal') {
					return horizontalOut();
				} else {
					return verticalOut();
				}
			}

			function throttle(fn, timeout, ctx) {
				var timer, args, needInvoke;
				return function () {
					args = arguments;
					needInvoke = true;
					ctx = ctx || this;
					if (!timer) {
						(function () {
							if (needInvoke) {
								fn.apply(ctx, args);
								needInvoke = false;
								timer = setTimeout(arguments.callee, timeout);
							}
							else {
								timer = null;
							}
						})();
					}

				};

			}

			var checkPos = function () {
				// Make container relative
				if (!containerIsWindow && $(params.container).css('position') === 'static') {
					$(params.container).css('position', 'relative');
				}

				// Update Viewport dimensions
				$container = $(params.container);
				containerHeight = $container.height();
				containerWidth = $container.width();
				containerBottom = $container.scrollTop() + containerHeight;
				containerRight = $container.scrollLeft() + containerWidth;

				// Update element dimensions & position
				elHeight = $el.outerHeight(true);
				elWidth = $el.outerWidth(true);

				if (containerIsWindow) {
					var offset = $el.offset();
					elTop = offset.top;
					elLeft = offset.left;
				} else {
					var position = $el.position();
					elTop = position.top;
					elLeft = position.left;
				}

				// Update scroll position
				scrollTop = $container.scrollTop();
				scrollLeft = $container.scrollLeft();

				// This will spam A LOT of messages in your console
				if (params.debug) {
					console.log(
					  'Container: ' + params.container + '\n' +
					  'Width: ' + containerHeight + '\n' +
					  'Height: ' + containerWidth + '\n' +
					  'Bottom: ' + containerBottom + '\n' +
					  'Right: ' + containerRight
					);
					console.log(
					  'Matched element: ' + ($el.attr('class') !== undefined ? $el.prop('tagName').toLowerCase() + '.' + $el.attr('class') : $el.prop('tagName').toLowerCase()) + '\n' +
					  'Left: ' + elLeft + '\n' +
					  'Top: ' + elTop + '\n' +
					  'Width: ' + elWidth + '\n' +
					  'Height: ' + elHeight
					);
				}

				if (directionIn()) {
					if (params.toggleClass) {
						$el.addClass(params.toggleClass);
					}
					if ($.isFunction(params.doIn)) {
						params.doIn.call($el[0]);
					}
					if (params.lazyAttr && $el.prop('tagName') === 'IMG') {
						var lazyImg = $el.attr(params.lazyAttr);
						$el.css({
							background: 'url(' + params.lazyPlaceholder + ') 50% 50% no-repeat',
							minHeight: '5px',
							minWidth: '16px'
						});
						$el.prop('src', lazyImg);
					}
					isOnScreen = true;
				}
				else if (directionOut()) {
					if (params.toggleClass) {
						$el.removeClass(params.toggleClass);
					}
					if ($.isFunction(params.doOut)) {
						params.doOut.call($el[0]);
					}
					isOnScreen = false;
				}

			};

			if (window.location.hash) {
				throttle(checkPos, 50);
			} else {
				checkPos();
			}

			if (params.throttle) {
				checkPos = throttle(checkPos, params.throttle);
			}

			// Attach checkPos
			$(params.container).on('scroll resize', checkPos);

			// Since <div>s don't have a resize event, we have
			// to attach checkPos to the window object as well
			if (!containerIsWindow) {
				$(window).on('resize', checkPos);
			}

			// Module support
			if (typeof module === 'object' && module && typeof module.exports === 'object') {
				// Node.js module pattern
				module.exports = jQuery;
			} else {
				// AMD
				if (typeof define === 'function' && define.amd) {
					define('jquery-onscreen', [], function () { return jQuery; });
				}
			}

		});
	};

})(jQuery);
;
/*
 * plugin pro donacitani statusu u kontaktu
 * kontakty ziskava bud pres atribut "data-contacturi" a nebo je lze zadat v options
 * nepovinne parametry jsou:
 * useDataAttr - pokud se maji nacitat kontakty z data atributu. Zaroven se pak parsuji vysledne statusy na dany data atribut
 * afterLoad - metoda ktera se zavola po nacteni vsech statusu - je tak umozneno custom parsovani kontaktu
 * uris - rucni zadani kontaktu array[] - pri pouziti rucniho zadani je bud potreba useDataAttr nastavit na false a nebo nepouzivat vubec data atribut "data-contacturi"
*/
(function () {

	// metoda pro volani sluzby ktera vraci status dle jednotlivych kontaktu
	var _serviceGetContactStatus = function (contactsId, handleData) {
		if (!contactsId) {
			return;
		}

		var service = g_root + '/asmx/wsuser.asmx/GetContactsStatusByUri';

		$.ajax({
			async: true,
			type: 'POST',
			global: false,
			url: service,
			data: "{'uris' : '" + contactsId + "'}",
			contentType: "application/json; charset=utf-8",
			dataType: 'json',
			success: function (data) {
				var status = data.d;

				// result status
				//3500  -   available
				//6500  -   busy
				//9500  -   do not distrub
				//12500 -   be right back
				//15500 -   off work, away
				//18000 -   offline

				handleData(status);
			},
			error: function (data) {

			}
		});
	}

	// pokud je parametr "useDataAttr" nastaven na true tak naparuj status na jednotlive kontakty
	var _parseStatusDataAttr = function (objData) {

		objData.additionalData.forEach(function (value) {
			var uri = value.Uri,
				status = value.State,
				$elImg = $('[data-contacturi="' + uri + '"]');

			var statusImg = g_root + '/images/s4b/{0}.png',
				statusCode = '';

			if (status.length == 0) {
				$elImg.remove();
				return;
			}

			switch (status) {
				case '3500':
					statusImg = String.format(statusImg, 1);
					statusCode = 'status_online';
					break;
				case '6500':
					statusImg = String.format(statusImg, 2);
					statusCode = 'status_busy';
					break;
				case '9500':
					statusImg = String.format(statusImg, 3);
					statusCode = 'status_donotdistrub';
					break;
				case '15500':
					statusImg = String.format(statusImg, 4);
					statusCode = 'status_away';
					break;
				default:
					statusImg = String.format(statusImg, 6);
					statusCode = 'status_offline';
					break;
			}

			$elImg.prop('src', statusImg);
			$elImg.attr('data-title', statusCode);
		});
	}

	var _init = function () {
		//dočasné odstranění funkčnosti
		$(".status-pictogram").hide();
		return;

		var plugin = this,
			opts = plugin.options,
			uris = opts.uris;

		// pokud se ma pouzit ziskani kontaktu pres data atribut "data-contacturi"
		if (opts.useDataAttr) {
			var selector = '[data-contacturi]';

			if (typeof opts.wrapperEl !== 'undefined') {
				selector = opts.wrapperEl + ' ' + selector;
			}

			uris = $.map($(selector).toArray(), function (el) {
				return $(el).data('contacturi');
			});
		}

		// pokud zadne kontakty k dispozici nejsou tak ukonci
		if (uris.length == 0) {
			return;
		}

		// callbac ze sluzby ktera vraci statusy
		_serviceGetContactStatus(uris.toString(), function (response) {
			var objData = $.parseJSON(response);

			if (typeof opts.afterLoad !== 'undefined' && typeof opts.afterLoad === 'function') {
				opts.afterLoad.call(objData);
				return;
			}

			if (opts.useDataAttr) {
				_parseStatusDataAttr(objData);
				return
			}
		});
	}

	var _defaults = {
		uris: [],
		useDataAttr: true
	}

	this.Contacts = function () {
		this.options = $.extend({}, _defaults, arguments[0]);
		this.init();
	}

	Contacts.prototype = function () {

		return {
			init: function () {
				_init.call(this);
			}
		}
	}();
}());
;
(function ($, window, document, undefined) {

	// privatni property
	var _modulName = 'CompareBar',
		_boxId = 'compareBar';

	// jquery property
	var $compareBar = $(),
		$btnMinimalized = $(),
		$jsCarousel = $();

	// pomocna metoda ktera kontrouje jestli v navratovem ajaxu existuje porovnavaci lista. Pokud ne tak odstran i tu puvodni
	var _isCompareBar = function (resultAjxBar) {

		var plugin = this;

		if ($(resultAjxBar).length === 0) {
			_destroyCompareBar.call(plugin);

			return false;
		}

		return true;
	};

	var _destroyCompareBar = function () {
		var plugin = this;

		$('body').off('click', $btnMinimalized.selector);

		$compareBar.remove();

		$compareBar = $();
		$btnMinimalized = $();
		$jsCarousel = $();

		var test = hasConsent(plugin.modulName + '_cacheSettings');
		if (test) {
			localStorage.removeItem(plugin.modulName + '_cacheSettings');
		}
	};

	// metoda ktera nahraje listu s produkty pro porovnani
	// privatni metoda
	var _loadBar = function (objParams) {

		var ajxParams = {
			type: 'GET',
			dataType: 'html',
			global: false,
			async: true,
			url: g_root + '/ajaxpages/productcomparebar_ajx.aspx'
		};

		// merging parametru
		$.extend(ajxParams, objParams);

		var request = $.ajax(ajxParams);

	};

	// metoda volajici sluzbu ktera prida nebo odstrani produkt z porovnavani
	// privatni metoda
	var _servicesCompare = function (pro_id, action, objParams) {

		var ajxParams = {
			type: 'POST',
			data: JSON.stringify({ pro_id: pro_id }),
			contentType: 'application/json; charset=utf-8',
			dataType: 'json',
			error: function (result) {
				displayErrorMessage(result.statusText, true);
			}
		};

		// nastav url pro pridani
		if (action === 'add') {
			ajxParams.url = g_root + '/asmx/wsproductcompare.asmx/add';
		}

		// nastav url pro odstraneni
		if (action === 'remove') {
			ajxParams.url = g_root + '/asmx/wsproductcompare.asmx/remove';
		}

		// nastav url pro odstraneni pole produktu a uprav vsupni parametr na pro_ids
		if (action === 'removeselected') {
			ajxParams.url = g_root + '/asmx/wsproductcompare.asmx/removeselected';
			ajxParams.data = JSON.stringify({ pro_ids: pro_id });
		}

		// merging parametru
		$.extend(ajxParams, objParams);

		var request = $.ajax(ajxParams);
	};

	var _carouselInit = function () {
		if (!$().owlCarousel) {
			if (App.debug) {
				console.log('Chybí plugin owl carousel.');
			}
			return false;
		}

		$jsCarousel = $compareBar.find('.data-product-items');

		// pokud v porovnavaci liste nejsou zadne doporucene produkty
		if (0 === $jsCarousel.length) {
			return;
		}

		var $jsCarouselChildrens = $jsCarousel.children();

		// nastaveni pro carousel dle breakpointu
		var _responsiveSettings = function (defautCount) {
			var settings = {
				items: defautCount
			};

			if ($jsCarouselChildrens.length <= defautCount) {
				settings.stagePadding = 0;
				settings.nav = false;
				settings.loop = false;
			}

			return settings;
		};

		$jsCarousel.owlCarousel({
			dots: false,
			nav: true,
			loop: $jsCarousel.children().length > 1,
			margin: 10,
			stagePadding: 30,
			responsive: {
				0: _responsiveSettings(1),
				380: _responsiveSettings(2),
				480: _responsiveSettings(3),
				600: _responsiveSettings(4),
				768: _responsiveSettings(5),
				992: _responsiveSettings(6),
				1200: _responsiveSettings(8)
			},
			onInitialized: function (event) {
				$(event.currentTarget).addClass('owl-carousel');
			}
		});
	};

	var _carouselDestroy = function () {

		// nefunguje mi trigger refresh na carouselu tak proto kod nize takto
		//$jsCarousel.trigger('refresh.owl.carousel');
		$jsCarousel.trigger('destroy.owl.carousel');
		$jsCarousel.find('.owl-stage-outer').children().unwrap();
		$jsCarousel.removeClass('owl-carousel');
		$jsCarousel.removeClass('owl-loaded');
	};

	// zmena tabu
	// privatni metoda
	var _changeCategory = function (pnc_id) {
		if (typeof pnc_id === 'undefined' && typeof pnc_id !== 'number') {
			console.error('Parametr "pnc_id" není definován nebo není číslo.');
			return false;
		}

		var plugin = this;

		_loadBar({
			data: { pnc_id: pnc_id },
			success: function (result) {
				var _$compareBar = $(result).find('#' + _boxId);

				// pokud uz vubec nic v porovnavani neni ani v zadne z kategorii tak celou listu pro porovnavani odstran
				if (!_isCompareBar.call(plugin, _$compareBar)) {
					return;
				}

				plugin.currentTabCategory = pnc_id;

				$compareBar.html(_$compareBar.html());

				// vysunuti porovnavaci listy pokud je minimalizovana
				if (plugin.isMinimalized || plugin.isClosed) {
					_controlBarVisibility.call(plugin, 'maximalized');
				}

				// ulozeni aktualniho nastaveni do local storage
				_cachedSettings.call(plugin);

				_carouselInit();
			}
		});
	};

	// pridani do porovnavaci listy
	// privatni metoda
	var _addToCompareBar = function (pro_id, pnc_id) {
		if (typeof pro_id === 'undefined' && typeof pro_id !== 'number') {
			console.error('Parametr "pro_id" není definován nebo není číslo.');
			return false;
		}

		if (typeof pnc_id === 'undefined' && typeof pnc_id !== 'number') {
			console.error('Parametr "pnc_id" není definován nebo není číslo.');
			return false;
		}

		var plugin = this;

		// globalni preloader start
		showLoading();

		_servicesCompare(pro_id, 'add', {
			success: function (result) {

				// globalni preloader stop
				hideLoading();

				if (result === null) {
					displayErrorMessage('Produkt nelze přidat do porovnávání. Kontaktujte nás.', true);
					return;
				}

				// pokud jiz produkt v porovnavani existuje tak prepni na kategorii plus vypis info hlasku a ukonci
				if (result.d.additionalData !== null && typeof result.d.additionalData.existsInCollection !== 'undefined' && result.d.additionalData.existsInCollection === true) {
					displayInfoMessage('Tento produkt máte již v porovnávání uložen.', true);
					if ($compareBar.length > 0) {
						plugin.changeCategory(pnc_id);
						return;
					}
				}

				// pokud porovnavaci lista neexistuje tak ji nahrej
				if ($compareBar.length === 0) {
					plugin.isClosed = false;
					plugin.currentTabCategory = pnc_id;
					_cachedSettings.call(plugin);

					plugin.init();
					return;
				}

				// globalni preloader start
				showLoading();

				_loadBar({
					data: { pnc_id: pnc_id },
					success: function (result) {
						var _$compareBar = $(result).find('#' + _boxId),
							_$el = _$compareBar.find('#proCompare_' + pro_id);

						// globalni preloader stop
						hideLoading();

						// puvodni element odstranim abych jej pak mohl pridat na prvni misto
						_$compareBar.find('#proCompare_' + pro_id).remove();

						// nastavim mu default styly aby byl schovan nez aplikuju animaci
						_$el.css({ opacity: 0, width: 0 });

						// ziskani sirky jedne dlazdice kvuli animaci
						var proItem_width = $compareBar.find('.product-item').eq(0).outerWidth(true);

						// vysunuti porovnavaci listy pokud je minimalizovana nebo schovana
						if (plugin.isMinimalized || plugin.isClosed) {
							_controlBarVisibility.call(plugin, 'maximalized');
						}

						// pokud porovnavany produkt neni ze stejne kategorie ktera je aktivni v porovnavaci liste tak prvne prepis cely obsah a pak pridej
						if (plugin.currentTabCategory !== 0 && plugin.currentTabCategory !== pnc_id) {
							// nastaveni nove kategorie
							plugin.currentTabCategory = pnc_id;

							// prepsani obsahu
							$compareBar.html(_$compareBar.html());

							// metoda ktera prida prvek do baru a provede animovane zobrazeni
							_animateAddBar(_$el, proItem_width);

							// ulozeni aktualniho nastaveni do local storage
							_cachedSettings.call(plugin);
						} else {
							// aktualizace tabu
							$compareBar.find('#' + _boxId + 'Tabs').html(_$compareBar.find('#' + _boxId + 'Tabs').html());

							// metoda ktera prida prvek do baru a provede animovane zobrazeni
							_animateAddBar(_$el, proItem_width);
						}
					}
				});
			}
		});
	};

	// pomocna metoda pro animaci pri pridani produktu do porovnani
	var _animateAddBar = function ($elProduct, proItem_width) {
		_carouselDestroy();

		$compareBar.find('.data-product-items').prepend($elProduct);

		$elProduct.animate({
			width: proItem_width + 'px'
		}, 200, function () {
			$elProduct.animate({
				opacity: 1
			}, 200, function () {
				_carouselInit();
			});
		});
	};

	// odstraneni z porovnavaci listy
	// privatni metoda
	var _removeFromCompareBar = function (pro_id, pnc_id) {
		if (typeof pro_id === 'undefined' && typeof pro_id !== 'number') {
			console.error('Parametr "pro_id" není definován nebo není číslo.');
			return false;
		}

		if (typeof pnc_id === 'undefined' && typeof pnc_id !== 'number') {
			console.error('Parametr "pnc_id" není definován nebo není číslo.');
			return false;
		}

		var plugin = this;

		_servicesCompare(pro_id, 'remove', {
			success: function (result) {
				if (result === null) {
					displayErrorMessage('Produkt nelze odstranit z porovnávání. Kontaktujte nás.', true);
					return;
				}

				var $el = $('#proCompare_' + pro_id);

				_carouselDestroy();

				$el.animate({
					opacity: 0
				}, 200, function () {
					$el.animate({
						width: 0
					}, 200, function () {
						$el.remove();

						// pokud jiz v dane kategorii nejsou zadne produkty tak se pokus nacist celou listu pro porovnani znovu
						if ($compareBar.find('.compare-bar_product').length === 0) {
							plugin.changeCategory(0);
							return;
						}

						_loadBar({
							data: { pnc_id: pnc_id },
							success: function (result) {
								var _$compareBar = $(result).find('#' + _boxId);

								// pokud uz vubec nic v porovnavani neni ani v zadne z kategorii tak celou listu pro porovnavani odstran
								if (!_isCompareBar.call(plugin, _$compareBar)) {
									return;
								}

								$compareBar.find('#' + _boxId + 'Tabs').html(_$compareBar.find('#' + _boxId + 'Tabs').html());

								_carouselInit();
							}
						});
					});
				});
			}
		});
	};

	// odstraneni z porovnavaci listy pole produktu
	// privatni metoda
	var _removeFromCompareBarSelected = function () {
		var plugin = this,
			$els = $('.compare-bar_product'),
			pro_ids = $.map($els.toArray(), function (el) {
				return $(el).data('pro-id');
			});

		_servicesCompare(pro_ids, 'removeselected', {
			success: function (result) {
				if (result === null) {
					displayErrorMessage('Produkty nelze odstranit z porovnávání. Kontaktujte nás.', true);
					return;
				}

				_carouselDestroy();

				$els.animate({
					opacity: 0
				}, 200, function () {
					$els.animate({
						width: 0
					}, 200, function () {
						$els.remove();

						plugin.changeCategory(0);
						return;

					});
				});
			}
		});

	};

	// metoda pro vysunuti nebo schovani listy
	var _controlBarVisibility = function (visibility) {
		var plugin = this;

		switch (visibility) {
			case 'minimalized':
				plugin.isMinimalized = true;
				plugin.isClosed = false;

				$compareBar.addClass('minimized');
				$btnMinimalized.attr('title', dictionary.GetValue('tip_global_maximize'));
				break;

			case 'maximalized':
				plugin.isMinimalized = false;
				plugin.isClosed = false;

				$compareBar.removeClass('minimized');
				$btnMinimalized.attr('title', dictionary.GetValue('tip_global_minimalize'));
				break;

			case 'closed':
				plugin.isMinimalized = false;
				plugin.isClosed = true;

				$compareBar.remove();
				$compareBar = $();
				break;
		}


		// ulozeni aktualniho nastaveni do local storage
		_cachedSettings.call(plugin);
	};

	// binding udalosti na prvky
	var _initializeEvents = function () {
		var plugin = this;

		$('body').on('click', $btnMinimalized.selector, function (e) {
			e.preventDefault();
			e.stopPropagation();

			if (plugin.isMinimalized) {
				_controlBarVisibility.call(plugin, 'maximalized');
			} else {
				_controlBarVisibility.call(plugin, 'minimalized');
			}
		});
	};

	// metoda pro ulozeni nastaveni porovnavaci listy do pameti prohlizece
	var _cachedSettings = function () {

		var plugin = this,
			cacheSettings = {};

		var test = hasConsent(plugin.modulName + '_cacheSettings');
		// pokud nemám souhlas, neukládám
		if (!test) {
			return;
		}

		cacheSettings.currentTabCategory = plugin.currentTabCategory;
		cacheSettings.isMinimalized = plugin.isMinimalized;
		cacheSettings.isClosed = plugin.isClosed;

		localStorage.setItem(plugin.modulName + '_cacheSettings', JSON.stringify(cacheSettings));
	};

	var _close = function () {
		var plugin = this;

		_controlBarVisibility.call(plugin, 'closed');
	};

	// prvotni nahrani porovnavaci listy
	// privatni metoda
	var _init = function () {
		var plugin = this,
			cacheSettings = {};

		var test = hasConsent(plugin.modulName + '_cacheSettings');
		// nahrani nastaveni z local storage pokud je ulozeno
		if (test && !$.isEmptyObject(localStorage.getItem(plugin.modulName + '_cacheSettings'))) {
			cacheSettings = JSON.parse(localStorage.getItem(plugin.modulName + '_cacheSettings'));

			plugin.currentTabCategory = cacheSettings.currentTabCategory;
			plugin.isMinimalized = cacheSettings.isMinimalized;
			plugin.isClosed = cacheSettings.isClosed;
		}

		if (plugin.isClosed) {
			return;
		}

		$compareBar = $('#' + _boxId);

		if ($compareBar.length === 0) {

			_loadBar({
				data: { pnc_id: plugin.currentTabCategory },
				success: function (result) {
					var _$compareBar = $(result).find('#' + _boxId);

					// pokud uz vubec nic v porovnavani neni ani v zadne z kategorii tak celou listu pro porovnavani odstran
					//if (!_isCompareBar.call(plugin, _$compareBar)) {
					//	return;
					//}
					// uprava logiky - pokud se pri initu zjisti ze neni nic v porovnavani tak se nastavi lista jako kdyby bylo kliknuto na zavrit
					if (_$compareBar.length === 0) {
						plugin.isClosed = true;
						_cachedSettings.call(plugin);
						return;
					}

					$compareBar = _$compareBar;
					$btnMinimalized = $compareBar.find('#' + _boxId + 'BtnMinimized');

					// pokud je nastaveno ze ma byt lista minimalizovana
					if (plugin.isMinimalized) {
						_controlBarVisibility.call(plugin, 'minimalized');
					}

					// zjisteni aktivni kategorie
					plugin.currentTabCategory = $compareBar.find('#' + _boxId + 'Tabs .currentCat').data('pnc-id');

					// docasne schovani porovnavaci listy nekam za obsah aby bylo mozne po vlozeni zjistit nejprve jeho vysku pro vysunuti.
					$compareBar.css({ bottom: '-100%' });

					// vlozeni porovnavaci listy do tela stranky
					$('body').append($compareBar);

					// na bottom nastavim pozici do zaporu dle realne vysky
					$compareBar.css({ bottom: '-' + $compareBar.outerHeight(true) + 'px' });

					// animace vysunuti
					setTimeout(function () {
						$compareBar.animate({
							bottom: 0
						}, 200, function () {
							$compareBar.removeAttr('style');
						});
					}, 1000);

					_carouselInit();

					_initializeEvents.call(plugin);
				}
			});
		}
	};

	// objekt porovnavaci listy
	var CompareBar = function () {
		this.modulName = _modulName;
		this.currentTabCategory = 0;
		this.isMinimalized = false;
		this.isClosed = false;
		this.init();
	};

	// verejne metody porovnavaci listy
	CompareBar.prototype = function () {

		return {
			init: function () {
				_init.call(this);
			},
			addToCompare: function (pro_id, pnc_id) {
				_addToCompareBar.call(this, pro_id, pnc_id);
			},
			removeFromCompare: function (pro_id, pnc_id) {
				_removeFromCompareBar.call(this, pro_id, pnc_id);
			},
			removeFromCompareBarSelected: function () {
				_removeFromCompareBarSelected.call(this);
			},
			changeCategory: function (pnc_id) {
				_changeCategory.call(this, pnc_id);
			},
			close: function () {
				_close.call(this);
			}
		};
	}();


	$(document).ready(function () {
		// ulozeni instance objektu do global window po nacteni domu
		window.compareBar = new CompareBar();
	});

})(jQuery, window, document);;
// JSA [2017-08-04] - kompletni odstraneni tabu, zmena hodnoty urcujici sirku kdy se jedna o mobil

var ProFilter = function () {
	var objId = 'proFilter',
		openClass = 'is-open',
		$proFilter = {},
		$btnTogglePanelMain = {},
		$panelMain = {},
		$panelsFilter = [],
		inpCur;

	var _jQInit = function () {
		$proFilter = $('#' + objId);
		$btnTogglePanelMain = $('#' + objId + '_btnTogglePanelMain');
		$panelMain = $('#' + objId + '_panelMain');
	}

	// privatni metoda pro otevreni hlavniho panelu s atributama a hodnotama
	var _openPanelMain = function () {

		$btnTogglePanelMain.addClass(openClass);
		$panelMain.addClass(openClass);

		ProFilter.panelMain_isOpen = true;
		setCookie('showFilterBox', '1', 365, '/');
	}

	// privatni metoda pro zavreni hlavniho panelu s atributama a hodnotama
	var _closePanelMain = function () {

		$btnTogglePanelMain.removeClass(openClass);
		$panelMain.removeClass(openClass);

		ProFilter.panelMain_isOpen = false;
		setCookie('showFilterBox', 0, -1, '/');
	}

	var _setFilterScreen = function () {
		if (Modernizr.mq('only screen and (max-width: 900px )')) {
			ProFilter.is_mobile_res = true;
		} else {
			ProFilter.is_mobile_res = false;
		}
	}

	// definice pro range slider (cenikove pravitko)
	var handle_rangeSlider_init = function () {

		var $range = $('#priceRange'),
			$minPf = $('#minP'),
			$maxPf = $('#maxP'),
			minPfVal = strToInt($minPf.val()),
			maxPfVal = strToInt($maxPf.val());

		$range.ionRangeSlider({
			type: 'double',
			force_edges: true,
			onStart: function (data) {
				$minPf.val(new Number(data.from).numberFormat('# ### ###'));
				$maxPf.val(new Number(data.to).numberFormat('# ### ###'));
			},
			onChange: function (data) {
				$minPf.val(new Number(data.from).numberFormat('# ### ###'));
				$maxPf.val(new Number(data.to).numberFormat('# ### ###'));
			},
			onFinish: function (data) {

				var initDone = $range.data('init-done');

				if (initDone === 1) {
					var e = typeof event === 'undefined' ? null : event;
					if (e == null) {
						e = $.Event('mouseup', { which: 1 });
						$(data.slider).find('.irs-slider.type_last').trigger(e);
					}

					e.currentTarget.id = 'rangePriceSlider';
					startLoading(e);
				}

				$range.data('init-done', 1);
			},
			prettify: function (num) {
				return new Number(num).numberFormat('# ### ###') + ' ' + objCurrency[g_cur_ID].symbol;
			}
		});

		// nastaveni hodnot v pripade kdy zkopiruju odkaz a nebo prenactu stranku a hodnoty ceny mam v url
		var slider = $range.data('ionRangeSlider');

		if (minPfVal > 0) {
			slider.update({
				from: minPfVal
			});
		}

		if (maxPfVal > 0) {
			slider.update({
				to: maxPfVal
			});
		}
	}

	// logika pri resize
	var handle_resizedControl = function () {

		var currentFilterScrenn = ProFilter.filterScreen;

		if (ProFilter.is_mobile_res) {
			ProFilter.filterScreen = 'mobile';
		} else {
			ProFilter.filterScreen = 'desktop';
		}


		if (ProFilter.filterScreen == 'mobile' && currentFilterScrenn != ProFilter.filterScreen) {
			$panelsFilter.each(function () {
				var $panel = $(this);

				$panel.find('> .panel-heading > .panel-title').addClass('collapsed');
				$panel.find('> .panel-body').removeClass('in');
			});
		}

		if (ProFilter.filterScreen == 'desktop' && currentFilterScrenn != ProFilter.filterScreen) {

			$proFilter.removeClass('is-attr-open');

			$panelsFilter.each(function () {
				var $panel = $(this);

				$panel.removeClass('hide').removeClass(App.settings.openClass);

				if ($panel.data('is-collapsed') == false) {
					$panel.find('> .panel-heading > .panel-title').removeClass('collapsed');
					$panel.find('> .panel-body').addClass('in');
				} else {
					$panel.find('> .panel-heading > .panel-title').addClass('collapsed');
					$panel.find('> .panel-body').removeClass('in');
				}
			});
		}

	}

	var handle_attrPanelCollapsedControl = function () {
		var $toggleBtn = $proFilter.find('.panel-title');

		$toggleBtn.on('click', function () {
			var $btn = $(this),
				$collapsedPanel = $($btn.data('target')),
				$wrapPanel = $btn.closest('.pro-filter-aside_panel');

			if (ProFilter.filterScreen == 'desktop') {
				if ($btn.hasClass('collapsed')) {
					$btn.removeClass('collapsed');
					$collapsedPanel.addClass('in');
				} else {
					$btn.addClass('collapsed');
					$collapsedPanel.removeClass('in');
				}
			} else {
				if ($wrapPanel.hasClass(App.settings.openClass)) {
					$proFilter.removeClass('is-attr-open');

					$wrapPanel.removeClass(App.settings.openClass);
					$proFilter.find('.pro-filter-aside_panel').removeClass('hide');
				} else {
					$proFilter.addClass('is-attr-open');

					$proFilter.find('.pro-filter-aside_panel').addClass('hide');
					$wrapPanel.removeClass('hide').addClass(App.settings.openClass);
				}
			}
		});
	}

	var handle_attrValuesBtnToggle = function () {
		var $toggleBtn = $proFilter.find('.pro-filter-aside_values-btn-toggle');

		$toggleBtn.on('click', function () {
			var $btn = $(this),
				$wrapPanel = $btn.closest('.pro-filter-aside_panel'),
				$attrValuesCollapsed = $wrapPanel.find('.attr-value-hide');

			if ($btn.hasClass('collapsed')) {
				$btn.removeClass('collapsed');
				$wrapPanel.find('.attr-value-hide').removeClass('attr-value-hide').addClass('attr-value-visible');
			} else {
				$btn.addClass('collapsed');
				$wrapPanel.find('.attr-value-visible').removeClass('attr-value-visible').addClass('attr-value-hide');
			}
		});
	}

	/**
	 * Vrátí rozumnou hodnotu pro pole "Skladem"
	 * @param {any} userValue Hodnota zadaná uživatelem
	 */
	function getValidOnStockValue(userValue) {

		const numberValue = new Number(strToInt(userValue));

		if (numberValue > 99) {
			return 99
		};

		if (numberValue < 1) {
			return 1
		}

		return	numberValue
    }

	return {
		filterScreen: 'desktop',
		is_mobile_res: false,
		panelMain_isOpen: false,
		togglePanelMain: function (status) {
			if (('undefined' === typeof status || 1 == status) && !ProFilter.panelMain_isOpen) {
				_openPanelMain();
			} else {
				_closePanelMain();
			}
		},
		sendOnStockMinValue: function (e, el) {
			if (e.which !== 13) return;
			var $el = $(el);
			const validValue = getValidOnStockValue($el.val());

			$el.val(validValue);

			startLoading(e);
        },
		sendRangeValues: function (e, el) {
			var $el = $(el);
			var elVal = new Number(strToInt($el.val())).numberFormat('# ### ###');

			$el.val(elVal);

			if (e.which == 13) {

				var validate = $(el).closest('form').validate({

					errorPlacement: function (error, element) {
						element.parent().append(error);
					},
					highlight: function (element, errorClass, validClass) {
						$(element).parent().addClass(errorClass).removeClass(validClass);
					},
					unhighlight: function (element, errorClass, validClass) {
						$(element).parent().removeClass(errorClass).addClass(validClass);
						$(element).parent().find('label.' + errorClass).remove();
					},

					invalidHandler: function (e, validator) {


					}
				}).form();

				if (!validate) {
					return false;
				}

				startLoading(e);
			}
		},

		sendRangeLimitValues: function (e, el) {
			var elActualId, elOtherId;
			var $elActual, $elOther;
			var elActualVal, elOtherVal;
			var elActualLimit, elOtherlimit;

			elActualId = el.id;
			$elActual = $(el);
			if (el.id.includes('Min')) {
				elOtherId = elActualId.replace('Min', 'Max');
			} else {
				elOtherId = elActualId.replace('Max', 'Min');
			}
			$elOther = $('#' + elOtherId);
			elActualLimit = strToDouble($elActual.data('limit'));
			elOtherlimit = strToDouble($elOther.data('limit'));

			// korekce neplatnych znaku v aktualnim poli
			if (IsNotNullOrEmpty($elActual.val())) {
				$elActual.val($elActual.val().replace(/[^0-9,\s]/g, ''));
            }

			if (e.which == 13) {
				// aktualni hodnota
				elActualVal = strToDouble($elActual.val());
				// druhá hodnota
				elOtherVal = strToDouble($elOther.val());

				if (IsNullOrEmpty($elActual.val())) {
					// pokud aktualni pole je prazdne, ma se smazat i to druhe a taky vyresetovat slider
					$elOther.val('');
					var pnaId = $elActual.data("pna");
					var slider = $("#flt_rangeLimit_" + pnaId).data("ionRangeSlider");
					slider.update({
						from: slider.options.min,
						to: slider.options.max
					});
					$elActual.removeClass('error'); $elOther.removeClass('error');
					startLoading(e);
					return;
				}

				// kontrola, ze aktualni hodnota je v limitech
				if ((elActualId.includes('Min') && elActualVal < elActualLimit) || (elActualId.includes('Max') && elActualVal > elActualLimit)) {
					elActualVal = elActualLimit;
					//$elActual.val(elActualLimit.numberFormat('# ### ###'));
					//$elActual.val(elActualLimit.numberFormat('0.##'));
					//$elActual.val(elActualLimit);
					$elActual.val(formatNum(elActualLimit));
				}

				// pokud je druha hodnota prazdna, doplnuju z data atributu 'limit'
				if (IsNullOrEmpty($elOther.val())) {
					elOtherVal = elOtherlimit;
					//$elOther.val(elOtherlimit.numberFormat('# ### ###'));
					//$elOther.val(elOtherlimit.numberFormat('0.##'));
					//$elOther.val(elOtherlimit);
					$elOther.val(formatNum(elOtherlimit));
				} else {
					// jinak kontroluju limit hodnoty proti limitu
					if ((elOtherId.includes('Min') && elOtherVal < elOtherlimit) || (elOtherId.includes('Max') && elOtherVal > elOtherlimit)) {
						elOtherVal = elOtherlimit;
						//$elOther.val(elOtherlimit.numberFormat('# ### ###'));
						//$elOther.val(elOtherlimit.numberFormat('0.##'));
						//$elOther.val(elOtherlimit);
						$elOther.val(formatNum(elOtherlimit));
					}
                }

				// kontrola, že vlevo je menší hodnota než vpravo
				var err;
				if (elActualId.includes('Min')) {
					err = elActualVal > elOtherVal;
				} else {
					err = elOtherVal > elActualVal;
				}
				if (err) {
					$elActual.addClass('error'); $elOther.addClass('error');
					return false;
				} else {
					$elActual.removeClass('error'); $elOther.removeClass('error');
				}

				// pro rozsahové slidery přenáším z textových polí hodnoty do slideru
				/*
				var pnaId = $elActual.data("pna");
				var slider = $("#flt_rangeLimit_" + pnaId).data("ionRangeSlider");
				if (elActualId.includes('Min')) {
					slider.update({
						from: elActualVal,
						to: elOtherVal
					});
				} else {
					slider.update({
						from: elOtherVal,
						to: elActualVal
					});
				}
				*/

				// spuštení hledání
				startLoading(e);
			}
		},

		resize: function () {
			_setFilterScreen();

			handle_resizedControl();
		},

		panelValuesClose: function (e) {
			e.preventDefault();

			$proFilter.removeClass(App.settings.activeClass);
		},

		init: function () {
			$proFilter = $('#' + objId);
			$btnTogglePanelMain = $('#' + objId + '_btnTogglePanelMain');
			$panelMain = $('#' + objId + '_panelMain');

			$panelsFilter = $proFilter.find('.pro-filter-aside_panel');

			_setFilterScreen();

			// binding pluginu pro cenikove pravitko
			handle_rangeSlider_init();

			this.resize();

			// ulozeni stavu hlavniho filtru s atributy a zalozkami (otevreno = true, zavreno false)
			ProFilter.togglePanelMain(getCookie('showFilterBox'));

			// skryvani a odkryvani hodnot atributu
			handle_attrPanelCollapsedControl();

			// skryvani a odkryvani dalsich hodnot atributu
			handle_attrValuesBtnToggle();
		}
	}
}();


var ProductsList = function () {

	var _ajaxDataLoading = function (url) {

		// metoda lateInit je v productAction.js
		lateInit(url);

		if (url.indexOf("#") > -1) {
			if (url.length > url.indexOf("#") + 1) {
				// zrusit AJX param v URL
				// metoda startLoading je v productAction.js
				startLoading(null);
			}
		}

		$(window).bind('hashchange', function (e) {
			if (window.location.hash.length <= 0) {
				window.location = window.location;
				return;
			}
		});
	}

	// metoda pro praci s local storage - cteni popripade nasraveni
	var _useHtml5lStorage = function (action, linkToPageUrl) {
		var rtn = { result: { id: 0, msg: '' } };

		if (typeof (Storage) === "undefined") {
			rtn.result.msg = 'Local storage neni podporována';
			return rtn;
		}

		if (typeof action === 'undefined') {
			rtn.result.msg = 'Není zadán parametr "action".';
			return rtn;
		}

		var $dataContainer = $('#dataContainer');
		var $proFilterContent = $('#proFilterContent');

		//var controlLs = lsCacheControl();

		if (action == 'set') {
			if (typeof linkToPageUrl === 'undefined') {
				rtn.result.msg = 'Není zadán parametr "linkToPageUrl".';
				return rtn;
			}
			var test = hasConsent('dataContainer');
			if (!test) {
				rtn.result.msg = 'No consent';
				return rtn;
			}

			sessionStorage.setItem('dataContainer', $dataContainer.html());
			sessionStorage.setItem('proFilterContent', $proFilterContent.html());
			sessionStorage.setItem('timestamp', new Date());
			sessionStorage.setItem('cacheUrl', window.location.pathname + window.location.search);
			sessionStorage.setItem('linkToPageUrl', linkToPageUrl);

			rtn.result.id = 2;
			rtn.result.msg = 'Uloženo do LS.';
		}

		if (action == 'get') {

			var test = hasConsent('dataContainer');
			if (!test) {
				rtn.result.msg = 'No consent';
				return rtn;
			}
			var storageData = sessionStorage.getItem('dataContainer');
			var storageFilterData = sessionStorage.getItem('proFilterContent');

			if ($.isEmptyObject(storageData)) {
				rtn.result.msg = 'LS pro "dataContainer" nejsou k dispozici.';
				return rtn;
			}

			// odebrani vsech posuvniku (slideru) z filtru - respektive odebrani toho co si ion range slider dogeneroval
			// pozdeji se provadi opetovny init aby se nabindovali veskere callbacky
			const $storageFilterData = $(storageFilterData);
			$storageFilterData.find('.irs').remove();

			$dataContainer.html(storageData); // naplneni kontaineru
			$proFilterContent.html($storageFilterData); // naplneni filteru

			sessionStorage.removeItem('dataContainer');
			sessionStorage.removeItem('proFilterContent');
			sessionStorage.removeItem('timestamp');
			sessionStorage.removeItem('cacheUrl');
			sessionStorage.removeItem('linkToPageUrl');

			rtn.result.id = 1;
			rtn.result.msg = 'Data pro "dataContainer" jsou nahrana.';
		}

		return rtn;
	}

	var handle_localStorage = function () {

		var url = window.location.toString(),
			ls = _useHtml5lStorage('get');

		// pokud je Html5 storage prazdna tak docti data ajaxem
		if (ls.result.id != 1) {
			_ajaxDataLoading(url);
		} else {
			// jinak proved nabindovani filtru
			// metoda lateInit je v productAction.js
			lateInit(url);
		}

		// ulozeni stranky do Html5 storage kdyz se klikne na nazev produktu
		$('body').on('click', '.js-html5-storage', function (e) {
			_useHtml5lStorage('set', $(this).attr('href'));
		});
	}

	var handle_recommendedProducts_carousel = function () {
		if (!$().owlCarousel) {
			if (App.debug) {
				console.log('Chybí plugin owl carousel.');
			}
			return false;
		}

		var $jsCarousel = $('.products-recommended .data-product-items');

		// pokud na strance nejsou zadne doporucene produkty
		if (0 === $jsCarousel.length) {
			return;
		}

		var $jsCarouselChildrens = $jsCarousel.children();

		// nastaveni pro carousel dle breakpointu
		var _responsiveSettings = function (defautCount) {
			var settings = {
				items: defautCount
			};

			if ($jsCarouselChildrens.length <= defautCount) {
				settings.stagePadding = 0;
				settings.nav = false;
			}

			return settings;
		}

		$jsCarousel.owlCarousel({
			dots: false,
			nav: true,
			loop: $jsCarousel.children().length > 1,
			margin: 20,
			stagePadding: 50,
			responsive: {
				0: _responsiveSettings(1),
				480: _responsiveSettings(2),
				600: _responsiveSettings(3),
				992: _responsiveSettings(3),
				1200: _responsiveSettings(4)
			}
		});
	}

	return {
		recommendedProductsCarousel_init: function () {
			// carousel s doporucenymi produkty
			handle_recommendedProducts_carousel();
		},
		ajax_init: function () {
			ajxMousePreloader('hide');
			lazyImage('load');
		},

		init: function () {
			handle_localStorage();

			ProFilter.init();
		}
	}
}();

/*
* =============================================================
* napoveda pro konkretni stranku START
* =============================================================
*/
var introPage = function () {
	var _page = 'productList',
		_steps = [];

	return {
		start: function () {

			var intro = introJs();

			var stepsOnlyDesktop = [
				{
					element: '#subCategoryMenuBtnToggle',
					intro: '<h2>Vertikální menu</h2>Nově jsme <strong>předělali vertikální menu</strong> tak, aby usnadnilo navigaci v jednotlivých patrech. Vertikální menu je nově dostupné v kategoriích vedle drobečkové navigace a snadno tak lze nejen filtrovat produkty, ale také rychle přejít do jiné kategorie.<br /><br />Navíc jsme do vertikálního menu přidali rozpad kategorie na podkategorie, abychom zrychlili orientaci a přechody mezi podkategoriemi.'
				}
			];

			var stepsOnlyPhone = [
				{
					intro: '<h2>Vertikální menu</h2>Nově jsme <strong>předělali vertikální menu</strong> tak, aby usnadnilo navigaci v jednotlivých patrech. Vertikální menu je nově dostupné v kategoriích vedle drobečkové navigace a snadno tak lze nejen filtrovat produkty, ale také rychle přejít do jiné kategorie.<br /><br />Navíc jsme do vertikálního menu přidali rozpad kategorie na podkategorie, abychom zrychlili orientaci a přechody mezi podkategoriemi.'
				}
			];

			_steps = Modernizr.mq('only screen and (max-width: ' + (App.settings.deviceScreens.sm - 1) + 'px)') ? stepsOnlyPhone : stepsOnlyDesktop;

			intro.setOptions({
				nextLabel: 'Dále',
				prevLabel: 'Zpět',
				skipLabel: 'Přeskočit',
				doneLabel: 'Ukončit',
				//tooltipPosition: 'auto',
				steps: _steps
			});

			intro.onchange(function () {

			});

			intro.onbeforechange(function () {
				var step = this._currentStep;

				this._options.tooltipClass = _page + '_step-' + step;
			});

			intro.onafterchange(function (a) {
				var $introjsTooltip = $('.introjs-tooltip');

				// pridani tlacitka pro zavreni okna
				$introjsTooltip.append('<button class="introjs-btn-close fancybox-close" onclick="introJs().exit();"></button>');

				$('html, body').animate({
					scrollTop: 0
				}, 800);
			});

			intro.start();

		}
	}
}();
/*
* =============================================================
* napoveda pro konkretni stranku END
* =============================================================
*/


jQuery(document).ready(function () {
	ProductsList.init();

	// pridani tlacitka pro zobrazeni wizarda
	btnShowWizard();

	// init lazy loadingu
	appendPosts();
});

jQuery(document).ajaxStop(function () {
	ProductsList.ajax_init();
});

jQuery(window).on('resize', function () {
	ProFilter.resize();
});


// lazy loading seznamu produktu
function appendPosts() {

	$('#lazyLoadPosition').onScreen({
		doIn: function () {
			var $preloaderPanel = $('#preloaderPanel'),
				$pagNextAdd = $('#pag_next_add'),
				preloader = {};

			$pagNextAdd.trigger("click");

			if ($pagNextAdd.length > 0) {
				$preloaderPanel.find('.label').html(dictionary.GetValue('msg_lazy_load'));
			} else {
				$preloaderPanel.find('.label').html(dictionary.GetValue('msg_lazy_stop'));
			}

			preloader = new ElxPreloader($preloaderPanel.find('.spinner'));
			preloader.start();
			$preloaderPanel.fadeIn('fast');
			if (0 == $pagNextAdd.length) {
				preloader.stop();
			}
		}
	});
};
