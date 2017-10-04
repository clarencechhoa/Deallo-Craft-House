

    <?php

    $productcate1 =$_POST["productcategories"];
    $productprice1 =$_POST["productprice"];
    $productdesc1 =$_POST["productdesc"];
    $image_name = $_FILES["productimage"]['name'];



   echo'<div align="center">';
    echo'<table border="1">';
        echo'<tr>';
            echo'<td>'; echo "<img src='images/$image_name'>";
    echo'</td>';
        echo'</tr>';

     echo'<tr>';
        echo'<td>';
                if(isset($productcate1))
                {
                    if( $productcate1 =='Clothes&Accessories')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='Jewellery')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='CraftSupplies')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='Bedding&RoomDecoration')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='VintageArt')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='WeddingAccessories')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='SoftToy')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                }
        echo'</td>';
    echo'</tr>';

    echo'<tr>';
        echo'<td>'; echo("<br/> Product Price:" . $productprice1); echo'</td>';
    echo'</tr>';

    echo'<tr>';
        echo'<td>'; echo("<br/>Product Description:" . $productdesc1); echo'</td>';
    echo'</tr>';
echo'</table>';


       echo'<table border="1">';
        echo'<tr>';
            echo'<td>'; echo "<img src='images/$image_name'>";
    echo'</td>';
        echo'</tr>';

     echo'<tr>';
        echo'<td>';
                if(isset($productcate1))
                {
                    if( $productcate1 =='Clothes&Accessories')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='Jewellery')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='CraftSupplies')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='Bedding&RoomDecoration')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='VintageArt')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='WeddingAccessories')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='SoftToy')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                }
        echo'</td>';
    echo'</tr>';

    echo'<tr>';
        echo'<td>'; echo("<br/> Product Price:" . $productprice1); echo'</td>';
    echo'</tr>';

    echo'<tr>';
        echo'<td>'; echo("<br/>Product Description:" . $productdesc1); echo'</td>';
    echo'</tr>';
echo'</table>';

    echo'<table border="1">';
        echo'<tr>';
            echo'<td>'; echo "<img src='images/$image_name'>";
    echo'</td>';
        echo'</tr>';

     echo'<tr>';
        echo'<td>';
                if(isset($productcate1))
                {
                    if( $productcate1 =='Clothes&Accessories')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='Jewellery')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='CraftSupplies')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='Bedding&RoomDecoration')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='VintageArt')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='WeddingAccessories')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                    else if( $productcate1 =='SoftToy')
                    {
                        echo("<br/>Product Categories: " . $productcate1);
                    }
                }
        echo'</td>';
    echo'</tr>';

    echo'<tr>';
        echo'<td>'; echo("<br/> Product Price:" . $productprice1); echo'</td>';
    echo'</tr>';

    echo'<tr>';
        echo'<td>'; echo("<br/>Product Description:" . $productdesc1); echo'</td>';
    echo'</tr>';
echo'</table>';
   echo'</div>';
    ?>
