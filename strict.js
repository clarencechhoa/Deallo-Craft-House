
"use strict";

function validate()
{

            var product_name = document.getElementById("productname").value;
            var product_price = document.getElementById("productprice").value;
            var ddl = document.getElementById("selectedcate");
            var product_desc = document.getElementById("productdesc").value;
            var selectedValue = ddl.options[ddl.selectedIndex].value;
            var image_file=document.getElementById("image")
            var errMsg="";
            var result = true;

            if (selectedValue == "select")
                {
                        errMsg= errMsg + "Please select Product's Category";
                }

            if(product_name=="")
            {
                     errMsg= errMsg + "\nPlease Enter Product Name";
            }else if(!product_name.match(/^[a-zA-Z]+$/))
            {
                     errMsg= errMsg + "\nProduct Name only contains alpha characters";
            }

            if(product_price=="")
            {
                  errMsg= errMsg + "\nPlease Enter Product Price";

            }else if(product_price==0)
            {
                     errMsg= errMsg + "\nProduct Price cannot be 0";
            }
            else if(!product_price.match("^[0-9]+"))
            {
                     errMsg= errMsg + "\nProduct Price only contains numeric characters";
            }
             else if(!product_price.match("^[0-9]{0,3}\.[0-9]{2}$"))
            {
                     errMsg= errMsg + "\nProduct Price Format should be: X.XX";
            }

            if(product_desc=="")
            {
                     errMsg= errMsg + "\nPlease Enter Product Description";
            }else if(!product_desc.match(/^([a-zA-Z]* ?[a-zA-Z]*)*$/))
            {
                     errMsg= errMsg + "\nProduct Description only contains alpha characters";
            }


            if(image_file.value=="")
            {
            errMsg= errMsg + "\nPlease upload a Product's Image";
            }



            if (errMsg != "")
            {
                result=false;
                    alert("Please Enter the following fields:\n" + errMsg);
            }


	return result;
}




function storeInfo()
{

	sessionStorage.product_name = document.getElementById("productname").value;



}

        function init()
        {



                 var submit = document.getElementById("uploadproduct");
                submit.onclick = validate;


        }

window.onload=function(){
    init();
}
