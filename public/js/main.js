function explode( delimiter, string ) {	// Split a string by string
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: kenneth
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)

    var emptyArray = { 0: '' };

    if ( arguments.length != 2
        || typeof arguments[0] == 'undefined'
        || typeof arguments[1] == 'undefined' )
    {
        return null;
    }

    if ( delimiter === ''
        || delimiter === false
        || delimiter === null )
    {
        return false;
    }

    if ( typeof delimiter == 'function'
        || typeof delimiter == 'object'
        || typeof string == 'function'
        || typeof string == 'object' )
    {
        return emptyArray;
    }

    if ( delimiter === true ) {
        delimiter = '1';
    }

    return string.toString().split ( delimiter.toString() );
}


function currencyChange(obj){
    console.log(obj);
    let data = "curr=" + obj.value;
    window.location = 'currency/change?' + data;
}


function ajaxNewProducts(url){
    fetch(url, {
        method: 'get'
    }).then((response) => {
        response.text().then((text) => {
            document.getElementById("ajaxCatalog").innerHTML = text;
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        })
    })
}

function paginationClick(value){
    if(value){
        const url = new URL(value);
        const queryUrl = new URL(window.location);
        queryUrl.searchParams.forEach((value, key, parent) => {
            if(key != 'page'){
                url.searchParams.set(key, value);
            }
        });
        queryUrl.searchParams.set('page', url.searchParams.get('page'));
        history.pushState({}, null, queryUrl);
        console.log(window.location.pathname.split('/')[1]);
        ajaxNewProducts(url);
    }
}

function searchSubmit(){
    let searchText = document.getElementById("q").value;
    if(searchText){
        if(window.location.pathname.split('/')[1] == 'controller'){
            searchText = encodeURIComponent(searchText);
            const url = new URL('http://shop.loc/catalog/ajax');
            const queryUrl = new URL(window.location);
            queryUrl.searchParams.forEach((value, key, parent) => {
                if(key != 'search'){
                    url.searchParams.set(key, value);
                }
            });
            queryUrl.searchParams.set('search', searchText);
            queryUrl.searchParams.set('page', 1);
            url.searchParams.set('search', searchText);
            url.searchParams.set('page', 1);
            history.pushState({}, null, queryUrl);
            ajaxNewProducts(url);
        }else{
            const url = new URL('http://shop.loc/catalog');
            url.searchParams.set('search', searchText);
            url.searchParams.set('page', 1);
            window.location = url;
        }
    }
    return false;
}