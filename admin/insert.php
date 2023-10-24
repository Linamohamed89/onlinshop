<?php 
include('conn.php');


if(isset($_POST['upload'])){
    $Name=$_POST['name'];
    $Price=$_POST['price'];
    $Imge=$_FILES['imge'];//file
    $Imge_location=$_FILES['imge']['tmp_name'];//file
    $Imge_name    =$_FILES['imge']['name'];
    $Imge_up ="images/".$Imge_name; //save upload img in images.
    //أدخل الى (أسم الجدول في myadmine) في الحقول التاليه (name،price،imge)القيم التاليه ('$Price'،'$img_up'،'$Name$');
    $insert ="INSERT INTO prod(name,price,imge)VALUES ('$Name','$Price',' $Imge_up')";
    //الأتصال وأدخال البيانات
    mysqli_query($conn, $insert);
//الجمله الشرطيه .. عند رفع الملفات في المجلد (images)باسم ($img_name)قم بتنفيذ التالي
    if(move_uploaded_file($Imge_location , 'images/'.$Imge_name)){
            echo "<script>alert('The image has been uploaded successfully')</script>"; //اطبع تنبيه تم رفع الصوره بنجاح (js code)
   
    }else{
        echo "<script>alert('There was a problem, the images were not uploaded')</script>"; //اطبع تنبيه تم رفع الصوره بنجاح (js code)
    }

    header('location:index.php');//بعد رفع المنتج اذهب الى الصفحه التاليه 
}




?>