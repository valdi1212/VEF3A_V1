/**
 * Created by Valdi1212 on 20.1.2016.
 */
var apiUrl = 'http://apis.is/currency/lb';

$.getJSON(apiUrl, function(data){
    var i;
    for (i in data.results) {
        $('.exchangecontainer').append(createHtml(data.results[i].shortName, data.results[i].longName, data.results[i].value, data.results[i].askValue, data.results[i].bidValue))
    }
});

var createHtml = function(shortName, longName, value, askValue, bidValue) {
    return "<tr><td>" + shortName + "</td><td>" + longName + "</td><td>" + value + "</td><td>" + askValue + "</td><td>" + bidValue + "</td></tr>";
};