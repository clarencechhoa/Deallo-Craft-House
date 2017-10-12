

function storeInfo()
{

    sessionStorage.pname = document.getElementById("productname").value;
	sessionStorage.pprice = document.getElementById("productprice").value;
	sessionStorage.pdesc = document.getElementById("productdesc").value;

}


function showInfo(){
    document.getElementById("cpn").textContent= sessionStorage.pname;
	document.getElementById("cpp").textContent=sessionStorage.pprice;
	document.getElementById("cpd").textContent=sessionStorage.pdesc;
}


function init()
{

    var path = location.href.split("/").slice(-1);



    if(path == "upload.html"){

        var submit = document.getElementById("uploadproduct");
        submit.onclick = storeInfo;
    }

     if(path == "list.html")
    {
        showInfo();
    }



}


window.onload=init;
