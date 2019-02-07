function f_ExportCSV(string,name) {
    var download = document.createElement('a');
    download.setAttribute( 'href', "data:text/plain;charset=utf-8,"+encodeURIComponent(string));
    download.setAttribute('download',name + ".csv");
    download.click();
}