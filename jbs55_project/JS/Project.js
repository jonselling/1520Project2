function getData(name, page)
{
    var xhttp;

    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    } else {
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhttp.onreadystatechange = function(){

        if(xhttp.readyState == 4 && xhttp.status == 200){
            var xmlDoc = xhttp.responseXML;
            var data,section, clicked,info,pic,style, maps;
            data = $(xmlDoc).find("Data");
            section = $(data).find(page);
            clicked = $(section).find(name);
            info = $(clicked).find('info');
            pic = $(clicked).find('picture');
            style = $(clicked).find('style');
            maps = $(clicked).find('maps');
            $("#info").fadeOut("slow", function(){
                $("#info").html(info.text());
                $("#info").fadeIn("slow");
            });
            $("#image").fadeOut("slow",function(){
                this.src = pic.text();
                this.style = style.text();
                $("#image").fadeIn("slow");
            });
            $("#maps").fadeOut("slow",function(){
                this.src = "https://www.google.com/maps/embed/v1/search?key=AIzaSyACJFuhYNZ1cWkqAfhrpzMCtHbz9_GXvkU&q=" + maps.text();
                $("#maps").delay("1000").fadeIn("slow");
            });
        }

    }

    xhttp.open("GET","../XML/info.xml",true);
    xhttp.send();
}
